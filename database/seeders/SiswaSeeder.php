<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama' => "Salman Ay",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Cangkuang"
        ]);
        Siswa::insert([
            'nama' => "Restu",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Katapang"
        ]);
        Siswa::insert([
            'nama' => "Izzan",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Rancamanyar"
        ]);
        Siswa::insert([
            'nama' => "Andika",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "rancamanyar"
        ]);
        Siswa::insert([
            'nama' => "Dzikri",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "rancamanyar"
        ]);
        Siswa::insert([
            'nama' => "zahra",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "rancamanyar"
        ]);
    }
}
