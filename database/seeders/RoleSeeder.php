<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'rol' => 'SA',
                'description'=>'Full control of page',
                'enabled' => 1,
            ],
            [
                'rol' => 'VIEW',
                'description'=>'Just view of page',
                'enabled' => 1,
            ],

        ]);
    }
}
