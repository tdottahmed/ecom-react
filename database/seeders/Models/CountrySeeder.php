<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Country
         *
         */

        
        $newData0 = \App\Models\Country::create([
            'id' => 1,
            'code' => 'AF',
            'name' => 'Afghanistan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => '2021-10-11 00:34:13',
            'deleted_at' => NULL,
        ]);
        $newData1 = \App\Models\Country::create([
            'id' => 2,
            'code' => 'AL',
            'name' => 'Albania',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData2 = \App\Models\Country::create([
            'id' => 3,
            'code' => 'DZ',
            'name' => 'Algeria',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData3 = \App\Models\Country::create([
            'id' => 4,
            'code' => 'AS',
            'name' => 'American Samoa',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData4 = \App\Models\Country::create([
            'id' => 5,
            'code' => 'AD',
            'name' => 'Andorra',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData5 = \App\Models\Country::create([
            'id' => 6,
            'code' => 'AO',
            'name' => 'Angola',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData6 = \App\Models\Country::create([
            'id' => 7,
            'code' => 'AI',
            'name' => 'Anguilla',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData7 = \App\Models\Country::create([
            'id' => 8,
            'code' => 'AQ',
            'name' => 'Antarctica',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData8 = \App\Models\Country::create([
            'id' => 9,
            'code' => 'AG',
            'name' => 'Antigua And Barbuda',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData9 = \App\Models\Country::create([
            'id' => 10,
            'code' => 'AR',
            'name' => 'Argentina',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData10 = \App\Models\Country::create([
            'id' => 11,
            'code' => 'AM',
            'name' => 'Armenia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData11 = \App\Models\Country::create([
            'id' => 12,
            'code' => 'AW',
            'name' => 'Aruba',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData12 = \App\Models\Country::create([
            'id' => 13,
            'code' => 'AU',
            'name' => 'Australia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData13 = \App\Models\Country::create([
            'id' => 14,
            'code' => 'AT',
            'name' => 'Austria',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData14 = \App\Models\Country::create([
            'id' => 15,
            'code' => 'AZ',
            'name' => 'Azerbaijan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData15 = \App\Models\Country::create([
            'id' => 16,
            'code' => 'BS',
            'name' => 'Bahamas The',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData16 = \App\Models\Country::create([
            'id' => 17,
            'code' => 'BH',
            'name' => 'Bahrain',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData17 = \App\Models\Country::create([
            'id' => 18,
            'code' => 'BD',
            'name' => 'Bangladesh',
            'zone_id' => 0,
            'status' => 1,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => '2025-08-25 06:17:08',
            'deleted_at' => NULL,
        ]);
        $newData18 = \App\Models\Country::create([
            'id' => 19,
            'code' => 'BB',
            'name' => 'Barbados',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData19 = \App\Models\Country::create([
            'id' => 20,
            'code' => 'BY',
            'name' => 'Belarus',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData20 = \App\Models\Country::create([
            'id' => 21,
            'code' => 'BE',
            'name' => 'Belgium',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData21 = \App\Models\Country::create([
            'id' => 22,
            'code' => 'BZ',
            'name' => 'Belize',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData22 = \App\Models\Country::create([
            'id' => 23,
            'code' => 'BJ',
            'name' => 'Benin',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData23 = \App\Models\Country::create([
            'id' => 24,
            'code' => 'BM',
            'name' => 'Bermuda',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData24 = \App\Models\Country::create([
            'id' => 25,
            'code' => 'BT',
            'name' => 'Bhutan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData25 = \App\Models\Country::create([
            'id' => 26,
            'code' => 'BO',
            'name' => 'Bolivia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData26 = \App\Models\Country::create([
            'id' => 27,
            'code' => 'BA',
            'name' => 'Bosnia and Herzegovina',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData27 = \App\Models\Country::create([
            'id' => 28,
            'code' => 'BW',
            'name' => 'Botswana',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData28 = \App\Models\Country::create([
            'id' => 29,
            'code' => 'BV',
            'name' => 'Bouvet Island',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData29 = \App\Models\Country::create([
            'id' => 30,
            'code' => 'BR',
            'name' => 'Brazil',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData30 = \App\Models\Country::create([
            'id' => 31,
            'code' => 'IO',
            'name' => 'British Indian Ocean Territory',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData31 = \App\Models\Country::create([
            'id' => 32,
            'code' => 'BN',
            'name' => 'Brunei',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData32 = \App\Models\Country::create([
            'id' => 33,
            'code' => 'BG',
            'name' => 'Bulgaria',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData33 = \App\Models\Country::create([
            'id' => 34,
            'code' => 'BF',
            'name' => 'Burkina Faso',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData34 = \App\Models\Country::create([
            'id' => 35,
            'code' => 'BI',
            'name' => 'Burundi',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData35 = \App\Models\Country::create([
            'id' => 36,
            'code' => 'KH',
            'name' => 'Cambodia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData36 = \App\Models\Country::create([
            'id' => 37,
            'code' => 'CM',
            'name' => 'Cameroon',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData37 = \App\Models\Country::create([
            'id' => 38,
            'code' => 'CA',
            'name' => 'Canada',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData38 = \App\Models\Country::create([
            'id' => 39,
            'code' => 'CV',
            'name' => 'Cape Verde',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData39 = \App\Models\Country::create([
            'id' => 40,
            'code' => 'KY',
            'name' => 'Cayman Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData40 = \App\Models\Country::create([
            'id' => 41,
            'code' => 'CF',
            'name' => 'Central African Republic',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData41 = \App\Models\Country::create([
            'id' => 42,
            'code' => 'TD',
            'name' => 'Chad',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData42 = \App\Models\Country::create([
            'id' => 43,
            'code' => 'CL',
            'name' => 'Chile',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData43 = \App\Models\Country::create([
            'id' => 44,
            'code' => 'CN',
            'name' => 'China',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData44 = \App\Models\Country::create([
            'id' => 45,
            'code' => 'CX',
            'name' => 'Christmas Island',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData45 = \App\Models\Country::create([
            'id' => 46,
            'code' => 'CC',
            'name' => 'Cocos (Keeling] Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData46 = \App\Models\Country::create([
            'id' => 47,
            'code' => 'CO',
            'name' => 'Colombia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData47 = \App\Models\Country::create([
            'id' => 48,
            'code' => 'KM',
            'name' => 'Comoros',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData48 = \App\Models\Country::create([
            'id' => 49,
            'code' => 'CG',
            'name' => 'Republic Of The Congo',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData49 = \App\Models\Country::create([
            'id' => 50,
            'code' => 'CD',
            'name' => 'Democratic Republic Of The Congo',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData50 = \App\Models\Country::create([
            'id' => 51,
            'code' => 'CK',
            'name' => 'Cook Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData51 = \App\Models\Country::create([
            'id' => 52,
            'code' => 'CR',
            'name' => 'Costa Rica',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData52 = \App\Models\Country::create([
            'id' => 53,
            'code' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData53 = \App\Models\Country::create([
            'id' => 54,
            'code' => 'HR',
            'name' => 'Croatia (Hrvatska]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData54 = \App\Models\Country::create([
            'id' => 55,
            'code' => 'CU',
            'name' => 'Cuba',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData55 = \App\Models\Country::create([
            'id' => 56,
            'code' => 'CY',
            'name' => 'Cyprus',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData56 = \App\Models\Country::create([
            'id' => 57,
            'code' => 'CZ',
            'name' => 'Czech Republic',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData57 = \App\Models\Country::create([
            'id' => 58,
            'code' => 'DK',
            'name' => 'Denmark',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData58 = \App\Models\Country::create([
            'id' => 59,
            'code' => 'DJ',
            'name' => 'Djibouti',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData59 = \App\Models\Country::create([
            'id' => 60,
            'code' => 'DM',
            'name' => 'Dominica',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData60 = \App\Models\Country::create([
            'id' => 61,
            'code' => 'DO',
            'name' => 'Dominican Republic',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData61 = \App\Models\Country::create([
            'id' => 62,
            'code' => 'TP',
            'name' => 'East Timor',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData62 = \App\Models\Country::create([
            'id' => 63,
            'code' => 'EC',
            'name' => 'Ecuador',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData63 = \App\Models\Country::create([
            'id' => 64,
            'code' => 'EG',
            'name' => 'Egypt',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData64 = \App\Models\Country::create([
            'id' => 65,
            'code' => 'SV',
            'name' => 'El Salvador',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData65 = \App\Models\Country::create([
            'id' => 66,
            'code' => 'GQ',
            'name' => 'Equatorial Guinea',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData66 = \App\Models\Country::create([
            'id' => 67,
            'code' => 'ER',
            'name' => 'Eritrea',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData67 = \App\Models\Country::create([
            'id' => 68,
            'code' => 'EE',
            'name' => 'Estonia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData68 = \App\Models\Country::create([
            'id' => 69,
            'code' => 'ET',
            'name' => 'Ethiopia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData69 = \App\Models\Country::create([
            'id' => 70,
            'code' => 'XA',
            'name' => 'External Territories of Australia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData70 = \App\Models\Country::create([
            'id' => 71,
            'code' => 'FK',
            'name' => 'Falkland Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData71 = \App\Models\Country::create([
            'id' => 72,
            'code' => 'FO',
            'name' => 'Faroe Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData72 = \App\Models\Country::create([
            'id' => 73,
            'code' => 'FJ',
            'name' => 'Fiji Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData73 = \App\Models\Country::create([
            'id' => 74,
            'code' => 'FI',
            'name' => 'Finland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData74 = \App\Models\Country::create([
            'id' => 75,
            'code' => 'FR',
            'name' => 'France',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData75 = \App\Models\Country::create([
            'id' => 76,
            'code' => 'GF',
            'name' => 'French Guiana',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData76 = \App\Models\Country::create([
            'id' => 77,
            'code' => 'PF',
            'name' => 'French Polynesia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData77 = \App\Models\Country::create([
            'id' => 78,
            'code' => 'TF',
            'name' => 'French Southern Territories',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData78 = \App\Models\Country::create([
            'id' => 79,
            'code' => 'GA',
            'name' => 'Gabon',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData79 = \App\Models\Country::create([
            'id' => 80,
            'code' => 'GM',
            'name' => 'Gambia The',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData80 = \App\Models\Country::create([
            'id' => 81,
            'code' => 'GE',
            'name' => 'Georgia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData81 = \App\Models\Country::create([
            'id' => 82,
            'code' => 'DE',
            'name' => 'Germany',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData82 = \App\Models\Country::create([
            'id' => 83,
            'code' => 'GH',
            'name' => 'Ghana',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData83 = \App\Models\Country::create([
            'id' => 84,
            'code' => 'GI',
            'name' => 'Gibraltar',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData84 = \App\Models\Country::create([
            'id' => 85,
            'code' => 'GR',
            'name' => 'Greece',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData85 = \App\Models\Country::create([
            'id' => 86,
            'code' => 'GL',
            'name' => 'Greenland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData86 = \App\Models\Country::create([
            'id' => 87,
            'code' => 'GD',
            'name' => 'Grenada',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData87 = \App\Models\Country::create([
            'id' => 88,
            'code' => 'GP',
            'name' => 'Guadeloupe',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData88 = \App\Models\Country::create([
            'id' => 89,
            'code' => 'GU',
            'name' => 'Guam',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData89 = \App\Models\Country::create([
            'id' => 90,
            'code' => 'GT',
            'name' => 'Guatemala',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData90 = \App\Models\Country::create([
            'id' => 91,
            'code' => 'XU',
            'name' => 'Guernsey and Alderney',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData91 = \App\Models\Country::create([
            'id' => 92,
            'code' => 'GN',
            'name' => 'Guinea',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData92 = \App\Models\Country::create([
            'id' => 93,
            'code' => 'GW',
            'name' => 'Guinea-Bissau',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData93 = \App\Models\Country::create([
            'id' => 94,
            'code' => 'GY',
            'name' => 'Guyana',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData94 = \App\Models\Country::create([
            'id' => 95,
            'code' => 'HT',
            'name' => 'Haiti',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData95 = \App\Models\Country::create([
            'id' => 96,
            'code' => 'HM',
            'name' => 'Heard and McDonald Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData96 = \App\Models\Country::create([
            'id' => 97,
            'code' => 'HN',
            'name' => 'Honduras',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData97 = \App\Models\Country::create([
            'id' => 98,
            'code' => 'HK',
            'name' => 'Hong Kong S.A.R.',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData98 = \App\Models\Country::create([
            'id' => 99,
            'code' => 'HU',
            'name' => 'Hungary',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData99 = \App\Models\Country::create([
            'id' => 100,
            'code' => 'IS',
            'name' => 'Iceland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData100 = \App\Models\Country::create([
            'id' => 101,
            'code' => 'IN',
            'name' => 'India',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData101 = \App\Models\Country::create([
            'id' => 102,
            'code' => 'ID',
            'name' => 'Indonesia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData102 = \App\Models\Country::create([
            'id' => 103,
            'code' => 'IR',
            'name' => 'Iran',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData103 = \App\Models\Country::create([
            'id' => 104,
            'code' => 'IQ',
            'name' => 'Iraq',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData104 = \App\Models\Country::create([
            'id' => 105,
            'code' => 'IE',
            'name' => 'Ireland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData105 = \App\Models\Country::create([
            'id' => 106,
            'code' => 'IL',
            'name' => 'Israel',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData106 = \App\Models\Country::create([
            'id' => 107,
            'code' => 'IT',
            'name' => 'Italy',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData107 = \App\Models\Country::create([
            'id' => 108,
            'code' => 'JM',
            'name' => 'Jamaica',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData108 = \App\Models\Country::create([
            'id' => 109,
            'code' => 'JP',
            'name' => 'Japan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData109 = \App\Models\Country::create([
            'id' => 110,
            'code' => 'XJ',
            'name' => 'Jersey',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData110 = \App\Models\Country::create([
            'id' => 111,
            'code' => 'JO',
            'name' => 'Jordan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData111 = \App\Models\Country::create([
            'id' => 112,
            'code' => 'KZ',
            'name' => 'Kazakhstan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData112 = \App\Models\Country::create([
            'id' => 113,
            'code' => 'KE',
            'name' => 'Kenya',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData113 = \App\Models\Country::create([
            'id' => 114,
            'code' => 'KI',
            'name' => 'Kiribati',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData114 = \App\Models\Country::create([
            'id' => 115,
            'code' => 'KP',
            'name' => 'Korea North',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData115 = \App\Models\Country::create([
            'id' => 116,
            'code' => 'KR',
            'name' => 'Korea South',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData116 = \App\Models\Country::create([
            'id' => 117,
            'code' => 'KW',
            'name' => 'Kuwait',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData117 = \App\Models\Country::create([
            'id' => 118,
            'code' => 'KG',
            'name' => 'Kyrgyzstan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData118 = \App\Models\Country::create([
            'id' => 119,
            'code' => 'LA',
            'name' => 'Laos',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData119 = \App\Models\Country::create([
            'id' => 120,
            'code' => 'LV',
            'name' => 'Latvia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData120 = \App\Models\Country::create([
            'id' => 121,
            'code' => 'LB',
            'name' => 'Lebanon',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData121 = \App\Models\Country::create([
            'id' => 122,
            'code' => 'LS',
            'name' => 'Lesotho',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData122 = \App\Models\Country::create([
            'id' => 123,
            'code' => 'LR',
            'name' => 'Liberia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData123 = \App\Models\Country::create([
            'id' => 124,
            'code' => 'LY',
            'name' => 'Libya',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData124 = \App\Models\Country::create([
            'id' => 125,
            'code' => 'LI',
            'name' => 'Liechtenstein',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData125 = \App\Models\Country::create([
            'id' => 126,
            'code' => 'LT',
            'name' => 'Lithuania',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData126 = \App\Models\Country::create([
            'id' => 127,
            'code' => 'LU',
            'name' => 'Luxembourg',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData127 = \App\Models\Country::create([
            'id' => 128,
            'code' => 'MO',
            'name' => 'Macau S.A.R.',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData128 = \App\Models\Country::create([
            'id' => 129,
            'code' => 'MK',
            'name' => 'Macedonia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData129 = \App\Models\Country::create([
            'id' => 130,
            'code' => 'MG',
            'name' => 'Madagascar',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData130 = \App\Models\Country::create([
            'id' => 131,
            'code' => 'MW',
            'name' => 'Malawi',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData131 = \App\Models\Country::create([
            'id' => 132,
            'code' => 'MY',
            'name' => 'Malaysia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData132 = \App\Models\Country::create([
            'id' => 133,
            'code' => 'MV',
            'name' => 'Maldives',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData133 = \App\Models\Country::create([
            'id' => 134,
            'code' => 'ML',
            'name' => 'Mali',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData134 = \App\Models\Country::create([
            'id' => 135,
            'code' => 'MT',
            'name' => 'Malta',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData135 = \App\Models\Country::create([
            'id' => 136,
            'code' => 'XM',
            'name' => 'Man (Isle of]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData136 = \App\Models\Country::create([
            'id' => 137,
            'code' => 'MH',
            'name' => 'Marshall Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData137 = \App\Models\Country::create([
            'id' => 138,
            'code' => 'MQ',
            'name' => 'Martinique',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData138 = \App\Models\Country::create([
            'id' => 139,
            'code' => 'MR',
            'name' => 'Mauritania',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData139 = \App\Models\Country::create([
            'id' => 140,
            'code' => 'MU',
            'name' => 'Mauritius',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData140 = \App\Models\Country::create([
            'id' => 141,
            'code' => 'YT',
            'name' => 'Mayotte',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData141 = \App\Models\Country::create([
            'id' => 142,
            'code' => 'MX',
            'name' => 'Mexico',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData142 = \App\Models\Country::create([
            'id' => 143,
            'code' => 'FM',
            'name' => 'Micronesia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData143 = \App\Models\Country::create([
            'id' => 144,
            'code' => 'MD',
            'name' => 'Moldova',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData144 = \App\Models\Country::create([
            'id' => 145,
            'code' => 'MC',
            'name' => 'Monaco',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData145 = \App\Models\Country::create([
            'id' => 146,
            'code' => 'MN',
            'name' => 'Mongolia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData146 = \App\Models\Country::create([
            'id' => 147,
            'code' => 'MS',
            'name' => 'Montserrat',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData147 = \App\Models\Country::create([
            'id' => 148,
            'code' => 'MA',
            'name' => 'Morocco',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData148 = \App\Models\Country::create([
            'id' => 149,
            'code' => 'MZ',
            'name' => 'Mozambique',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData149 = \App\Models\Country::create([
            'id' => 150,
            'code' => 'MM',
            'name' => 'Myanmar',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData150 = \App\Models\Country::create([
            'id' => 151,
            'code' => 'NA',
            'name' => 'Namibia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData151 = \App\Models\Country::create([
            'id' => 152,
            'code' => 'NR',
            'name' => 'Nauru',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData152 = \App\Models\Country::create([
            'id' => 153,
            'code' => 'NP',
            'name' => 'Nepal',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData153 = \App\Models\Country::create([
            'id' => 154,
            'code' => 'AN',
            'name' => 'Netherlands Antilles',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData154 = \App\Models\Country::create([
            'id' => 155,
            'code' => 'NL',
            'name' => 'Netherlands The',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData155 = \App\Models\Country::create([
            'id' => 156,
            'code' => 'NC',
            'name' => 'New Caledonia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData156 = \App\Models\Country::create([
            'id' => 157,
            'code' => 'NZ',
            'name' => 'New Zealand',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData157 = \App\Models\Country::create([
            'id' => 158,
            'code' => 'NI',
            'name' => 'Nicaragua',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData158 = \App\Models\Country::create([
            'id' => 159,
            'code' => 'NE',
            'name' => 'Niger',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData159 = \App\Models\Country::create([
            'id' => 160,
            'code' => 'NG',
            'name' => 'Nigeria',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData160 = \App\Models\Country::create([
            'id' => 161,
            'code' => 'NU',
            'name' => 'Niue',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData161 = \App\Models\Country::create([
            'id' => 162,
            'code' => 'NF',
            'name' => 'Norfolk Island',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData162 = \App\Models\Country::create([
            'id' => 163,
            'code' => 'MP',
            'name' => 'Northern Mariana Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData163 = \App\Models\Country::create([
            'id' => 164,
            'code' => 'NO',
            'name' => 'Norway',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData164 = \App\Models\Country::create([
            'id' => 165,
            'code' => 'OM',
            'name' => 'Oman',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData165 = \App\Models\Country::create([
            'id' => 166,
            'code' => 'PK',
            'name' => 'Pakistan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData166 = \App\Models\Country::create([
            'id' => 167,
            'code' => 'PW',
            'name' => 'Palau',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData167 = \App\Models\Country::create([
            'id' => 168,
            'code' => 'PS',
            'name' => 'Palestinian Territory Occupied',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData168 = \App\Models\Country::create([
            'id' => 169,
            'code' => 'PA',
            'name' => 'Panama',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData169 = \App\Models\Country::create([
            'id' => 170,
            'code' => 'PG',
            'name' => 'Papua new Guinea',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData170 = \App\Models\Country::create([
            'id' => 171,
            'code' => 'PY',
            'name' => 'Paraguay',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData171 = \App\Models\Country::create([
            'id' => 172,
            'code' => 'PE',
            'name' => 'Peru',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData172 = \App\Models\Country::create([
            'id' => 173,
            'code' => 'PH',
            'name' => 'Philippines',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData173 = \App\Models\Country::create([
            'id' => 174,
            'code' => 'PN',
            'name' => 'Pitcairn Island',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData174 = \App\Models\Country::create([
            'id' => 175,
            'code' => 'PL',
            'name' => 'Poland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData175 = \App\Models\Country::create([
            'id' => 176,
            'code' => 'PT',
            'name' => 'Portugal',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData176 = \App\Models\Country::create([
            'id' => 177,
            'code' => 'PR',
            'name' => 'Puerto Rico',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData177 = \App\Models\Country::create([
            'id' => 178,
            'code' => 'QA',
            'name' => 'Qatar',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData178 = \App\Models\Country::create([
            'id' => 179,
            'code' => 'RE',
            'name' => 'Reunion',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData179 = \App\Models\Country::create([
            'id' => 180,
            'code' => 'RO',
            'name' => 'Romania',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData180 = \App\Models\Country::create([
            'id' => 181,
            'code' => 'RU',
            'name' => 'Russia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData181 = \App\Models\Country::create([
            'id' => 182,
            'code' => 'RW',
            'name' => 'Rwanda',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData182 = \App\Models\Country::create([
            'id' => 183,
            'code' => 'SH',
            'name' => 'Saint Helena',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData183 = \App\Models\Country::create([
            'id' => 184,
            'code' => 'KN',
            'name' => 'Saint Kitts And Nevis',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData184 = \App\Models\Country::create([
            'id' => 185,
            'code' => 'LC',
            'name' => 'Saint Lucia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData185 = \App\Models\Country::create([
            'id' => 186,
            'code' => 'PM',
            'name' => 'Saint Pierre and Miquelon',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData186 = \App\Models\Country::create([
            'id' => 187,
            'code' => 'VC',
            'name' => 'Saint Vincent And The Grenadines',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData187 = \App\Models\Country::create([
            'id' => 188,
            'code' => 'WS',
            'name' => 'Samoa',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData188 = \App\Models\Country::create([
            'id' => 189,
            'code' => 'SM',
            'name' => 'San Marino',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData189 = \App\Models\Country::create([
            'id' => 190,
            'code' => 'ST',
            'name' => 'Sao Tome and Principe',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData190 = \App\Models\Country::create([
            'id' => 191,
            'code' => 'SA',
            'name' => 'Saudi Arabia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData191 = \App\Models\Country::create([
            'id' => 192,
            'code' => 'SN',
            'name' => 'Senegal',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData192 = \App\Models\Country::create([
            'id' => 193,
            'code' => 'RS',
            'name' => 'Serbia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData193 = \App\Models\Country::create([
            'id' => 194,
            'code' => 'SC',
            'name' => 'Seychelles',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData194 = \App\Models\Country::create([
            'id' => 195,
            'code' => 'SL',
            'name' => 'Sierra Leone',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData195 = \App\Models\Country::create([
            'id' => 196,
            'code' => 'SG',
            'name' => 'Singapore',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData196 = \App\Models\Country::create([
            'id' => 197,
            'code' => 'SK',
            'name' => 'Slovakia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData197 = \App\Models\Country::create([
            'id' => 198,
            'code' => 'SI',
            'name' => 'Slovenia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData198 = \App\Models\Country::create([
            'id' => 199,
            'code' => 'XG',
            'name' => 'Smaller Territories of the UK',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData199 = \App\Models\Country::create([
            'id' => 200,
            'code' => 'SB',
            'name' => 'Solomon Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData200 = \App\Models\Country::create([
            'id' => 201,
            'code' => 'SO',
            'name' => 'Somalia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData201 = \App\Models\Country::create([
            'id' => 202,
            'code' => 'ZA',
            'name' => 'South Africa',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData202 = \App\Models\Country::create([
            'id' => 203,
            'code' => 'GS',
            'name' => 'South Georgia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData203 = \App\Models\Country::create([
            'id' => 204,
            'code' => 'SS',
            'name' => 'South Sudan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData204 = \App\Models\Country::create([
            'id' => 205,
            'code' => 'ES',
            'name' => 'Spain',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData205 = \App\Models\Country::create([
            'id' => 206,
            'code' => 'LK',
            'name' => 'Sri Lanka',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData206 = \App\Models\Country::create([
            'id' => 207,
            'code' => 'SD',
            'name' => 'Sudan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData207 = \App\Models\Country::create([
            'id' => 208,
            'code' => 'SR',
            'name' => 'Suriname',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData208 = \App\Models\Country::create([
            'id' => 209,
            'code' => 'SJ',
            'name' => 'Svalbard And Jan Mayen Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData209 = \App\Models\Country::create([
            'id' => 210,
            'code' => 'SZ',
            'name' => 'Swaziland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData210 = \App\Models\Country::create([
            'id' => 211,
            'code' => 'SE',
            'name' => 'Sweden',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData211 = \App\Models\Country::create([
            'id' => 212,
            'code' => 'CH',
            'name' => 'Switzerland',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData212 = \App\Models\Country::create([
            'id' => 213,
            'code' => 'SY',
            'name' => 'Syria',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData213 = \App\Models\Country::create([
            'id' => 214,
            'code' => 'TW',
            'name' => 'Taiwan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData214 = \App\Models\Country::create([
            'id' => 215,
            'code' => 'TJ',
            'name' => 'Tajikistan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData215 = \App\Models\Country::create([
            'id' => 216,
            'code' => 'TZ',
            'name' => 'Tanzania',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData216 = \App\Models\Country::create([
            'id' => 217,
            'code' => 'TH',
            'name' => 'Thailand',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData217 = \App\Models\Country::create([
            'id' => 218,
            'code' => 'TG',
            'name' => 'Togo',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData218 = \App\Models\Country::create([
            'id' => 219,
            'code' => 'TK',
            'name' => 'Tokelau',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData219 = \App\Models\Country::create([
            'id' => 220,
            'code' => 'TO',
            'name' => 'Tonga',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData220 = \App\Models\Country::create([
            'id' => 221,
            'code' => 'TT',
            'name' => 'Trinidad And Tobago',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData221 = \App\Models\Country::create([
            'id' => 222,
            'code' => 'TN',
            'name' => 'Tunisia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData222 = \App\Models\Country::create([
            'id' => 223,
            'code' => 'TR',
            'name' => 'Turkey',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData223 = \App\Models\Country::create([
            'id' => 224,
            'code' => 'TM',
            'name' => 'Turkmenistan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData224 = \App\Models\Country::create([
            'id' => 225,
            'code' => 'TC',
            'name' => 'Turks And Caicos Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData225 = \App\Models\Country::create([
            'id' => 226,
            'code' => 'TV',
            'name' => 'Tuvalu',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData226 = \App\Models\Country::create([
            'id' => 227,
            'code' => 'UG',
            'name' => 'Uganda',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData227 = \App\Models\Country::create([
            'id' => 228,
            'code' => 'UA',
            'name' => 'Ukraine',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData228 = \App\Models\Country::create([
            'id' => 229,
            'code' => 'AE',
            'name' => 'United Arab Emirates',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData229 = \App\Models\Country::create([
            'id' => 230,
            'code' => 'GB',
            'name' => 'United Kingdom',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData230 = \App\Models\Country::create([
            'id' => 231,
            'code' => 'US',
            'name' => 'United States',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData231 = \App\Models\Country::create([
            'id' => 232,
            'code' => 'UM',
            'name' => 'United States Minor Outlying Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData232 = \App\Models\Country::create([
            'id' => 233,
            'code' => 'UY',
            'name' => 'Uruguay',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData233 = \App\Models\Country::create([
            'id' => 234,
            'code' => 'UZ',
            'name' => 'Uzbekistan',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData234 = \App\Models\Country::create([
            'id' => 235,
            'code' => 'VU',
            'name' => 'Vanuatu',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData235 = \App\Models\Country::create([
            'id' => 236,
            'code' => 'VA',
            'name' => 'Vatican City State (Holy See]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData236 = \App\Models\Country::create([
            'id' => 237,
            'code' => 'VE',
            'name' => 'Venezuela',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData237 = \App\Models\Country::create([
            'id' => 238,
            'code' => 'VN',
            'name' => 'Vietnam',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData238 = \App\Models\Country::create([
            'id' => 239,
            'code' => 'VG',
            'name' => 'Virgin Islands (British]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData239 = \App\Models\Country::create([
            'id' => 240,
            'code' => 'VI',
            'name' => 'Virgin Islands (US]',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData240 = \App\Models\Country::create([
            'id' => 241,
            'code' => 'WF',
            'name' => 'Wallis And Futuna Islands',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData241 = \App\Models\Country::create([
            'id' => 242,
            'code' => 'EH',
            'name' => 'Western Sahara',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData242 = \App\Models\Country::create([
            'id' => 243,
            'code' => 'YE',
            'name' => 'Yemen',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData243 = \App\Models\Country::create([
            'id' => 244,
            'code' => 'YU',
            'name' => 'Yugoslavia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData244 = \App\Models\Country::create([
            'id' => 245,
            'code' => 'ZM',
            'name' => 'Zambia',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        $newData245 = \App\Models\Country::create([
            'id' => 246,
            'code' => 'ZW',
            'name' => 'Zimbabwe',
            'zone_id' => 0,
            'status' => 0,
            'created_at' => '2021-04-06 01:06:30',
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
    }
}