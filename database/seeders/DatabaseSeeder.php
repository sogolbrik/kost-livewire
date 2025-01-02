<?php

namespace Database\Seeders;

use App\Models\Bedroom;
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

        for ($i = 0; $i < 10; $i++) {
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

        for ($i = 0; $i < 3; $i++) {
            Bedroom::create([
                'photo'    => fake()->imageUrl(),
                'name'        => fake()->word(1),
                'price'       => fake()->randomNumber(6, true),
                'type'        => "Standard Room",
                'description' => "Kamar standar dengan fasilitas dasar yang nyaman dan terjangkau.",
            ]);
        }

        User::create([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' =>  bcrypt('admin123'),
            'role'     => 'administrator',
        ]);

        User::create([
            'name'     => 'bapol',
            'email'    => 'bapol@gmail.com',
            'password' =>  bcrypt('bapol123'),
            'role'     => 'customer',
        ]);
    }
}
