<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Currency
         *
         */

        
        $newData0 = \App\Models\Currency::create([
            'id' => 1,
            'name' => 'U.S. Dollar',
            'symbol' => '$',
            'exchange_rate' => 1,
            'status' => 1,
            'code' => 'USD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-17 05:50:52',
        ]);
        $newData1 = \App\Models\Currency::create([
            'id' => 2,
            'name' => 'Australian Dollar',
            'symbol' => '$',
            'exchange_rate' => 1.28,
            'status' => 1,
            'code' => 'AUD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2019-02-04 05:51:55',
        ]);
        $newData2 = \App\Models\Currency::create([
            'id' => 5,
            'name' => 'Brazilian Real',
            'symbol' => 'R$',
            'exchange_rate' => 3.25,
            'status' => 1,
            'code' => 'BRL',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-17 05:51:00',
        ]);
        $newData3 = \App\Models\Currency::create([
            'id' => 6,
            'name' => 'Canadian Dollar',
            'symbol' => '$',
            'exchange_rate' => 1.27,
            'status' => 1,
            'code' => 'CAD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData4 = \App\Models\Currency::create([
            'id' => 7,
            'name' => 'Czech Koruna',
            'symbol' => 'Kč',
            'exchange_rate' => 20.65,
            'status' => 1,
            'code' => 'CZK',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData5 = \App\Models\Currency::create([
            'id' => 8,
            'name' => 'Danish Krone',
            'symbol' => 'kr',
            'exchange_rate' => 6.05,
            'status' => 1,
            'code' => 'DKK',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData6 = \App\Models\Currency::create([
            'id' => 9,
            'name' => 'Euro',
            'symbol' => '€',
            'exchange_rate' => 0.85,
            'status' => 1,
            'code' => 'EUR',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData7 = \App\Models\Currency::create([
            'id' => 10,
            'name' => 'Hong Kong Dollar',
            'symbol' => '$',
            'exchange_rate' => 7.83,
            'status' => 1,
            'code' => 'HKD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData8 = \App\Models\Currency::create([
            'id' => 11,
            'name' => 'Hungarian Forint',
            'symbol' => 'Ft',
            'exchange_rate' => 255.24,
            'status' => 1,
            'code' => 'HUF',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData9 = \App\Models\Currency::create([
            'id' => 12,
            'name' => 'Israeli New Sheqel',
            'symbol' => '₪',
            'exchange_rate' => 3.48,
            'status' => 1,
            'code' => 'ILS',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData10 = \App\Models\Currency::create([
            'id' => 13,
            'name' => 'Japanese Yen',
            'symbol' => '¥',
            'exchange_rate' => 107.12,
            'status' => 1,
            'code' => 'JPY',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData11 = \App\Models\Currency::create([
            'id' => 14,
            'name' => 'Malaysian Ringgit',
            'symbol' => 'RM',
            'exchange_rate' => 3.91,
            'status' => 1,
            'code' => 'MYR',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData12 = \App\Models\Currency::create([
            'id' => 15,
            'name' => 'Mexican Peso',
            'symbol' => '$',
            'exchange_rate' => 18.72,
            'status' => 1,
            'code' => 'MXN',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData13 = \App\Models\Currency::create([
            'id' => 16,
            'name' => 'Norwegian Krone',
            'symbol' => 'kr',
            'exchange_rate' => 7.83,
            'status' => 1,
            'code' => 'NOK',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData14 = \App\Models\Currency::create([
            'id' => 17,
            'name' => 'New Zealand Dollar',
            'symbol' => '$',
            'exchange_rate' => 1.38,
            'status' => 1,
            'code' => 'NZD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData15 = \App\Models\Currency::create([
            'id' => 18,
            'name' => 'Philippine Peso',
            'symbol' => '₱',
            'exchange_rate' => 52.26,
            'status' => 1,
            'code' => 'PHP',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData16 = \App\Models\Currency::create([
            'id' => 19,
            'name' => 'Polish Zloty',
            'symbol' => 'zł',
            'exchange_rate' => 3.39,
            'status' => 1,
            'code' => 'PLN',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData17 = \App\Models\Currency::create([
            'id' => 20,
            'name' => 'Pound Sterling',
            'symbol' => '£',
            'exchange_rate' => 0.72,
            'status' => 1,
            'code' => 'GBP',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData18 = \App\Models\Currency::create([
            'id' => 21,
            'name' => 'Russian Ruble',
            'symbol' => 'руб',
            'exchange_rate' => 55.93,
            'status' => 1,
            'code' => 'RUB',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData19 = \App\Models\Currency::create([
            'id' => 22,
            'name' => 'Singapore Dollar',
            'symbol' => '$',
            'exchange_rate' => 1.32,
            'status' => 1,
            'code' => 'SGD',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData20 = \App\Models\Currency::create([
            'id' => 23,
            'name' => 'Swedish Krona',
            'symbol' => 'kr',
            'exchange_rate' => 8.19,
            'status' => 1,
            'code' => 'SEK',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData21 = \App\Models\Currency::create([
            'id' => 24,
            'name' => 'Swiss Franc',
            'symbol' => 'CHF',
            'exchange_rate' => 0.94,
            'status' => 1,
            'code' => 'CHF',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData22 = \App\Models\Currency::create([
            'id' => 26,
            'name' => 'Thai Baht',
            'symbol' => '฿',
            'exchange_rate' => 31.39,
            'status' => 1,
            'code' => 'THB',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-10-09 11:35:08',
        ]);
        $newData23 = \App\Models\Currency::create([
            'id' => 27,
            'name' => 'Taka',
            'symbol' => '৳',
            'exchange_rate' => 84,
            'status' => 1,
            'code' => 'BDT',
            'created_at' => '2018-10-09 11:35:08',
            'updated_at' => '2018-12-02 05:16:13',
        ]);
        $newData24 = \App\Models\Currency::create([
            'id' => 28,
            'name' => 'Indian Rupee',
            'symbol' => 'Rs',
            'exchange_rate' => 68.45,
            'status' => 1,
            'code' => 'INR',
            'created_at' => '2019-07-07 10:33:46',
            'updated_at' => '2025-05-24 10:33:46',
        ]);
    }
}