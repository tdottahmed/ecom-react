<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderShipment;
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

        if (!$loc['success']) {
            return ['success' => false, 'message' => $loc['message']];
        }

        $cod_amount = (int) ($this->order->orderDetails->sum('price') + $this->order->orderDetails()->sum('shipping_cost'));

        $orderData = [
            'store_id' => (int) config('services.pathao-courier.pathao_store_id'),
            'merchant_order_id' => $this->order->code,
            'recipient_name' => $this->shipping_address->name,
            'recipient_phone' => str_replace('+88', '', $this->shipping_address->phone),
            'recipient_address' => $this->shipping_address->address,
            'recipient_city' => $loc['recipient_city_id'],
            'recipient_zone' => $loc['recipient_zone_id'],
            'recipient_area' => $loc['recipient_area_id'] ?? null,
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
        $url = rtrim($config['aladdin_url'], '/').'/orders';
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
                    'area' => $loc['area_name'] ?? null,
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

    protected function updateOrderShipment($response): OrderShipment
    {
        $c = $response['consignment'] ?? $response;

        $shipment = OrderShipment::create([
            'order_id' => $this->order->id,
            'invoice_no' => $c['invoice']
                ?? $c['customer_invoice_number']
                    ?? $c['merchant_order_id']
                    ?? ($response['merchant_order_id'] ?? $this->order->code),
            'consignment_no' => $c['consignment_id'] ?? $c['id'] ?? ($response['order_id'] ?? null),
            'tracking_code' => $c['tracking_code'] ?? $c['tracking_number'] ?? ($response['tracking_code'] ?? null),
            'carrier' => 'pathao',
            'status' => $c['status'] ?? ($response['status'] ?? 'created'),
            'recipient_name' => $c['recipient_name'] ?? ($response['recipient_name'] ?? ($this->shipping_address->name ?? null)),
            'recipient_address' => $c['recipient_address'] ?? ($response['recipient_address'] ?? $this->formatAddress()),
            'recipient_phone' => $c['recipient_phone'] ?? ($response['recipient_phone'] ?? ($this->shipping_address->phone ?? null)),
            'phone' => $c['alternative_phone'] ?? ($response['alternative_phone'] ?? null),
            'note' => $c['note'] ?? ($response['note'] ?? ($this->order->additional_info ?? null)),
        ]);

        $this->order->update([
            'delivery_status' => 'processing',
        ]);

        return $shipment;
    }

    protected function formatAddress(): string
    {
        return implode(', ', array_filter([
            $this->shipping_address->address ?? null,
            $this->shipping_address->city ?? null,
            $this->shipping_address->state ?? null,
            $this->shipping_address->postal_code ?? null,
        ]));
    }
}
