<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekspedisi;
use App\Http\Controllers\Admin\AdminController;

class EkspedisiController extends AdminController
{
    public function index()
    {
       

        $ekspedisi = Ekspedisi::all();

        return view('admin.A.ekspedisi.index', compact('ekspedisi'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.ekspedisi.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
     

        $ekspedisi = Ekspedisi::create($request->all());

        return redirect()->route('admin.ekspedisi.index');
    }

    public function edit(Ekspedisi $ekspedisi)
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.ekspedisi.edit', compact('ekspedisi'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, Ekspedisi $ekspedisi)
    {
       
        $ekspedisi->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.ekspedisi.index')->with($notification);
    }

    public function show(Ekspedisi $ekspedisi)
    {
        

        return view('admin.A.ekspedisi.show', compact('ekspedisi'));
    }

    public function destroy(Ekspedisi $ekspedisi)
    {
     

        $ekspedisi->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Ekspedisi::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
