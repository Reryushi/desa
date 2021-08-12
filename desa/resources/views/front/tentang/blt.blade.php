@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <br><br>
                    <h2>Semua Penerima BLT</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                   
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($ktp_kk) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Data warga yang saat ini mendapatkan blt.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           <?php $index = 0; ?>
                            @foreach($ktp_kk as $ktp_kk)
                            @continue($ktp_kk->date > today()->format('Y-m-d') || $ktp_kk->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                            <?php $index++ ?>
                                <div class="row events">
                                    <!-- <div class="col-md-2"> <img src="{{ ('front/images/event/'. $ktp_kk->image) }}" alt="" /> </div> -->
                                    <div class="col-md-2">
                                        <h4 style="color:#0b7e95">{{$index}}. {{ $ktp_kk->nama_lengkap }}</h4> 
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">nomor kk : {{ $ktp_kk->no_kk }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">pekerjaan : {{ $ktp_kk->pekerjaan }}</p>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <p style="color:black">status : {{ $ktp_kk->ket }}</p>
                                    </div>  
                                    <div class="col-md-3">
                                        <p style="color:black">alamat : {{ $ktp_kk->alamat }}</p>
                                    </div>  
                                </div>
                                <!--END ktp_kk-->
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
