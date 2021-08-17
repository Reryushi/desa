<?php

namespace App\Model_Layanan;

use Illuminate\Database\Eloquent\Model;

class SuratUmum extends Model
{
    protected $table = 'surat_umum';

    public function penduduk()
    {
        return $this->belongsTo('App\Models\BukuIndukPenduduk');
    }
}
