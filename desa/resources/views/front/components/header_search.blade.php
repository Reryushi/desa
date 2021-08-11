@section('main_menu')
    <!--TOP SECTION-->
    <div class="row">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset("front/images/tiyuh.png") }}" alt=""/>
            </a>
        </div>
        <div class="menu-bar">
            <ul>
            @if (Auth::guest())
                    <!-- <li><a href="{{ route('register') }}">Register</a>
                    </li> -->
                    <li><a href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            
                
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="{{ url('/dashboard/layanan') }}">Layanan</a>
                </li>
                <li><a href="{{ url('/event') }}">Berita</a>
                </li>
                <li><a href="{{ url('/food') }}">UMKM</a>
                </li>
                <li><a href="{{ url('/kegiatan') }}">Kegiatan</a>
                </li>
                @if(count(\App\Model\Page::where('title', 'About')->where('status', true)->get()) > 0)
                <!-- <li><a href="{{ url('/about') }}">About</a> -->
                </li>
                @endif
                <li><a href="{{ url('/contact') }}">Profil</a>
                </li>


                
            </ul>
        </div>
    </div>




   
    <!--TOP SECTION-->
@show