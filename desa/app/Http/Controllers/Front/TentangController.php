<?php

namespace App\Http\Controllers\Front;

use App\Model\Event;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\PeraturanDesa;
use App\Models\BukuKtpDanKK;
use App\Models\AparatDesa;
use App\Models\BukuRekapitulasiJumlahPenduduk;
use App\Models\RencanaKerjaPembangunan;
use App\Models\TanahKasDesa;
use App\Models\TanahDesa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class TentangController extends FrontController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function peraturan_desa()
    {
        $peraturan = PeraturanDesa::all();

        return view('front.tentang.peraturan')->with([
            'peraturan' => $peraturan
        ]);
    }

    public function penerima_blt()
    {
        $ktp_kk = BukuKtpDanKK::all();

        return view('front.tentang.blt')->with([
            'ktp_kk' => $ktp_kk
        ]);
    }

    public function aparat_desa()
    {
        $aparat = AparatDesa::all();

        return view('front.tentang.aparat')->with([
            'aparat' => $aparat
        ]);
    }

    public function data_desa()
    {
        $peraturan = PeraturanDesa::all();
        $rekapitulasi = BukuRekapitulasiJumlahPenduduk::all();
        $rencanakerja = RencanaKerjaPembangunan::all();
        $tanahkas = TanahKasDesa::all();
        $tanahdesa = TanahDesa::all();
        return view('front.tentang.data_desa')->with([
            'rekapitulasi' => $rekapitulasi,
            'rencanakerja' => $rencanakerja,
            'tanahkas' => $tanahkas,
            'tanahdesa' => $tanahdesa
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id)->where('status', 1)->get();
        return view('front.event.profile')
            ->with([
                'event' => $event,
            ]);
    }
}
