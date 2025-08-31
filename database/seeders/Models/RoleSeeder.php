<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
         * artisan seed:generate --model-mode --models=Role
         *
         */

        
        $newData0 = \App\Models\Role::create([
            'id' => 1,
            'name' => 'Super Admin',
            'guard_name' => 'web',
            'created_at' => '2022-06-13 00:29:58',
            'updated_at' => '2022-06-12 12:00:00',
        ]);
    }
}