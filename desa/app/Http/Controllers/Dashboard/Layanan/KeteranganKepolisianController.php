<?php

namespace App\Http\Controllers\Dashboard\Layanan;

use Illuminate\novay;
use Illuminate\Http\Request;
use App\Model_Layanan\KeteranganKepolisian;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use WordTemplate;

class KeteranganKepolisianController extends AdminController
{
    public function index()
    {
        $ket_kepolisian = KeteranganKepolisian::where('penduduk_id', Auth::user()->id)->get();

        return view('dashboard.layanan.keterangan_kepolisian.index', compact('ket_kepolisian'));


        
    }

    public function create()
    {
        return view('dashboard.layanan.keterangan_kepolisian.template_surat');
    }

    public function store(Request $request)
    {
        $file = public_path('/template_surat/surat_ket_catatan_kriminal.rtf');
        
        $surat_template = new KeteranganKepolisian();
        $id_surat = KeteranganKepolisian::orderBy('id', 'desc')->first()->id;
        $jumlah = $id_surat + 1;

        $surat_template->id = $request->input('id');
        $judul=
        $surat_template->judul = 'Surat Keterangan Catatan Kepolisian';
        $nomor_surat=
        $surat_template->nomor_surat = $jumlah.'/A/2021';
        $penduduk_id=
        $surat_template->penduduk_id = Auth::id();
        $form_keterangan=
        $surat_template->form_keterangan = $request->input('form_keterangan');
        $tgl_surat=
        $surat_template->tgl_surat = Carbon::now();
        $surat_berakhir=
        $surat_template->surat_berakhir = Carbon::now()->addDays(7);
     
        $id_penduduk = $request->input('penduduk_id');
        $penduduk = BukuIndukPenduduk::find($id_penduduk);
        
        $surat_template->save();
       
        
        return redirect()->route('dashboard.surat_ket_catatan_kepolisian.index');
        
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
        $file = public_path('/template_surat/surat_ket_catatan_kriminal.rtf');
        
        $surat_template = KeteranganKepolisian::find($id);
     
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
            '[kepala_kk]' => '-',


            '[judul_surat]' => $surat_template->judul,
            '[nomor_surat]' => $surat_template->nomor_surat,
            '[nama]' => $penduduk->nama_lengkap,
            '[ttl]' => $penduduk->tempat_lahir.', '.$penduduk->tanggal_lahir,
            '[usia]' =>   Carbon::parse($penduduk->tanggal_lahir)->age,
            '[warga_negara]' => $penduduk->wn,
            '[agama]' => $penduduk->agama,
            '[sex]' => $penduduk->jenis_kelamin,
            '[status]' => $penduduk->status_di_kk,
            '[pendidikan]' => $penduduk->pendidikan,
            '[alamat]' => $penduduk->alamat,
            '[no_ktp]' => $penduduk->nik,
            '[no_kk]' => $penduduk->nomor_kk,
            '[pekerjaan]' => $penduduk->pekerjaan,
            '[form_keterangan]' => $surat_template->form_keterangan,
            '[tgl_surat]' => $surat_template->tgl_surat,
            '[mulai_berlaku]' => $surat_template->tgl_surat,
            '[tgl_akhir]' => $surat_template->surat_berakhir,
            '[gol_darah]' => '#',
            
        );
    
        $nama_file = 'surat_keterangan_catatan_kriminal'.$surat_template->nomor_surat.'.doc';
        
        return WordTemplate::export($file, $array, $nama_file);
        return redirect('dashboard/layanan/surat_ket_catatan_kepolisian');
    }

    
}


