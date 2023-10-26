<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     "name" => "Jofra Archer",
        //     "email" => "archer@ecb.com",
        //     "password" => bcrypt("55555")
        // ]);

        if (User::where('role', '1')->doesntExist()) {
            User::create([
                'name' => 'SuperAdmin',
                'email' => 'superadmin@mail.com',
                'password' => Hash::make('pass'),
                'role'=> 1,
            ]);
        }

        if (User::where('role', '2')->doesntExist()) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('pass'),
                'role'=> 2,
            ]);
        }
    }
}
