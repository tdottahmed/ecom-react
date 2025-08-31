<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Color
         *
         */

        
        $newData0 = \App\Models\Color::create([
            'id' => 1,
            'name' => 'IndianRed',
            'code' => '#CD5C5C',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData1 = \App\Models\Color::create([
            'id' => 2,
            'name' => 'LightCoral',
            'code' => '#F08080',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData2 = \App\Models\Color::create([
            'id' => 3,
            'name' => 'Salmon',
            'code' => '#FA8072',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData3 = \App\Models\Color::create([
            'id' => 4,
            'name' => 'DarkSalmon',
            'code' => '#E9967A',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData4 = \App\Models\Color::create([
            'id' => 5,
            'name' => 'LightSalmon',
            'code' => '#FFA07A',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData5 = \App\Models\Color::create([
            'id' => 6,
            'name' => 'Crimson',
            'code' => '#DC143C',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData6 = \App\Models\Color::create([
            'id' => 7,
            'name' => 'Red',
            'code' => '#FF0000',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData7 = \App\Models\Color::create([
            'id' => 8,
            'name' => 'FireBrick',
            'code' => '#B22222',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData8 = \App\Models\Color::create([
            'id' => 9,
            'name' => 'DarkRed',
            'code' => '#8B0000',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData9 = \App\Models\Color::create([
            'id' => 10,
            'name' => 'Pink',
            'code' => '#FFC0CB',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData10 = \App\Models\Color::create([
            'id' => 11,
            'name' => 'LightPink',
            'code' => '#FFB6C1',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData11 = \App\Models\Color::create([
            'id' => 12,
            'name' => 'HotPink',
            'code' => '#FF69B4',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData12 = \App\Models\Color::create([
            'id' => 13,
            'name' => 'DeepPink',
            'code' => '#FF1493',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData13 = \App\Models\Color::create([
            'id' => 14,
            'name' => 'MediumVioletRed',
            'code' => '#C71585',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData14 = \App\Models\Color::create([
            'id' => 15,
            'name' => 'PaleVioletRed',
            'code' => '#DB7093',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData15 = \App\Models\Color::create([
            'id' => 16,
            'name' => 'LightSalmon',
            'code' => '#FFA07A',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData16 = \App\Models\Color::create([
            'id' => 17,
            'name' => 'Coral',
            'code' => '#FF7F50',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData17 = \App\Models\Color::create([
            'id' => 18,
            'name' => 'Tomato',
            'code' => '#FF6347',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData18 = \App\Models\Color::create([
            'id' => 19,
            'name' => 'OrangeRed',
            'code' => '#FF4500',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData19 = \App\Models\Color::create([
            'id' => 20,
            'name' => 'DarkOrange',
            'code' => '#FF8C00',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData20 = \App\Models\Color::create([
            'id' => 21,
            'name' => 'Orange',
            'code' => '#FFA500',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData21 = \App\Models\Color::create([
            'id' => 22,
            'name' => 'Gold',
            'code' => '#FFD700',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData22 = \App\Models\Color::create([
            'id' => 23,
            'name' => 'Yellow',
            'code' => '#FFFF00',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData23 = \App\Models\Color::create([
            'id' => 24,
            'name' => 'LightYellow',
            'code' => '#FFFFE0',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData24 = \App\Models\Color::create([
            'id' => 25,
            'name' => 'LemonChiffon',
            'code' => '#FFFACD',
            'created_at' => '2018-11-05 02:12:26',
            'updated_at' => '2018-11-05 02:12:26',
        ]);
        $newData25 = \App\Models\Color::create([
            'id' => 26,
            'name' => 'LightGoldenrodYellow',
            'code' => '#FAFAD2',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData26 = \App\Models\Color::create([
            'id' => 27,
            'name' => 'PapayaWhip',
            'code' => '#FFEFD5',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData27 = \App\Models\Color::create([
            'id' => 28,
            'name' => 'Moccasin',
            'code' => '#FFE4B5',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData28 = \App\Models\Color::create([
            'id' => 29,
            'name' => 'PeachPuff',
            'code' => '#FFDAB9',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData29 = \App\Models\Color::create([
            'id' => 30,
            'name' => 'PaleGoldenrod',
            'code' => '#EEE8AA',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData30 = \App\Models\Color::create([
            'id' => 31,
            'name' => 'Khaki',
            'code' => '#F0E68C',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData31 = \App\Models\Color::create([
            'id' => 32,
            'name' => 'DarkKhaki',
            'code' => '#BDB76B',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData32 = \App\Models\Color::create([
            'id' => 33,
            'name' => 'Lavender',
            'code' => '#E6E6FA',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData33 = \App\Models\Color::create([
            'id' => 34,
            'name' => 'Thistle',
            'code' => '#D8BFD8',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData34 = \App\Models\Color::create([
            'id' => 35,
            'name' => 'Plum',
            'code' => '#DDA0DD',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData35 = \App\Models\Color::create([
            'id' => 36,
            'name' => 'Violet',
            'code' => '#EE82EE',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData36 = \App\Models\Color::create([
            'id' => 37,
            'name' => 'Orchid',
            'code' => '#DA70D6',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData37 = \App\Models\Color::create([
            'id' => 38,
            'name' => 'Fuchsia',
            'code' => '#FF00FF',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData38 = \App\Models\Color::create([
            'id' => 39,
            'name' => 'Magenta',
            'code' => '#FF00FF',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData39 = \App\Models\Color::create([
            'id' => 40,
            'name' => 'MediumOrchid',
            'code' => '#BA55D3',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData40 = \App\Models\Color::create([
            'id' => 41,
            'name' => 'MediumPurple',
            'code' => '#9370DB',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData41 = \App\Models\Color::create([
            'id' => 42,
            'name' => 'Amethyst',
            'code' => '#9966CC',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData42 = \App\Models\Color::create([
            'id' => 43,
            'name' => 'BlueViolet',
            'code' => '#8A2BE2',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData43 = \App\Models\Color::create([
            'id' => 44,
            'name' => 'DarkViolet',
            'code' => '#9400D3',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData44 = \App\Models\Color::create([
            'id' => 45,
            'name' => 'DarkOrchid',
            'code' => '#9932CC',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData45 = \App\Models\Color::create([
            'id' => 46,
            'name' => 'DarkMagenta',
            'code' => '#8B008B',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData46 = \App\Models\Color::create([
            'id' => 47,
            'name' => 'Purple',
            'code' => '#800080',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData47 = \App\Models\Color::create([
            'id' => 48,
            'name' => 'Indigo',
            'code' => '#4B0082',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData48 = \App\Models\Color::create([
            'id' => 49,
            'name' => 'SlateBlue',
            'code' => '#6A5ACD',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData49 = \App\Models\Color::create([
            'id' => 50,
            'name' => 'DarkSlateBlue',
            'code' => '#483D8B',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData50 = \App\Models\Color::create([
            'id' => 51,
            'name' => 'MediumSlateBlue',
            'code' => '#7B68EE',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData51 = \App\Models\Color::create([
            'id' => 52,
            'name' => 'GreenYellow',
            'code' => '#ADFF2F',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData52 = \App\Models\Color::create([
            'id' => 53,
            'name' => 'Chartreuse',
            'code' => '#7FFF00',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData53 = \App\Models\Color::create([
            'id' => 54,
            'name' => 'LawnGreen',
            'code' => '#7CFC00',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData54 = \App\Models\Color::create([
            'id' => 55,
            'name' => 'Lime',
            'code' => '#00FF00',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData55 = \App\Models\Color::create([
            'id' => 56,
            'name' => 'LimeGreen',
            'code' => '#32CD32',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData56 = \App\Models\Color::create([
            'id' => 57,
            'name' => 'PaleGreen',
            'code' => '#98FB98',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData57 = \App\Models\Color::create([
            'id' => 58,
            'name' => 'LightGreen',
            'code' => '#90EE90',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData58 = \App\Models\Color::create([
            'id' => 59,
            'name' => 'MediumSpringGreen',
            'code' => '#00FA9A',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData59 = \App\Models\Color::create([
            'id' => 60,
            'name' => 'SpringGreen',
            'code' => '#00FF7F',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData60 = \App\Models\Color::create([
            'id' => 61,
            'name' => 'MediumSeaGreen',
            'code' => '#3CB371',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData61 = \App\Models\Color::create([
            'id' => 62,
            'name' => 'SeaGreen',
            'code' => '#2E8B57',
            'created_at' => '2018-11-05 02:12:27',
            'updated_at' => '2018-11-05 02:12:27',
        ]);
        $newData62 = \App\Models\Color::create([
            'id' => 63,
            'name' => 'ForestGreen',
            'code' => '#228B22',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData63 = \App\Models\Color::create([
            'id' => 64,
            'name' => 'Green',
            'code' => '#008000',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData64 = \App\Models\Color::create([
            'id' => 65,
            'name' => 'DarkGreen',
            'code' => '#006400',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData65 = \App\Models\Color::create([
            'id' => 66,
            'name' => 'YellowGreen',
            'code' => '#9ACD32',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData66 = \App\Models\Color::create([
            'id' => 67,
            'name' => 'OliveDrab',
            'code' => '#6B8E23',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData67 = \App\Models\Color::create([
            'id' => 68,
            'name' => 'Olive',
            'code' => '#808000',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData68 = \App\Models\Color::create([
            'id' => 69,
            'name' => 'DarkOliveGreen',
            'code' => '#556B2F',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData69 = \App\Models\Color::create([
            'id' => 70,
            'name' => 'MediumAquamarine',
            'code' => '#66CDAA',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData70 = \App\Models\Color::create([
            'id' => 71,
            'name' => 'DarkSeaGreen',
            'code' => '#8FBC8F',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData71 = \App\Models\Color::create([
            'id' => 72,
            'name' => 'LightSeaGreen',
            'code' => '#20B2AA',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData72 = \App\Models\Color::create([
            'id' => 73,
            'name' => 'DarkCyan',
            'code' => '#008B8B',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData73 = \App\Models\Color::create([
            'id' => 74,
            'name' => 'Teal',
            'code' => '#008080',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData74 = \App\Models\Color::create([
            'id' => 75,
            'name' => 'Aqua',
            'code' => '#00FFFF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData75 = \App\Models\Color::create([
            'id' => 76,
            'name' => 'Cyan',
            'code' => '#00FFFF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData76 = \App\Models\Color::create([
            'id' => 77,
            'name' => 'LightCyan',
            'code' => '#E0FFFF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData77 = \App\Models\Color::create([
            'id' => 78,
            'name' => 'PaleTurquoise',
            'code' => '#AFEEEE',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData78 = \App\Models\Color::create([
            'id' => 79,
            'name' => 'Aquamarine',
            'code' => '#7FFFD4',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData79 = \App\Models\Color::create([
            'id' => 80,
            'name' => 'Turquoise',
            'code' => '#40E0D0',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData80 = \App\Models\Color::create([
            'id' => 81,
            'name' => 'MediumTurquoise',
            'code' => '#48D1CC',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData81 = \App\Models\Color::create([
            'id' => 82,
            'name' => 'DarkTurquoise',
            'code' => '#00CED1',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData82 = \App\Models\Color::create([
            'id' => 83,
            'name' => 'CadetBlue',
            'code' => '#5F9EA0',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData83 = \App\Models\Color::create([
            'id' => 84,
            'name' => 'SteelBlue',
            'code' => '#4682B4',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData84 = \App\Models\Color::create([
            'id' => 85,
            'name' => 'LightSteelBlue',
            'code' => '#B0C4DE',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData85 = \App\Models\Color::create([
            'id' => 86,
            'name' => 'PowderBlue',
            'code' => '#B0E0E6',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData86 = \App\Models\Color::create([
            'id' => 87,
            'name' => 'LightBlue',
            'code' => '#ADD8E6',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData87 = \App\Models\Color::create([
            'id' => 88,
            'name' => 'SkyBlue',
            'code' => '#87CEEB',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData88 = \App\Models\Color::create([
            'id' => 89,
            'name' => 'LightSkyBlue',
            'code' => '#87CEFA',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData89 = \App\Models\Color::create([
            'id' => 90,
            'name' => 'DeepSkyBlue',
            'code' => '#00BFFF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData90 = \App\Models\Color::create([
            'id' => 91,
            'name' => 'DodgerBlue',
            'code' => '#1E90FF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData91 = \App\Models\Color::create([
            'id' => 92,
            'name' => 'CornflowerBlue',
            'code' => '#6495ED',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData92 = \App\Models\Color::create([
            'id' => 93,
            'name' => 'MediumSlateBlue',
            'code' => '#7B68EE',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData93 = \App\Models\Color::create([
            'id' => 94,
            'name' => 'RoyalBlue',
            'code' => '#4169E1',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData94 = \App\Models\Color::create([
            'id' => 95,
            'name' => 'Blue',
            'code' => '#0000FF',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData95 = \App\Models\Color::create([
            'id' => 96,
            'name' => 'MediumBlue',
            'code' => '#0000CD',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData96 = \App\Models\Color::create([
            'id' => 97,
            'name' => 'DarkBlue',
            'code' => '#00008B',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData97 = \App\Models\Color::create([
            'id' => 98,
            'name' => 'Navy',
            'code' => '#000080',
            'created_at' => '2018-11-05 02:12:28',
            'updated_at' => '2018-11-05 02:12:28',
        ]);
        $newData98 = \App\Models\Color::create([
            'id' => 99,
            'name' => 'MidnightBlue',
            'code' => '#191970',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData99 = \App\Models\Color::create([
            'id' => 100,
            'name' => 'Cornsilk',
            'code' => '#FFF8DC',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData100 = \App\Models\Color::create([
            'id' => 101,
            'name' => 'BlanchedAlmond',
            'code' => '#FFEBCD',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData101 = \App\Models\Color::create([
            'id' => 102,
            'name' => 'Bisque',
            'code' => '#FFE4C4',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData102 = \App\Models\Color::create([
            'id' => 103,
            'name' => 'NavajoWhite',
            'code' => '#FFDEAD',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData103 = \App\Models\Color::create([
            'id' => 104,
            'name' => 'Wheat',
            'code' => '#F5DEB3',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData104 = \App\Models\Color::create([
            'id' => 105,
            'name' => 'BurlyWood',
            'code' => '#DEB887',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData105 = \App\Models\Color::create([
            'id' => 106,
            'name' => 'Tan',
            'code' => '#D2B48C',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData106 = \App\Models\Color::create([
            'id' => 107,
            'name' => 'RosyBrown',
            'code' => '#BC8F8F',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData107 = \App\Models\Color::create([
            'id' => 108,
            'name' => 'SandyBrown',
            'code' => '#F4A460',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData108 = \App\Models\Color::create([
            'id' => 109,
            'name' => 'Goldenrod',
            'code' => '#DAA520',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData109 = \App\Models\Color::create([
            'id' => 110,
            'name' => 'DarkGoldenrod',
            'code' => '#B8860B',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData110 = \App\Models\Color::create([
            'id' => 111,
            'name' => 'Peru',
            'code' => '#CD853F',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData111 = \App\Models\Color::create([
            'id' => 112,
            'name' => 'Chocolate',
            'code' => '#D2691E',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData112 = \App\Models\Color::create([
            'id' => 113,
            'name' => 'SaddleBrown',
            'code' => '#8B4513',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData113 = \App\Models\Color::create([
            'id' => 114,
            'name' => 'Sienna',
            'code' => '#A0522D',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData114 = \App\Models\Color::create([
            'id' => 115,
            'name' => 'Brown',
            'code' => '#A52A2A',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData115 = \App\Models\Color::create([
            'id' => 116,
            'name' => 'Maroon',
            'code' => '#800000',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData116 = \App\Models\Color::create([
            'id' => 117,
            'name' => 'White',
            'code' => '#FFFFFF',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData117 = \App\Models\Color::create([
            'id' => 118,
            'name' => 'Snow',
            'code' => '#FFFAFA',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData118 = \App\Models\Color::create([
            'id' => 119,
            'name' => 'Honeydew',
            'code' => '#F0FFF0',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData119 = \App\Models\Color::create([
            'id' => 120,
            'name' => 'MintCream',
            'code' => '#F5FFFA',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData120 = \App\Models\Color::create([
            'id' => 121,
            'name' => 'Azure',
            'code' => '#F0FFFF',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData121 = \App\Models\Color::create([
            'id' => 122,
            'name' => 'AliceBlue',
            'code' => '#F0F8FF',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData122 = \App\Models\Color::create([
            'id' => 123,
            'name' => 'GhostWhite',
            'code' => '#F8F8FF',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData123 = \App\Models\Color::create([
            'id' => 124,
            'name' => 'WhiteSmoke',
            'code' => '#F5F5F5',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData124 = \App\Models\Color::create([
            'id' => 125,
            'name' => 'Seashell',
            'code' => '#FFF5EE',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData125 = \App\Models\Color::create([
            'id' => 126,
            'name' => 'Beige',
            'code' => '#F5F5DC',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData126 = \App\Models\Color::create([
            'id' => 127,
            'name' => 'OldLace',
            'code' => '#FDF5E6',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData127 = \App\Models\Color::create([
            'id' => 128,
            'name' => 'FloralWhite',
            'code' => '#FFFAF0',
            'created_at' => '2018-11-05 02:12:29',
            'updated_at' => '2018-11-05 02:12:29',
        ]);
        $newData128 = \App\Models\Color::create([
            'id' => 129,
            'name' => 'Ivory',
            'code' => '#FFFFF0',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData129 = \App\Models\Color::create([
            'id' => 130,
            'name' => 'AntiqueWhite',
            'code' => '#FAEBD7',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData130 = \App\Models\Color::create([
            'id' => 131,
            'name' => 'Linen',
            'code' => '#FAF0E6',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData131 = \App\Models\Color::create([
            'id' => 132,
            'name' => 'LavenderBlush',
            'code' => '#FFF0F5',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData132 = \App\Models\Color::create([
            'id' => 133,
            'name' => 'MistyRose',
            'code' => '#FFE4E1',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData133 = \App\Models\Color::create([
            'id' => 134,
            'name' => 'Gainsboro',
            'code' => '#DCDCDC',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData134 = \App\Models\Color::create([
            'id' => 135,
            'name' => 'LightGrey',
            'code' => '#D3D3D3',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData135 = \App\Models\Color::create([
            'id' => 136,
            'name' => 'Silver',
            'code' => '#C0C0C0',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData136 = \App\Models\Color::create([
            'id' => 137,
            'name' => 'DarkGray',
            'code' => '#A9A9A9',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData137 = \App\Models\Color::create([
            'id' => 138,
            'name' => 'Gray',
            'code' => '#808080',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData138 = \App\Models\Color::create([
            'id' => 139,
            'name' => 'DimGray',
            'code' => '#696969',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData139 = \App\Models\Color::create([
            'id' => 140,
            'name' => 'LightSlateGray',
            'code' => '#778899',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData140 = \App\Models\Color::create([
            'id' => 141,
            'name' => 'SlateGray',
            'code' => '#708090',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData141 = \App\Models\Color::create([
            'id' => 142,
            'name' => 'DarkSlateGray',
            'code' => '#2F4F4F',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
        $newData142 = \App\Models\Color::create([
            'id' => 143,
            'name' => 'Black',
            'code' => '#000000',
            'created_at' => '2018-11-05 02:12:30',
            'updated_at' => '2018-11-05 02:12:30',
        ]);
    }
}