<?php

namespace App\Http\Controllers\Admin\D;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RencanaKerjaPembangunan;
use App\Http\Controllers\Admin\AdminController;

class RencanaKerjaPembangunanController extends AdminController
{
    public function index()
    {
       

        $rencanakerja = RencanaKerjaPembangunan::all();

        return view('admin.D.rencanakerja.index', compact('rencanakerja'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.D.rencanakerja.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $rencanakerja = RencanaKerjaPembangunan::create($request->all());

        return redirect()->route('admin.rencanakerja.index');
    }

    public function edit(RencanaKerjaPembangunan $rencanakerja)
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.D.rencanakerja.edit', compact('rencanakerja'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, RencanaKerjaPembangunan $rencanakerja)
    {
      
        $rencanakerja->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.rencanakerja.index')->with($notification);
    }

    public function show(RencanaKerjaPembangunan $rencanakerja)
    {
        

        return view('admin.D.rencanakerja.show', compact('rencanakerja'));
    }

    public function destroy(RencanaKerjaPembangunan $rencanakerja)
    {
        

        $rencanakerja->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        RencanaKerjaPembangunan::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
