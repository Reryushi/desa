<?php

namespace App\Http\Controllers\Admin\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuKtpDanKK;
use App\Http\Controllers\Admin\AdminController;

class BukuKtpKKController extends AdminController
{
    public function index()
    {
        

        $ktp_kk = BukuKtpDanKK::all();

        return view('admin.B.bukuKtpKK.index', compact('ktp_kk'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.B.bukuKtpKK.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $ktp_kk = BukuKtpDanKK::create($request->all());

        return redirect()->route('admin.buku_ktp.index');
    }

    public function edit(BukuKtpDanKK $buku_ktp)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.B.bukuKtpKK.edit', compact('buku_ktp'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuKtpDanKK $buku_ktp)
    {
        

        $buku_ktp->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_ktp.index')->with($notification);
    }

    public function show(BukuKtpDanKK $ktp_kk)
    {
        

        return view('admin.B.bukuKtpKK.show', compact('ktp_kk'));
    }

    public function destroy($ktp_kk)
    {
        
        $query = BukuKtpDanKK::find($ktp_kk);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuKtpDanKK::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
