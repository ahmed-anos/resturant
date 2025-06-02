<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder; 

class UserSeeder extends Seeder
{
    private $userdata = [
        ["id"=> 1, "name" => "Asif", "usertype" => "0", "email" => "asraf2asif@gmail.com", "password" => "12345678"],
       ["id"=> 2, "name" => "Admin-Asif", "usertype" => "1", "email" => "client.asraf2asif@gmail.com", "password" => "12345678"],
       ["id"=> 3, "name" => "Asif4", "usertype" => "0", "email" => "asraf2asif45@gmail.com", "password" => "12345678"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::whereNotNull('id')->delete();
        foreach ($this->userdata as $data) {
            User::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => bcrypt($data["password"]),

            ]);
        }
    }
}
