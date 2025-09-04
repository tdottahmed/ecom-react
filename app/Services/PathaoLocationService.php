<?php

namespace App\Services;

use App\Models\Address;
use App\Models\PathaoArea;
use App\Models\PathaoCity;
use App\Models\PathaoLocationMap;
use App\Models\PathaoZone;
use Illuminate\Support\Facades\Log;
use Throwable;

class PathaoLocationService
{
    public function __construct(private readonly PathaoCourierService $courier)
    {
    }

    // Pulls reference data from Pathao (cities, zones, areas) and stores them
    public function syncReferenceData(): array
    {
        try {
            $config = $this->courier->getPathaoConfig();
            $token = $this->courier->getAccessToken();
            if (!$token['success']) {
                return ['success' => false, 'message' => $token['message'] ?? 'Token error'];
            }

            $client = $this->courier->httpClientWithAuth($token['access_token']);

            // Cities
            $citiesResp = $client->get(rtrim($config['aladdin_url'], '/').'/city-list')->json();
            if (($citiesResp['type'] ?? null) !== 'success') {
                return ['success' => false, 'message' => 'City list fetch failed'];
            }
            $cities = $citiesResp['data']['data'] ?? [];
            foreach ($cities as $c) {
                PathaoCity::updateOrCreate(['cityId' => $c['city_id']], [
                    'name' => $c['city_name'],
                    'cityId' => $c['city_id'],
                ]);
            }

            // Zones by city
            foreach ($cities as $c) {
                $zonesResp = $client->get(rtrim($config['aladdin_url'], '/').'/zone-list', [
                    'city_id' => $c['city_id'],
                ]);
                if ($zonesResp->failed()) {
                    Log::warning('Pathao zones fetch failed', ['city_id' => $c['city_id']]);
                    continue;
                }
                $zones = $zonesResp->json()['data']['data'] ?? [];
                foreach ($zones as $z) {
                    PathaoZone::updateOrCreate(['id' => $z['zone_id']], [
                        'city_id' => $c['city_id'],
                        'name' => $z['zone_name'],
                    ]);

                    // Areas by zone
                    $areasResp = $client->get(rtrim($config['aladdin_url'], '/').'/area-list', [
                        'zone_id' => $z['zone_id'],
                    ]);
                    if ($areasResp->failed()) {
                        Log::warning('Pathao areas fetch failed', ['zone_id' => $z['zone_id']]);
                        continue;
                    }
                    $areas = $areasResp->json()['data']['data'] ?? [];
                    foreach ($areas as $a) {
                        PathaoArea::updateOrCreate(['id' => $a['area_id']], [
                            'zone_id' => $z['zone_id'],
                            'name' => $a['area_name'],
                        ]);
                    }
                }
            }

            return ['success' => true, 'message' => 'Reference data synced'];
        } catch (Throwable $e) {
            Log::error('Pathao reference sync error', ['error' => $e->getMessage()]);
            return ['success' => false, 'message' => 'Sync failed'];
        }
    }

    // Resolve Pathao IDs from your master data (state_id, city_id, area text)
    public function resolveForAddress(Address $address): array
    {
        // Try explicit mapping by (state_id, city_id, area_text)
        $areaText = $this->extractAreaText($address);
        $map = PathaoLocationMap::where('state_id', $address->state_id)
            ->where('city_id', $address->city_id)
            ->where(function ($q) use ($areaText) {
                if ($areaText) {
                    $q->where('area_text', $areaText);
                } else {
                    $q->whereNull('area_text');
                }
            })
            ->first();

        // Fallback to default mapping for that city if area-level mapping is missing
        if (!$map) {
            $map = PathaoLocationMap::where('state_id', $address->state_id)
                ->where('city_id', $address->city_id)
                ->where('is_default', true)
                ->first();
        }

        if (!$map) {
            return [
                'success' => false,
                'message' => 'No Pathao mapping found for this address. Please configure mapping.',
            ];
        }

        return [
            'success' => true,
            'recipient_city' => (int) $map->pathao_city_id,
            'recipient_zone' => (int) $map->pathao_zone_id,
            'recipient_area' => $map->pathao_area_id ? (int) $map->pathao_area_id : null,
        ];
    }

    // Pulls a small locality/area text from the address line for mapping (customize as needed)
    protected function extractAreaText(Address $address): ?string
    {
        // Example: use the last comma-separated part of address as area
        if (!$address->address) {
            return null;
        }
        $parts = array_map('trim', explode(',', $address->address));
        $candidate = end($parts) ?: null;
        return $candidate ?: null;
    }
}
