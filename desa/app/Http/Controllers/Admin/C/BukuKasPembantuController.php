<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuKasPembantu;
use App\Http\Controllers\Admin\AdminController;

class BukuKasPembantuController extends AdminController
{
    public function index()
    {
        
        
        
        $buku_kasP = BukuKasPembantu::all();
        $jumlah_total = $buku_kasP->sum('saldo_kas');

        return view('admin.C.bukuKasP.index', compact('buku_kasP', 'jumlah_total'));
    }

    public function create()
    {
    //    $buku_rencanaA = BukuRencanaAnggaran::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuKasP.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        
        $buku_kasP = BukuKasPembantu::create($request->all());

        return redirect()->route('admin.buku_kasP.index');
    }

    public function edit(BukuKasPembantu $buku_kasP)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuKasP.edit', compact('buku_kasP'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuKasPembantu $buku_kasP)
    {
        

        $buku_kasP->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_kasP.index')->with($notification);
    }

    public function show(BukuKasPembantu $buku_kasP)
    {
        

        return view('admin.C.bukuKasP.show', compact('buku_kasP'));
    }

    public function destroy($buku_kasP)
    {
        
        $query = BukuKasPembantu::find($buku_kasP);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuKasPembantu::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
