<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisKekayaanDesa extends Model
{
    protected $table = 'a3_inventaris_kekayaan_desa';
    protected $fillable = [ 
        'id',
        'jenis_barang_bangunan',
        'asal_barang_bangunan',
        'asal_keadaan_barang',
        'penghapusan_barang_bangunan',
        'tgl_penghapusan',
        'penghapusan_keadaan_barang',
        'keterangan',
        ];
}
