<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warga::insert([
            'nama' => "Salman Ay",
            'jenis_kelamin' => 0,
            'alamat' => "Cangkuang",
        ]);

        Warga::insert([
            'nama' => "Restu",
            'jenis_kelamin' => 0,
            'alamat' => "Katapang",
        ]);

        Warga::insert([
            'nama' => "Izzan",
            'jenis_kelamin' => 0,
            'alamat' => "Rancamanyar",
        ]);

        Warga::insert([
            'nama' => "Dzikri",
            'jenis_kelamin' => 0,
            'alamat' => "Rancamanyar",
        ]);

        Warga::insert([
            'nama' => "Saliman",
            'jenis_kelamin' => 0,
            'alamat' => "Seke awi",
        ]);
    }
}
