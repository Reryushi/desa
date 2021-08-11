<?php

namespace App\Http\Controllers\Admin\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuPendudukSementara;
use App\Http\Controllers\Admin\AdminController;

class BukuPendudukSementaraController extends AdminController
{
    public function index()
    {
        

        $penduduk = BukuPendudukSementara::all();

        return view('admin.B.bukuSementara.index', compact('penduduk'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.B.bukuSementara.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $penduduk = BukuPendudukSementara::create($request->all());

        return redirect()->route('admin.buku_sementara.index');
    }

    public function edit(BukuPendudukSementara $buku_sementara)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.B.bukuSementara.edit', compact('buku_sementara'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuPendudukSementara $buku_sementara)
    {
        

        $buku_sementara->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_sementara.index')->with($notification);
    }

    public function show(BukuPendudukSementara $penduduk)
    {
        

        return view('admin.B.bukuSementara.show', compact('penduduk'));
    }

    public function destroy($penduduk)
    {
        
        $query = BukuPendudukSementara::find($penduduk);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuPendudukSementara::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
