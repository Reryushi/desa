@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <br><br>
                    <h2>Semua Aparat Desa</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                   
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($aparat) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Aparat desa yang saat ini aktif.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                            @foreach($aparat as $aparat)
                            @continue($aparat->date > today()->format('Y-m-d') || $aparat->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                                <div class="row events">
                                    <!-- <div class="col-md-2"> <img src="{{ ('front/images/event/'. $aparat->image) }}" alt="" /> </div> -->
                                    <div class="col-md-2">
                                        <h4 style="color:#0b7e95">{{ $aparat->nama }}</h4> 
                                    </div>
                                    <div class="col-md-4">
                                        <p style="color:black">jabatan : {{ $aparat->jabatan }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">nip : {{ $aparat->nip }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">niap : {{ $aparat->niap }}</p>
                                    </div>  
                                </div>
                                <!--END aparat-->
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
