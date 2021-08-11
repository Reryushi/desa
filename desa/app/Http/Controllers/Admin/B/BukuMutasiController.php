<?php

namespace App\Http\Controllers\Admin\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuMutasiPenduduk;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;

class BukuMutasiController extends AdminController
{
    public function index()
    {
        

        $mutasi = BukuMutasiPenduduk::all();

        return view('admin.B.bukuMutasi.index', compact('mutasi'));
    }

    public function create()
    {
       $induk = BukuIndukPenduduk::all();
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.B.bukuMutasi.create', compact('induk'));
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $mutasi = BukuMutasiPenduduk::create($request->all());

        return redirect()->route('admin.buku_mutasi.index');
    }

    public function edit(BukuMutasiPenduduk $buku_mutasi)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.B.bukuMutasi.edit', compact('buku_mutasi'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuMutasiPenduduk $buku_mutasi)
    {
        

        $buku_mutasi->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_mutasi.index')->with($notification);
    }

    public function show(BukuMutasiPenduduk $mutasi)
    {
        

        return view('admin.B.bukuMutasi.show', compact('mutasi'));
    }

    public function destroy($mutasi)
    {
        
        $query = BukuMutasiPenduduk::find($mutasi);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuMutasiPenduduk::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
