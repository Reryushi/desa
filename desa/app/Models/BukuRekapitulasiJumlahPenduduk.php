<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuRekapitulasiJumlahPenduduk extends Model
{
    protected $table = 'b3_buku_rekapitulasi_jumlah_penduduk';
    protected $fillable = [ 
        'id',
        'nama_dusun',
        'wna_awal_p',  
        'wna_awal_l',
        'wni_awal_p',
        'wni_awal_l',
        'jml_kk_awal',
        'jml_anggota_awal',
        'jml_jiwa_awal',
        'wna_lahir_l',
        'wna_lahir_p',
        'wni_lahir_l',
        'wni_lahir_p',
        'wna_datang_l',
        'wna_datang_p',
        'wni_datang_l',
        'wni_datang_p',
        'wna_meninggal_l',
        'wna_meninggal_p',
        'wni_meninggal_l',
        'wni_meninggal_p',
        'wna_pindah_l',
        'wna_pindah_p',
        'wni_pindah_l',
        'wni_pindah_p',
        'wna_akhir_l',
        'wna_akhir_p',
        'wni_akhir_l',
        'wni_akhir_p',
        'jml_kk_akhir',
        'jml_anggota_akhir',
        'jml_jiwa_akhir',
        'ket',
        ];
}
