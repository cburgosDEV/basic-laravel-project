<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'super',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
    }
}
