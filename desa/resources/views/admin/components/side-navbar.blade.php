@section('side-navbar')
    <div class="sidebar " data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="logo">
            <a href="{{URL::to('/admin')}}" class="simple-text">
               Gunung Katun
               <br><br>
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="{{URL::to('/admin')}}" class="simple-text">
                GKT
            </a>
        </div>
        <div class="sidebar-wrapper ">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset("front/images/users/admin.jpg") }}"/>  
                </div>
                <!-- .Auth::user()->avatar}} -->
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{Auth::user()->first_name." ".Auth::user()->last_name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="{{ url('admin/user/'.Auth::user()->id.'/profile') }}">Edit Profile</a></li>
                            <li><a href="{{ url('admin/user/'.Auth::user()->id.'/setting') }}">Change Password</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
            <li><a href="#">Adminstrasi</a></li>
                            
                @if($admin_nav)
                    @foreach($admin_nav as $item)
                        @if(array_key_exists('add', $item['actions']))
                        <li @if (Request::is('admin/'.strtolower($item['name']).'/create*') || Request::is('admin/'.strtolower($item['name']))) class="active" @endif>
                            <a data-toggle="collapse" href="#componentsExamples">
                                <i class="{{$item['icon']}}"></i>
                                <p>{{$item['name']}}
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div @if (Request::is('admin/'.strtolower($item['name']).'/create*') || Request::is('admin/'.strtolower($item['name']))) class="collapse in" @else class="collapse" @endif id="componentsExamples">
                                <ul class="nav">
                                    <li @if (Request::is('admin/'.strtolower($item['name']).'/create*')) class="active" @endif><a href="{{ url($item['actions']['add'])}}">Add</a></li>
                                    <li @if (Request::is('admin/'.strtolower($item['name']))) class="active" @endif><a href="{{ url($item['actions']['view'])}}">View</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @elseif(
                                array_key_exists('peraturandesa', $item['actions']) 
                                || array_key_exists('keputusankadesa', $item['actions'])
                                || array_key_exists('inventariskekayaan', $item['actions']) 
                                || array_key_exists('aparatdesa', $item['actions'])
                                || array_key_exists('tanahkasdesa', $item['actions']) 
                                || array_key_exists('tanahdesa', $item['actions'])
                                || array_key_exists('agenda', $item['actions']) 
                                || array_key_exists('ekspedisi', $item['actions'])
                                || array_key_exists('lembarberita', $item['actions'])
                        )
                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a data-toggle="collapse" href="#componentsExamples">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>{{$item['name']}}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="collapse in" @else class="collapse" @endif id="componentsExamples">
                                    <ul class="nav">
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/peraturandesa')) class="active" @endif><a href="{{ url($item['actions']['peraturandesa'])}}">◍ Peraturan Desa</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/keputusankadesa')) class="active" @endif><a href="{{ url($item['actions']['keputusankadesa'])}}">◍ Keputusan Kades</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/inventariskekayaan')) class="active" @endif><a href="{{ url($item['actions']['inventariskekayaan'])}}">◍ Inventaris dan Kekayaan</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/aparatdesa')) class="active" @endif><a href="{{ url($item['actions']['aparatdesa'])}}">◍ Aparat Pemerintah</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/tanahkasdesa')) class="active" @endif><a href="{{ url($item['actions']['tanahkasdesa'])}}">◍ Tanah Kas</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/tanahdesa')) class="active" @endif><a href="{{ url($item['actions']['tanahdesa'])}}">◍ Tanah di Desa</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/agenda')) class="active" @endif><a href="{{ url($item['actions']['agenda'])}}">◍ Agenda</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/ekspedisi')) class="active" @endif><a href="{{ url($item['actions']['ekspedisi'])}}">◍ Ekspedisi</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/lembarberita')) class="active"  @endif><a href="{{ url($item['actions']['lembarberita'])}}" >◍ Lembaran dan Berita Desa</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                        @elseif(
                                array_key_exists('buku_induk', $item['actions']) 
                                || array_key_exists('buku_mutasi', $item['actions'])
                                || array_key_exists('buku_rekapitulasi', $item['actions']) 
                                || array_key_exists('buku_sementara', $item['actions'])
                                || array_key_exists('buku_ktp', $item['actions']) 
                        )
                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a data-toggle="collapse" href="#penduduk">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>{{$item['name']}}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="collapse in" @else class="collapse" @endif id="penduduk">
                                    <ul class="nav">
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_induk')) class="active" @endif><a href="{{ url($item['actions']['buku_induk'])}}">◍ Induk Penduduk</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_mutasi')) class="active" @endif><a href="{{ url($item['actions']['buku_mutasi'])}}">◍ Mutasi Penduduk</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_rekapitulasi')) class="active" @endif><a href="{{ url($item['actions']['buku_rekapitulasi'])}}">◍ Rekapitulasi Penduduk</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_sementara')) class="active" @endif><a href="{{ url($item['actions']['buku_sementara'])}}">◍ Penduduk Sementara</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_ktp')) class="active" @endif><a href="{{ url($item['actions']['buku_ktp'])}}">◍ KTP dan KK</a></li>
                                        
                                    </ul>
                                </div>
                            </li>
                        @elseif(
                                array_key_exists('buku_apbd', $item['actions']) 
                                || array_key_exists('buku_rencanaA', $item['actions'])
                                || array_key_exists('buku_kasP', $item['actions']) 
                                || array_key_exists('buku_kas_umum', $item['actions'])
                                || array_key_exists('buku_kas_prpl', $item['actions']) 
                                || array_key_exists('buku_bank', $item['actions']) 
                        )
                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a data-toggle="collapse" href="#keuangan">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>{{$item['name']}}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="collapse in" @else class="collapse" @endif id="keuangan">
                                    <ul class="nav">
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_apbd')) class="active" @endif><a href="{{ url($item['actions']['buku_apbd'])}}">◍ APBD</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_rencanaA')) class="active" @endif><a href="{{ url($item['actions']['buku_rencanaA'])}}">◍ Rencana Anggaran</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_kasP')) class="active" @endif><a href="{{ url($item['actions']['buku_kasP'])}}">◍ Kas Kegiatan</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_kas_umum')) class="active" @endif><a href="{{ url($item['actions']['buku_kas_umum'])}}">◍ Kas Umum</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_kas_prpl')) class="active" @endif><a href="{{ url($item['actions']['buku_kas_prpl'])}}">◍ Kas Pembantu</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/buku_bank')) class="active" @endif><a href="{{ url($item['actions']['buku_bank'])}}">◍ Bank Desa</a></li>
                                        
                                    </ul>
                                </div>
                            </li>
                        @elseif(
                                array_key_exists('rencanakerja', $item['actions']) 
                                || array_key_exists('kegiatanpembangunan', $item['actions'])
                                || array_key_exists('inventarishasil', $item['actions']) 
                                || array_key_exists('kaderpemberdayaan', $item['actions'])
                               
                        )
                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a data-toggle="collapse" href="#pembangunan">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>{{$item['name']}}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="collapse in" @else class="collapse" @endif id="pembangunan">
                                    <ul class="nav">
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/rencanakerja')) class="active" @endif><a href="{{ url($item['actions']['rencanakerja'])}}">◍ Rencana Kerja</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/kegiatanpembangunan')) class="active" @endif><a href="{{ url($item['actions']['kegiatanpembangunan'])}}">◍ Kegiatan Pemb</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/inventarishasil')) class="active" @endif><a href="{{ url($item['actions']['inventarishasil'])}}">◍ Inventaris Hasil</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/kaderpemberdayaan')) class="active" @endif><a href="{{ url($item['actions']['kaderpemberdayaan'])}}">◍ Kader Pemberdayaan</a></li>
                           
                                        
                                    </ul>
                                </div>
                            </li>
                            <br>
                        @elseif(
                                array_key_exists('surat_ket_catatan_kepolisian', $item['actions']) 
                                || array_key_exists('surat_ket_penduduk', $item['actions'])
                                || array_key_exists('surat_ket_pengantar', $item['actions']) 
                              
                               
                        )
                        <li><a href="#">Surat</a></li>
                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a data-toggle="collapse" href="#layanan">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>
                                    <span style="color:red; font-size:20px; padding-right:10px">{{$total_pending}}</span> {{$item['name']}}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="collapse in" @else class="collapse" @endif id="layanan">
                                    <ul class="nav">
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/surat_ket_catatan_kepolisian')) class="active" @endif><a href="{{ url($item['actions']['surat_ket_catatan_kepolisian'])}}">◍ <span style="color:red; font-size:16px; padding:0 5px 0 5px">{{$sk_kepolisian_pending}}</span>  Catatan Kepolisian</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/surat_ket_penduduk')) class="active" @endif><a href="{{ url($item['actions']['surat_ket_penduduk'])}}">◍ <span style="color:red; font-size:16px; padding:0 5px 0 5px">{{$sk_penduduk_pending}}</span> Keterangan Penduduk</a></li>
                                        <li @if (Request::is('admin/'.strtolower($item['name']).'/surat_ket_pengantar')) class="active" @endif><a href="{{ url($item['actions']['surat_ket_pengantar'])}}">◍ <span style="color:red; font-size:16px; padding:0 5px 0 5px">{{$sk_pengantar_pending}}</span> Keterangan Pengantar</a></li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                        @else
                        

                            <li @if (Request::is('admin/'.strtolower($item['name']).'/*')) class="active" @endif>
                                <a href="{{ url($item['actions']['view'])}}">
                                    <i class="{{$item['icon']}}"></i>
                                    <p>{{$item['name']}}</p>
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@show