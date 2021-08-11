<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KaderPemberdayaanMasy extends Model
{
    protected $table = 'd4_kader_pemberdayaan_masy';
    protected $fillable = [ 
        'id',
        'nama',
        'umur',
        'jenis_kelamin',
        'pendidikan_kursus',
        'bidang',
        'alamat',
        'keterangan',
        ];
}
