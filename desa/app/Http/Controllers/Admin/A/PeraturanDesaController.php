<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeraturanDesa;
use App\Http\Controllers\Admin\AdminController;

class PeraturanDesaController extends AdminController
{
    public function index()
    {
       

        $peraturandesa = PeraturanDesa::all();

        return view('admin.A.peraturandesa.index', compact('peraturandesa'));
    }

    public function create()
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.peraturandesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
       

        $peraturandesa = PeraturanDesa::create($request->all());

        return redirect()->route('admin.peraturandesa.index');
    }

    public function edit(PeraturanDesa $peraturandesa)
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.peraturandesa.edit', compact('peraturandesa'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, PeraturanDesa $peraturandesa)
    {
       

        $peraturandesa->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.peraturandesa.index')->with($notification);
    }

    public function show(PeraturanDesa $peraturandesa)
    {
     

        return view('admin.A.peraturandesa.show', compact('peraturandesa'));
    }

    public function destroy(PeraturanDesa $peraturandesa)
    {
        

        $peraturandesa->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        PeraturanDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
