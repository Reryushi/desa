@section('main_menu')
    <!--TOP SECTION-->
    <div class="row" style="">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset("front/images/logo/tiyuh.png") }}" width="200px" alt=""/>
            </a>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="{{ url('/dashboard/layanan') }}">Layanan</a>
                </li>
                <li><a href="{{ url('/event') }}">Berita</a>
                </li>
                <li><a href="{{ url('/food') }}">UMKM dan Produk Tiyuh</a>
                </li>
                <li><a href="{{ url('/kegiatan') }}">Kegiatan</a>
                </li>
                
                <!-- <li><a href="{{ url('/about') }}">Tentang</a>
                </li> -->
                <li><a class='dropdown-button' href='#' data-activates='dropdown-tentang'> Tentang <i
                                    class="fa fa-angle-down"></i></a>
                    </li>
                
                    

                <li><a href="{{ url('/contact') }}">Profil</a>
                </li>

              
                    <!-- Dropdown Structure -->
                    <ul id='dropdown-tentang' class='dropdown-content drop-con-man'>
                       
                        <li>
                            <a href="{{ url('/peraturan_desa') }}"><img src="{{ asset("front/images/icon/15.png") }}" alt=""> Peraturan Desa</a>
                        </li>
                        <li>
                            <a href="{{ url('/penerima_blt') }}"><img src="{{ asset("front/images/icon/1.png") }}" alt=""> Penerima BLT
                                </a>
                        </li>
                        <li>
                            <a href="{{ url('/aparat_desa') }}"><img src="{{ asset("front/images/icon/15.png") }}" alt=""> Aparat Desa</a>
                        </li>
                        <li>
                            <a href="{{ url('/data_desa') }}"><img src="{{ asset("front/images/icon/1.png") }}" alt=""> Data Desa
                                </a>
                        </li>
                       
                    </ul>
                
@auth
      
            <div class="top-bar">
                
                    <!-- <li><a href="#">Phone No:  {{ config('app.phone_number', '977-9866893439') }}</a>
                    </li> -->
                    <li><a class='dropdown-button' href='#' data-activates='dropdown1'> My Account <i
                                    class="fa fa-angle-down"></i></a>
                    </li>
               
            </div>
        
        <div class="all-drop-down">
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content drop-con-man'>
                @if(Auth::user()->role == "admin")
                    <li>
                        <a href="{{ url('/admin') }}"><img src="{{ asset("front/images/icon/2.png") }}" alt=""> Admin Panel</a>
                    </li>
                @endif
                <li>
                    <a href="{{ url('/dashboard') }}"><img src="{{ asset("front/images/icon/15.png") }}" alt=""> User Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/layanan') }}"><img src="{{ asset("front/images/icon/1.png") }}" alt=""> Layanan
                         </a>
                </li>
                <!-- <li>
                    <a href="{{ url('/dashboard/event/booking') }}"><img src="{{ asset("front/images/icon/17.png") }}" alt=""> My Event Bookings</a>
                </li> -->
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <img src="{{ asset("front/images/icon/13.png") }}" alt=""> Log Out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

    @endauth




                @if (Auth::guest())
                    <!-- <li><a href="{{ route('register') }}">Register</a>
                    </li> -->
                    <!-- <li><a href="{{ route('login') }}">Login</a>
                    </li> -->
                    <li><a class='dropdown-button' href='#' data-activates='dropdown2'> Login <i
                                    class="fa fa-angle-down"></i></a>
                    </li>

                    <div class="all-drop-down">
                    <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content drop-con-man'>
                        
                        <li>
                            <a href="{{ url('/login') }}"><img src="{{ asset("front/images/icon/user.png") }}" width="25px" alt=""> Masyarakat</a>
                        </li>
                        <li>
                            <a href="{{ url('/login-staff') }}"> <img src="{{ asset("front/images/icon/admin.png") }}" width="25px" alt=""> Staff
                                </a>
                        </li>
                        
                    </ul>
                </div>
                @endif
            </ul>
        </div>
    </div>




    <!-- <div class="all-drop-down"> -->
        <!-- Dropdown Structure -->
        <!-- <ul id='drop-home' class='dropdown-content drop-con-man'>
            <li><a href="main.html">Home - Default</a>
            </li>
            <li><a href="index-1.html">Home - Reservation</a>
            </li>
        </ul>
    </div> -->
    <!--TOP SECTION-->
@show