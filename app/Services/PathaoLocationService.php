<?php

namespace App\Services;

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
     * Pulls reference data from Pathao (cities, zones only)
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

            // 🔹 Zones (no areas in DB)
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
        $fullAddress = $this->normalizeAddress($address->address);

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

        // Try to find zone
        $pathaoZone = PathaoZone::where('city_id', $pathaoCity->cityId)
            ->where(function ($query) use ($city) {
                $query->whereRaw('LOWER(name) LIKE ?', ['%'.$city.'%'])
                    ->orWhereRaw('? LIKE CONCAT("%", LOWER(name), "%")', [$city]);
            })
            ->first();

        if (!$pathaoZone) {
            $pathaoZone = PathaoZone::where('city_id', $pathaoCity->cityId)
                ->orderBy('name')
                ->first();
        }

        if (!$pathaoZone) {
            return [
                'success' => false,
                'message' => "No Pathao zone found for city: {$pathaoCity->name}"
            ];
        }

        // Fetch areas directly from API
        $areas = $this->getPathaoArea($pathaoZone->zone_id);
        $bestMatch = $this->findBestMatchingArea($areas, $fullAddress);

        $response = [
            'success' => true,
            'recipient_city_id' => (int) $pathaoCity->cityId,
            'recipient_zone_id' => (int) $pathaoZone->zone_id,
            'city_name' => $pathaoCity->name,
            'zone_name' => $pathaoZone->name,
        ];

        if ($bestMatch) {
            $response['recipient_area_id'] = $bestMatch['area_id'];
            $response['area_name'] = $bestMatch['area_name'];
        }

        return $response;
    }

    protected function normalizeAddress(string $address): string
    {
        $address = preg_replace('/\s+/', ' ', trim($address));
        $address = str_replace(['#', '-', '_', '.'], ' ', $address);
        return Str::lower($address);
    }

    protected function findBestMatchingArea(array $areas, string $address): ?array
    {
        $bestScore = 0;
        $bestArea = null;

        foreach ($areas as $area) {
            $score = 0;
            $areaName = Str::lower($area['area_name']);

            // Exact match
            if (str_contains($address, $areaName)) {
                $score += 100;
            }

            // Partial word matches
            $addressWords = explode(' ', $address);
            $areaWords = explode(' ', $areaName);

            foreach ($addressWords as $word) {
                if (strlen($word) < 3) {
                    continue;
                }
                foreach ($areaWords as $areaWord) {
                    if (strlen($areaWord) < 3) {
                        continue;
                    }

                    $distance = levenshtein($word, $areaWord);
                    if ($distance <= 2) {
                        $score += (3 - $distance) * 10;
                    }
                }
            }

            // Common location keywords
            $keywords = ['sector', 'block', 'road', 'area', 'ward'];
            foreach ($keywords as $keyword) {
                if (str_contains($address, $keyword) && str_contains($areaName, $keyword)) {
                    $score += 20;
                }
            }

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestArea = $area; // return raw API array
            }
        }

        return $bestScore >= 30 ? $bestArea : null;
    }

    public function getPathaoArea(int $zoneId = null): array
    {
        $config = $this->getPathaoConfig();
        $token = $this->getAccessToken();

        if (!$token['success']) {
            return [];
        }

        $client = $this->httpClientWithAuth($token['access_token']);
        $areasUrl = rtrim($config['aladdin_url'], '/').'/zones/'.$zoneId.'/area-list';
        $areasResp = $client->get($areasUrl);
        $areasBody = $areasResp->json();

        return $areasBody['data']['data'] ?? [];
    }
}
