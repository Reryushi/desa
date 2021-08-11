<?php

namespace App\Model_Layanan;

use Illuminate\Database\Eloquent\Model;

class KeteranganPengantar extends Model
{
    protected $table = 's_ket_pengantar';

    public function penduduk()
    {
        return $this->belongsTo('App\Models\BukuIndukPenduduk');
    }
}
