<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Branch::where('name', 'Rahim Yar Khan')->doesntExist()) {
            Branch::create([
                'name' => 'Rahim Yar Khan',
                'slug'=> 'rahim-yar-khan',
                'description'=> '',
                'address'=> 'Rahim Yar Khan',
                'city'=> 'Rahim Yar Khan',
                'state' => 'Punjab',
                'country' => 'Pakistan',
                'mobile_no1'=> '+92 332 1567894',
                'mobile_no2'=> '+92 332 5567894',
                'email' => 'support.promotezz.com',
                'status'=> '1',
            ]);
        }
    }
}
