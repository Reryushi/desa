<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuBankDesa;
use App\Http\Controllers\Admin\AdminController;

class BukuBankDesaController extends AdminController
{
    public function index()
    {
        
        
        
        $buku_bank = BukuBankDesa::all();
        // $total_pemotongan = $buku_bank->sum('pemotongan');
        // $total_penyetoran = $buku_bank->sum('penyetoran');
        $total_saldo = $buku_bank->sum('saldo');

        return view('admin.C.bukuBankDesa.index', compact('buku_bank', 'total_saldo'));
    }

    public function create()
    {
    //    $buku_rencanaA = BukuRencanaAnggaran::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuBankDesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        
        $buku_bank = BukuBankDesa::create($request->all());

        return redirect()->route('admin.buku_bank.index');
    }

    public function edit(BukuBankDesa $buku_bank)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuBankDesa.edit', compact('buku_bank'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuBankDesa $buku_bank)
    {
        

        $buku_bank->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_bank.index')->with($notification);
    }

    public function show(BukuBankDesa $buku_bank)
    {
        

        return view('admin.C.bukuBankDesa.show', compact('buku_bank'));
    }

    public function destroy($buku_bank)
    {
        
        $query = BukuBankDesa::find($buku_bank);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuBankDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
