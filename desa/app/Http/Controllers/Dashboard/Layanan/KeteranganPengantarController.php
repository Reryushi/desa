<?php

namespace App\Http\Controllers\Dashboard\Layanan;

use Illuminate\novay;
use Illuminate\Http\Request;
use App\Model_Layanan\KeteranganPengantar;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use WordTemplate;

class KeteranganPengantarController extends AdminController
{
    public function index()
    {
        $ket_pengantar = KeteranganPengantar::where('penduduk_id', Auth::user()->id)->get();

        return view('dashboard.layanan.keterangan_pengantar.index', compact('ket_pengantar'));


        
    }

    public function create()
    {
        $penduduk = BukuIndukPenduduk::all();
        return view('dashboard.layanan.keterangan_pengantar.template_surat', compact('penduduk'));
    }

    public function store(Request $request)
    {
        $file = public_path('/template_surat/surat_ket_pengantar.rtf');
        
        $id_surat = KeteranganPengantar::orderBy('id', 'desc')->first()->id;
        $jumlah = $id_surat + 1;

        $surat_template = new KeteranganPengantar();
        $surat_template->id = $request->input('id');
        $judul=
        $surat_template->judul = 'Surat Keterangan Pengantar';
        $nomor_surat=
        $surat_template->nomor_surat = $jumlah.'/B/2021';
        $penduduk_id=
        $surat_template->penduduk_id = Auth::id();
        $keperluan=
        $surat_template->keperluan = $request->input('keperluan');
        $tgl_surat=
        $surat_template->tgl_surat = Carbon::now();
        $surat_berakhir=
        $surat_template->surat_berakhir = Carbon::now()->addDays(7);
     
        $id_penduduk = $request->input('penduduk_id');
        $penduduk = BukuIndukPenduduk::find($id_penduduk);

        $surat_template->save();
    
        return redirect()->route('dashboard.surat_ket_pengantar.index');
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
        $file = public_path('/template_surat/surat_ket_pengantar.rtf');
        
        $surat_template = KeteranganPengantar::find($id);
     
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
            // '[usia]' => $penduduk->usia,
            '[warga_negara]' => $penduduk->wn,
            '[agama]' => $penduduk->agama,
            '[sex]' => $penduduk->jenis_kelamin,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[alamat]' => $penduduk->alamat,
            '[no_ktp]' => $penduduk->nik,
            '[no_kk]' => $penduduk->nomor_kk,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[keperluan]' => $surat_template->keperluan,

            '[tgl_surat]' => $surat_template->tgl_surat,
            '[mulai_berlaku]' => $surat_template->tgl_surat,
            '[tgl_akhir]' => $surat_template->surat_berakhir,
            '[gol_darah]' => '#',
            
        );
    
        $nama_file = 'surat_keterangan_pengantar_'.$surat_template->nomor_surat.'.doc';
        
        return WordTemplate::export($file, $array, $nama_file);
        return redirect('dashboard/layanan/surat_ket_pengantar');
    }

    
}


