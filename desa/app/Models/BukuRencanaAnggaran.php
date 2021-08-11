<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuRencanaAnggaran extends Model
{
    protected $table = 'c2_buku_rencana_anggaran';
    protected $fillable = [ 
        'id',
        'tahun_anggaran',
        'bidang',
        'kegiatan',  
        'waktu_pelaksanaan',
        'uraian',
        'volume',
        'harga_satuan',
        'jumlah',
        'created_at',
        'updated_at',
        ];
}
