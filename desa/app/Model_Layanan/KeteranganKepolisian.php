<?php

namespace App\Model_Layanan;

use Illuminate\Database\Eloquent\Model;

class KeteranganKepolisian extends Model
{
    protected $table = 's_ket_kepolisian';

    public function penduduk()
    {
        return $this->belongsTo('App\Models\BukuIndukPenduduk');
    }
}
