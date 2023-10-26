<?php

namespace Database\Seeders;

use App\Models\Role;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Check if the roles exist before inserting.
    if (Role::where('name', 'Super Admin')->doesntExist()) {
        Role::create(['name' => 'Super Admin']);
    }

    if (Role::where('name', 'Admin')->doesntExist()) {
        Role::create(['name' => 'Admin']);
    }

    if (Role::where('name', 'Manager')->doesntExist()) {
        Role::create(['name' => 'Manager']);
    }
    }
}
