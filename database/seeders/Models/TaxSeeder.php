<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Tax
         *
         */

        
        $newData0 = \App\Models\Tax::create([
            'id' => 3,
            'name' => 'Tax',
            'tax_status' => 1,
            'created_at' => '2021-03-07 11:45:33',
            'updated_at' => '2021-03-07 11:45:33',
        ]);
    }
}