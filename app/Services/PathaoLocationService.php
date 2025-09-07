<?php

namespace App\Services;

use App\Models\Address;
use App\Models\PathaoArea;
use App\Models\PathaoCity;
use App\Models\PathaoLocationMap;
use App\Models\PathaoZone;
use App\Traits\PathaoApiTrait;
use Illuminate\Support\Facades\Log;
use Throwable;

class PathaoLocationService
{
    use PathaoApiTrait;

    /**
     * Pulls reference data from Pathao (cities, zones, areas) and stores them
     */
    public function syncReferenceData(): array
    {
        try {
            $config = $this->getPathaoConfig();
            $token = $this->getAccessToken();

            if (!$token['success']) {
                return ['success' => false, 'message' => $token['message'] ?? 'Token error'];
            }

            $client = $this->httpClientWithAuth($token['access_token']);

            // 🔹 Cities
            $citiesResp = $client->get(rtrim($config['aladdin_url'], '/').'/city-list')->json();
            if (($citiesResp['type'] ?? null) !== 'success') {
                return ['success' => false, 'message' => 'City list fetch failed'];
            }

            $cities = $citiesResp['data']['data'] ?? [];
            foreach ($cities as $c) {
                PathaoCity::updateOrCreate(
                    ['cityId' => $c['city_id']],
                    ['name' => $c['city_name']]
                );
            }

            // 🔹 Zones & Areas by city
            foreach ($cities as $c) {
                $zonesUrl = rtrim($config['aladdin_url'], '/').'/cities/'.$c['city_id'].'/zone-list';
                $zonesResp = $client->get($zonesUrl);

                if ($zonesResp->failed()) {
                    Log::warning('Pathao zones fetch failed', [
                        'city_id' => $c['city_id'],
                        'status' => $zonesResp->status(),
                        'body' => $zonesResp->json(),
                    ]);
                    continue;
                }

                $zonesBody = $zonesResp->json();
                if (($zonesBody['type'] ?? null) !== 'success') {
                    Log::warning('Pathao zones response invalid', [
                        'city_id' => $c['city_id'],
                        'body' => $zonesBody,
                    ]);
                    continue;
                }

                $zones = $zonesBody['data']['data'] ?? [];
                foreach ($zones as $z) {
                    PathaoZone::updateOrCreate(
                        ['zone_id' => $z['zone_id']],
                        [
                            'city_id' => $c['city_id'],
                            'name' => $z['zone_name'],
                        ]
                    );

                    // 🔹 Areas by zone
                    $areasUrl = rtrim($config['aladdin_url'], '/').'/zones/'.$z['zone_id'].'/area-list';
                    $areasResp = $client->get($areasUrl);

                    if ($areasResp->failed()) {
                        Log::warning('Pathao areas fetch failed', [
                            'zone_id' => $z['zone_id'],
                            'status' => $areasResp->status(),
                            'body' => $areasResp->json(),
                        ]);
                        continue;
                    }

                    $areasBody = $areasResp->json();
                    if (($areasBody['type'] ?? null) !== 'success') {
                        Log::warning('Pathao areas response invalid', [
                            'zone_id' => $z['zone_id'],
                            'body' => $areasBody,
                        ]);
                        continue;
                    }

                    $areas = $areasBody['data']['data'] ?? [];
                    foreach ($areas as $a) {
                        PathaoArea::updateOrCreate(
                            ['area_id' => $a['area_id']],
                            [
                                'zone_id' => $z['zone_id'],
                                'area_name' => $a['area_name'],
                                'area_id' => (int) $a['area_id'],
                                'home_delivery_available' => $a['home_delivery_available'] ?? false,
                                'pickup_available' => $a['pickup_available'] ?? false,
                            ]
                        );
                    }
                }
            }

            return ['success' => true, 'message' => 'Reference data synced successfully'];

        } catch (Throwable $e) {
            Log::error('Pathao reference sync error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return ['success' => false, 'message' => 'Sync failed: '.$e->getMessage()];
        }
    }

    /**
     * Resolve Pathao IDs from your master data (state_id, city_id, area text)
     */
    public function resolveForAddress(Address $address): array
    {
        $areaText = $this->extractAreaText($address);

        $map = PathaoLocationMap::where('state_id', $address->state_id)
            ->where('city_id', $address->city_id)
            ->when($areaText, fn($q) => $q->where('area_text', $areaText), fn($q) => $q->whereNull('area_text'))
            ->first();

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

    /**
     * Extract small locality/area text from the address line for mapping
     */
    protected function extractAreaText(Address $address): ?string
    {
        if (!$address->address) {
            return null;
        }

        $parts = array_map('trim', explode(',', $address->address));
        $candidate = end($parts) ?: null;

        return $candidate ?: null;
    }
}
