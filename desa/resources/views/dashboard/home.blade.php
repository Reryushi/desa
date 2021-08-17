@extends('layouts.dashboard')

@section('content')
    <div class="db-cent-2 container">
        <div class="db-2-main-1" >
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/6.png") }}" alt="" style="color:black"> <span> Layanan Pending</span>
                <p></p>
                <h2>{{ $total_pending }}</h2> </div>
        </div>
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/13.png") }}" alt=""> <span> Layanan Terkonfirmasi</span>
                <p></p>
                <h2> {{$total_terima}} </h2> </div>
        </div>
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
                <p style="color:green">Tunggu Konfirmasi dari admin agar bisa mendownload surat.</p>
                                
                <a href="{{ route("dashboard.surat_umum.create") }}" class="btn btn-primary">Buat Surat</a>
            </div>
            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
           
                <thead>
                <tr>
                    
                    <th><br>Jenis Surat</th>
                    <th><br>Nomor Surat</th>
                    <th><br>Tanggal Buat</th>
                    
                    <th><br>Keperluan</th>
                    <th><br>Status</th>
    
                </tr>
                </thead>
                <tbody>
                @foreach($surat_umum as $key => $surat_umum)
                    <tr data-entry-id="{{ $surat_umum->id }}">
                        <td>{{ $surat_umum->jenis}}</td>
                        <td>{{ $surat_umum->nomor_surat}}</td>
                        <td>{{ $surat_umum->tgl_surat}}</td>
                        <td>{{ $surat_umum->keperluan}}</td>
                        <td>
                                                
                                                   
                                                
                                            
                        @if ($surat_umum->status == '1')
                            <a class="btn btn-xs " style="background-color:green" href="{{ route('dashboard.surat_umum.show', $surat_umum->id) }}">
                                Download
                            </a>
                            
                        @elseif ($surat_umum->status =='2')
                            <label class="btn btn-xs " style="background-color:#8A1511">
                                Ditolak
                            </label>
                        

                        @else
                            <label class="btn btn-xs " >
                                Menunggu
                            </label>
                        @endif
                                                
                                                   
                                            
                        </td>
                    </tr>
                @endforeach

               


                </tbody>
            </table>
</div>
        </div>
    </div>
    
  
@endsection
