<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuKasPRPL extends Model
{
    protected $table = 'c5_buku_kas_prpl';
    protected $fillable = [ 
        'id',
        'tahun_anggaran',
        'tanggal',  
        'pajak',
        'retribusi',
        'pl',
        'pemotongan',
        'penyetoran',
        'saldo',
        'created_at',
        'updated_at',
        ];
}
