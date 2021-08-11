<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuBankDesa extends Model
{
    protected $table = 'c6_buku_bank_desa';
    protected $fillable = [ 
        'id',
        'tahun_anggaran',
        'bulan',  
        'bank_cabang',
        'rek_no',
        'tanggal',  
        'uraian',
        'bukti',
        'setoran',
        'bunga',
        'penarikan',
        'pajak',
        'biaya',
        'saldo',
        'created_at',
        'updated_at',
        ];
}
