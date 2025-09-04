<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderShipment;
use App\Models\PathaoCity;
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
//        dd($this->createOrUpdatedCity());
//        try {
        // Get access token first
        $token = $this->getAccessToken();
        if (!$token['success']) {
            return $token;
        }
        $this->access_token = $token['access_token'];

        // Resolve Pathao location IDs from your master data
        $resolver = new PathaoLocationService($this);
        dd($resolver);

        // Prefer explicitly passed Address model if provided; otherwise try to find one from the user
        $addressModel = $this->shipping_address instanceof \App\Models\Address ? $this->shipping_address : null;
        if (!$addressModel && $this->order->user) {
            $decoded = is_string($this->order->shipping_address)
                ? json_decode($this->order->shipping_address)
                : $this->order->shipping_address;

            $addressId = is_object($decoded) ? ($decoded->address_id ?? null) : null;
            if ($addressId) {
                $addressModel = $this->order->user->addresses()->whereKey($addressId)->first();
            }
        }
//        dd($addressModel);

        if (!$addressModel) {
            return ['success' => false, 'message' => 'Shipping address model not found'];
        }

        $loc = $resolver->resolveForAddress($addressModel);
        if (!$loc['success']) {
            return ['success' => false, 'message' => $loc['message']];
        }

        $cod_amount = $this->order->orderDetails->sum('price') + $this->order->orderDetails()->sum('shipping_cost');

        $orderData = [
            'store_id' => config('services.pathao-courier.store_id'),
            'merchant_order_id' => $this->order->code,
            'recipient_name' => $this->shipping_address->name,
            'recipient_phone' => $this->shipping_address->phone,
            'recipient_address' => $this->formatAddress(),
            'recipient_city' => $loc['recipient_city'],
            'recipient_zone' => $loc['recipient_zone'],
            'recipient_area' => $loc['recipient_area'],
            'delivery_type' => 48,
            'item_type' => 2,
            'special_instruction' => $this->order->additional_info,
            'item_quantity' => $this->order->orderDetails->sum('quantity'),
            'item_weight' => 0.5,
            'amount_to_collect' => $cod_amount
        ];
//        dd($orderData);
//        try {
        // Build URL and client
        $config = $this->getPathaoConfig();
        $url = rtrim($config['base_url'], '/').'/orders';

        $client = $this->httpClientWithAuth($this->access_token);

        // First attempt
        $response = $client->post($url, $orderData);
//        dd($response);

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

    // Make these two methods public so the location service can reuse them
    public function getPathaoConfig()
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

    protected function getAccessToken()
    {
//        try {
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

//        } catch (Throwable $e) {
//            Log::error('Pathao token error', ['error' => $e->getMessage()]);
//            return [
//                'success' => false,
//                'message' => $e->getMessage()
//            ];
//        }
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

    // Build a preconfigured HTTP client with auth headers and sane defaults
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

    public function getCities()
    {
        try {
            $config = $this->getPathaoConfig();
            $tokenResponse = $this->getAccessToken();

            if (!$tokenResponse['success']) {
                return [
                    'success' => false,
                    'message' => $tokenResponse['message'] ?? 'Failed to get access token',
                    'data' => []
                ];
            }

            $client = $this->httpClientWithAuth($tokenResponse['access_token']);
            $url = rtrim($config['aladdin_url'], '/').'/city-list';
            $response = $client->get($url);
            $result = $response->json();

            if (($result['type'] ?? null) == "success" && ($result['code'] ?? null) == "200") {
                return [
                    'success' => true,
                    'message' => 'Cities fetched successfully',
                    'data' => $result['data']['data'] ?? []
                ];
            }

            Log::warning('Failed to fetch Pathao cities', [
                'status' => $response->status(),
                'body' => $result
            ]);

            return [
                'success' => false,
                'message' => $result['message'] ?? 'Failed to get cities',
                'data' => []
            ];

        } catch (Throwable $e) {
            Log::error('Error fetching Pathao cities', [
                'error' => $e->getMessage()
            ]);

            return [
                'success' => false,
                'message' => 'Failed to get cities',
                'data' => []
            ];
        }
    }

    public function createOrUpdatedCity()
    {
        $cities = $this->getCities();
        try {
            if (!($cities['success'] ?? false)) {
                Log::warning('Pathao cities sync skipped', ['message' => $cities['message'] ?? null]);
                return false;
            }
            foreach ($cities['data'] as $city) {
                PathaoCity::updateOrCreate(['cityId' => $city['city_id']], [
                    'name' => $city['city_name'],
                    'cityId' => $city['city_id'],
                ]);
            }
            return true;
        } catch (\Exception $e) {
            Log::error('Pathao cities sync error', ['error' => $e->getMessage()]);
            return false;
        }
    }
}
