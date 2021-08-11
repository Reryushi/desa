<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TanahKasDesa extends Model
{
    protected $table = 'a5_tanah_kas_desa';
    protected $fillable = [ 
        'id',
        'asal_tanah_kas',
        'luas',
        'kelas',
        'perolehan_tanah',
        'tgl_perolehan',
        'jenis_tanah',
        'patok_tanda_batas',
        'papan_nama',
        'lokasi',
        'peruntukan',
        'mutasi',
        'keterangan',
        ];
}
