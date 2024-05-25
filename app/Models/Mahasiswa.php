<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'nim'];
    public $timestamps = true;

    /*
     * Relasi One-to-One
     * =================
     * Buat function bernama wali(),
     * dimana model 'Mahasiswa'
     * memiliki relasi One-to-One
     * terhadap model 'Wali' melalui 'id_mahasiswa'
    */

    public function wali()
    {
        return $this->hasOne(Wali::class, 'id_mahasiswa');
    }

    //one to many
    public function dosen()
    {
        //model Mahasiswa bisa memiliki (relasi one to many)
        //oleh model Dosen melalui fk 'id_dosen'
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    //relasi many to many
    public function hobi()
    {
        //model mahasiswa memiliki relasi many to many
        //dengan model hobi melalui table pivot 'mahasiswa_hobi'
        //yang mewakili 2fk id_mahasiswa & id_hobi
        return $this->belongsToMany(Hobi::class,
        'mahasiswa_hobi',
        'id_mahasiswa',
        'id_hobi');
    }
}
