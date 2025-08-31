<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=PaymentMethod
         *
         */

        
        $newData0 = \App\Models\PaymentMethod::create([
            'id' => 1,
            'name' => 'paypal',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData1 = \App\Models\PaymentMethod::create([
            'id' => 2,
            'name' => 'stripe',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData2 = \App\Models\PaymentMethod::create([
            'id' => 3,
            'name' => 'sslcommerz',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData3 = \App\Models\PaymentMethod::create([
            'id' => 4,
            'name' => 'instamojo',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData4 = \App\Models\PaymentMethod::create([
            'id' => 5,
            'name' => 'razorpay',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData5 = \App\Models\PaymentMethod::create([
            'id' => 6,
            'name' => 'paystack',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData6 = \App\Models\PaymentMethod::create([
            'id' => 7,
            'name' => 'voguepay',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData7 = \App\Models\PaymentMethod::create([
            'id' => 8,
            'name' => 'payhere',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData8 = \App\Models\PaymentMethod::create([
            'id' => 9,
            'name' => 'ngenius',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData9 = \App\Models\PaymentMethod::create([
            'id' => 10,
            'name' => 'iyzico',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData10 = \App\Models\PaymentMethod::create([
            'id' => 11,
            'name' => 'nagad',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData11 = \App\Models\PaymentMethod::create([
            'id' => 12,
            'name' => 'bkash',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData12 = \App\Models\PaymentMethod::create([
            'id' => 13,
            'name' => 'aamarpay',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData13 = \App\Models\PaymentMethod::create([
            'id' => 14,
            'name' => 'authorizenet',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData14 = \App\Models\PaymentMethod::create([
            'id' => 15,
            'name' => 'payku',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData15 = \App\Models\PaymentMethod::create([
            'id' => 16,
            'name' => 'mercadopago',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData16 = \App\Models\PaymentMethod::create([
            'id' => 17,
            'name' => 'paymob',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-05-18 23:31:18',
            'updated_at' => '2024-05-18 23:31:18',
        ]);
        $newData17 = \App\Models\PaymentMethod::create([
            'id' => 18,
            'name' => 'paytm',
            'active' => 0,
            'addon_identifier' => 'paytm',
            'created_at' => '2024-05-18 23:35:13',
            'updated_at' => '2024-05-18 23:35:13',
        ]);
        $newData18 = \App\Models\PaymentMethod::create([
            'id' => 19,
            'name' => 'toyyibpay',
            'active' => 0,
            'addon_identifier' => 'paytm',
            'created_at' => '2024-05-18 23:35:13',
            'updated_at' => '2024-05-18 23:35:13',
        ]);
        $newData19 = \App\Models\PaymentMethod::create([
            'id' => 20,
            'name' => 'myfatoorah',
            'active' => 0,
            'addon_identifier' => 'paytm',
            'created_at' => '2024-05-18 23:35:13',
            'updated_at' => '2024-05-18 23:35:13',
        ]);
        $newData20 = \App\Models\PaymentMethod::create([
            'id' => 21,
            'name' => 'khalti',
            'active' => 0,
            'addon_identifier' => 'paytm',
            'created_at' => '2024-05-18 23:35:13',
            'updated_at' => '2024-05-18 23:35:13',
        ]);
        $newData21 = \App\Models\PaymentMethod::create([
            'id' => 22,
            'name' => 'phonepe',
            'active' => 0,
            'addon_identifier' => 'paytm',
            'created_at' => '2024-05-18 23:35:13',
            'updated_at' => '2024-05-18 23:35:13',
        ]);
        $newData22 = \App\Models\PaymentMethod::create([
            'id' => 23,
            'name' => 'flutterwave',
            'active' => 0,
            'addon_identifier' => 'african_pg',
            'created_at' => '2024-05-18 23:36:10',
            'updated_at' => '2024-05-18 23:36:10',
        ]);
        $newData23 = \App\Models\PaymentMethod::create([
            'id' => 24,
            'name' => 'payfast',
            'active' => 0,
            'addon_identifier' => 'african_pg',
            'created_at' => '2024-05-18 23:36:10',
            'updated_at' => '2024-05-18 23:36:10',
        ]);
        $newData24 = \App\Models\PaymentMethod::create([
            'id' => 25,
            'name' => 'tap',
            'active' => 0,
            'addon_identifier' => NULL,
            'created_at' => '2024-07-14 06:16:47',
            'updated_at' => '2024-07-14 06:16:47',
        ]);
    }
}