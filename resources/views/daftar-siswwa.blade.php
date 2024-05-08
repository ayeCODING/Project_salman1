@php

    $siswa = \App\Models\Siswa::all();
    $satuSiswaAwal = \App\Models\Siswa::first();
    $satuSiswaAkhir = \App\Models\Siswa::latest('id')->first();
    $siswaSatu = \App\Models\Siswa::find(10);
    $siswaLaki = \App\Models\Siswa::where('jenis_kelamin', 0)->get();

@endphp

{{-- menampilkan data --}}
@foreach ($siswa as $data)

         Nama siswa : {{ $data->nama }} <br>
         Jenis Kelamin : {{ $data->jenis_kelamin }} <br>
         Umur : {{ $data->umur }} <br>
         Alamat : {{ $data->alamat }} <br>
         <hr>

@endforeach

{{-- Siswa Awal--}}
<h1>Menampilkan siswa awal</h1>
Nama siswa : {{ $satuSiswaAwal->nama }} <br>
Jenis Kelamin : {{ $satuSiswaAwal->jenis_kelamin }} <br>
Umur : {{ $satuSiswaAwal->umur }} <br>
Alamat : {{ $satuSiswaAwal->alamat }} <br>
<hr>

<h1>Menampilkan siswa akhir</h1>
Nama siswa : {{ $satuSiswaAkhir->nama }} <br>
Jenis Kelamin : {{ $satuSiswaAkhir->jenis_kelamin }} <br>
Umur : {{ $satuSiswaAkhir->umur }} <br>
Alamat : {{ $satuSiswaAkhir->alamat }} <br>
<hr>

<h1>Menampilkan siswa satu</h1>
Nama siswa : {{ $siswaSatu->nama ?? 'tidak ditemukan'}} <br>
Jenis Kelamin : {{ $siswaSatu->jenis_kelamin ?? 'tidak ditemukan'}} <br>
Umur : {{ $siswaSatu->umur ?? 'tidak ditemukan'}} <br>
Alamat : {{ $siswaSatu->alamat ?? 'tidak ditemukan'}} <br>
<hr>

<h1>Menampilkan siswa laki</h1>
@foreach($siswaLaki as $data)
Nama siswa : {{ $data->nama}} <br>
Jenis Kelamin : {{ $data->jenis_kelamin}} <br>
Umur : {{ $data->umur}} <br>
Alamat : {{ $data->alamat}} <br>
<hr>
@endforeach
