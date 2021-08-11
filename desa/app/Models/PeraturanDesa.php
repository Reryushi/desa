<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanDesa extends Model
{
    protected $table = 'a1_peraturan_desa';
    protected $fillable = [ 
        'id',
        'jenis',
        'tgl_ditetapkan',
        'tentang',
        'uraian',
        'tgl_kesepakatan',
        'tgl_lapor',
        'tgl_undang_lembaran_desa',
        'tgl_undang_berita_desa',
        'keterangan',
        ];
}
