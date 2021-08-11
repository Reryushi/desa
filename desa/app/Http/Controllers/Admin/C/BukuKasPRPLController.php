<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuKasPRPL;
use App\Http\Controllers\Admin\AdminController;

class BukuKasPRPLController extends AdminController
{
    public function index()
    {
        
        
        
        $buku_kas_prpl = BukuKasPRPL::all();
        $total_pemotongan = $buku_kas_prpl->sum('pemotongan');
        $total_penyetoran = $buku_kas_prpl->sum('penyetoran');
        $total_saldo = $buku_kas_prpl->sum('saldo');

        return view('admin.C.bukuKasPRPL.index', compact('buku_kas_prpl', 'total_pemotongan', 'total_penyetoran', 'total_saldo'));
    }

    public function create()
    {
    //    $buku_rencanaA = BukuRencanaAnggaran::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuKasPRPL.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        
        $buku_kas_prpl = BukuKasPRPL::create($request->all());

        return redirect()->route('admin.buku_kas_prpl.index');
    }

    public function edit(BukuKasPRPL $buku_kas_prpl)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuKasPRPL.edit', compact('buku_kas_prpl'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuKasPRPL $buku_kas_prpl)
    {
        

        $buku_kas_prpl->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_kas_prpl.index')->with($notification);
    }

    public function show(BukuKasPRPL $buku_kas_prpl)
    {
        

        return view('admin.C.bukuKasPRPL.show', compact('buku_kas_prpl'));
    }

    public function destroy($buku_kas_prpl)
    {
        
        $query = BukuKasPRPL::find($buku_kas_prpl);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuKasPRPL::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
