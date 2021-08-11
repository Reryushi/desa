<?php

namespace App\Http\Controllers\Admin\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuRekapitulasiJumlahPenduduk;
use App\Http\Controllers\Admin\AdminController;

class BukuRekapitulasiController extends AdminController
{
    public function index()
    {
        

        $rekapitulasi = BukuRekapitulasiJumlahPenduduk::all();

        return view('admin.B.bukuRekapitulasi.index', compact('rekapitulasi'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.B.bukuRekapitulasi.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        $rekapitulasi = new BukuRekapitulasiJumlahPenduduk();
        
        $jml_jiwa_awal = $request->input('jml_kk_awal') + $request->input('jml_anggota_awal');
        $jml_jiwa_akhir = $request->input('jml_kk_akhir') + $request->input('jml_anggota_akhir');

        $rekapitulasi->nama_dusun = $request->input('nama_dusun');

        $rekapitulasi->wna_awal_l = $request->input('wna_awal_l');
        $rekapitulasi->wna_awal_p = $request->input('wna_awal_p');
        $rekapitulasi->wni_awal_l = $request->input('wni_awal_l');
        $rekapitulasi->wni_awal_p = $request->input('wni_awal_p');

        $rekapitulasi->jml_kk_awal = $request->input('jml_kk_awal');
        $rekapitulasi->jml_anggota_awal = $request->input('jml_anggota_awal');
        $rekapitulasi->jml_jiwa_awal = $jml_jiwa_awal;

        $rekapitulasi->wna_lahir_l = $request->input('wna_lahir_l');
        $rekapitulasi->wna_lahir_p = $request->input('wna_lahir_p');
        $rekapitulasi->wni_lahir_l = $request->input('wni_lahir_l');
        $rekapitulasi->wni_lahir_p = $request->input('wni_lahir_p');

        $rekapitulasi->wna_datang_l = $request->input('wna_datang_l');
        $rekapitulasi->wna_datang_p = $request->input('wna_datang_p');
        $rekapitulasi->wni_datang_l = $request->input('wni_datang_l');
        $rekapitulasi->wni_datang_p = $request->input('wni_datang_p');

        $rekapitulasi->wna_meninggal_l = $request->input('wna_meninggal_l');
        $rekapitulasi->wna_meninggal_p = $request->input('wna_meninggal_p');
        $rekapitulasi->wni_meninggal_l = $request->input('wni_meninggal_l');
        $rekapitulasi->wni_meninggal_p = $request->input('wni_meninggal_p');

        $rekapitulasi->wna_pindah_l = $request->input('wna_pindah_l');
        $rekapitulasi->wna_pindah_p = $request->input('wna_pindah_p');
        $rekapitulasi->wni_pindah_l = $request->input('wni_pindah_l');
        $rekapitulasi->wni_pindah_p = $request->input('wni_pindah_p');

        $rekapitulasi->wna_akhir_l = $request->input('wna_akhir_l');
        $rekapitulasi->wna_akhir_p = $request->input('wna_akhir_p');
        $rekapitulasi->wni_akhir_l = $request->input('wni_akhir_l');
        $rekapitulasi->wni_akhir_p = $request->input('wni_akhir_p');

        $rekapitulasi->jml_kk_akhir = $request->input('jml_kk_akhir');
        $rekapitulasi->jml_anggota_akhir = $request->input('jml_anggota_akhir');
        $rekapitulasi->jml_jiwa_akhir = $jml_jiwa_akhir;

        $rekapitulasi->ket = $request->input('ket');

        $rekapitulasi->save();


        return redirect()->route('admin.buku_rekapitulasi.index');
    }

    public function edit(BukuRekapitulasiJumlahPenduduk $buku_rekapitulasi)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.B.bukuRekapitulasi.edit', compact('buku_rekapitulasi'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, $buku_rekapitulasi)
    {
        

        $rekapitulasi = BukuRekapitulasiJumlahPenduduk::find($buku_rekapitulasi);

        $jml_jiwa_awal = $request->input('jml_kk_awal') + $request->input('jml_anggota_awal');
        $jml_jiwa_akhir = $request->input('jml_kk_akhir') + $request->input('jml_anggota_akhir');

        $rekapitulasi->nama_dusun = $request->input('nama_dusun');

        $rekapitulasi->wna_awal_l = $request->input('wna_awal_l');
        $rekapitulasi->wna_awal_p = $request->input('wna_awal_p');
        $rekapitulasi->wni_awal_l = $request->input('wni_awal_l');
        $rekapitulasi->wni_awal_p = $request->input('wni_awal_p');

        $rekapitulasi->jml_kk_awal = $request->input('jml_kk_awal');
        $rekapitulasi->jml_anggota_awal = $request->input('jml_anggota_awal');
        $rekapitulasi->jml_jiwa_awal = $jml_jiwa_awal;

        $rekapitulasi->wna_lahir_l = $request->input('wna_lahir_l');
        $rekapitulasi->wna_lahir_p = $request->input('wna_lahir_p');
        $rekapitulasi->wni_lahir_l = $request->input('wni_lahir_l');
        $rekapitulasi->wni_lahir_p = $request->input('wni_lahir_p');

        $rekapitulasi->wna_datang_l = $request->input('wna_datang_l');
        $rekapitulasi->wna_datang_p = $request->input('wna_datang_p');
        $rekapitulasi->wni_datang_l = $request->input('wni_datang_l');
        $rekapitulasi->wni_datang_p = $request->input('wni_datang_p');

        $rekapitulasi->wna_meninggal_l = $request->input('wna_meninggal_l');
        $rekapitulasi->wna_meninggal_p = $request->input('wna_meninggal_p');
        $rekapitulasi->wni_meninggal_l = $request->input('wni_meninggal_l');
        $rekapitulasi->wni_meninggal_p = $request->input('wni_meninggal_p');

        $rekapitulasi->wna_pindah_l = $request->input('wna_pindah_l');
        $rekapitulasi->wna_pindah_p = $request->input('wna_pindah_p');
        $rekapitulasi->wni_pindah_l = $request->input('wni_pindah_l');
        $rekapitulasi->wni_pindah_p = $request->input('wni_pindah_p');

        $rekapitulasi->wna_akhir_l = $request->input('wna_akhir_l');
        $rekapitulasi->wna_akhir_p = $request->input('wna_akhir_p');
        $rekapitulasi->wni_akhir_l = $request->input('wni_akhir_l');
        $rekapitulasi->wni_akhir_p = $request->input('wni_akhir_p');

        $rekapitulasi->jml_kk_akhir = $request->input('jml_kk_akhir');
        $rekapitulasi->jml_anggota_akhir = $request->input('jml_anggota_akhir');
        $rekapitulasi->jml_jiwa_akhir = $jml_jiwa_akhir;

        $rekapitulasi->ket = $request->input('ket');

        $rekapitulasi->save();

        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_rekapitulasi.index')->with($notification);
    }

    public function show(BukuRekapitulasiJumlahPenduduk $rekapitulasi)
    {
        

        return view('admin.B.bukuRekapitulasi.show', compact('rekapitulasi'));
    }

    public function destroy($buku_rekapitulasi)
    {
        
        $query = BukuRekapitulasiJumlahPenduduk::find($buku_rekapitulasi);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuRekapitulasiJumlahPenduduk::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
