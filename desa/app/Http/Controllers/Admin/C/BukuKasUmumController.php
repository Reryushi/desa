<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuKasUmum;
use App\Http\Controllers\Admin\AdminController;

class BukuKasUmumController extends AdminController
{
    public function index()
    {
        
        
        
        $buku_kas_umum = BukuKasUmum::all();
        $total_penerimaan = $buku_kas_umum->sum('penerimaan');
        $total_pengeluaran = $buku_kas_umum->sum('pengeluaran');

        return view('admin.C.bukuKasUmum.index', compact('buku_kas_umum', 'total_penerimaan', 'total_pengeluaran'));
    }

    public function create()
    {
    //    $buku_rencanaA = BukuRencanaAnggaran::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuKasUmum.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        
        $buku_kas_umum = BukuKasUmum::create($request->all());

        return redirect()->route('admin.buku_kas_umum.index');
    }

    public function edit(BukuKasUmum $buku_kas_umum)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuKasUmum.edit', compact('buku_kas_umum'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuKasUmum $buku_kas_umum)
    {
        

        $buku_kas_umum->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_kas_umum.index')->with($notification);
    }

    public function show(BukuKasUmum $buku_kas_umum)
    {
        

        return view('admin.C.bukuKasUmum.show', compact('buku_kas_umum'));
    }

    public function destroy($buku_kas_umum)
    {
        
        $query = BukuKasUmum::find($buku_kas_umum);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuKasUmum::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
