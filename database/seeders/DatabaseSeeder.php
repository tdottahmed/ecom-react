<?php

namespace Database\Seeders;

use Database\Seeders\Models\CategorySeeder;
use Database\Seeders\Models\CitySeeder;
use Database\Seeders\Models\ColorSeeder;
use Database\Seeders\Models\CountrySeeder;
use Database\Seeders\Models\CurrencySeeder;
use Database\Seeders\Models\CustomAlertSeeder;
use Database\Seeders\Models\DynamicPopupSeeder;
use Database\Seeders\Models\EmailTemplateSeeder;
use Database\Seeders\Models\FlashDealProductSeeder;
use Database\Seeders\Models\FlashDealTranslationSeeder;
use Database\Seeders\Models\LanguageSeeder;
use Database\Seeders\Models\NotificationTypeSeeder;
use Database\Seeders\Models\PageSeeder;
use Database\Seeders\Models\PaymentMethodSeeder;
use Database\Seeders\Models\PermissionSeeder;
use Database\Seeders\Models\ProductCategorySeeder;
use Database\Seeders\Models\ProductSeeder;
use Database\Seeders\Models\ProductStockSeeder;
use Database\Seeders\Models\ProductTaxSeeder;
use Database\Seeders\Models\ProductTranslationSeeder;
use Database\Seeders\Models\RoleSeeder;
use Database\Seeders\Models\SellerSeeder;
use Database\Seeders\Models\ShopSeeder;
use Database\Seeders\Models\StateSeeder;
use Database\Seeders\Models\TaxSeeder;
use Database\Seeders\Models\TranslationSeeder;
use Database\Seeders\Models\UploadSeeder;
use Database\Seeders\Models\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {

        $this->call([
            CategorySeeder::class,
            ColorSeeder::class,
            CountrySeeder::class,
            CurrencySeeder::class,
            CustomAlertSeeder::class,
            DynamicPopupSeeder::class,
            EmailTemplateSeeder::class,
            FlashDealProductSeeder::class,
            FlashDealTranslationSeeder::class,
            LanguageSeeder::class,
            PageSeeder::class,
            PaymentMethodSeeder::class,
            PermissionSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            ProductStockSeeder::class,
            ProductTaxSeeder::class,
            ProductTranslationSeeder::class,
            RoleSeeder::class,
            SellerSeeder::class,
            ShopSeeder::class,
            TaxSeeder::class,
            UploadSeeder::class,
            NotificationTypeSeeder::class,
            UserSeeder::class,
        ]);
    }
}
