<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InventarisKekayaanDesa;
use App\Http\Controllers\Admin\AdminController;

class InventarisKekayaanController extends AdminController
{
    public function index()
    {
       

        $inventariskekayaan = InventarisKekayaanDesa::all();

        return view('admin.A.inventariskekayaan.index', compact('inventariskekayaan'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.inventariskekayaan.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
     

        $inventariskekayaan = InventarisKekayaanDesa::create($request->all());

        return redirect()->route('admin.inventariskekayaan.index');
    }

    public function edit(InventarisKekayaanDesa $inventariskekayaan)
    {
   
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.inventariskekayaan.edit', compact('inventariskekayaan'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, InventarisKekayaanDesa $inventariskekayaan)
    {
        

        $inventariskekayaan->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.inventariskekayaan.index')->with($notification);
    }

    public function show(InventarisKekayaanDesa $inventariskekayaan)
    {
        

        return view('admin.A.inventariskekayaan.show', compact('inventariskekayaan'));
    }

    public function destroy(InventarisKekayaanDesa $inventariskekayaan)
    {
      

        $inventariskekayaan->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        InventarisKekayaanDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
