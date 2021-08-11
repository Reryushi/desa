<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuPendudukSementara extends Model
{
    protected $table = 'b4_buku_penduduk_sementara';
    protected $fillable = [ 
        'id',
        'nama_lengkap',
        'jenis_kelamin',  
        'nomor_identitas',  
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'kebangsaan',
        'keturunan',
        'datang_dari',
        'tujuan_kedatangan',
        'nama_didatangi',
        'alamat_didatangi',
        'tanggal_datang',
        'tanggal_pergi',
        
        
        'ket',
        ];
}
