<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuIndukPenduduk extends Model
{
    protected $table = 'b1_buku_induk_penduduk';
    protected $fillable = [ 
        'id',
        'nama_lengkap',
        'jenis_kelamin',
        'status_perkawinan',  
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan_terakhir',
        'pekerjaan',
        'tidak_buta_huruf',
        'wn',
        'alamat',
        'status_di_kk',
        'nik',
        'nomor_kk',
        'ket',
        ];

    public function surat_ket_pengantar()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganPengantar');
    }

    public function surat_ket_penduduk()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganPenduduk');
    }

    public function surat_ket_kepolisian()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganKepolisian');
    }
}
