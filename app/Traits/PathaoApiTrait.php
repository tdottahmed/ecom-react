<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait PathaoApiTrait
{
    protected const TOKEN_CACHE_KEY = 'pathao_api_token';
    protected const TOKEN_REFRESH_BUFFER = 60; // seconds before expiry

    public function getPathaoConfig(): array
    {
        static $config = null;

        if ($config === null) {
            $config = [
                'client_id' => config('services.pathao-courier.client_id'),
                'client_secret' => config('services.pathao-courier.client_secret'),
                'pathao_username' => config('services.pathao-courier.pathao_username'),
                'pathao_password' => config('services.pathao-courier.pathao_password'),
                'base_url' => config('services.pathao-courier.base_url'),
                'aladdin_url' => config('services.pathao-courier.aladdin_url'),
            ];
        }

        return $config;
    }

    public function getAccessToken(): array
    {
        $cached = $this->loadTokenFromCache();
        if ($cached && !$this->isTokenExpiringSoon($cached)) {
            return ['success' => true, 'access_token' => $cached['access_token']];
        }

        if ($cached && !empty($cached['refresh_token'])) {
            $ref = $this->refreshAccessToken();
            if ($ref['success']) {
                return $ref;
            }
        }

        $config = $this->getPathaoConfig();

        $response = Http::timeout(10)
            ->retry(2, 200)
            ->post($config['aladdin_url'].'/issue-token', [
                'client_id' => $config['client_id'],
                'client_secret' => $config['client_secret'],
                'username' => $config['pathao_username'],
                'password' => $config['pathao_password'],
                'grant_type' => 'password'
            ]);

        $result = $response->json();

        if (!isset($result['access_token'])) {
            Log::error('Pathao access token fetch failed', [
                'status' => $response->status(),
                'body' => $result,
            ]);
            return ['success' => false, 'message' => $result['message'] ?? 'Could not get access token'];
        }

        $this->cacheToken($result);

        return ['success' => true, 'access_token' => $result['access_token']];
    }

    protected function refreshAccessToken(): array
    {
        $cached = $this->loadTokenFromCache();
        if (!$cached || empty($cached['refresh_token'])) {
            return ['success' => false, 'message' => 'No refresh token available'];
        }

        $config = $this->getPathaoConfig();

        $response = Http::timeout(10)
            ->retry(2, 200)
            ->post($config['aladdin_url'].'/issue-token', [
                'client_id' => $config['client_id'],
                'client_secret' => $config['client_secret'],
                'grant_type' => 'refresh_token',
                'refresh_token' => $cached['refresh_token'],
            ]);

        $result = $response->json();

        if (!isset($result['access_token'])) {
            Log::warning('Pathao token refresh failed', [
                'status' => $response->status(),
                'body' => $result,
            ]);
            return ['success' => false, 'message' => $result['message'] ?? 'Could not refresh access token'];
        }

        $this->cacheToken($result);

        return ['success' => true, 'access_token' => $result['access_token']];
    }

    public function httpClientWithAuth(string $accessToken)
    {
        return Http::timeout(15)
            ->retry(2, 300, throw: false)
            ->asJson()
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.$accessToken,
            ]);
    }

    protected function cacheToken(array $payload): void
    {
        $expiresIn = (int) ($payload['expires_in'] ?? 0);
        $ttl = max(60, $expiresIn - self::TOKEN_REFRESH_BUFFER);

        $store = [
            'access_token' => $payload['access_token'],
            'refresh_token' => $payload['refresh_token'] ?? null,
            'token_type' => $payload['token_type'] ?? 'Bearer',
            'expires_in' => $expiresIn,
            'cached_at' => now()->timestamp,
            'expires_at' => now()->addSeconds($expiresIn)->timestamp,
        ];

        Cache::put(self::TOKEN_CACHE_KEY, $store, $ttl);
    }

    protected function loadTokenFromCache(): ?array
    {
        $val = Cache::get(self::TOKEN_CACHE_KEY);
        return is_array($val) ? $val : null;
    }

    protected function isTokenExpiringSoon(array $token): bool
    {
        $expiresAt = (int) ($token['expires_at'] ?? 0);
        return $expiresAt === 0 || ($expiresAt - now()->timestamp) <= self::TOKEN_REFRESH_BUFFER;
    }
}
