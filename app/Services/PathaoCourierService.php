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

    public function __construct(Order $order, $shipping_address)
    {
        $this->order = $order;
        $this->shipping_address = $shipping_address;
    }

    public function handle(): array
    {
        $token = $this->getAccessToken();
        if (!$token['success']) {
            return $token;
        }
        $this->access_token = $token['access_token'];
        $addressModel = $this->shipping_address instanceof \App\Models\Address
            ? $this->shipping_address
            : null;

        if (!$addressModel && $this->order->user) {
            $decoded = is_string($this->order->shipping_address)
                ? json_decode($this->order->shipping_address)
                : $this->order->shipping_address;

            $addressId = is_object($decoded) ? ($decoded->address_id ?? null) : null;
            if ($addressId) {
                $addressModel = $this->order->user->addresses()->whereKey($addressId)->first();
            }
        }

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

        $config = $this->getPathaoConfig();
        $url = rtrim($config['base_url'], '/').'/orders';
        $client = $this->httpClientWithAuth($this->access_token);

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
            Log::warning('Pathao order create failed', ['status' => $response->status(), 'body' => $result]);
            return ['success' => false, 'message' => $result['message'] ?? 'Failed to create courier order'];
        }

        $this->updateOrderShipment($result['data']);

        return ['success' => true, 'message' => 'Order shipment created successfully', 'data' => $result];
    }

    protected function updateOrderShipment(array $response): OrderShipment
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

        $this->order->update(['delivery_status' => 'processing']);

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
}
