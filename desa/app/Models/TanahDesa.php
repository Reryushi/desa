<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TanahDesa extends Model
{
    protected $table = 'a6_tanah_desa';
    protected $fillable = [ 
        'id',
        'nama_perorangan_badan_hukum',
        'jml',
        'status_hak_tanah',
        'penggunaan_tanah',
        'keterangan',
        ];
}
