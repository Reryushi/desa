<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanPembangunan extends Model
{
    protected $table = 'd2_kegiatan_pembangunan';
    protected $fillable = [ 
        'id',
        'nama_proyek_kegiatan',
        'volume',
        'sumber_dana',
        'jumlah',
        'waktu',
        'sifat_proyek',
        'pelaksana',
        'keterangan',
        ];
}
