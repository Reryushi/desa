<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'a7_agenda';
    protected $fillable = [ 
        'id',
        'tgl_penerimaan_pengiriman_surat',
        'nomor_masuk',
        'tgl_masuk',
        'pengirim_masuk',
        'isi_singkat_masuk',
        'nomor_keluar',
        'tgl_keluar',
        'ditujukan_keluar',
        'isi_surat_keluar',
        'keterangan',
        ];
}
