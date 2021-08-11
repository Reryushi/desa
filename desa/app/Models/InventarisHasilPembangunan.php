<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisHasilPembangunan extends Model
{
    protected $table = 'd3_inventaris_hasil_pembangunan';
    protected $fillable = [ 
        'id',
        'jenis_hasil_bangunan',
        'volume',
        'biaya',
        'lokasi',
        'keterangan',
        ];
}
