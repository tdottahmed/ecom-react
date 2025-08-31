<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTranslationSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=ProductTranslation
         *
         */

        
        $newData0 = \App\Models\ProductTranslation::create([
            'id' => 1,
            'product_id' => 2,
            'name' => 'Legendary Whitetails Men\'s Huntguard Bullfrog Technical Softshell Gaiter Hoodie',
            'unit' => 'Pc',
            'description' => '<div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Navy Shirt</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Style Code</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">LRSHCSLFL01619</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Closure</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Button</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Fit</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Slim</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Fabric</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Pure Cotton</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Sleeve</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Half Sleeve</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Pattern</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Checkered</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Reversible</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">No</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Collar</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Spread</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Color</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Dark Blue</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Fabric Care</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Gentle Machine Wash</div></div><div class="row" style="flex-direction: row; margin: 0px; padding: 0px; width: 749.672px; color: rgb(33, 33, 33]; font-family: Roboto, Arial, sans-serif; font-size: 14px;"><div class="col col-3-12 _2H87wv" style="width: 187.406px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135];">Suitable For</div><div class="col col-9-12 _2vZqPX" style="width: 562.25px; padding: 0px 0px 24px; margin: 0px; display: inline-block; vertical-align: top;">Western Wear</div><div><br></div></div>',
            'lang' => 'en',
            'created_at' => '2023-12-14 13:12:23',
            'updated_at' => '2023-12-14 13:12:23',
        ]);
        $newData1 = \App\Models\ProductTranslation::create([
            'id' => 2,
            'product_id' => 3,
            'name' => 'Women\'s Christmas Sweatshirt Casual Fashion Printing Long Sleeve O-Neck Pullover Top Blouse Wool Sweater, S-3XLc',
            'unit' => 'Pc',
            'description' => '<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"<br></p>',
            'lang' => 'en',
            'created_at' => '2023-12-14 13:16:03',
            'updated_at' => '2023-12-14 13:16:03',
        ]);
        $newData2 = \App\Models\ProductTranslation::create([
            'id' => 3,
            'product_id' => 4,
            'name' => 'ESR for iPhone 15 Pro Max Case with MagSafe, Supports Magnetic Charging, Slim Liquid Silicone Case, Shock Absorbing, Screen and Camera Protection, Cloud Series, Light Tan',
            'unit' => 'Pc',
            'description' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</span><br></p>',
            'lang' => 'en',
            'created_at' => '2023-12-14 13:59:25',
            'updated_at' => '2023-12-14 13:59:25',
        ]);
        $newData3 = \App\Models\ProductTranslation::create([
            'id' => 4,
            'product_id' => 5,
            'name' => 'HUAWEI Mate 50 Pro Dual-SIM 256GB ROM + 8GB RAM (Only GSM | No CDMA] Factory Unlocked 4G/LTE Smartphone (Black] - International Version',
            'unit' => 'Pc',
            'description' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</span><br></p>',
            'lang' => 'en',
            'created_at' => '2023-12-14 14:06:29',
            'updated_at' => '2023-12-14 14:06:29',
        ]);
        $newData4 = \App\Models\ProductTranslation::create([
            'id' => 5,
            'product_id' => 6,
            'name' => 'Premium executive estate with plenty of cargo capacity',
            'unit' => 'Pc',
            'description' => '<p>Premium executive estate with plenty of cargo capacity<br></p>',
            'lang' => 'en',
            'created_at' => '2023-12-14 15:22:30',
            'updated_at' => '2023-12-14 15:22:30',
        ]);
        $newData5 = \App\Models\ProductTranslation::create([
            'id' => 6,
            'product_id' => 7,
            'name' => 'Philips Rice Cooker 0.6L',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Philips Rice Cooker 0.6L</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-14 15:56:49',
            'updated_at' => '2023-12-14 15:56:49',
        ]);
        $newData6 = \App\Models\ProductTranslation::create([
            'id' => 7,
            'product_id' => 8,
            'name' => 'Philips Mixer Grinder HL7555/00',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Philips Mixer Grinder HL7555/00</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-14 16:00:49',
            'updated_at' => '2023-12-14 16:00:49',
        ]);
        $newData7 = \App\Models\ProductTranslation::create([
            'id' => 8,
            'product_id' => 9,
            'name' => 'Philipps Airfryer XXL',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Philipps Airfryer XXL</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-14 16:02:06',
            'updated_at' => '2023-12-14 16:02:06',
        ]);
        $newData8 = \App\Models\ProductTranslation::create([
            'id' => 9,
            'product_id' => 10,
            'name' => 'Disney Men\'s Mickey and Friends Button Down Shirt',
            'unit' => 'Pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 16:06:04',
            'updated_at' => '2023-12-14 16:06:04',
        ]);
        $newData9 = \App\Models\ProductTranslation::create([
            'id' => 10,
            'product_id' => 11,
            'name' => 'The Children\'s Place Women\'s Fall Plaid Long Sleeve Dress',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-2 fs-16 fw-700 text-dark">The Children\'s Place Women\'s Fall Plaid Long Sleeve Dress</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-14 16:07:34',
            'updated_at' => '2023-12-14 16:07:34',
        ]);
        $newData10 = \App\Models\ProductTranslation::create([
            'id' => 11,
            'product_id' => 12,
            'name' => 'Berne Men\'s Heritage Thermal-Lined Full-Zip Hooded Sweatshirt',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 16:59:09',
            'updated_at' => '2023-12-14 16:59:09',
        ]);
        $newData11 = \App\Models\ProductTranslation::create([
            'id' => 12,
            'product_id' => 13,
            'name' => 'Self Design, Embellished, Embroidered Satin Blend, Net Semi Stitched Flared/A-line Gown',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 17:00:45',
            'updated_at' => '2023-12-14 17:00:45',
        ]);
        $newData12 = \App\Models\ProductTranslation::create([
            'id' => 13,
            'product_id' => 14,
            'name' => 'VredeVogel Women\'s Cotton Silk Blend Straight Kurta with Trouser Pant & Banarasi Silk Dupatta',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 17:04:11',
            'updated_at' => '2023-12-14 17:04:11',
        ]);
        $newData13 = \App\Models\ProductTranslation::create([
            'id' => 14,
            'product_id' => 15,
            'name' => 'Adidas Fitness Tights for Women',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 17:18:23',
            'updated_at' => '2023-12-14 17:18:23',
        ]);
        $newData14 = \App\Models\ProductTranslation::create([
            'id' => 15,
            'product_id' => 16,
            'name' => 'Adidas Men\'s Originals Poly Tape Shorts',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 17:22:25',
            'updated_at' => '2023-12-14 17:22:25',
        ]);
        $newData15 = \App\Models\ProductTranslation::create([
            'id' => 16,
            'product_id' => 17,
            'name' => 'AirPods Max',
            'unit' => 'pc',
            'description' => NULL,
            'lang' => 'en',
            'created_at' => '2023-12-14 17:25:12',
            'updated_at' => '2023-12-14 17:25:12',
        ]);
        $newData16 = \App\Models\ProductTranslation::create([
            'id' => 17,
            'product_id' => 18,
            'name' => 'Apple - AirPods Max',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Apple - AirPods Max</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-17 15:24:39',
            'updated_at' => '2023-12-17 15:24:39',
        ]);
        $newData17 = \App\Models\ProductTranslation::create([
            'id' => 18,
            'product_id' => 19,
            'name' => 'OtterBox Symmetry Fitted Hard Shell Case for iPhone 15 Pro Max',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">OtterBox Symmetry Fitted Hard Shell Case for iPhone 15 Pro Max</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-17 15:26:12',
            'updated_at' => '2023-12-17 15:26:12',
        ]);
        $newData18 = \App\Models\ProductTranslation::create([
            'id' => 19,
            'product_id' => 20,
            'name' => 'Men\'s Hoodies',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Men\'s Hoodies</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-17 15:58:39',
            'updated_at' => '2023-12-17 15:58:39',
        ]);
        $newData19 = \App\Models\ProductTranslation::create([
            'id' => 20,
            'product_id' => 21,
            'name' => 'Fleck Splash Round Kitchen Mat',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">Fleck Splash Round Kitchen Mat</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-17 16:14:58',
            'updated_at' => '2023-12-17 16:14:58',
        ]);
        $newData20 = \App\Models\ProductTranslation::create([
            'id' => 21,
            'product_id' => 22,
            'name' => '2 Piece Wellness Anti-Fatigue Mat Set',
            'unit' => 'Pc',
            'description' => '<h2 class="mb-4 fs-16 fw-700 text-dark">2 Piece Wellness Anti-Fatigue Mat Set</h2>',
            'lang' => 'en',
            'created_at' => '2023-12-17 16:21:19',
            'updated_at' => '2023-12-17 16:21:19',
        ]);
    }
}