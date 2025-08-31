<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Language
         *
         */

        
        $newData0 = \App\Models\Language::create([
            'id' => 1,
            'name' => 'English',
            'code' => 'en',
            'app_lang_code' => 'en',
            'rtl' => 0,
            'status' => 1,
            'created_at' => '2019-01-20 12:13:20',
            'updated_at' => '2019-01-20 12:13:20',
        ]);
        $newData1 = \App\Models\Language::create([
            'id' => 3,
            'name' => 'Bangla',
            'code' => 'bd',
            'app_lang_code' => 'bn',
            'rtl' => 0,
            'status' => 1,
            'created_at' => '2019-02-17 06:35:37',
            'updated_at' => '2019-02-18 06:49:51',
        ]);
        $newData2 = \App\Models\Language::create([
            'id' => 4,
            'name' => 'Arabic',
            'code' => 'sa',
            'app_lang_code' => 'ar',
            'rtl' => 1,
            'status' => 1,
            'created_at' => '2019-04-28 18:34:12',
            'updated_at' => '2019-04-28 18:34:12',
        ]);
    }
}