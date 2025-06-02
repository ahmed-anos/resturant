<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $days = [
            'Saturday'   => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '22:00:00'],
            'Sunday'     => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '22:00:00'],
            'Monday'     => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '22:00:00'],
            'Tuesday'    => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '22:00:00'],
            'Wednesday'  => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '22:00:00'],
            'Thursday'   => ['is_open' => true,  'open_at' => '09:00:00', 'close_at' => '23:00:00'],
            'Friday'     => ['is_open' => false, 'open_at' => null,       'close_at' => null],
        ];

        foreach ($days as $day => $values) {
            DB::table('working_hours')->insert([
                'day' => $day,
                'is_open' => $values['is_open'],
                'open_at' => $values['open_at'],
                'close_at' => $values['close_at'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
