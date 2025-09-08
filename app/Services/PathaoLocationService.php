<?php

namespace App\Services;

use App\Models\PathaoArea;
use App\Models\PathaoCity;
use App\Models\PathaoZone;
use App\Traits\PathaoApiTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
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

    public function resolveFromAddress(object $address): array
    {
        $state = Str::lower(trim($address->state));
        $city = Str::lower(trim($address->city));

        // Try to find the city first
        $pathaoCity = PathaoCity::whereRaw('LOWER(name) = ?', [$city])
            ->orWhereRaw('LOWER(name) = ?', [$state])
            ->first();

        if (!$pathaoCity) {
            return [
                'success' => false,
                'message' => "No Pathao city found for: {$address->city}, {$address->state}"
            ];
        }

        // Try to find zone (often the city name in shipping address maps to a zone in Pathao)
        $pathaoZone = PathaoZone::where('city_id', $pathaoCity->cityId)
            ->where('name', 'like', '%'.$city.'%')
            ->whereRaw('LOWER(name) LIKE ?', ['%'.$city.'%'])
            ->first();
        // If no zone found, try to get a default zone for the city
        if (!$pathaoZone) {
            $pathaoZone = PathaoZone::where('city_id', $pathaoCity->id)
                ->orderBy('name')
                ->first();
        }

        if (!$pathaoZone) {
            return [
                'success' => false,
                'message' => "No Pathao zone found for city: {$pathaoCity->name}"
            ];
        }

        // Try to find area based on address details
        $area = $this->extractAreaFromAddress($address->address);
        $pathaoArea = null;
        if ($area) {
            $pathaoArea = PathaoArea::where('zone_id', 156)
                ->whereRaw('LOWER(area_name) LIKE ?', ['%'.Str::lower($area).'%'])
                ->first();
            dd($pathaoArea);
        }

        return [
            'success' => true,
            'recipient_city' => (int) $pathaoCity->cityId,
            'recipient_zone' => (int) $pathaoZone->zone_id,
            'city_name' => $pathaoCity->name,
            'zone_name' => $pathaoZone->name,
        ];
    }

    protected function extractAreaFromAddress(string $address): ?string
    {
        $parts = array_map('trim', explode(',', $address));
        $areaKeywords = ['sector', 'block', 'area', 'ward', 'no.', 'road', 'rd'];
        foreach ($parts as $part) {
            foreach ($areaKeywords as $keyword) {
                if (stripos(strtolower($part), strtolower($keyword)) !== false) {
                    return $part;
                }
            }
        }
        return end($parts) ?: null;
    }
}
