<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LembarBeritaDesa;
use App\Http\Controllers\Admin\AdminController;

class LembarBeritaDesaController extends AdminController
{
    public function index()
    {
    

        $lembarberita = LembarBeritaDesa::all();

        return view('admin.A.lembarberita.index', compact('lembarberita'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.lembarberita.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
       

        $lembarberita = LembarBeritaDesa::create($request->all());

        return redirect()->route('admin.lembarberita.index');
    }

    public function edit($id)
    {
        $lembarberita = LembarBeritaDesa::find($id);
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        
        return view('admin.A.lembarberita.edit', compact('lembarberita'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, $id)
    {
       
        $lembarberita = LembarBeritaDesa::find($id);
        $lembarberita->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.lembarberita.index')->with($notification);
    }

    public function show($id)
    {
       
        $lembarberita = LembarBeritaDesa::find($id);

        return view('admin.A.lembarberita.show', compact('lembarberita'));
    }

    public function destroy($id)
    {
     
        $lembarberita = LembarBeritaDesa::find($id);

        $lembarberita->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        LembarBeritaDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
