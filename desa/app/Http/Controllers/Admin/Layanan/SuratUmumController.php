<?php

namespace App\Http\Controllers\Admin\Layanan;

use Illuminate\novay;
use Illuminate\Http\Request;
use App\Model_Layanan\SuratUmum;
use App\Models\BukuIndukPenduduk;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use WordTemplate;

class SuratUmumController extends AdminController
{
    public function index()
    {
        $surat_umum = SuratUmum::orderBy('created_at', 'desc')->get();

        return view('layanan.keterangan_kepolisian.index', compact('surat_umum'));


        
    }

    public function approve($id)
    {
        $surat_umum = SuratUmum::findOrFail($id);
        $surat_umum->status = "1";
        $surat_umum->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'The review has been approved successfully');
        return redirect('admin/surat_umum');
    }

    public function reject($id)
    {
        $surat_umum = SuratUmum::findOrFail($id);
        $surat_umum->status = "2";
        $surat_umum->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'The review has been rejected successfully');
        return redirect('admin/surat_umum');
    }

    public function sk_kepolisian()
    {
        $surat_umum = SuratUmum::where('jenis', 'SK Kepolisian')->get();
        return view('layanan/keterangan_kepolisian/index', compact('surat_umum'));
    }

    public function sk_pengantar()
    {
        $surat_umum = SuratUmum::where('jenis', 'SK Pengantar')->get();
        return view('layanan/keterangan_pengantar/index', compact('surat_umum'));
    }

    public function sk_penduduk()
    {
        $surat_umum = SuratUmum::where('jenis', 'SK Penduduk')->get();
        return view('layanan/keterangan_penduduk/index', compact('surat_umum'));
    }


    public function create()
    {
        $penduduk = BukuIndukPenduduk::all();
        return view('layanan.surat_umum.template_surat', compact('penduduk'));
    }

    public function store(Request $request)
    {
        $file = public_path('/template_surat/surat_ket_catatan_kriminal.rtf');
        
        $surat_umum = new SuratUmum();
        $id_surat = SuratUmum::orderBy('id', 'desc')->first()->id;
        $jumlah = $id_surat + 1;
        $judul=
        $surat_umum->jenis = $request->input('jenis');
        $surat_umum->id = $request->input('id');
        
        $nomor_surat=
        $surat_umum->nomor_surat = $jumlah.'/A/2021';
        $penduduk_id=
        $surat_umum->penduduk_id = Auth::id();
        $form_keterangan=
        $surat_umum->keperluan = $request->input('keperluan');
        $tgl_surat=
        $surat_umum->tgl_surat = Carbon::now();
        $surat_berakhir=
        $surat_umum->surat_berakhir = Carbon::now()->addDays(7);
     
        $id_penduduk = $request->input('penduduk_id');
        $penduduk = SuratUmum::find($id_penduduk);
        
        $surat_umum->save();
       
        
        return redirect()->route('dashboard.surat_umum.index');
        
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
        
        $surat_umum = SuratUmum::find($id);
     
        $id_penduduk = $surat_umum->penduduk_id;
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
            '[kode_surat]' => $surat_umum->nomor_surat,
            '[kepala_kk]' => '-',


            '[judul_surat]' => $surat_umum->jenis,
            '[nomor_surat]' => $surat_umum->nomor_surat,
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
            '[form_keterangan]' => $surat_umum->keperluan,
            '[tgl_surat]' => $surat_umum->tgl_surat,
            '[mulai_berlaku]' => $surat_umum->tgl_surat,
            '[tgl_akhir]' => $surat_umum->surat_berakhir,
            '[gol_darah]' => '#',
            
        );

        if ($surat_umum->jenis == "SK Kepolisian"){
            $nama_file = 'surat_keterangan_catatan_kriminal'.$surat_umum->nomor_surat.'.doc';

            return WordTemplate::export($file, $array, $nama_file);
            return redirect('dashboard/layanan/surat_umum');
        }
        elseif ($surat_umum->jenis == "SK Pengantar"){
            $nama_file = 'surat_keterangan_pengantar_'.$surat_umum->nomor_surat.'.doc';
        
            return WordTemplate::export($file, $array, $nama_file);
            return redirect('dashboard/layanan/surat_umum');
        }
        elseif ($surat_umum->jenis == "SK Penduduk"){
            $nama_file = 'surat_keterangan_penduduk_'.$surat_umum->nomor_surat.'.doc';
        
            return WordTemplate::export($file, $array, $nama_file);
            return redirect('dashboard/layanan/surat_umum');
        }
        else
    
        return redirect('dashboard/layanan/surat_umum');
    }

    
}


