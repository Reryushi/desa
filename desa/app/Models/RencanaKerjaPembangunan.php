<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RencanaKerjaPembangunan extends Model
{
    protected $table = 'd1_rencana_kerja_pembangunan';
    protected $fillable = [ 
        'id',
        'nama_proyek_kegiatan',
        'lokasi',
        'sumber_biaya',
        'jumlah',
        'pelaksana',
        'manfaat',
        'keterangan',
        ];
}
