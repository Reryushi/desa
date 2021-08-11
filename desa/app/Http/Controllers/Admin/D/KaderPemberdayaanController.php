<?php

namespace App\Http\Controllers\Admin\D;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KaderPemberdayaanMasy;
use App\Http\Controllers\Admin\AdminController;

class KaderPemberdayaanController extends AdminController
{
    public function index()
    {
        

        $kaderpemberdayaan = KaderPemberdayaanMasy::all();

        return view('admin.D.kaderpemberdayaan.index', compact('kaderpemberdayaan'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.D.kaderpemberdayaan.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $kaderpemberdayaan = KaderPemberdayaanMasy::create($request->all());

        return redirect()->route('admin.kaderpemberdayaan.index');
    }

    public function edit(KaderPemberdayaanMasy $kaderpemberdayaan)
    {
      
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.D.kaderpemberdayaan.edit', compact('kaderpemberdayaan'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, KaderPemberdayaanMasy $kaderpemberdayaan)
    {
      
        $kaderpemberdayaan->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.kaderpemberdayaan.index')->with($notification);
    }

    public function show(KaderPemberdayaanMasy $kaderpemberdayaan)
    {
       

        return view('admin.D.kaderpemberdayaan.show', compact('kaderpemberdayaan'));
    }

    public function destroy(KaderPemberdayaanMasy $kaderpemberdayaan)
    {
      

        $kaderpemberdayaan->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        KaderPemberdayaanMasy::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
