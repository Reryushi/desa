<?php

namespace App\Http\Controllers\Admin\D;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InventarisHasilPembangunan;
use App\Http\Controllers\Admin\AdminController;

class InventarisHasilController extends AdminController
{
    public function index()
    {
    

        $inventarishasil = InventarisHasilPembangunan::all();

        return view('admin.D.inventarishasil.index', compact('inventarishasil'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.D.inventarishasil.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
       

        $inventarishasil = InventarisHasilPembangunan::create($request->all());

        return redirect()->route('admin.inventarishasil.index');
    }

    public function edit(InventarisHasilPembangunan $inventarishasil)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.D.inventarishasil.edit', compact('inventarishasil'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, InventarisHasilPembangunan $inventarishasil)
    {
        

        $inventarishasil->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.inventarishasil.index')->with($notification);
    }

    public function show(InventarisHasilPembangunan $inventarishasil)
    {
       

        return view('admin.D.inventarishasil.show', compact('inventarishasil'));
    }

    public function destroy(InventarisHasilPembangunan $inventarishasil)
    {
       

        $inventarishasil->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        InventarisHasilPembangunan::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
