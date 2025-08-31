<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTaxSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=ProductTax
         *
         */

        
        $newData0 = \App\Models\ProductTax::create([
            'id' => 1,
            'product_id' => 22,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 12:20:40',
            'updated_at' => '2024-01-08 12:20:40',
        ]);
        $newData1 = \App\Models\ProductTax::create([
            'id' => 3,
            'product_id' => 20,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 12:26:37',
            'updated_at' => '2024-01-08 12:26:37',
        ]);
        $newData2 = \App\Models\ProductTax::create([
            'id' => 4,
            'product_id' => 19,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 12:28:24',
            'updated_at' => '2024-01-08 12:28:24',
        ]);
        $newData3 = \App\Models\ProductTax::create([
            'id' => 5,
            'product_id' => 18,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 12:29:26',
            'updated_at' => '2024-01-08 12:29:26',
        ]);
        $newData4 = \App\Models\ProductTax::create([
            'id' => 6,
            'product_id' => 6,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 13:35:57',
            'updated_at' => '2024-01-08 13:35:57',
        ]);
        $newData5 = \App\Models\ProductTax::create([
            'id' => 7,
            'product_id' => 3,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:15:19',
            'updated_at' => '2024-01-08 14:15:19',
        ]);
        $newData6 = \App\Models\ProductTax::create([
            'id' => 8,
            'product_id' => 2,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:17:06',
            'updated_at' => '2024-01-08 14:17:06',
        ]);
        $newData7 = \App\Models\ProductTax::create([
            'id' => 9,
            'product_id' => 14,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:33:17',
            'updated_at' => '2024-01-08 14:33:17',
        ]);
        $newData8 = \App\Models\ProductTax::create([
            'id' => 10,
            'product_id' => 15,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:35:00',
            'updated_at' => '2024-01-08 14:35:00',
        ]);
        $newData9 = \App\Models\ProductTax::create([
            'id' => 11,
            'product_id' => 16,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:37:31',
            'updated_at' => '2024-01-08 14:37:31',
        ]);
        $newData10 = \App\Models\ProductTax::create([
            'id' => 12,
            'product_id' => 10,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:39:12',
            'updated_at' => '2024-01-08 14:39:12',
        ]);
        $newData11 = \App\Models\ProductTax::create([
            'id' => 13,
            'product_id' => 11,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:41:05',
            'updated_at' => '2024-01-08 14:41:05',
        ]);
        $newData12 = \App\Models\ProductTax::create([
            'id' => 14,
            'product_id' => 17,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:47:34',
            'updated_at' => '2024-01-08 14:47:34',
        ]);
        $newData13 = \App\Models\ProductTax::create([
            'id' => 15,
            'product_id' => 9,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:49:22',
            'updated_at' => '2024-01-08 14:49:22',
        ]);
        $newData14 = \App\Models\ProductTax::create([
            'id' => 16,
            'product_id' => 8,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 14:51:09',
            'updated_at' => '2024-01-08 14:51:09',
        ]);
        $newData15 = \App\Models\ProductTax::create([
            'id' => 17,
            'product_id' => 5,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 15:05:45',
            'updated_at' => '2024-01-08 15:05:45',
        ]);
        $newData16 = \App\Models\ProductTax::create([
            'id' => 18,
            'product_id' => 13,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 15:09:38',
            'updated_at' => '2024-01-08 15:09:38',
        ]);
        $newData17 = \App\Models\ProductTax::create([
            'id' => 19,
            'product_id' => 12,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 15:12:38',
            'updated_at' => '2024-01-08 15:12:38',
        ]);
        $newData18 = \App\Models\ProductTax::create([
            'id' => 20,
            'product_id' => 4,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 15:14:45',
            'updated_at' => '2024-01-08 15:14:45',
        ]);
        $newData19 = \App\Models\ProductTax::create([
            'id' => 21,
            'product_id' => 7,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2024-01-08 15:17:03',
            'updated_at' => '2024-01-08 15:17:03',
        ]);
        $newData20 = \App\Models\ProductTax::create([
            'id' => 22,
            'product_id' => 21,
            'tax_id' => 3,
            'tax' => 0,
            'tax_type' => 'amount',
            'created_at' => '2025-08-25 04:56:00',
            'updated_at' => '2025-08-25 04:56:00',
        ]);
    }
}