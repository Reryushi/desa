@extends('layouts.front')

@section('content')

    <div class="inn-body-section pad-bot-55 ">
        <div class="container">
            <div class="row">
                <div class="page-head">
                <br><br>
                    <h2>Kegiatan</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Semua Kegiatan.</p>
                </div>

            @forelse($room_types as $room_type)
                <!--ROOM SECTION-->
                <div class="room">
                   
                    <!--ROOM IMAGE-->
                    <div class="r1 r-com"><img src="{{'/front/images/room/'.$room_type->images->first()->name}}" alt="" />
                    </div>
                    <!--ROOM RATING-->
                    <div class="r2 r-com">
                        <h4>{{ $room_type->name }}</h4>

                        
                    </div>
                    <!--ROOM FACILITY-->
                    <div class="r3 r-com">
                        <ul>
                        <li>Tanggal Kegiatan dibuat</li>
                                <li>{{ $room_type->created_at }}</li>
                          
                        </ul>
                    </div>
                    <!--ROOM PRICE-->
                    
                    <!--ROOM BOOKING BUTTON-->
                    <div class="r5 r-com"> <a href="{{url('/kegiatan/'.$room_type->id)}}" class="inn-room-book">DETAIL</a> </div>
                </div>
                <!--END ROOM SECTION-->
                @empty
                @endforelse
            </div>
        </div>
@endsection
