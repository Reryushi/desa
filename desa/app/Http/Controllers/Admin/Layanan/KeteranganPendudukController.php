<?php

namespace App\Http\Controllers\Admin\Layanan;

use Illuminate\novay;
use Illuminate\Http\Request;
use App\Model_Layanan\KeteranganPenduduk;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use WordTemplate;

class KeteranganPendudukController extends AdminController
{
    public function index()
    {
        $ket_penduduk = KeteranganPenduduk::all();

        return view('layanan/keterangan_penduduk/index', compact('ket_penduduk'));


        
    }

    public function create()
    {
        return view('layanan/keterangan_penduduk/template_surat');
    }

    public function store(Request $request)
    {
        $file = public_path('/template_surat/surat_ket_penduduk.rtf');
        
        $surat_template = new KeteranganPenduduk();
        $surat_template->id = $request->input('id');
        $judul=
        $surat_template->judul = $request->input('judul');
        $nomor_surat=
        $surat_template->nomor_surat = $request->input('nomor_surat');
        $penduduk_id=
        $surat_template->penduduk_id = $request->input('penduduk_id');
        $keterangan=
        $surat_template->keterangan = $request->input('keterangan');
        $tgl_surat=
        $surat_template->tgl_surat = $request->input('tgl_surat');
        $surat_berakhir=
        $surat_template->surat_berakhir = $request->input('surat_berakhir');
     
        $id_penduduk = $request->input('penduduk_id');
        $penduduk = BukuIndukPenduduk::find($id_penduduk);
        
        $surat_template->save();
        $array = array(
            '[Sebutan_kabupaten]' => 'TBB',
            '[nama_kab]' => 'Tulang Bawang Barat',
            '[nama_kec]' => 'Tulang Bawang Udik',
            '[sebutan_desa]' => 'Desa Gunung Katun',
            '[nama_des]' => 'Gunung Katun Tanjungan',
            '[jabatan]' => 'jabatan',
            '[alamat_des]' => 'Kecamatan Tulang Bawang Udik, Kabupaten Tulang Bawang Barat, Provinsi Lampung, Indonesia.',
            '[nama_provinsi]' => 'Lampung',
            '[tertanda]' => 'kepala desa',
            '[nama_pamong]' => 'tester',
            '[pamong_nip]' => '1231451',
            '[kode_desa]' => '42',
            '[kode_surat]' => $nomor_surat,


            '[judul_surat]' => $judul,
            '[nomor_surat]' => $nomor_surat,
            '[nama]' => $penduduk->nama,
            '[ttl]' => $penduduk->tempat_lahir.','.$penduduk->tgl_lahir,
            '[usia]' => $penduduk->usia,
            '[warga_negara]' => $penduduk->warga_negara,
            '[agama]' => $penduduk->agama,
            '[sex]' => $penduduk->sex,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[alamat]' => $penduduk->alamat,
            '[no_ktp]' => $penduduk->no_ktp,
            '[no_kk]' => $penduduk->no_kk,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[keterangan]' => $keterangan,
            '[no_ktp]' => $penduduk->no_ktp,
            '[no_kk]' => $penduduk->no_kk,
            '[tgl_surat]' => $tgl_surat,
            '[mulai_berlaku]' => $tgl_surat,
            '[tgl_akhir]' => $surat_berakhir,
            '[gol_darah]' => $penduduk->gol_darah,
            
        );
    
        $nama_file = 'surat_keterangan_pengantar_'.$nomor_surat.'.doc';
        
        
        return redirect('admin/surat_ket_penduduk');
    }

    public function template(Request $request)
    {
    $file = public_path('/template_surat/surat_pernyataan.rtf');
    $nomor_surat='tes';
    $array = array(
        '[NOMOR_SURAT]' => $nomor_surat,
        '[PERUSAHAAN]' => 'CV. Borneo Teknomedia',
        '[NAMA]' => 'Melani Malik',
        '[NPM]' => '6472065508XXXX',
        '[ALAMAT]' => 'Jl. Manunggal Gg. 8 Loa Bakung, Samarinda',
        '[PERMOHONAN]' => 'Permohonan pengurusan pembuatan NPWP',
        '[KOTA]' => 'Samarinda',
        '[DIRECTOR]' => 'Noviyanto Rahmadi',
        '[TANGGAL]' => date('d F Y'),
    );

    $nama_file = 'surat-keterangan-kerja.doc';
        
    }

    public function show($id)
    {
        $file = public_path('/template_surat/surat_ket_penduduk.rtf');
        
        $surat_template = KeteranganPenduduk::find($id);
     
        $id_penduduk = $surat_template->penduduk_id;
        $penduduk = BukuIndukPenduduk::find($id_penduduk);
        
        $array = array(
            '[Sebutan_kabupaten]' => 'TBB',
            '[nama_kab]' => 'Tulang Bawang Barat',
            '[nama_kec]' => 'Tulang Bawang Udik',
            '[sebutan_desa]' => 'Desa Gunung Katun',
            '[nama_des]' => 'Gunung Katun Tanjungan',
            '[jabatan]' => 'jabatan',
            '[alamat_des]' => 'Kecamatan Tulang Bawang Udik, Kabupaten Tulang Bawang Barat, Provinsi Lampung, Indonesia.',
            '[nama_provinsi]' => 'Lampung',
            '[tertanda]' => 'kepala desa',
            '[nama_pamong]' => 'tester',
            '[pamong_nip]' => '1231451',
            '[kode_desa]' => '42',
            '[kode_surat]' => $surat_template->nomor_surat,


            '[judul_surat]' => $surat_template->judul,
            '[nomor_surat]' => $surat_template->nomor_surat,
            '[nama]' => $penduduk->nama_lengkap,
            '[ttl]' => $penduduk->tempat_lahir.','.$penduduk->tanggal_lahir,
            '[usia]' => $penduduk->usia,
            '[warga_negara]' => $penduduk->wn,
            '[agama]' => $penduduk->agama,
            '[sex]' => $penduduk->jenis_kelamin,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[alamat]' => $penduduk->alamat,
            '[no_ktp]' => $penduduk->nik,
            '[no_kk]' => $penduduk->nomor_kk,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[keterangan]' => $surat_template->keterangan,
            '[no_ktp]' => $penduduk->no_ktp,
            '[no_kk]' => $penduduk->no_kk,
            '[tgl_surat]' => $surat_template->tgl_surat,
            '[mulai_berlaku]' => $surat_template->tgl_surat,
            '[tgl_akhir]' => $surat_template->surat_berakhir,
            '[gol_darah]' => $penduduk->gol_darah,
            
        );
    
        $nama_file = 'surat_keterangan_penduduk_'.$surat_template->nomor_surat.'.doc';
        
        return WordTemplate::export($file, $array, $nama_file);
        return redirect('admin.surat_ket_penduduk');
    }

    
}


