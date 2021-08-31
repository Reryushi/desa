<?php

namespace App\Http\Controllers\Admin\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;

class BukuIndukController extends AdminController
{
    public function index()
    {
        

        $induk = BukuIndukPenduduk::all();

        return view('admin.B.bukuInduk.index', compact('induk'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.B.bukuInduk.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        // $induk = BukuIndukPenduduk::create($request->all());
        $induk = new BukuIndukPenduduk();
        $induk->nama_lengkap = $request->input('nama_lengkap');
        $induk->jenis_kelamin = $request->input('jenis_kelamin');
        $induk->status_perkawinan = $request->input('status_perkawinan');
        $induk->tempat_lahir = $request->input('tempat_lahir');
        $tanggal=
        $induk->tanggal_lahir = $request->input('tanggal_lahir');
        $induk->agama = $request->input('agama');
        $induk->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $induk->pekerjaan = $request->input('pekerjaan');
        $induk->tidak_buta_huruf = $request->input('tidak_buta_huruf');
        $induk->wn = $request->input('wn');
        $induk->alamat = $request->input('alamat');
        $induk->status_di_kk = $request->input('status_di_kk');
        $nik=
        $induk->nik = $request->input('nik');
        $induk->nomor_kk = $request->input('nomor_kk');
        $induk->ket = $request->input('ket');
        $induk->password = bcrypt($tanggal.$nik);
        $induk->save();

        return redirect()->route('admin.buku_induk.index');
    }

    public function edit(BukuIndukPenduduk $buku_induk)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.B.bukuInduk.edit', compact('buku_induk'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, BukuIndukPenduduk $buku_induk)
    {
        

        $buku_induk->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.buku_induk.index')->with($notification);
    }

    public function show(BukuIndukPenduduk $induk)
    {
        

        return view('admin.B.bukuInduk.show', compact('induk'));
    }

    public function destroy($induk)
    {
        
        $query = BukuIndukPenduduk::find($induk);
        
        $query->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BukuIndukPenduduk::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
