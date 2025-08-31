<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Permission
         *
         */

        
        $newData0 = \App\Models\Permission::create([
            'id' => 1,
            'name' => 'add_new_product',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-12 09:31:31',
            'updated_at' => '2022-06-12 09:31:31',
        ]);
        $newData1 = \App\Models\Permission::create([
            'id' => 2,
            'name' => 'show_all_products',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-12 09:32:34',
            'updated_at' => '2022-06-12 09:32:34',
        ]);
        $newData2 = \App\Models\Permission::create([
            'id' => 3,
            'name' => 'show_in_house_products',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-12 09:33:08',
            'updated_at' => '2022-06-12 09:33:08',
        ]);
        $newData3 = \App\Models\Permission::create([
            'id' => 4,
            'name' => 'show_seller_products',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-12 09:33:40',
            'updated_at' => '2022-06-12 09:33:40',
        ]);
        $newData4 = \App\Models\Permission::create([
            'id' => 5,
            'name' => 'product_edit',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 13:50:06',
            'updated_at' => '2022-06-13 13:50:06',
        ]);
        $newData5 = \App\Models\Permission::create([
            'id' => 6,
            'name' => 'product_duplicate',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 15:24:20',
            'updated_at' => '2022-06-13 15:24:20',
        ]);
        $newData6 = \App\Models\Permission::create([
            'id' => 7,
            'name' => 'product_delete',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 15:24:47',
            'updated_at' => '2022-06-13 15:24:47',
        ]);
        $newData7 = \App\Models\Permission::create([
            'id' => 8,
            'name' => 'show_digital_products',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 16:48:13',
            'updated_at' => '2022-06-13 16:48:13',
        ]);
        $newData8 = \App\Models\Permission::create([
            'id' => 9,
            'name' => 'add_digital_product',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 16:48:28',
            'updated_at' => '2022-06-13 16:48:28',
        ]);
        $newData9 = \App\Models\Permission::create([
            'id' => 10,
            'name' => 'edit_digital_product',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 16:48:40',
            'updated_at' => '2022-06-13 16:48:40',
        ]);
        $newData10 = \App\Models\Permission::create([
            'id' => 11,
            'name' => 'delete_digital_product',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 16:48:47',
            'updated_at' => '2022-06-13 16:48:47',
        ]);
        $newData11 = \App\Models\Permission::create([
            'id' => 12,
            'name' => 'download_digital_product',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 16:48:57',
            'updated_at' => '2022-06-13 16:48:57',
        ]);
        $newData12 = \App\Models\Permission::create([
            'id' => 13,
            'name' => 'product_bulk_import',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:18:52',
            'updated_at' => '2022-06-13 18:18:52',
        ]);
        $newData13 = \App\Models\Permission::create([
            'id' => 14,
            'name' => 'product_bulk_export',
            'section' => 'product',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:19:19',
            'updated_at' => '2022-06-13 18:19:19',
        ]);
        $newData14 = \App\Models\Permission::create([
            'id' => 15,
            'name' => 'view_product_categories',
            'section' => 'product_category',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:24:33',
            'updated_at' => '2022-06-13 18:24:33',
        ]);
        $newData15 = \App\Models\Permission::create([
            'id' => 16,
            'name' => 'add_product_category',
            'section' => 'product_category',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:25:56',
            'updated_at' => '2022-06-13 18:25:56',
        ]);
        $newData16 = \App\Models\Permission::create([
            'id' => 17,
            'name' => 'edit_product_category',
            'section' => 'product_category',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:26:17',
            'updated_at' => '2022-06-13 18:26:17',
        ]);
        $newData17 = \App\Models\Permission::create([
            'id' => 18,
            'name' => 'delete_product_category',
            'section' => 'product_category',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 18:26:42',
            'updated_at' => '2022-06-13 18:26:42',
        ]);
        $newData18 = \App\Models\Permission::create([
            'id' => 19,
            'name' => 'view_all_brands',
            'section' => 'brand',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:31:46',
            'updated_at' => '2022-06-14 11:31:46',
        ]);
        $newData19 = \App\Models\Permission::create([
            'id' => 20,
            'name' => 'add_brand',
            'section' => 'brand',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:32:08',
            'updated_at' => '2022-06-14 11:32:08',
        ]);
        $newData20 = \App\Models\Permission::create([
            'id' => 21,
            'name' => 'edit_brand',
            'section' => 'brand',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:32:16',
            'updated_at' => '2022-06-14 11:32:16',
        ]);
        $newData21 = \App\Models\Permission::create([
            'id' => 22,
            'name' => 'delete_brand',
            'section' => 'brand',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:32:25',
            'updated_at' => '2022-06-14 11:32:25',
        ]);
        $newData22 = \App\Models\Permission::create([
            'id' => 23,
            'name' => 'view_product_attributes',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:34:47',
            'updated_at' => '2022-06-14 11:34:47',
        ]);
        $newData23 = \App\Models\Permission::create([
            'id' => 24,
            'name' => 'add_product_attribute',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:35:20',
            'updated_at' => '2022-06-14 11:35:20',
        ]);
        $newData24 = \App\Models\Permission::create([
            'id' => 25,
            'name' => 'edit_product_attribute',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:35:26',
            'updated_at' => '2022-06-14 11:35:26',
        ]);
        $newData25 = \App\Models\Permission::create([
            'id' => 26,
            'name' => 'delete_product_attribute',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:35:33',
            'updated_at' => '2022-06-14 11:35:33',
        ]);
        $newData26 = \App\Models\Permission::create([
            'id' => 27,
            'name' => 'view_product_attribute_values',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:38:12',
            'updated_at' => '2022-06-14 11:38:12',
        ]);
        $newData27 = \App\Models\Permission::create([
            'id' => 28,
            'name' => 'add_product_attribute_values',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:38:20',
            'updated_at' => '2022-06-14 11:38:20',
        ]);
        $newData28 = \App\Models\Permission::create([
            'id' => 29,
            'name' => 'edit_product_attribute_value',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:38:50',
            'updated_at' => '2022-06-14 11:38:50',
        ]);
        $newData29 = \App\Models\Permission::create([
            'id' => 30,
            'name' => 'delete_product_attribute_value',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:39:06',
            'updated_at' => '2022-06-14 11:39:06',
        ]);
        $newData30 = \App\Models\Permission::create([
            'id' => 31,
            'name' => 'view_colors',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:44:16',
            'updated_at' => '2022-06-14 11:44:16',
        ]);
        $newData31 = \App\Models\Permission::create([
            'id' => 32,
            'name' => 'add_color',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:44:41',
            'updated_at' => '2022-06-14 11:44:41',
        ]);
        $newData32 = \App\Models\Permission::create([
            'id' => 33,
            'name' => 'edit_color',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:44:50',
            'updated_at' => '2022-06-14 11:44:50',
        ]);
        $newData33 = \App\Models\Permission::create([
            'id' => 34,
            'name' => 'delete_color',
            'section' => 'product_attribute',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:44:59',
            'updated_at' => '2022-06-14 11:44:59',
        ]);
        $newData34 = \App\Models\Permission::create([
            'id' => 35,
            'name' => 'view_product_reviews',
            'section' => 'product_review',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:55:04',
            'updated_at' => '2022-06-14 11:55:04',
        ]);
        $newData35 = \App\Models\Permission::create([
            'id' => 36,
            'name' => 'publish_product_review',
            'section' => 'product_review',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 11:57:37',
            'updated_at' => '2022-06-14 11:57:37',
        ]);
        $newData36 = \App\Models\Permission::create([
            'id' => 37,
            'name' => 'view_all_orders',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:49:04',
            'updated_at' => '2022-06-14 17:49:04',
        ]);
        $newData37 = \App\Models\Permission::create([
            'id' => 38,
            'name' => 'view_inhouse_orders',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:49:30',
            'updated_at' => '2022-06-14 17:49:30',
        ]);
        $newData38 = \App\Models\Permission::create([
            'id' => 39,
            'name' => 'view_seller_orders',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:50:06',
            'updated_at' => '2022-06-14 17:50:06',
        ]);
        $newData39 = \App\Models\Permission::create([
            'id' => 40,
            'name' => 'view_pickup_point_orders',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:51:17',
            'updated_at' => '2022-06-14 17:51:17',
        ]);
        $newData40 = \App\Models\Permission::create([
            'id' => 41,
            'name' => 'view_order_details',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:53:13',
            'updated_at' => '2022-06-14 17:53:13',
        ]);
        $newData41 = \App\Models\Permission::create([
            'id' => 42,
            'name' => 'update_order_payment_status',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:53:55',
            'updated_at' => '2022-06-14 17:53:55',
        ]);
        $newData42 = \App\Models\Permission::create([
            'id' => 43,
            'name' => 'update_order_delivery_status',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:54:02',
            'updated_at' => '2022-06-14 17:54:02',
        ]);
        $newData43 = \App\Models\Permission::create([
            'id' => 44,
            'name' => 'delete_order',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:55:02',
            'updated_at' => '2022-06-14 17:55:02',
        ]);
        $newData44 = \App\Models\Permission::create([
            'id' => 45,
            'name' => 'view_all_customers',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:59:28',
            'updated_at' => '2022-06-14 17:59:28',
        ]);
        $newData45 = \App\Models\Permission::create([
            'id' => 46,
            'name' => 'login_as_customer',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 17:59:58',
            'updated_at' => '2022-06-14 17:59:58',
        ]);
        $newData46 = \App\Models\Permission::create([
            'id' => 47,
            'name' => 'ban_customer',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:00:12',
            'updated_at' => '2022-06-14 18:00:12',
        ]);
        $newData47 = \App\Models\Permission::create([
            'id' => 48,
            'name' => 'delete_customer',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:00:45',
            'updated_at' => '2022-06-14 18:00:45',
        ]);
        $newData48 = \App\Models\Permission::create([
            'id' => 49,
            'name' => 'view_classified_products',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:02:38',
            'updated_at' => '2022-06-14 18:02:38',
        ]);
        $newData49 = \App\Models\Permission::create([
            'id' => 50,
            'name' => 'publish_classified_product',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:06:23',
            'updated_at' => '2022-06-14 18:06:23',
        ]);
        $newData50 = \App\Models\Permission::create([
            'id' => 51,
            'name' => 'delete_classified_product',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:06:39',
            'updated_at' => '2022-06-14 18:06:39',
        ]);
        $newData51 = \App\Models\Permission::create([
            'id' => 52,
            'name' => 'view_classified_packages',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:08:11',
            'updated_at' => '2022-06-14 18:08:11',
        ]);
        $newData52 = \App\Models\Permission::create([
            'id' => 53,
            'name' => 'add_classified_package',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:08:22',
            'updated_at' => '2022-06-14 18:08:22',
        ]);
        $newData53 = \App\Models\Permission::create([
            'id' => 54,
            'name' => 'edit_classified_package',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:08:35',
            'updated_at' => '2022-06-14 18:08:35',
        ]);
        $newData54 = \App\Models\Permission::create([
            'id' => 55,
            'name' => 'delete_classified_package',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2022-06-14 18:08:44',
            'updated_at' => '2022-06-14 18:08:44',
        ]);
        $newData55 = \App\Models\Permission::create([
            'id' => 56,
            'name' => 'view_all_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 12:49:56',
            'updated_at' => '2022-06-15 12:49:56',
        ]);
        $newData56 = \App\Models\Permission::create([
            'id' => 57,
            'name' => 'view_seller_profile',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 12:58:07',
            'updated_at' => '2022-06-15 12:58:07',
        ]);
        $newData57 = \App\Models\Permission::create([
            'id' => 58,
            'name' => 'login_as_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 12:58:22',
            'updated_at' => '2022-06-15 12:58:22',
        ]);
        $newData58 = \App\Models\Permission::create([
            'id' => 59,
            'name' => 'pay_to_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:21:28',
            'updated_at' => '2022-06-15 14:21:28',
        ]);
        $newData59 = \App\Models\Permission::create([
            'id' => 60,
            'name' => 'seller_payment_history',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:22:14',
            'updated_at' => '2022-06-15 14:22:14',
        ]);
        $newData60 = \App\Models\Permission::create([
            'id' => 61,
            'name' => 'edit_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:22:28',
            'updated_at' => '2022-06-15 14:22:28',
        ]);
        $newData61 = \App\Models\Permission::create([
            'id' => 62,
            'name' => 'delete_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:22:37',
            'updated_at' => '2022-06-15 14:22:37',
        ]);
        $newData62 = \App\Models\Permission::create([
            'id' => 63,
            'name' => 'ban_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:22:48',
            'updated_at' => '2022-06-15 14:22:48',
        ]);
        $newData63 = \App\Models\Permission::create([
            'id' => 64,
            'name' => 'approve_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:24:17',
            'updated_at' => '2022-06-15 14:24:17',
        ]);
        $newData64 = \App\Models\Permission::create([
            'id' => 65,
            'name' => 'view_seller_payout_requests',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:33:37',
            'updated_at' => '2022-06-15 14:33:37',
        ]);
        $newData65 = \App\Models\Permission::create([
            'id' => 66,
            'name' => 'seller_commission_configuration',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:37:18',
            'updated_at' => '2022-06-15 14:37:18',
        ]);
        $newData66 = \App\Models\Permission::create([
            'id' => 67,
            'name' => 'seller_verification_form_configuration',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2022-06-15 14:38:43',
            'updated_at' => '2022-06-15 14:38:43',
        ]);
        $newData67 = \App\Models\Permission::create([
            'id' => 68,
            'name' => 'in_house_product_sale_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:43:02',
            'updated_at' => '2022-06-18 15:43:02',
        ]);
        $newData68 = \App\Models\Permission::create([
            'id' => 69,
            'name' => 'seller_products_sale_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:43:32',
            'updated_at' => '2022-06-18 15:43:32',
        ]);
        $newData69 = \App\Models\Permission::create([
            'id' => 70,
            'name' => 'products_stock_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:43:51',
            'updated_at' => '2022-06-18 15:43:51',
        ]);
        $newData70 = \App\Models\Permission::create([
            'id' => 71,
            'name' => 'product_wishlist_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:46:18',
            'updated_at' => '2022-06-18 15:46:18',
        ]);
        $newData71 = \App\Models\Permission::create([
            'id' => 72,
            'name' => 'user_search_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:46:39',
            'updated_at' => '2022-06-18 15:46:39',
        ]);
        $newData72 = \App\Models\Permission::create([
            'id' => 73,
            'name' => 'commission_history_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:47:17',
            'updated_at' => '2022-06-18 15:47:17',
        ]);
        $newData73 = \App\Models\Permission::create([
            'id' => 74,
            'name' => 'wallet_transaction_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2022-06-18 15:48:00',
            'updated_at' => '2022-06-18 15:48:00',
        ]);
        $newData74 = \App\Models\Permission::create([
            'id' => 75,
            'name' => 'view_blogs',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:08:14',
            'updated_at' => '2022-06-19 00:08:14',
        ]);
        $newData75 = \App\Models\Permission::create([
            'id' => 76,
            'name' => 'add_blog',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:08:43',
            'updated_at' => '2022-06-19 00:08:43',
        ]);
        $newData76 = \App\Models\Permission::create([
            'id' => 77,
            'name' => 'edit_blog',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:08:56',
            'updated_at' => '2022-06-19 00:08:56',
        ]);
        $newData77 = \App\Models\Permission::create([
            'id' => 78,
            'name' => 'delete_blog',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:09:08',
            'updated_at' => '2022-06-19 00:09:08',
        ]);
        $newData78 = \App\Models\Permission::create([
            'id' => 79,
            'name' => 'publish_blog',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:11:09',
            'updated_at' => '2022-06-19 00:11:09',
        ]);
        $newData79 = \App\Models\Permission::create([
            'id' => 80,
            'name' => 'view_blog_categories',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:12:55',
            'updated_at' => '2022-06-19 00:12:55',
        ]);
        $newData80 = \App\Models\Permission::create([
            'id' => 81,
            'name' => 'add_blog_category',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:13:24',
            'updated_at' => '2022-06-19 00:13:24',
        ]);
        $newData81 = \App\Models\Permission::create([
            'id' => 82,
            'name' => 'edit_blog_category',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:13:37',
            'updated_at' => '2022-06-19 00:13:37',
        ]);
        $newData82 = \App\Models\Permission::create([
            'id' => 83,
            'name' => 'delete_blog_category',
            'section' => 'blog',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 00:14:06',
            'updated_at' => '2022-06-19 00:14:06',
        ]);
        $newData83 = \App\Models\Permission::create([
            'id' => 84,
            'name' => 'view_all_flash_deals',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:18:52',
            'updated_at' => '2022-06-19 01:18:52',
        ]);
        $newData84 = \App\Models\Permission::create([
            'id' => 85,
            'name' => 'add_flash_deal',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:19:22',
            'updated_at' => '2022-06-19 01:19:22',
        ]);
        $newData85 = \App\Models\Permission::create([
            'id' => 86,
            'name' => 'edit_flash_deal',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:19:32',
            'updated_at' => '2022-06-19 01:19:32',
        ]);
        $newData86 = \App\Models\Permission::create([
            'id' => 87,
            'name' => 'delete_flash_deal',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:19:44',
            'updated_at' => '2022-06-19 01:19:44',
        ]);
        $newData87 = \App\Models\Permission::create([
            'id' => 88,
            'name' => 'publish_flash_deal',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:20:45',
            'updated_at' => '2022-06-19 01:20:45',
        ]);
        $newData88 = \App\Models\Permission::create([
            'id' => 89,
            'name' => 'featured_flash_deal',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:23:07',
            'updated_at' => '2022-06-19 01:23:07',
        ]);
        $newData89 = \App\Models\Permission::create([
            'id' => 90,
            'name' => 'view_all_coupons',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:23:47',
            'updated_at' => '2022-06-19 01:23:47',
        ]);
        $newData90 = \App\Models\Permission::create([
            'id' => 91,
            'name' => 'add_coupon',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:24:07',
            'updated_at' => '2022-06-19 01:24:07',
        ]);
        $newData91 = \App\Models\Permission::create([
            'id' => 92,
            'name' => 'edit_coupon',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:24:24',
            'updated_at' => '2022-06-19 01:24:24',
        ]);
        $newData92 = \App\Models\Permission::create([
            'id' => 93,
            'name' => 'delete_coupon',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:24:34',
            'updated_at' => '2022-06-19 01:24:34',
        ]);
        $newData93 = \App\Models\Permission::create([
            'id' => 94,
            'name' => 'send_newsletter',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:25:53',
            'updated_at' => '2022-06-19 01:25:53',
        ]);
        $newData94 = \App\Models\Permission::create([
            'id' => 95,
            'name' => 'view_all_subscribers',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:32:13',
            'updated_at' => '2022-06-19 01:32:13',
        ]);
        $newData95 = \App\Models\Permission::create([
            'id' => 96,
            'name' => 'delete_subscriber',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 01:32:35',
            'updated_at' => '2022-06-19 01:32:35',
        ]);
        $newData96 = \App\Models\Permission::create([
            'id' => 97,
            'name' => 'view_all_support_tickets',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:31:53',
            'updated_at' => '2022-06-19 17:31:53',
        ]);
        $newData97 = \App\Models\Permission::create([
            'id' => 98,
            'name' => 'reply_to_support_tickets',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:33:13',
            'updated_at' => '2022-06-19 17:33:13',
        ]);
        $newData98 = \App\Models\Permission::create([
            'id' => 99,
            'name' => 'view_all_product_queries',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:38:45',
            'updated_at' => '2022-06-19 17:38:45',
        ]);
        $newData99 = \App\Models\Permission::create([
            'id' => 100,
            'name' => 'reply_to_product_queries',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:40:02',
            'updated_at' => '2022-06-19 17:40:02',
        ]);
        $newData100 = \App\Models\Permission::create([
            'id' => 102,
            'name' => 'header_setup',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:45:24',
            'updated_at' => '2022-06-19 17:45:24',
        ]);
        $newData101 = \App\Models\Permission::create([
            'id' => 103,
            'name' => 'footer_setup',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:45:37',
            'updated_at' => '2022-06-19 17:45:37',
        ]);
        $newData102 = \App\Models\Permission::create([
            'id' => 104,
            'name' => 'website_appearance',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:46:49',
            'updated_at' => '2022-06-19 17:46:49',
        ]);
        $newData103 = \App\Models\Permission::create([
            'id' => 105,
            'name' => 'view_all_website_pages',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:50:04',
            'updated_at' => '2022-06-19 17:50:04',
        ]);
        $newData104 = \App\Models\Permission::create([
            'id' => 106,
            'name' => 'add_website_page',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:50:38',
            'updated_at' => '2022-06-19 17:50:38',
        ]);
        $newData105 = \App\Models\Permission::create([
            'id' => 107,
            'name' => 'edit_website_page',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:50:47',
            'updated_at' => '2022-06-19 17:50:47',
        ]);
        $newData106 = \App\Models\Permission::create([
            'id' => 108,
            'name' => 'delete_website_page',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 17:52:09',
            'updated_at' => '2022-06-19 17:52:09',
        ]);
        $newData107 = \App\Models\Permission::create([
            'id' => 109,
            'name' => 'general_settings',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 18:38:36',
            'updated_at' => '2022-06-19 18:38:36',
        ]);
        $newData108 = \App\Models\Permission::create([
            'id' => 110,
            'name' => 'features_activation',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 18:39:42',
            'updated_at' => '2022-06-19 18:39:42',
        ]);
        $newData109 = \App\Models\Permission::create([
            'id' => 111,
            'name' => 'language_setup',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:13:30',
            'updated_at' => '2022-06-19 22:13:30',
        ]);
        $newData110 = \App\Models\Permission::create([
            'id' => 112,
            'name' => 'currency_setup',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:14:33',
            'updated_at' => '2022-06-19 22:14:33',
        ]);
        $newData111 = \App\Models\Permission::create([
            'id' => 113,
            'name' => 'vat_&_tax_setup',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:15:21',
            'updated_at' => '2022-06-19 22:15:21',
        ]);
        $newData112 = \App\Models\Permission::create([
            'id' => 114,
            'name' => 'pickup_point_setup',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:15:46',
            'updated_at' => '2022-06-19 22:15:46',
        ]);
        $newData113 = \App\Models\Permission::create([
            'id' => 115,
            'name' => 'smtp_settings',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:16:05',
            'updated_at' => '2022-06-19 22:16:05',
        ]);
        $newData114 = \App\Models\Permission::create([
            'id' => 116,
            'name' => 'payment_methods_configurations',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:25:27',
            'updated_at' => '2022-06-19 22:25:27',
        ]);
        $newData115 = \App\Models\Permission::create([
            'id' => 117,
            'name' => 'order_configuration',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:26:26',
            'updated_at' => '2022-06-19 22:26:26',
        ]);
        $newData116 = \App\Models\Permission::create([
            'id' => 118,
            'name' => 'file_system_&_cache_configuration',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:26:59',
            'updated_at' => '2022-06-19 22:26:59',
        ]);
        $newData117 = \App\Models\Permission::create([
            'id' => 119,
            'name' => 'social_media_logins',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:27:22',
            'updated_at' => '2022-06-19 22:27:22',
        ]);
        $newData118 = \App\Models\Permission::create([
            'id' => 121,
            'name' => 'facebook_comment',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:28:51',
            'updated_at' => '2022-06-19 22:28:51',
        ]);
        $newData119 = \App\Models\Permission::create([
            'id' => 122,
            'name' => 'analytics_tools_configuration',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:29:57',
            'updated_at' => '2022-06-19 22:29:57',
        ]);
        $newData120 = \App\Models\Permission::create([
            'id' => 123,
            'name' => 'google_recaptcha_configuration',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:30:55',
            'updated_at' => '2022-06-19 22:30:55',
        ]);
        $newData121 = \App\Models\Permission::create([
            'id' => 124,
            'name' => 'google_map_setting',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:31:28',
            'updated_at' => '2022-06-19 22:31:28',
        ]);
        $newData122 = \App\Models\Permission::create([
            'id' => 125,
            'name' => 'google_firebase_setting',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:32:00',
            'updated_at' => '2022-06-19 22:32:00',
        ]);
        $newData123 = \App\Models\Permission::create([
            'id' => 126,
            'name' => 'shipping_configuration',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:41:29',
            'updated_at' => '2022-06-19 22:41:29',
        ]);
        $newData124 = \App\Models\Permission::create([
            'id' => 127,
            'name' => 'shipping_country_setting',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:42:14',
            'updated_at' => '2022-06-19 22:42:14',
        ]);
        $newData125 = \App\Models\Permission::create([
            'id' => 128,
            'name' => 'manage_shipping_states',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:43:43',
            'updated_at' => '2022-06-19 22:43:43',
        ]);
        $newData126 = \App\Models\Permission::create([
            'id' => 129,
            'name' => 'manage_shipping_cities',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:44:17',
            'updated_at' => '2022-06-19 22:44:17',
        ]);
        $newData127 = \App\Models\Permission::create([
            'id' => 130,
            'name' => 'view_all_staffs',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:45:00',
            'updated_at' => '2022-06-19 22:45:00',
        ]);
        $newData128 = \App\Models\Permission::create([
            'id' => 131,
            'name' => 'add_staff',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:45:09',
            'updated_at' => '2022-06-19 22:45:09',
        ]);
        $newData129 = \App\Models\Permission::create([
            'id' => 132,
            'name' => 'edit_staff',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:45:21',
            'updated_at' => '2022-06-19 22:45:21',
        ]);
        $newData130 = \App\Models\Permission::create([
            'id' => 133,
            'name' => 'delete_staff',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:45:36',
            'updated_at' => '2022-06-19 22:45:36',
        ]);
        $newData131 = \App\Models\Permission::create([
            'id' => 134,
            'name' => 'view_staff_roles',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:46:27',
            'updated_at' => '2022-06-19 22:46:27',
        ]);
        $newData132 = \App\Models\Permission::create([
            'id' => 135,
            'name' => 'add_staff_role',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:53:00',
            'updated_at' => '2022-06-19 22:53:00',
        ]);
        $newData133 = \App\Models\Permission::create([
            'id' => 136,
            'name' => 'edit_staff_role',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:53:11',
            'updated_at' => '2022-06-19 22:53:11',
        ]);
        $newData134 = \App\Models\Permission::create([
            'id' => 137,
            'name' => 'delete_staff_role',
            'section' => 'staff',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:53:22',
            'updated_at' => '2022-06-19 22:53:22',
        ]);
        $newData135 = \App\Models\Permission::create([
            'id' => 138,
            'name' => 'system_update',
            'section' => 'system',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:57:15',
            'updated_at' => '2022-06-19 22:57:15',
        ]);
        $newData136 = \App\Models\Permission::create([
            'id' => 139,
            'name' => 'server_status',
            'section' => 'system',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 22:57:58',
            'updated_at' => '2022-06-19 22:57:58',
        ]);
        $newData137 = \App\Models\Permission::create([
            'id' => 140,
            'name' => 'manage_addons',
            'section' => 'system',
            'guard_name' => 'web',
            'created_at' => '2022-06-19 23:15:43',
            'updated_at' => '2022-06-19 23:15:43',
        ]);
        $newData138 = \App\Models\Permission::create([
            'id' => 141,
            'name' => 'admin_dashboard',
            'section' => 'system',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 18:26:52',
            'updated_at' => '2022-06-20 18:26:52',
        ]);
        $newData139 = \App\Models\Permission::create([
            'id' => 142,
            'name' => 'pos_manager',
            'section' => 'pos_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 19:46:20',
            'updated_at' => '2022-06-20 19:46:20',
        ]);
        $newData140 = \App\Models\Permission::create([
            'id' => 143,
            'name' => 'pos_configuration',
            'section' => 'pos_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 19:56:00',
            'updated_at' => '2022-06-20 19:56:00',
        ]);
        $newData141 = \App\Models\Permission::create([
            'id' => 144,
            'name' => 'view_all_auction_products',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:05:54',
            'updated_at' => '2022-06-20 20:05:54',
        ]);
        $newData142 = \App\Models\Permission::create([
            'id' => 145,
            'name' => 'view_inhouse_auction_products',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:09:29',
            'updated_at' => '2022-06-20 20:09:29',
        ]);
        $newData143 = \App\Models\Permission::create([
            'id' => 146,
            'name' => 'view_seller_auction_products',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:09:51',
            'updated_at' => '2022-06-20 20:09:51',
        ]);
        $newData144 = \App\Models\Permission::create([
            'id' => 147,
            'name' => 'add_auction_product',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:11:19',
            'updated_at' => '2022-06-20 20:11:19',
        ]);
        $newData145 = \App\Models\Permission::create([
            'id' => 148,
            'name' => 'edit_auction_product',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:12:57',
            'updated_at' => '2022-06-20 20:12:57',
        ]);
        $newData146 = \App\Models\Permission::create([
            'id' => 149,
            'name' => 'delete_auction_product',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:17:35',
            'updated_at' => '2022-06-20 20:17:35',
        ]);
        $newData147 = \App\Models\Permission::create([
            'id' => 150,
            'name' => 'view_auction_product_bids',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:25:29',
            'updated_at' => '2022-06-20 20:25:29',
        ]);
        $newData148 = \App\Models\Permission::create([
            'id' => 151,
            'name' => 'delete_auction_product_bids',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:33:55',
            'updated_at' => '2022-06-20 20:33:55',
        ]);
        $newData149 = \App\Models\Permission::create([
            'id' => 152,
            'name' => 'view_auction_product_orders',
            'section' => 'auction',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 20:44:11',
            'updated_at' => '2022-06-20 20:44:11',
        ]);
        $newData150 = \App\Models\Permission::create([
            'id' => 153,
            'name' => 'view_all_wholesale_products',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:06:26',
            'updated_at' => '2022-06-20 22:06:26',
        ]);
        $newData151 = \App\Models\Permission::create([
            'id' => 154,
            'name' => 'view_inhouse_wholesale_products',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:09:18',
            'updated_at' => '2022-06-20 22:09:18',
        ]);
        $newData152 = \App\Models\Permission::create([
            'id' => 155,
            'name' => 'view_sellers_wholesale_products',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:09:48',
            'updated_at' => '2022-06-20 22:09:48',
        ]);
        $newData153 = \App\Models\Permission::create([
            'id' => 156,
            'name' => 'add_wholesale_product',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:56:35',
            'updated_at' => '2022-06-20 22:56:35',
        ]);
        $newData154 = \App\Models\Permission::create([
            'id' => 157,
            'name' => 'edit_wholesale_product',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:56:55',
            'updated_at' => '2022-06-20 22:56:55',
        ]);
        $newData155 = \App\Models\Permission::create([
            'id' => 158,
            'name' => 'delete_wholesale_product',
            'section' => 'wholesale',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 22:57:07',
            'updated_at' => '2022-06-20 22:57:07',
        ]);
        $newData156 = \App\Models\Permission::create([
            'id' => 159,
            'name' => 'view_all_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 23:41:57',
            'updated_at' => '2022-06-20 23:41:57',
        ]);
        $newData157 = \App\Models\Permission::create([
            'id' => 160,
            'name' => 'add_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 23:43:13',
            'updated_at' => '2022-06-20 23:43:13',
        ]);
        $newData158 = \App\Models\Permission::create([
            'id' => 161,
            'name' => 'edit_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-20 23:43:32',
            'updated_at' => '2022-06-20 23:43:32',
        ]);
        $newData159 = \App\Models\Permission::create([
            'id' => 162,
            'name' => 'ban_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 18:55:57',
            'updated_at' => '2022-06-21 18:55:57',
        ]);
        $newData160 = \App\Models\Permission::create([
            'id' => 163,
            'name' => 'collect_from_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 18:58:23',
            'updated_at' => '2022-06-21 18:58:23',
        ]);
        $newData161 = \App\Models\Permission::create([
            'id' => 164,
            'name' => 'pay_to_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 18:58:35',
            'updated_at' => '2022-06-21 18:58:35',
        ]);
        $newData162 = \App\Models\Permission::create([
            'id' => 165,
            'name' => 'delivery_boy_payment_history',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 19:38:43',
            'updated_at' => '2022-06-21 19:38:43',
        ]);
        $newData163 = \App\Models\Permission::create([
            'id' => 166,
            'name' => 'collected_histories_from_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 19:40:04',
            'updated_at' => '2022-06-21 19:40:04',
        ]);
        $newData164 = \App\Models\Permission::create([
            'id' => 167,
            'name' => 'order_cancle_request_by_delivery_boy',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:06:37',
            'updated_at' => '2022-06-21 20:06:37',
        ]);
        $newData165 = \App\Models\Permission::create([
            'id' => 168,
            'name' => 'delivery_boy_configuration',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:07:07',
            'updated_at' => '2022-06-21 20:07:07',
        ]);
        $newData166 = \App\Models\Permission::create([
            'id' => 169,
            'name' => 'view_refund_requests',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:21:11',
            'updated_at' => '2022-06-21 20:21:11',
        ]);
        $newData167 = \App\Models\Permission::create([
            'id' => 170,
            'name' => 'accept_refund_request',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:21:55',
            'updated_at' => '2022-06-21 20:21:55',
        ]);
        $newData168 = \App\Models\Permission::create([
            'id' => 171,
            'name' => 'reject_refund_request',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:23:20',
            'updated_at' => '2022-06-21 20:23:20',
        ]);
        $newData169 = \App\Models\Permission::create([
            'id' => 172,
            'name' => 'view_approved_refund_requests',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:24:09',
            'updated_at' => '2022-06-21 20:24:09',
        ]);
        $newData170 = \App\Models\Permission::create([
            'id' => 173,
            'name' => 'view_rejected_refund_requests',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:33:40',
            'updated_at' => '2022-06-21 20:33:40',
        ]);
        $newData171 = \App\Models\Permission::create([
            'id' => 174,
            'name' => 'refund_request_configuration',
            'section' => 'refund_request',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 20:34:21',
            'updated_at' => '2022-06-21 20:34:21',
        ]);
        $newData172 = \App\Models\Permission::create([
            'id' => 175,
            'name' => 'affiliate_registration_form_config',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:52:18',
            'updated_at' => '2022-06-21 22:52:18',
        ]);
        $newData173 = \App\Models\Permission::create([
            'id' => 176,
            'name' => 'affiliate_configurations',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:52:35',
            'updated_at' => '2022-06-21 22:52:35',
        ]);
        $newData174 = \App\Models\Permission::create([
            'id' => 177,
            'name' => 'view_affiliate_users',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:53:19',
            'updated_at' => '2022-06-21 22:53:19',
        ]);
        $newData175 = \App\Models\Permission::create([
            'id' => 178,
            'name' => 'pay_to_affiliate_user',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:54:49',
            'updated_at' => '2022-06-21 22:54:49',
        ]);
        $newData176 = \App\Models\Permission::create([
            'id' => 179,
            'name' => 'affiliate_users_payment_history',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:55:51',
            'updated_at' => '2022-06-21 22:55:51',
        ]);
        $newData177 = \App\Models\Permission::create([
            'id' => 180,
            'name' => 'view_all_referral_users',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:56:46',
            'updated_at' => '2022-06-21 22:56:46',
        ]);
        $newData178 = \App\Models\Permission::create([
            'id' => 181,
            'name' => 'view_affiliate_withdraw_requests',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:58:01',
            'updated_at' => '2022-06-21 22:58:01',
        ]);
        $newData179 = \App\Models\Permission::create([
            'id' => 182,
            'name' => 'accept_affiliate_withdraw_requests',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 22:59:38',
            'updated_at' => '2022-06-21 22:59:38',
        ]);
        $newData180 = \App\Models\Permission::create([
            'id' => 183,
            'name' => 'reject_affiliate_withdraw_request',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:00:04',
            'updated_at' => '2022-06-21 23:00:04',
        ]);
        $newData181 = \App\Models\Permission::create([
            'id' => 184,
            'name' => 'view_affiliate_logs',
            'section' => 'affiliate_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:00:51',
            'updated_at' => '2022-06-21 23:00:51',
        ]);
        $newData182 = \App\Models\Permission::create([
            'id' => 185,
            'name' => 'view_all_manual_payment_methods',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:02:50',
            'updated_at' => '2022-06-21 23:02:50',
        ]);
        $newData183 = \App\Models\Permission::create([
            'id' => 186,
            'name' => 'add_manual_payment_method',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:03:25',
            'updated_at' => '2022-06-21 23:03:25',
        ]);
        $newData184 = \App\Models\Permission::create([
            'id' => 187,
            'name' => 'edit_manual_payment_method',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:03:56',
            'updated_at' => '2022-06-21 23:03:56',
        ]);
        $newData185 = \App\Models\Permission::create([
            'id' => 188,
            'name' => 'delete_manual_payment_method',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:04:10',
            'updated_at' => '2022-06-21 23:04:10',
        ]);
        $newData186 = \App\Models\Permission::create([
            'id' => 189,
            'name' => 'view_all_offline_wallet_recharges',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:09:09',
            'updated_at' => '2022-06-21 23:09:09',
        ]);
        $newData187 = \App\Models\Permission::create([
            'id' => 190,
            'name' => 'approve_offline_wallet_recharge',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:11:29',
            'updated_at' => '2022-06-21 23:11:29',
        ]);
        $newData188 = \App\Models\Permission::create([
            'id' => 191,
            'name' => 'view_all_offline_customer_package_payments',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:12:49',
            'updated_at' => '2022-06-21 23:12:49',
        ]);
        $newData189 = \App\Models\Permission::create([
            'id' => 192,
            'name' => 'approve_offline_customer_package_payment',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:13:24',
            'updated_at' => '2022-06-21 23:13:24',
        ]);
        $newData190 = \App\Models\Permission::create([
            'id' => 193,
            'name' => 'view_all_offline_seller_package_payments',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:14:02',
            'updated_at' => '2022-06-21 23:14:02',
        ]);
        $newData191 = \App\Models\Permission::create([
            'id' => 194,
            'name' => 'approve_offline_seller_package_payment',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:14:29',
            'updated_at' => '2022-06-21 23:14:29',
        ]);
        $newData192 = \App\Models\Permission::create([
            'id' => 195,
            'name' => 'asian_payment_gateway_configuration',
            'section' => 'paytm',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:15:56',
            'updated_at' => '2022-06-21 23:15:56',
        ]);
        $newData193 = \App\Models\Permission::create([
            'id' => 196,
            'name' => 'club_point_configurations',
            'section' => 'club_point',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:16:57',
            'updated_at' => '2022-06-21 23:16:57',
        ]);
        $newData194 = \App\Models\Permission::create([
            'id' => 197,
            'name' => 'set_club_points',
            'section' => 'club_point',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:17:21',
            'updated_at' => '2022-06-21 23:17:21',
        ]);
        $newData195 = \App\Models\Permission::create([
            'id' => 198,
            'name' => 'view_users_club_points',
            'section' => 'club_point',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 23:18:14',
            'updated_at' => '2022-06-21 23:18:14',
        ]);
        $newData196 = \App\Models\Permission::create([
            'id' => 199,
            'name' => 'otp_configurations',
            'section' => 'otp_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:07:28',
            'updated_at' => '2022-06-22 00:07:28',
        ]);
        $newData197 = \App\Models\Permission::create([
            'id' => 200,
            'name' => 'sms_templates',
            'section' => 'otp_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:08:13',
            'updated_at' => '2022-06-22 00:08:13',
        ]);
        $newData198 = \App\Models\Permission::create([
            'id' => 202,
            'name' => 'african_pg_configuration',
            'section' => 'african_pg',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:13:41',
            'updated_at' => '2022-06-22 00:13:41',
        ]);
        $newData199 = \App\Models\Permission::create([
            'id' => 203,
            'name' => 'african_pg_credentials_configuration',
            'section' => 'african_pg',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:16:12',
            'updated_at' => '2022-06-22 00:16:12',
        ]);
        $newData200 = \App\Models\Permission::create([
            'id' => 204,
            'name' => 'view_all_seller_packages',
            'section' => 'seller_subscription',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:17:45',
            'updated_at' => '2022-06-22 00:17:45',
        ]);
        $newData201 = \App\Models\Permission::create([
            'id' => 205,
            'name' => 'add_seller_package',
            'section' => 'seller_subscription',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:18:14',
            'updated_at' => '2022-06-22 00:18:14',
        ]);
        $newData202 = \App\Models\Permission::create([
            'id' => 206,
            'name' => 'edit_seller_package',
            'section' => 'seller_subscription',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:18:24',
            'updated_at' => '2022-06-22 00:18:24',
        ]);
        $newData203 = \App\Models\Permission::create([
            'id' => 207,
            'name' => 'delete_seller_package',
            'section' => 'seller_subscription',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:18:36',
            'updated_at' => '2022-06-22 00:18:36',
        ]);
        $newData204 = \App\Models\Permission::create([
            'id' => 208,
            'name' => 'send_bulk_sms',
            'section' => 'otp_system',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:19:06',
            'updated_at' => '2022-06-22 00:19:06',
        ]);
        $newData205 = \App\Models\Permission::create([
            'id' => 209,
            'name' => 'assign_delivery_boy_for_orders',
            'section' => 'delivery_boy',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData206 = \App\Models\Permission::create([
            'id' => 210,
            'name' => 'manage_zones',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData207 = \App\Models\Permission::create([
            'id' => 211,
            'name' => 'manage_carriers',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData208 = \App\Models\Permission::create([
            'id' => 212,
            'name' => 'view_all_product_conversations',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData209 = \App\Models\Permission::create([
            'id' => 213,
            'name' => 'reply_to_product_conversations',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData210 = \App\Models\Permission::create([
            'id' => 214,
            'name' => 'delete_product_conversations',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2022-06-22 00:20:16',
            'updated_at' => '2022-06-22 00:20:16',
        ]);
        $newData211 = \App\Models\Permission::create([
            'id' => 215,
            'name' => 'select_homepage',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2023-11-19 09:45:29',
            'updated_at' => '2023-11-19 09:45:29',
        ]);
        $newData212 = \App\Models\Permission::create([
            'id' => 216,
            'name' => 'view_size_charts',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData213 = \App\Models\Permission::create([
            'id' => 217,
            'name' => 'add_size_charts',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData214 = \App\Models\Permission::create([
            'id' => 218,
            'name' => 'edit_size_charts',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData215 = \App\Models\Permission::create([
            'id' => 219,
            'name' => 'delete_size_charts',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData216 = \App\Models\Permission::create([
            'id' => 220,
            'name' => 'view_measurement_points',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData217 = \App\Models\Permission::create([
            'id' => 221,
            'name' => 'add_measurement_points',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData218 = \App\Models\Permission::create([
            'id' => 222,
            'name' => 'edit_measurement_points',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData219 = \App\Models\Permission::create([
            'id' => 223,
            'name' => 'delete_measurement_points',
            'section' => 'size_guide',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData220 = \App\Models\Permission::create([
            'id' => 224,
            'name' => 'authentication_layout_settings',
            'section' => 'website_setup',
            'guard_name' => 'web',
            'created_at' => '2023-12-11 09:55:33',
            'updated_at' => '2023-12-11 09:55:33',
        ]);
        $newData221 = \App\Models\Permission::create([
            'id' => 225,
            'name' => 'set_category_wise_discount',
            'section' => 'product_category',
            'guard_name' => 'web',
            'created_at' => '2024-03-19 06:12:16',
            'updated_at' => '2024-03-19 06:12:16',
        ]);
        $newData222 = \App\Models\Permission::create([
            'id' => 226,
            'name' => 'view_all_dynamic_popups',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData223 = \App\Models\Permission::create([
            'id' => 227,
            'name' => 'add_dynamic_popups',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData224 = \App\Models\Permission::create([
            'id' => 228,
            'name' => 'edit_dynamic_popups',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData225 = \App\Models\Permission::create([
            'id' => 229,
            'name' => 'delete_dynamic_popups',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData226 = \App\Models\Permission::create([
            'id' => 230,
            'name' => 'publish_dynamic_popups',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData227 = \App\Models\Permission::create([
            'id' => 231,
            'name' => 'brand_bulk_upload',
            'section' => 'brand',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData228 = \App\Models\Permission::create([
            'id' => 232,
            'name' => 'export_order',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2024-04-02 06:59:06',
            'updated_at' => '2024-04-02 06:59:06',
        ]);
        $newData229 = \App\Models\Permission::create([
            'id' => 233,
            'name' => 'view_all_custom_alerts',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-03 03:30:20',
            'updated_at' => '2024-04-03 03:30:20',
        ]);
        $newData230 = \App\Models\Permission::create([
            'id' => 234,
            'name' => 'add_custom_alerts',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-03 03:30:20',
            'updated_at' => '2024-04-03 03:30:20',
        ]);
        $newData231 = \App\Models\Permission::create([
            'id' => 235,
            'name' => 'edit_custom_alerts',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-03 03:30:20',
            'updated_at' => '2024-04-03 03:30:20',
        ]);
        $newData232 = \App\Models\Permission::create([
            'id' => 236,
            'name' => 'delete_custom_alerts',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-03 03:30:20',
            'updated_at' => '2024-04-03 03:30:20',
        ]);
        $newData233 = \App\Models\Permission::create([
            'id' => 237,
            'name' => 'publish_custom_alerts',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-04-03 03:30:20',
            'updated_at' => '2024-04-03 03:30:20',
        ]);
        $newData234 = \App\Models\Permission::create([
            'id' => 238,
            'name' => 'earning_report',
            'section' => 'report',
            'guard_name' => 'web',
            'created_at' => '2024-05-06 11:42:41',
            'updated_at' => '2024-05-06 11:42:41',
        ]);
        $newData235 = \App\Models\Permission::create([
            'id' => 239,
            'name' => 'notification_settings',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData236 = \App\Models\Permission::create([
            'id' => 240,
            'name' => 'view_all_notification_types',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData237 = \App\Models\Permission::create([
            'id' => 241,
            'name' => 'add_notification_types',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData238 = \App\Models\Permission::create([
            'id' => 242,
            'name' => 'edit_notification_types',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData239 = \App\Models\Permission::create([
            'id' => 243,
            'name' => 'delete_notification_types',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData240 = \App\Models\Permission::create([
            'id' => 244,
            'name' => 'notification_types_status_update',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData241 = \App\Models\Permission::create([
            'id' => 245,
            'name' => 'send_custom_notification',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData242 = \App\Models\Permission::create([
            'id' => 246,
            'name' => 'view_custom_notification_history',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData243 = \App\Models\Permission::create([
            'id' => 247,
            'name' => 'delete_custom_notification_history',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-06-11 07:25:53',
            'updated_at' => '2024-06-11 07:25:53',
        ]);
        $newData244 = \App\Models\Permission::create([
            'id' => 248,
            'name' => 'view_all_offline_payment_orders',
            'section' => 'offline_payment',
            'guard_name' => 'web',
            'created_at' => '2024-08-22 05:45:04',
            'updated_at' => '2024-08-22 05:45:04',
        ]);
        $newData245 = \App\Models\Permission::create([
            'id' => 249,
            'name' => 'add_customer',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2024-08-22 05:45:04',
            'updated_at' => '2024-08-22 05:45:04',
        ]);
        $newData246 = \App\Models\Permission::create([
            'id' => 250,
            'name' => 'add_seller',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2024-08-22 05:45:04',
            'updated_at' => '2024-08-22 05:45:04',
        ]);
        $newData247 = \App\Models\Permission::create([
            'id' => 251,
            'name' => 'view_all_unpaid_orders',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2024-08-22 05:45:04',
            'updated_at' => '2024-08-22 05:45:04',
        ]);
        $newData248 = \App\Models\Permission::create([
            'id' => 252,
            'name' => 'unpaid_order_payment_notification_send',
            'section' => 'sale',
            'guard_name' => 'web',
            'created_at' => '2024-08-22 05:45:04',
            'updated_at' => '2024-08-22 05:45:04',
        ]);
        $newData249 = \App\Models\Permission::create([
            'id' => 253,
            'name' => 'view_all_contacts',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2024-08-25 07:22:32',
            'updated_at' => '2024-08-25 07:22:32',
        ]);
        $newData250 = \App\Models\Permission::create([
            'id' => 254,
            'name' => 'reply_to_contact',
            'section' => 'support',
            'guard_name' => 'web',
            'created_at' => '2024-08-25 07:22:32',
            'updated_at' => '2024-08-25 07:22:32',
        ]);
        $newData251 = \App\Models\Permission::create([
            'id' => 255,
            'name' => 'manage_email_templates',
            'section' => 'marketing',
            'guard_name' => 'web',
            'created_at' => '2024-09-09 17:32:52',
            'updated_at' => '2024-09-09 17:32:52',
        ]);
        $newData252 = \App\Models\Permission::create([
            'id' => 256,
            'name' => 'add_custom_review',
            'section' => 'product_review',
            'guard_name' => 'web',
            'created_at' => '2024-09-29 12:16:42',
            'updated_at' => '2024-09-29 12:16:42',
        ]);
        $newData253 = \App\Models\Permission::create([
            'id' => 257,
            'name' => 'edit_custom_review',
            'section' => 'product_review',
            'guard_name' => 'web',
            'created_at' => '2024-09-29 12:16:42',
            'updated_at' => '2024-09-29 12:16:42',
        ]);
        $newData254 = \App\Models\Permission::create([
            'id' => 258,
            'name' => 'view_all_seller_rating_and_followers',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2024-09-29 12:16:42',
            'updated_at' => '2024-09-29 12:16:42',
        ]);
        $newData255 = \App\Models\Permission::create([
            'id' => 259,
            'name' => 'edit_seller_custom_followers',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2024-09-29 12:16:42',
            'updated_at' => '2024-09-29 12:16:42',
        ]);
        $newData256 = \App\Models\Permission::create([
            'id' => 260,
            'name' => 'view_product_warranties',
            'section' => 'product_warranty',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData257 = \App\Models\Permission::create([
            'id' => 261,
            'name' => 'add_product_warranty',
            'section' => 'product_warranty',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData258 = \App\Models\Permission::create([
            'id' => 262,
            'name' => 'edit_product_warranty',
            'section' => 'product_warranty',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData259 = \App\Models\Permission::create([
            'id' => 263,
            'name' => 'delete_product_warranty',
            'section' => 'product_warranty',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData260 = \App\Models\Permission::create([
            'id' => 264,
            'name' => 'view_notes',
            'section' => 'note',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData261 = \App\Models\Permission::create([
            'id' => 265,
            'name' => 'add_note',
            'section' => 'note',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData262 = \App\Models\Permission::create([
            'id' => 266,
            'name' => 'edit_note',
            'section' => 'note',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData263 = \App\Models\Permission::create([
            'id' => 267,
            'name' => 'delete_note',
            'section' => 'note',
            'guard_name' => 'web',
            'created_at' => '2024-10-20 07:45:18',
            'updated_at' => '2024-10-20 07:45:18',
        ]);
        $newData264 = \App\Models\Permission::create([
            'id' => 268,
            'name' => 'view_notifications',
            'section' => 'notification',
            'guard_name' => 'web',
            'created_at' => '2024-12-19 10:09:49',
            'updated_at' => '2024-12-19 10:09:49',
        ]);
        $newData265 = \App\Models\Permission::create([
            'id' => 269,
            'name' => 'mark_customer_suspected',
            'section' => 'customer',
            'guard_name' => 'web',
            'created_at' => '2024-12-19 10:09:49',
            'updated_at' => '2024-12-19 10:09:49',
        ]);
        $newData266 = \App\Models\Permission::create([
            'id' => 270,
            'name' => 'whatsapp_chat',
            'section' => 'setup_configurations',
            'guard_name' => 'web',
            'created_at' => '2025-04-24 06:18:32',
            'updated_at' => '2025-04-24 06:18:32',
        ]);
        $newData267 = \App\Models\Permission::create([
            'id' => 271,
            'name' => 'set_category_wise_commission',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2025-04-28 15:38:50',
            'updated_at' => '2025-04-28 15:38:50',
        ]);
        $newData268 = \App\Models\Permission::create([
            'id' => 272,
            'name' => 'set_seller_based_commission',
            'section' => 'seller',
            'guard_name' => 'web',
            'created_at' => '2025-04-28 15:38:50',
            'updated_at' => '2025-04-28 15:38:50',
        ]);
        $newData269 = \App\Models\Permission::create([
            'id' => 273,
            'name' => 'cybersource_pg_configuration',
            'section' => 'cybersource_pg',
            'guard_name' => 'web',
            'created_at' => '2022-06-21 18:13:41',
            'updated_at' => '2022-06-12 09:31:31',
        ]);
    }
}