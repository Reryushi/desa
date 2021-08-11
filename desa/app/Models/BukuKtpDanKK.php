<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuKtpDanKK extends Model
{
    protected $table = 'b5_buku_ktp_dan_kk';
    protected $fillable = [ 
        'id',
        'no_kk',
        'nama_lengkap',
        'nik',
        'jenis_kelamin',    
        'tempat_lahir',
        'tanggal_lahir',
        'gol_darah',
        'agama',
        'pendidikan',
        'pekerjaan',
        'alamat',
        'status_perkawinan',
        'tempat_ektp_keluar',
        'tanggal_ektp_keluar',
        'status_hub_keluarga',
        'wn',
        'nama_ayah',
        'nama_ibu',
        'tgl_tinggal_didesa',
        
        'ket',
        ];
}
