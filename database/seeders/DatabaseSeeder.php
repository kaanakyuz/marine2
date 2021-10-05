<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            CategorySeeder::class,
            UserSeeder::class,

        ]);

     /*   User::insert([
            'name' => "kaan",
            'email' => "kaan@gmail.com",
            'email_verified_at' => now(),
            'types' => 'admin' ,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);*/

        //  \App\Models\User::factory(5)->create();
    }
}
