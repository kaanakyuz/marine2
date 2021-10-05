<?php

namespace Database\Seeders;

use http\Client\Curl\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\User::insert([
            'name' => "kaan",
            'email' => "kaan.akyuz@windowslive.com",
            'email_verified_at' => now(),
            'types' => 'admin' ,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);


        \App\Models\User::factory(5)->create();


    }
}
