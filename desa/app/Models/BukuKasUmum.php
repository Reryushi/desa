<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuKasUmum extends Model
{
    protected $table = 'c4_buku_kas_umum';
    protected $fillable = [ 
        'id',
        'tahun_anggaran',
        'tanggal',  
        'kode_rekening',
        'uraian',
        'penerimaan',
        'pengeluaran',
        'no_bukti',
        'pengeluaran_komulatif',
        'saldo',
        'created_at',
        'updated_at',
        ];
}
