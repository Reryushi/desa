<?php

namespace App\Model_Layanan;

use Illuminate\Database\Eloquent\Model;

class KeteranganPenduduk extends Model
{
    protected $table = 's_ket_penduduk';



    public function penduduk()
    {
        return $this->belongsTo('App\Models\BukuIndukPenduduk');
    }
}
