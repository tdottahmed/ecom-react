<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPopupSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=DynamicPopup
         *
         */

        
        $newData0 = \App\Models\DynamicPopup::create([
            'id' => 1,
            'status' => 1,
            'title' => 'Subscribe to Our Newsletter',
            'summary' => 'Subscribe our newsletter for coupon, offer and exciting promotional discount..',
            'banner' => NULL,
            'btn_link' => '#',
            'btn_text' => 'Subscribe Now',
            'btn_text_color' => 'white',
            'btn_background_color' => '#baa185',
            'show_subscribe_form' => 'on',
            'created_at' => '2024-03-27 16:32:51',
            'updated_at' => '2024-03-27 22:33:24',
        ]);
    }
}