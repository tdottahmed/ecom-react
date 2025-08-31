<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlashDealTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --model-mode --models=FlashDealTranslation
         *
         */

        
        $newData0 = \App\Models\FlashDealTranslation::create([
            'id' => 1,
            'flash_deal_id' => 1,
            'title' => 'Flash Sale',
            'lang' => 'en',
            'created_at' => '2023-12-17 17:00:33',
            'updated_at' => '2023-12-17 17:00:33',
        ]);
        $newData1 = \App\Models\FlashDealTranslation::create([
            'id' => 2,
            'flash_deal_id' => 2,
            'title' => 'Electronic',
            'lang' => 'en',
            'created_at' => '2023-12-17 17:08:52',
            'updated_at' => '2023-12-17 17:08:52',
        ]);
        $newData2 = \App\Models\FlashDealTranslation::create([
            'id' => 3,
            'flash_deal_id' => 3,
            'title' => 'Winter Sale',
            'lang' => 'en',
            'created_at' => '2023-12-17 17:11:20',
            'updated_at' => '2023-12-17 17:11:20',
        ]);
        $newData3 = \App\Models\FlashDealTranslation::create([
            'id' => 4,
            'flash_deal_id' => 4,
            'title' => 'End of Season',
            'lang' => 'en',
            'created_at' => '2024-01-09 14:34:25',
            'updated_at' => '2024-01-09 14:34:25',
        ]);
    }
}