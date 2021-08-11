<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeputusanKades extends Model
{
    protected $table = 'a2_keputusan_kades';
    protected $fillable = [ 
        'id',
        'tgl_keputusan_kades',
        'tentang',
        'uraian',
        'tgl_lapor',
        'keterangan',
        ];
}
