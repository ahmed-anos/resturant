<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('settings')->insert([
            'name' => 'مطعم هارلي',
            'logo' => 'logo.png',
            'description' => 'نقدم لك أشهى الأطباق في أجواء دافئة وخدمة ممتازة.',
            'location' => 'طنطا، شارع الجيش، بجوار محطة القطر',
            'phone' => json_encode(['01000000000', '01234567890']),
            'email' => 'info@balqiny-restaurant.com',
            'about_desc_first'=>'مرحبا بك ',
            'about_desc_second'=>'مرحبا بك ',
            'social_links' => json_encode([
                'facebook' => 'https://facebook.com/balqiny',
                'instagram' => 'https://instagram.com/balqiny',
                'tiktok' => 'https://tiktok.com/@balqiny',
                'twitter' =>'https://tiktok.com/@balqiny'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
