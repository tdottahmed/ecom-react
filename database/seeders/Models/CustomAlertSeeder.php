<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomAlertSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=CustomAlert
         *
         */

        
        $newData0 = \App\Models\CustomAlert::create([
            'id' => 1,
            'status' => 1,
            'type' => 'small',
            'banner' => NULL,
            'link' => '#',
            'description' => '<p>We use cookie for better user experience, check our policy <a href="https://demo.activeitzone.com/ecommerce/privacypolicy">here</a>&nbsp;</p>',
            'text_color' => 'dark',
            'background_color' => '#ffffff',
            'created_at' => '2024-03-26 20:02:20',
            'updated_at' => '2024-03-27 17:21:29',
        ]);
    }
}