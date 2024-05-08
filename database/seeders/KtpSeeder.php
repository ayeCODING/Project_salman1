<?php

namespace Database\Seeders;

use App\Models\Ktp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ktp::insert([
            'warga_id' => 1,
            'nik' => 1111,
        ]);

        Ktp::insert([
            'warga_id' => 2,
            'nik' => 2222,
        ]);

        Ktp::insert([
            'warga_id' => 3,
            'nik' => 3333,
        ]);

        Ktp::insert([
            'warga_id' => 4,
            'nik' => 4444,
        ]);

        Ktp::insert([
            'warga_id' => 5,
            'nik' => 5555,
        ]);
    }
}
