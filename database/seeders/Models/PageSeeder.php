<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Page
         *
         */

        
        $newData0 = \App\Models\Page::create([
            'id' => 1,
            'type' => 'home_page',
            'title' => 'Home Page',
            'slug' => 'home',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:13:20',
            'updated_at' => '2020-11-04 10:13:20',
        ]);
        $newData1 = \App\Models\Page::create([
            'id' => 2,
            'type' => 'seller_policy_page',
            'title' => 'Seller Policy Pages',
            'slug' => 'seller-policy',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:14:41',
            'updated_at' => '2020-11-04 12:19:30',
        ]);
        $newData2 = \App\Models\Page::create([
            'id' => 3,
            'type' => 'return_policy_page',
            'title' => 'Return Policy Page',
            'slug' => 'return-policy',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:14:41',
            'updated_at' => '2020-11-04 10:14:41',
        ]);
        $newData3 = \App\Models\Page::create([
            'id' => 4,
            'type' => 'support_policy_page',
            'title' => 'Support Policy Page',
            'slug' => 'support-policy',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:14:59',
            'updated_at' => '2020-11-04 10:14:59',
        ]);
        $newData4 = \App\Models\Page::create([
            'id' => 5,
            'type' => 'terms_conditions_page',
            'title' => 'Term Conditions Page',
            'slug' => 'terms',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:15:29',
            'updated_at' => '2020-11-04 10:15:29',
        ]);
        $newData5 = \App\Models\Page::create([
            'id' => 6,
            'type' => 'privacy_policy_page',
            'title' => 'Privacy Policy Page',
            'slug' => 'privacy-policy',
            'content' => NULL,
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2020-11-04 10:15:55',
            'updated_at' => '2020-11-04 10:15:55',
        ]);
        $newData6 = \App\Models\Page::create([
            'id' => 7,
            'type' => 'contact_us_page',
            'title' => 'Contact us',
            'slug' => 'contact-us',
            'content' => '{"description":null,"address":null,"phone":null,"email":null}',
            'meta_title' => NULL,
            'meta_description' => NULL,
            'keywords' => NULL,
            'meta_image' => NULL,
            'created_at' => '2024-08-25 07:22:32',
            'updated_at' => '2024-08-25 07:22:32',
        ]);
    }
}