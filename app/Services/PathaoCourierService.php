<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderShipment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class PathaoCourierService
{
    protected $order;
    protected $shipping_address;
    protected $access_token;

    // Cache key and token refresh buffer (in seconds)
    protected const TOKEN_CACHE_KEY = 'pathao_courier_token';
    protected const TOKEN_REFRESH_BUFFER = 300; // 5 minutes

    public function __construct(Order $order, $shipping_address)
    {
        $this->order = $order;
        $this->shipping_address = $shipping_address;
    }

    public function handle(): array
    {
//        try {
        // Get access token first
        $token = $this->getAccessToken();
        if (!$token['success']) {
            return $token;
        }
        $this->access_token = $token['access_token'];

        $cod_amount = $this->order->orderDetails->sum('price') + $this->order->orderDetails()->sum('shipping_cost');

        $orderData = [
            'store_id' => config('services.pathao-courier.store_id'),
            'merchant_order_id' => $this->order->code,
            'recipient_name' => $this->shipping_address->name,
            'recipient_phone' => $this->shipping_address->phone,
            'recipient_address' => $this->formatAddress(),
            'recipient_city' => $this->shipping_address->city_id,
            'recipient_zone' => $this->shipping_address->zone_id,
            'recipient_area' => $this->shipping_address->area_id,
            'delivery_type' => 48,
            'item_type' => 2,
            'special_instruction' => $this->order->additional_info,
            'item_quantity' => $this->order->orderDetails->sum('quantity'),
            'item_weight' => 0.5,
            'amount_to_collect' => $cod_amount
        ];

        // Build URL and client
        $config = $this->getPathaoConfig();
        $url = rtrim($config['base_url'], '/').'/orders';

        $client = $this->httpClientWithAuth($this->access_token);

        // First attempt
        $response = $client->post($url, $orderData);

        // If unauthorized, try to refresh token once and retry
        if ($response->status() === 401) {
            $refresh = $this->refreshAccessToken();
            if ($refresh['success']) {
                $this->access_token = $refresh['access_token'];
                $client = $this->httpClientWithAuth($this->access_token);
                $response = $client->post($url, $orderData);
            }
        }

        $result = $response->json();

        if ($response->failed()) {
            Log::warning('Pathao order create failed', [
                'status' => $response->status(),
                'body' => $result,
            ]);
            flash(translate('Failed to create courier order'))->error();
            return [
                'success' => false,
                'message' => $result['message'] ?? 'Failed to create courier order'
            ];
        }

        if (!isset($result['data']) || !$result['data']) {
            flash(translate('Failed to create courier order'))->error();
            return [
                'success' => false,
                'message' => 'Failed to create courier order'
            ];
        }

        $this->updateOrderShipment($result['data']);
        return [
            'success' => true,
            'message' => 'Order shipment created successfully',
            'data' => $result
        ];

//        } catch (Exception $e) {
//            logger('Something went Wrong with the Pathao: '.$e->getMessage());
//            return [
//                'success' => false,
//                'message' => 'Something went wrong',
//                'error' => $e->getMessage()
//            ];
//        }
    }

    protected function getAccessToken()
    {
        try {
            // Try cache first
            $cached = $this->loadTokenFromCache();
            if ($cached && !$this->isTokenExpiringSoon($cached)) {
                return [
                    'success' => true,
                    'access_token' => $cached['access_token'],
                ];
            }

            // If we have a cached refresh_token, try refresh first
            if ($cached && !empty($cached['refresh_token'])) {
                $ref = $this->refreshAccessToken();
                if ($ref['success']) {
                    return $ref;
                }
                // If refresh fails, fall back to password grant below
            }

            $config = $this->getPathaoConfig();

            $response = Http::timeout(10)->retry(2, 200)->post($config['aladdin_url'].'/issue-token', [
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
                return [
                    'success' => false,
                    'message' => $result['message'] ?? 'Could not get access token'
                ];
            }

            $this->cacheToken($result);

            return [
                'success' => true,
                'access_token' => $result['access_token']
            ];

        } catch (Throwable $e) {
            Log::error('Pathao token error', ['error' => $e->getMessage()]);
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    // Refresh token using refresh_token grant
    protected function refreshAccessToken(): array
    {
        try {
            $cached = $this->loadTokenFromCache();
            if (!$cached || empty($cached['refresh_token'])) {
                return [
                    'success' => false,
                    'message' => 'No refresh token available'
                ];
            }
            $config = $this->getPathaoConfig();

            $response = Http::timeout(10)->retry(2, 200)->post($config['aladdin_url'].'/issue-token', [
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
                return [
                    'success' => false,
                    'message' => $result['message'] ?? 'Could not refresh access token'
                ];
            }

            $this->cacheToken($result);

            return [
                'success' => true,
                'access_token' => $result['access_token']
            ];
        } catch (Throwable $e) {
            Log::error('Pathao token refresh error', ['error' => $e->getMessage()]);
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    protected function updateOrderShipment($response): OrderShipment
    {
        $shipment = OrderShipment::create([
            'order_id' => $this->order->id,
            'invoice_no' => $response['merchant_order_id'],
            'consignment_no' => $response['order_id'],
            'tracking_code' => $response['tracking_id'],
            'carrier' => 'pathao',
            'status' => $response['order_status'],
            'recipient_name' => $response['recipient_name'],
            'recipient_address' => $response['recipient_address'],
            'recipient_phone' => $response['recipient_phone'],
            'note' => $response['special_instruction']
        ]);

        $this->order->update([
            'delivery_status' => 'processing',
        ]);

        return $shipment;
    }

    protected function formatAddress(): string
    {
        return implode(', ', array_filter([
            $this->shipping_address->address,
            $this->shipping_address->city,
            $this->shipping_address->state,
            $this->shipping_address->postal_code
        ]));
    }

    protected function getPathaoConfig()
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

    // Build a preconfigured HTTP client with auth headers and sane defaults
    protected function httpClientWithAuth(string $accessToken)
    {
        return Http::timeout(15)
            ->retry(2, 300, throw: false)
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.$accessToken,
            ]);
    }

    // Cache token payload with correct TTL; expects Pathao-like response structure
    protected function cacheToken(array $payload): void
    {
        $expiresIn = (int) ($payload['expires_in'] ?? 0);
        $ttl = max(60, $expiresIn - self::TOKEN_REFRESH_BUFFER); // Do not cache less than 60s
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
