<?php
namespace App\Http\Controllers\Admin\D;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatanPembangunan;
use App\Http\Controllers\Admin\AdminController;

class kegiatanPembangunanController extends AdminController
{
    public function index()
    {
  

        $kegiatanpembangunan = kegiatanPembangunan::all();

        return view('admin.D.kegiatanpembangunan.index', compact('kegiatanpembangunan'));
    }

    public function create()
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.D.kegiatanpembangunan.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $kegiatanpembangunan = kegiatanPembangunan::create($request->all());

        return redirect()->route('admin.kegiatanpembangunan.index');
    }

    public function edit(kegiatanPembangunan $kegiatanpembangunan)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.D.kegiatanpembangunan.edit', compact('kegiatanpembangunan'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, kegiatanPembangunan $kegiatanpembangunan)
    {
       

        $kegiatanpembangunan->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.kegiatanpembangunan.index')->with($notification);
    }

    public function show(kegiatanPembangunan $kegiatanpembangunan)
    {
        

        return view('admin.D.kegiatanpembangunan.show', compact('kegiatanpembangunan'));
    }

    public function destroy(kegiatanPembangunan $kegiatanpembangunan)
    {
       

        $kegiatanpembangunan->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        kegiatanPembangunan::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
