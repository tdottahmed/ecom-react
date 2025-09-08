<?php

namespace App\Services;

use App\Models\Order;
use App\Traits\PathaoApiTrait;
use Illuminate\Support\Facades\Log;

class PathaoCourierService
{
    use PathaoApiTrait;

    protected Order $order;
    protected $shipping_address;
    protected string $access_token;
    protected PathaoLocationService $resolver;

    public function __construct(Order $order, $shipping_address)
    {
        $this->order = $order;
        $this->shipping_address = $shipping_address;
        $this->resolver = new PathaoLocationService();
    }

    public function handle(): array
    {
        $token = $this->getAccessToken();
        if (!$token['success']) {
            return $token;
        }
        $this->access_token = $token['access_token'];

        // Resolve Pathao location IDs from the address object
        $loc = $this->resolver->resolveFromAddress($this->shipping_address);
        dd($loc);
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

        // Log the order data for debugging
        Log::info('Pathao Order Data', $orderData);

        $config = $this->getPathaoConfig();
        $url = rtrim($config['base_url'], '/').'/orders';
        $client = $this->httpClientWithAuth($this->access_token);

        try {
            $response = $client->post($url, $orderData);

            if ($response->status() === 401) {
                $refresh = $this->refreshAccessToken();
                if ($refresh['success']) {
                    $this->access_token = $refresh['access_token'];
                    $client = $this->httpClientWithAuth($this->access_token);
                    $response = $client->post($url, $orderData);
                }
            }

            $result = $response->json();

            if ($response->failed() || !isset($result['data'])) {
                Log::warning('Pathao order create failed', [
                    'status' => $response->status(),
                    'body' => $result,
                    'order_data' => $orderData
                ]);
                return ['success' => false, 'message' => $result['message'] ?? 'Failed to create courier order'];
            }

            $this->updateOrderShipment($result['data']);

            return [
                'success' => true,
                'message' => 'Order shipment created successfully',
                'data' => $result,
                'location_info' => [
                    'city' => $loc['city_name'],
                    'zone' => $loc['zone_name'],
                    'area' => $loc['area_name']
                ]
            ];
        } catch (\Exception $e) {
            Log::error('Pathao API Exception: '.$e->getMessage(), [
                'order_data' => $orderData,
                'trace' => $e->getTraceAsString()
            ]);
            return ['success' => false, 'message' => 'API Exception: '.$e->getMessage()];
        }
    }

    // ... keep the rest of your methods (updateOrderShipment, formatAddress) the same
}
