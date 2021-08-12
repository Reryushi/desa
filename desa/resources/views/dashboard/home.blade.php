@extends('layouts.dashboard')

@section('content')
    <div class="db-cent-2 container">
        <div class="db-2-main-1" >
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/6.png") }}" alt="" style="color:black"> <span> Layanan dibuat</span>
                <p></p>
                <h2>{{ $total_room_bookings }}</h2> </div>
        </div>
        <!-- <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc6.png") }}" alt=""> <span> Event Bookings</span>
                <p></p>
                <h2> total_event_bookings </h2> </div>
        </div> -->
        <!-- <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc3.png") }}" alt=""> <span> Pembayaran</span>
                <p></p>
                <h2>{{ $total_pending_payments }}</h2> </div>
        </div> -->
    </div>
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/6.png") }}" alt=""/> Surat Dibuat</h3>
                <p>Surat Layanan yang telah dibuat</p>
                <a href="{{ url('/dashboard/layanan') }}" class="btn btn-primary">Buat Surat</a>
            </div>
            
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    
                    <th><br>Nama Surat</th>
                    <th><br>Nomor Surat</th>
                    <th><br>Tanggal Buat</th>
                    
                    <th><br>Keperluan</th>
                    <th><br>Aksi</th>
    
                </tr>
                </thead>
                <tbody>
                @foreach($sk_kepolisian as $key => $sk_kepolisian)
                    <tr data-entry-id="{{ $sk_kepolisian->id }}">
                        <td>{{ $sk_kepolisian->judul}}</td>
                        <td>{{ $sk_kepolisian->nomor_surat}}</td>
                        <td>{{ $sk_kepolisian->tgl_surat}}</td>
                        <td>{{ $sk_kepolisian->form_keterangan}}</td>
                        <td>
                                                
                                                   
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('dashboard.surat_ket_catatan_kepolisian.show', $sk_kepolisian->id) }}">
                                                        {{ trans('Download') }}
                                                    </a>
                                                
                                                   
                                            
                        </td>
                    </tr>
                @endforeach

                @foreach($sk_penduduk as $key => $sk_penduduk)
                    <tr data-entry-id="{{ $sk_penduduk->id }}">
                        <td>{{ $sk_penduduk->judul}}</td>
                        <td>{{ $sk_penduduk->nomor_surat}}</td>
                        <td>{{ $sk_penduduk->tgl_surat}}</td>
                        <td>{{ $sk_penduduk->keterangan}}</td>
                        <td>
                                                
                                                
                                                    <a class="btn btn-xs btn-info" href="{{ route('dashboard.surat_ket_penduduk.show', $sk_penduduk->id) }}">
                                                        {{ trans('Download') }}
                                                    </a>
                                                
                                                 
                                            
                        </td>

                    </tr>
                @endforeach

                @foreach($sk_pengantar as $key => $sk_pengantar)
                    <tr data-entry-id="{{ $sk_pengantar->id }}">
                        <td>{{ $sk_pengantar->judul}}</td>
                        <td>{{ $sk_pengantar->nomor_surat}}</td>
                        <td>{{ $sk_pengantar->tgl_surat}}</td>
                        <td>{{ $sk_pengantar->keterangan}}</td>
                        <td>
                                                
                                                    
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('dashboard.surat_ket_pengantar.show', $sk_pengantar->id) }}">
                                                        {{ trans('Download') }}
                                                    </a>
                                                
                                                 
                                            
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    
  
@endsection
