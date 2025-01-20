<?php

namespace Database\Seeders;

use App\Models\Bedroom;
use App\Models\BedroomDetail;
use App\Models\Fintech;
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

        // $photo = 'ktp/ktp.jpg';
        $photo = url('seed/ktp/ktp.jpg');
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name'     => fake()->name,
                'email'    => fake()->email,
                'password' => fake()->password,
                'phone'    => fake()->phoneNumber,
                'address'  => fake()->address,
                'city'     => fake()->city,
                'state'    => fake()->state,
                'ktp'      => $photo,
                'role'     => 'customer',
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

        $photo = url('seed/bedroom/standar.webp');
        for ($i = 0; $i < 3; $i++) {
            Bedroom::create([
                'photo'       => $photo,
                'name'        => 'BEDROOM C' . ($i + 1),
                'price'       => 850000,
                'type'        => "Kamar Standar",
                'width'       => "3 x 2.5 meter",
                'description' => "Kamar standar dengan fasilitas dasar yang nyaman dan terjangkau.",
            ]);
        }
        $photo = url('seed/bedroom/mewah.webp');
        for ($i = 0; $i < 3; $i++) {
            Bedroom::create([
                'photo'       => $photo,
                'name'        => 'BEDROOM B' . ($i + 1),
                'price'       => 1500000,
                'type'        => "Kamar Mewah",
                'width'       => "3 x 2.5 meter",
                'description' => "Kamar Mewah dengan fasilitas lengkap untuk kenyamanan maksimal.",
            ]);
        }
        $photo = url('seed/bedroom/istimewa.webp');
        for ($i = 0; $i < 3; $i++) {
            Bedroom::create([
                'photo'       => $photo,
                'name'        => 'BEDROOM A' . ($i + 1),
                'price'       => 2100000,
                'type'        => "Kamar Istimewa",
                'width'       => "3 x 2.5 meter",
                'description' => "Kamar Istimewa dengan fasilitas premium untuk pengalaman tinggal yang mewah.",
            ]);
        }

        $facilities_standard = [
            'Kasur & Bantal',
            'Lemari',
            'Meja dan Kursi',
            'K. Mandi Dalam',
            'Kaca',
            'Tempat Sampah',
            'Listrik',
            'Stopkontak',
            'Jendela dan Tirai',
            'Kipas Angin',
        ];
        $facilities_luxury = [
            'Kasur & Bantal',
            'Lemari',
            'Meja dan Kursi',
            'K. Mandi Dalam',
            'Kaca',
            'Tempat Sampah',
            'Listrik',
            'Stopkontak',
            'Jendela dan Tirai',
            'TV',
            'WI-FI',
            'Rak Sepatu',
            'AC',
        ];
        $facilities_premium = [
            'Kasur & Bantal',
            'Lemari',
            'Meja dan Kursi',
            'K. Mandi Dalam',
            'Kaca',
            'Tempat Sampah',
            'Listrik',
            'Stopkontak',
            'Jendela dan Tirai',
            'TV',
            'WI-FI',
            'Rak Sepatu',
            'AC',
            'Dapur Pribadi',
        ];

        // Kamar Standar
        $bedrooms_standard = Bedroom::where('type', 'Kamar Standar')->get();
        foreach ($bedrooms_standard as $bedroom) {
            foreach ($facilities_standard as $facility) {
                BedroomDetail::create([
                    'bedroom_id' => $bedroom->id,
                    'facility'   => $facility,
                ]);
            }
        }

        // Kamar Mewah
        $bedrooms_luxury = Bedroom::where('type', 'Kamar Mewah')->get();
        foreach ($bedrooms_luxury as $bedroom) {
            foreach ($facilities_luxury as $facility) {
                BedroomDetail::create([
                    'bedroom_id' => $bedroom->id,
                    'facility'   => $facility,
                ]);
            }
        }

        // Kamar Istimewa
        $bedrooms_premium = Bedroom::where('type', 'Kamar Istimewa')->get();
        foreach ($bedrooms_premium as $bedroom) {
            foreach ($facilities_premium as $facility) {
                BedroomDetail::create([
                    'bedroom_id' => $bedroom->id,
                    'facility'   => $facility,
                ]);
            }
        }

        $photo = url('seed/fintech/bri.jpg');
        Fintech::create([
            'name'        => 'BRI',
            'description' => 623872957278248,
            'photo'       => $photo,
        ]);
        $photo = url('seed/fintech/bni.jpg');
        Fintech::create([
            'name'        => 'BNI',
            'description' => 3891462829,
            'photo'       => $photo,
        ]);
        $photo = url('seed/fintech/bci.jpg');
        Fintech::create([
            'name'        => 'BCA',
            'description' => 8712876471,
            'photo'       => $photo,
        ]);
        $photo = url('seed/fintech/mandiri.jpg');
        Fintech::create([
            'name'        => 'MANDIRI',
            'description' => 8001782381924,
            'photo'       => $photo,
        ]);
    }
}
