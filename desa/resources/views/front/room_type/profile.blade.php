@extends('layouts.front')

@section('content')

    <!--TOP SECTION-->
    <div class="hp-banner"> <img src="{{'/front/images/room_types/'.$room_type->images->first()->name}}" alt=""> </div>
    <!--END HOTEL ROOMS-->
    
    <!--CHECK AVAILABILITY FORM-->
        <div class="check-available">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br><br><br>
        
                </div>
            </div>
        </div>
    </div>
<!-- END SEARCH ROOM -->

<!-- <div class="modal" tabindex="-1" role="dialog" id="bookRoom">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kamar Tersedia :  </h5>
                @if(Session::has('flash_message'))
                        <p style="color:forestgreen">{{ Session::get('flash_title') }}, {{ Session::get('flash_message') }}</p>
                    @endif
            </div>
        </div>
    </div>
</div> -->
    <!--END CHECK AVAILABILITY FORM-->
    <div class="">
        <div class="container">
            <br><br>

                <div class="col-md-12">
                    <div class="row">
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                            <br>
                                <h4><span>{{ $room_type->name }}</span> </h4>
                            </div>
                            <div class="hp-amini">
                                <p>{{ $room_type->description }}</p>
                            </div>
                        </div>
                       
                        <!-- <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Overview</span></h4>
                                <p>Following the main features of the room</p>
                            </div>
                            <div class="hp-over">
                                <ul class="nav nav-tabs hp-over-nav">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home"><img src="{{ asset("front/images/icon/a8.png") }}" alt=""> <span class="tab-hide">Overview</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active tab-space">
                                        <div class="hp-main-overview">
                                            <ul> -->

                                                <!-- <li>Occupancy: <span>Max {{ $room_type->max_adult + $room_type->max_child }} Persons</span>
                                                </li> -->

                                                <!-- <li>Size : <span>{{ $room_type->size }} sq. feet</span>
                                                </li>
                                                <li>Room Service : <span>{{  $room_type->room_service==true ? "Available" : "Not Available" }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        @if(count($room_type->images) > 0)
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Album</span></h4>
                                <p>Lihat Detail Gambar dari Kegiatan.</p>
                            </div>
                            <div class="">
                                <div class="h-gal">
                                    <ul>
                                        @foreach($room_type->images as $image)
                                        <li><img class="materialboxed" data-caption="{{ $image->caption }}" 
                                        src="{{ url('front/images/room/'.$image->name) }}" alt="">
                                             
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                      
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script>
        $(function() {
            $('#bookmark_button').click(function() {
                if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
                    window.sidebar.addPanel(document.title, window.location.href, '');
                } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
                    window.external.AddFavorite(location.href, document.title);
                } else if (window.opera && window.print) { // Opera Hotlist
                    this.title = document.title;
                    return true;
                } else { // webkit - safari/chrome
                    alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
                }
            });
        });
    </script>

    @endsection
