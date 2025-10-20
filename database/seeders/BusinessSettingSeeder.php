<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('business_settings')->truncate();

        $data = config('business_settings'); // Load from config/business_settings.php

        $now = now();

        // Append timestamps if not present
        $data = array_map(function ($item) use ($now) {
            return array_merge($item, [
                'created_at' => $item['created_at'] ?? $now,
                'updated_at' => $item['updated_at'] ?? $now,
            ]);
        }, $data);

        // Use chunk insert for better performance
        foreach (array_chunk($data, 50) as $chunk) {
            DB::table('business_settings')->insert($chunk);
        }
    }
}
