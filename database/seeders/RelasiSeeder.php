<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import models
use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Hobi;
use DB;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();

        //sample data dosen disini
        $dosen = Dosen::create([
            'nama'=>'Yulianto',
            'nipd'=>'123456789'
        ]);
        $this->command->info('Dosen telah diisi!');

        //sample data mahasiswa disini
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_Dosen'=> $dosen->id,
        ));

        #Mahasiswa Kedua bernama Djaffar
        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_Dosen'=> $dosen->id,
        ));

        #Mahasiswa Ketiga bernama Aye
        $aye = Mahasiswa::create(array(
            'nama' => 'Salman Ananda YuStie',
            'nim' => '1015015016',
            'id_Dosen'=> $dosen->id,
        ));

        # Informasi ketika mahasiswa telah diisi.
        $this->command->info('Mahasiswa telah diisi!');

        //sample data wali disini

        # Ciptakan wali si $novay
        Wali::create(array(
            'nama' => 'Sugiono',
            'id_mahasiswa' => $novay->id,
        ));

        # Ciptakan wali si $dije
         Wali::create(array(
            'nama' => 'Jhonwick',
            'id_mahasiswa' => $dije->id,
        ));

        # Ciptakan wali si $aye
        Wali::create(array(
            'nama' => 'Rhon',
            'id_mahasiswa' => $aye->id,
        ));

        $this->command->info('Data mahasiswa dan wali telah diisi!');

        //sampe hobi
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        $mandi_hujan = hobi::create(['hobi' => 'Mandi Hujan']);
        $baca_buku = hobi::create(['hobi' => 'Baca Buku']);

        //melampirkan hobi ke mahasiswa
        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $aye->hobi()->attach($baca_buku->id);

        $this->command->info('Data hobi telah diisi!');

    }
}
