<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembarBeritaDesa extends Model
{
    protected $table = 'a9_lembar_berita_desa';
    protected $fillable = [ 
        'id',
        'jenis_peraturan',
        'tgl_ditetapkan',
        'tentang',
        'tgl_diundangkan',
        'nomor_diundangkan',
        'keterangan',
        ];
}
