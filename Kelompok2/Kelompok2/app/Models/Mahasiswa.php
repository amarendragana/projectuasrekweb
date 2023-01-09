<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model 
{
   
    protected $table = 'tabel_mahasiswa';

    protected $fillable = ['prodi_tujuan', 'nama_mahasiswa', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat_mahasiswa', 'no_telepon', 'email'];
     
}
