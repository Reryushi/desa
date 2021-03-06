@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <br><br>
                    <h2>Semua Berita</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Semua berita yang ada di desa.</p>
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($events) > 0)
                    <div class="col-md-12" >
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Berita</h2>
                            <p style="color:black">Berita saat ini</p>
                            @foreach($events as $event)
                            {!! Form::open(array('url' => 'event/'.$event->id.'/book', 'class' => 'col s12')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            @csrf
                            @continue($event->date < today()->format('Y-m-d'))
                            <!--EVENT-->

                            <div class="row events">

                                @if ($errors->has('number_of_tickets'))
                                    <div class="col-md-12 alert alert-danger">
                                        <strong>Sorry!</strong> {{ $errors->first('number_of_tickets') }}
                                    </div>
                                @endif
                                <div class="col-md-2"> <img src="{{ ('front/images/event/'. $event->image) }}" alt="" /> </div>
                                <div class="col-md-8">
                                    <h3>{{ $event->name }}</h3> 
                                    <!-- <span><strong>Date: </strong> {{ \Carbon\Carbon::parse($event->date)->toFormattedDateString() }}</span>
                                    <p><strong>Price: </strong>Rs. {{ $event->price }}</p> -->
                                    <p>{{ $event->description }}</p>
                                </div>
                                <!-- <div class="col-md-2"> <span style="font-weight: bold">Number of tickets</span> </div> -->
                                <div class="input-field col-md-2">
                                   <input style="margin-bottom: 10px; height: 40px;" type="text" name="number_of_tickets">
                                </div>
                                <div class="col-md-2"> <input id="register-button" type="submit" value="Register" class="waves-effect waves-light event-regi"> </div>

                            </div>
                            <!--END EVENT-->
                            {!! Form::close() !!}
                             @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Berita yang telah berlalu.</h2>
                            <p style="color:black">Semua Berita yang sudah berlalu.</p>
                            @foreach($events as $event)
                            @continue($event->date > today()->format('Y-m-d') || $event->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                                <div class="row events">
                                    <div class="col-md-2"> <img src="{{ ('front/images/event/'. $event->image) }}" alt="" /> </div>
                                    <div class="col-md-8">
                                        <h3>{{ $event->name }}</h3> 
                                        <!-- <span><strong>Date: </strong> {{ \Carbon\Carbon::parse($event->date)->toFormattedDateString() }}</span>
                                        <p><strong>Price: </strong>Rs. {{ $event->price }}</p> -->
                                        <p style="color:black">{{ $event->description }}</p>
                                    </div>
                                </div>
                                <!--END EVENT-->
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
