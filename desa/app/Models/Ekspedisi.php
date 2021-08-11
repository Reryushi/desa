<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    protected $table = 'a8_ekspedisi';
    protected $fillable = [ 
        'id',
        'tgl_pengiriman',
        'tgl_surat',
        'nomor_surat',
        'isi_singkat_surat',
        'ditujukan_kepada',
        'keterangan',
        ];
}
