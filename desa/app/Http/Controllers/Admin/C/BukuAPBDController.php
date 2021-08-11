<?php

namespace App\Http\Controllers\Admin\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuAPBD;
use App\Http\Controllers\Admin\AdminController;

class BukuAPBDController extends AdminController
{
    public function index()
    {
        
        
        $id_buku = 1;
        $buku_apbd = BukuAPBD::all();
        

        return view('admin.C.bukuAPBD.index', compact('buku_apbd', 'id_buku'));
    }

    public function create()
    {
       $buku_apbd = BukuAPBD::find(1);
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.C.bukuAPBD.create', compact('buku_apbd'));
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $buku_apbd = BukuAPBD::create($request->all());

        return redirect()->route('admin.buku_apbd.index');
    }

    public function edit(BukuAPBD $buku_apbd)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.C.bukuAPBD.edit', compact('buku_apbd'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuAPBD $buku_apbd)
    {
        

        $buku_apbd->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_apbd.index')->with($notification);
    }

    public function show(BukuAPBD $buku_apbd)
    {
        

        return view('admin.C.bukuAPBD.show', compact('buku_apbd'));
    }

    public function destroy($buku_apbd)
    {
        
        $query = BukuAPBD::find($buku_apbd);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuAPBD::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
