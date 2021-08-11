<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuKasPembantu extends Model
{
    protected $table = 'c3_buku_kas_pembantu';
    protected $fillable = [ 
        'id',
        'bidang',
        'kegiatan',  
        'tanggal',
        'uraian',
        'dari_bendahara',
        'swadaya_masyarakat',
        'nomor_bukti',
        'beli_barang_jasa',
        'beli_modal',
        'pengembalian_ke_bendahara',
        'saldo_kas',
        'created_at',
        'updated_at',
        ];
}
