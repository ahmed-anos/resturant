<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('main_images')->insert([
            'banner_image' => 'banner-bg.jpg',
            'about_image' => 'welcome-bg.png',
            'menu_image' => 'food-bg.png',
            'reservation_image' => 'deshes1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
