<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TanahDesa;
use App\Http\Controllers\Admin\AdminController;

class TanahDesaController extends AdminController
{
    public function index()
    {
     

        $tanahdesa = TanahDesa::all();

        return view('admin.A.tanahdesa.index', compact('tanahdesa'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.tanahdesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $tanahdesa = TanahDesa::create($request->all());

        return redirect()->route('admin.tanahdesa.index');
    }

    public function edit(TanahDesa $tanahdesa)
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.tanahdesa.edit', compact('tanahdesa'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, TanahDesa $tanahdesa)
    {
      

        $tanahdesa->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.tanahdesa.index')->with($notification);
    }

    public function show(TanahDesa $tanahdesa)
    {
       

        return view('admin.A.tanahdesa.show', compact('tanahdesa'));
    }

    public function destroy(TanahDesa $tanahdesa)
    {
        

        $tanahdesa->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        TanahDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
