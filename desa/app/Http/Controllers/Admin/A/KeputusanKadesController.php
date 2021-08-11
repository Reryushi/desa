<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeputusanKades;
use App\Http\Controllers\Admin\AdminController;

class KeputusanKadesController extends AdminController
{
    public function index()
    {
       

        $keputusankadesa = KeputusanKades::all();

        return view('admin.A.keputusankadesa.index', compact('keputusankadesa'));
    }

    public function create()
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.keputusankadesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $keputusankadesa = KeputusanKades::create($request->all());

        return redirect()->route('admin.keputusankadesa.index');
    }

    public function edit(KeputusanKades $keputusankadesa)
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.keputusankadesa.edit', compact('keputusankadesa'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, KeputusanKades $keputusankadesa)
    {
       

        $keputusankadesa->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.keputusankadesa.index')->with($notification);
    }

    public function show(KeputusanKades $keputusankadesa)
    {
     

        return view('admin.A.keputusankadesa.show', compact('keputusankadesa'));
    }

    public function destroy(KeputusanKades $keputusankadesa)
    {
      

        $keputusankadesa->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        KeputusanKades::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
