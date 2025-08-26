<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ✅ add this line

class CourierController extends Controller
{
    public function handleSteadFastWebhook(Request $request)
    {
        $payload = $request->all();
        $token = $request->header('Authorization');
        if ($token !== config('steadfast-courier.webhook_bearer_token')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        try {
            $this->validatePayload($payload);
            $this->processPayload($payload);
            return response()->json(['status' => 'success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }

    private function validatePayload($payload)
    {
        $properties = [
            'consignment_id',
            'invoice',
            'status',
            'cod_amount',
            'updated_at',
        ];
        $missingProperties = array_diff($properties, array_keys($payload));
        if ($missingProperties) {
            abort(400, 'Missing required properties: '.implode(', ', $missingProperties));
        }
    }

    private function processPayload($payload)
    {
        $consignment_id = $payload['consignment_id'];
        return $payload;
        $orderStatus = $payload['status'];

        // Example: update order
        // Order::where('invoice', $payload['invoice'])->update(['status' => $orderStatus]);

        return $orderStatus;
    }
}
