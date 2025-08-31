<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStockSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=ProductStock
         *
         */

        
        $newData0 = \App\Models\ProductStock::create([
            'id' => 1,
            'product_id' => 22,
            'variant' => '',
            'sku' => NULL,
            'price' => 5.32,
            'qty' => 233,
            'image' => NULL,
            'created_at' => '2024-01-08 12:20:40',
            'updated_at' => '2024-01-08 12:20:40',
        ]);
        $newData1 = \App\Models\ProductStock::create([
            'id' => 3,
            'product_id' => 20,
            'variant' => '',
            'sku' => NULL,
            'price' => 12.34,
            'qty' => 119,
            'image' => NULL,
            'created_at' => '2024-01-08 12:26:37',
            'updated_at' => '2025-08-25 06:21:44',
        ]);
        $newData2 = \App\Models\ProductStock::create([
            'id' => 4,
            'product_id' => 19,
            'variant' => '',
            'sku' => NULL,
            'price' => 13.43,
            'qty' => 235,
            'image' => NULL,
            'created_at' => '2024-01-08 12:28:24',
            'updated_at' => '2024-01-08 12:28:24',
        ]);
        $newData3 = \App\Models\ProductStock::create([
            'id' => 5,
            'product_id' => 18,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 198,
            'image' => NULL,
            'created_at' => '2024-01-08 12:29:26',
            'updated_at' => '2024-01-08 12:29:26',
        ]);
        $newData4 = \App\Models\ProductStock::create([
            'id' => 6,
            'product_id' => 6,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 0,
            'image' => NULL,
            'created_at' => '2024-01-08 13:35:57',
            'updated_at' => '2024-01-08 13:35:57',
        ]);
        $newData5 = \App\Models\ProductStock::create([
            'id' => 7,
            'product_id' => 3,
            'variant' => 'Crimson',
            'sku' => NULL,
            'price' => 15,
            'qty' => 106,
            'image' => NULL,
            'created_at' => '2024-01-08 14:15:19',
            'updated_at' => '2024-01-08 14:15:19',
        ]);
        $newData6 = \App\Models\ProductStock::create([
            'id' => 8,
            'product_id' => 2,
            'variant' => 'DarkOrange',
            'sku' => NULL,
            'price' => 12,
            'qty' => 101,
            'image' => NULL,
            'created_at' => '2024-01-08 14:17:06',
            'updated_at' => '2024-01-08 14:17:06',
        ]);
        $newData7 = \App\Models\ProductStock::create([
            'id' => 9,
            'product_id' => 14,
            'variant' => '',
            'sku' => NULL,
            'price' => 12.23,
            'qty' => 129,
            'image' => NULL,
            'created_at' => '2024-01-08 14:33:17',
            'updated_at' => '2024-01-08 14:33:17',
        ]);
        $newData8 = \App\Models\ProductStock::create([
            'id' => 10,
            'product_id' => 15,
            'variant' => '',
            'sku' => NULL,
            'price' => 13.3,
            'qty' => 227,
            'image' => NULL,
            'created_at' => '2024-01-08 14:35:00',
            'updated_at' => '2024-01-08 14:35:00',
        ]);
        $newData9 = \App\Models\ProductStock::create([
            'id' => 11,
            'product_id' => 16,
            'variant' => '',
            'sku' => NULL,
            'price' => 12.22,
            'qty' => 0,
            'image' => NULL,
            'created_at' => '2024-01-08 14:37:31',
            'updated_at' => '2024-01-08 14:37:31',
        ]);
        $newData10 = \App\Models\ProductStock::create([
            'id' => 12,
            'product_id' => 10,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 123,
            'image' => NULL,
            'created_at' => '2024-01-08 14:39:12',
            'updated_at' => '2024-01-08 14:39:12',
        ]);
        $newData11 = \App\Models\ProductStock::create([
            'id' => 13,
            'product_id' => 11,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 128,
            'image' => NULL,
            'created_at' => '2024-01-08 14:41:05',
            'updated_at' => '2024-01-08 14:41:05',
        ]);
        $newData12 = \App\Models\ProductStock::create([
            'id' => 14,
            'product_id' => 17,
            'variant' => '',
            'sku' => NULL,
            'price' => 21.32,
            'qty' => 229,
            'image' => NULL,
            'created_at' => '2024-01-08 14:47:34',
            'updated_at' => '2024-01-08 14:47:34',
        ]);
        $newData13 = \App\Models\ProductStock::create([
            'id' => 15,
            'product_id' => 9,
            'variant' => '',
            'sku' => NULL,
            'price' => 22,
            'qty' => 1210,
            'image' => NULL,
            'created_at' => '2024-01-08 14:49:21',
            'updated_at' => '2024-01-08 14:49:21',
        ]);
        $newData14 = \App\Models\ProductStock::create([
            'id' => 16,
            'product_id' => 8,
            'variant' => '',
            'sku' => NULL,
            'price' => 12.4,
            'qty' => 110,
            'image' => NULL,
            'created_at' => '2024-01-08 14:51:09',
            'updated_at' => '2024-01-08 14:51:09',
        ]);
        $newData15 = \App\Models\ProductStock::create([
            'id' => 17,
            'product_id' => 5,
            'variant' => 'AntiqueWhite',
            'sku' => NULL,
            'price' => 34,
            'qty' => 109,
            'image' => NULL,
            'created_at' => '2024-01-08 15:05:45',
            'updated_at' => '2024-01-08 15:05:45',
        ]);
        $newData16 = \App\Models\ProductStock::create([
            'id' => 18,
            'product_id' => 13,
            'variant' => '',
            'sku' => NULL,
            'price' => 15.3,
            'qty' => 125,
            'image' => NULL,
            'created_at' => '2024-01-08 15:09:38',
            'updated_at' => '2024-01-08 15:09:38',
        ]);
        $newData17 = \App\Models\ProductStock::create([
            'id' => 19,
            'product_id' => 12,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 120,
            'image' => NULL,
            'created_at' => '2024-01-08 15:12:38',
            'updated_at' => '2024-01-08 15:12:38',
        ]);
        $newData18 = \App\Models\ProductStock::create([
            'id' => 20,
            'product_id' => 4,
            'variant' => 'DarkGray',
            'sku' => NULL,
            'price' => 3,
            'qty' => 107,
            'image' => NULL,
            'created_at' => '2024-01-08 15:14:45',
            'updated_at' => '2024-01-08 15:14:45',
        ]);
        $newData19 = \App\Models\ProductStock::create([
            'id' => 21,
            'product_id' => 7,
            'variant' => '',
            'sku' => NULL,
            'price' => 12,
            'qty' => 109,
            'image' => NULL,
            'created_at' => '2024-01-08 15:17:03',
            'updated_at' => '2024-01-08 15:17:03',
        ]);
        $newData20 = \App\Models\ProductStock::create([
            'id' => 22,
            'product_id' => 21,
            'variant' => '',
            'sku' => NULL,
            'price' => 5.32,
            'qty' => 299,
            'image' => NULL,
            'created_at' => '2025-08-25 04:56:00',
            'updated_at' => '2025-08-25 04:56:00',
        ]);
    }
}