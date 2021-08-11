<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AparatDesa;
use App\Http\Controllers\Admin\AdminController;

class AparatDesaController extends AdminController
{
    public function index()
    {
        

        $aparatdesa = AparatDesa::all();

        return view('admin.A.aparatdesa.index', compact('aparatdesa'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.aparatdesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $aparatdesa = AparatDesa::create($request->all());

        return redirect()->route('admin.aparatdesa.index');
    }

    public function edit(AparatDesa $aparatdesa)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.aparatdesa.edit', compact('aparatdesa'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, AparatDesa $aparatdesa)
    {
        

        $aparatdesa->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.aparatdesa.index')->with($notification);
    }

    public function show(AparatDesa $aparatdesa)
    {
       

        return view('admin.A.aparatdesa.show', compact('aparatdesa'));
    }

    public function destroy(AparatDesa $aparatdesa)
    {
        

        $aparatdesa->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        AparatDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
