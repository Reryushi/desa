@extends('layouts.front')

@section('content')

    <div class="inn-banner custom-bg-card" >
        <div class="container">
            <div class="row">
                <h4>Tentang</h4>
                <p> </p>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="{{ url($page->url_title) }}">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inn-body-section custom-bg-login" >
        <div class="container isi">
            <div class="row">
                <div class="page-head">
                    <h2>Tentang</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="head-typo typo-com collap-expand inn-com-form2 custom-bg-card" >
                    
                            <h4 style="color:white; text-align:center">
                            Gunung Katun Tanjungan adalah salah satu tiyuh <br>
                            di Kecamatan Tulang Bawang Udik, Kabupaten <br>
                            Tulang Bawang Barat, Provinsi Lampung, Indonesia. <br>
                            </h4>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
