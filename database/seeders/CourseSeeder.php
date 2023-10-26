<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Social Media Marketing
        if (course::where('name', 'Social Media Marketing')->doesntExist()) {
            course::create([
                'name' => 'Social Media Marketing',
                'slug'=> 'social-media-marketing',
                'short_description'=> 'Social Media Marketing Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

        // E-Commerce With Shopify
        if (course::where('name', 'E-Commerce With Shopify')->doesntExist()) {
            course::create([
                'name' => 'E-Commerce With Shopify',
                'slug'=> 'e-commerce-with-shopify',
                'short_description'=> 'E-Commerce With Shopify Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

        // Graphic Designing
        if (course::where('name', 'Graphic Designing')->doesntExist()) {
            course::create([
                'name' => 'Graphic Designing',
                'slug'=> 'graphic-designing',
                'short_description'=> 'graphic-designing Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

        // Web Development
        if (course::where('name', 'Web Development')->doesntExist()) {
            course::create([
                'name' => 'Web Development',
                'slug'=> 'web-development',
                'short_description'=> 'web-development Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

        // AutoCad 2D And 3D
        if (course::where('name', 'AutoCad 2D And 3D')->doesntExist()) {
            course::create([
                'name' => 'AutoCad 2D And 3D',
                'slug'=> 'autocad-2d-and-3d',
                'short_description'=> 'autocad-2d-and-3d Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

        // Office Management
        if (course::where('name', 'Office Management')->doesntExist()) {
            course::create([
                'name' => 'Office Management',
                'slug'=> 'office-management',
                'short_description'=> 'office-management Short Description Will Be Here...',
                'description'=> 'Course Long Description Will Be Here...',
                'fee'=> '40000',
                'ShowInHome'=> 'Yes',
                'status'=> '1',
            ]);
        }

    }
}
