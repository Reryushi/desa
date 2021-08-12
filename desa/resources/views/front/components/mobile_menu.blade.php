@section('mobile_menu')
<!--MOBILE MENU-->
<section>
    <div class="mm">
        <div class="mm-inn">
            <div class="mm-logo" style="margin-top: -1.5em;">
                <a href="/"><img src="{{ asset("front/images/logo/logo-tiyuh.png") }}"  width="50px" alt="">
                </a>
            </div>
            <div class="mm-icon"><span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
            </div>
            <div class="mm-menu">
                <div class="mm-close"><span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
                </div>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="{{ url('/dashboard/layanan') }}">
                    Layanan</a>
                    </li>
                    <li><a href="{{ url('/event') }}">Berita</a>
                </li>
                    <li><a href="{{ url('/food') }}">UMKM</a>
                </li>
                    <li><a href="{{ url('/kegiatan') }}">Kegiatan</a>
                    </li>
                    @if(count(\App\Model\Page::where('title', 'About')->where('status', true)->get()) > 0)
                        <li><a href="{{ url('/about') }}">Tentang</a>
                        </li>
                    @endif
                    <li><a href="{{ url('/contact') }}">Hubungi Kami</a>
                    </li>
                    @if (Auth::guest())
                    <li><a href="{{ route('register') }}">Register</a>
                    </li>
                    <li><a href="{{ route('login') }}">Login sebagai masyarakat</a>
                    </li>
                    <li><a href="{{ route('staff.login') }}">Login sebagai staff</a>
                    </li>
                    @endif
                    
                    <!-- <li>
                        <a href="{{ url('/admin') }}"><img src="{{ asset("front/images/icon/2.png") }}" alt=""> Admin Panel</a>
                    </li>
                     -->
                    <li>
                        <a href="{{ url('/dashboard') }}"><img src="{{ asset("front/images/icon/15.png") }}" alt=""> Dashboard Saya</a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/layanan') }}"><img src="{{ asset("front/images/icon/1.png") }}" alt="">
                            Layanan Saya</a>
                    </li>
                    <!-- <li>
                        <a href="{{ url('/dashboard/event/booking') }}"><img src="{{ asset("front/images/icon/17.png") }}" alt=""> My Event Bookings</a>
                    </li>     -->
                    
                   
                </ul>
               

            </div>
        </div>
    </div>
        
</section>
    @show