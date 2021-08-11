<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TanahKasDesa;
use App\Http\Controllers\Admin\AdminController;

class TanahKasDesaController extends AdminController
{
    public function index()
    {
       

        $tanahkasdesa = TanahKasDesa::all();

        return view('admin.A.tanahkasdesa.index', compact('tanahkasdesa'));
    }

    public function create()
    {
     
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.tanahkasdesa.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
      

        $tanahkasdesa = TanahKasDesa::create($request->all());

        return redirect()->route('admin.tanahkasdesa.index');
    }

    public function edit(TanahKasDesa $tanahkasdesa)
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.tanahkasdesa.edit', compact('tanahkasdesa'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, TanahKasDesa $tanahkasdesa)
    {
        

        $tanahkasdesa->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.tanahkasdesa.index')->with($notification);
    }

    public function show(TanahKasDesa $tanahkasdesa)
    {
       

        return view('admin.A.tanahkasdesa.show', compact('tanahkasdesa'));
    }

    public function destroy(TanahKasDesa $tanahkasdesa)
    {
        

        $tanahkasdesa->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        TanahKasDesa::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
