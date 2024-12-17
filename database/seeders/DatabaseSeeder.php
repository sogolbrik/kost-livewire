<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        for ($i=0; $i < 10; $i++) { 
            User::create([
                'name'     => fake()->name,
                'email'    => fake()->email,
                'password' => fake()->password,
                'phone'    => fake()->phoneNumber,
                'address'  => fake()->address,
                'city'     => fake()->city,
                'state'    => fake()->state,
                'role'     => 'customer',
            ]);
        }

        User::create([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' =>  bcrypt('admin123'),
            'role'     => 'administrator',
        ]);
    }
}
