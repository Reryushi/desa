<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuMutasiPenduduk extends Model
{
    protected $table = 'b2_buku_mutasi_penduduk';
    protected $fillable = [ 
        'id',
        'nama_lengkap',
        'jenis_kelamin',  
        'tempat_lahir',
        'tanggal_lahir',
        'wn',
        'datang_dari',
        'tanggal_datang',
        'pindah_ke',
        'tanggal_pindah',
        'meninggal',
        'tanggal_meninggal',
        
        
        'ket',
        ];
}
