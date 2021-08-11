<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuRencanaAnggaran;
use App\Http\Controllers\Admin\AdminController;

class BukuRencanaAnggaranController extends AdminController
{
    public function index()
    {
        
        
        
        $buku_rencanaA = BukuRencanaAnggaran::all();
        $jumlah_total = $buku_rencanaA->sum('jumlah');

        return view('admin.C.bukuRencanaA.index', compact('buku_rencanaA', 'jumlah_total'));
    }

    public function create()
    {
    //    $buku_rencanaA = BukuRencanaAnggaran::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuRencanaA.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        
        $rencanaA = new BukuRencanaAnggaran();
            $rencanaA->tahun_anggaran = $request->input('tahun_anggaran');
            $rencanaA->bidang = $request->input('bidang');
            $rencanaA->kegiatan = $request->input('kegiatan');
            $rencanaA->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
            $rencanaA->uraian = $request->input('uraian');
            $v=
            $rencanaA->volume = $request->input('volume');
            $h=
            $rencanaA->harga_satuan = $request->input('harga_satuan');
            $rencanaA->jumlah = $v * $h;

            $rencanaA->save();

        return redirect()->route('admin.buku_rencanaA.index');
    }

    public function edit(BukuRencanaAnggaran $buku_rencanaA)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuRencanaA.edit', compact('buku_rencanaA'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, $buku_rencanaA)
    {
        
        $rencanaA = BukuRencanaAnggaran::find($buku_rencanaA);
            $rencanaA->tahun_anggaran = $request->input('tahun_anggaran');
            $rencanaA->bidang = $request->input('bidang');
            $rencanaA->kegiatan = $request->input('kegiatan');
            $rencanaA->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
            $rencanaA->uraian = $request->input('uraian');
            $v=
            $rencanaA->volume = $request->input('volume');
            $h=
            $rencanaA->harga_satuan = $request->input('harga_satuan');
            $rencanaA->jumlah = $v * $h;

            $rencanaA->save();
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_rencanaA.index')->with($notification);
    }

    public function show(BukuRencanaAnggaran $buku_rencanaA)
    {
        

        return view('admin.C.bukuRencanaA.show', compact('buku_rencanaA'));
    }

    public function destroy($buku_rencanaA)
    {
        
        $query = BukuRencanaAnggaran::find($buku_rencanaA);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuRencanaAnggaran::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
