@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <br><br>
                    <h2>Semua Peraturan Desa</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                   
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($peraturan) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Peraturan yang telah disepakati desa.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                            @foreach($peraturan as $peraturan)
                            @continue($peraturan->date > today()->format('Y-m-d') || $peraturan->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                                <div class="row events">
                                    <!-- <div class="col-md-2"> <img src="{{ ('front/images/event/'. $peraturan->image) }}" alt="" /> </div> -->
                                    <div class="col-md-2">
                                        <h4 style="color:#0b7e95">{{ $peraturan->jenis }} no. {{ $peraturan->id }}/{{ $peraturan->tgl_ditetapkan }}</h4> 
                                    </div>
                                    <div class="col-md-8">
                                        <p style="color:black">Tentang : {{ $peraturan->tentang }}</p>
                                        <p style="color:black">Uraian : {{ $peraturan->uraian }}</p>
                                    </div>
                                </div>
                                <!--END peraturan-->
                            @endforeach
                        </div>
                    </div>
                @else

                    <h3>Tidak ada data.</h3>
                @endif
                <!--END TYPOGRAPHY SECTION-->
            </div>
        </div>
    </div>
@endsection
