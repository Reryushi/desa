<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AparatDesa extends Model
{
    protected $table = 'a4_aparat_desa';
    protected $fillable = [ 
        'id',
        'nama',
        'niap',
        'nip',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'pangkat_golongan',
        'jabatan',
        'pend_terakhir',
        'tgl_keputusan_pengangkatan',
        'tgl_keputusan_pemberhentian',
        'keterangan',
        ];
}
