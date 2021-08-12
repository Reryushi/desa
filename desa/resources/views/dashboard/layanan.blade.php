@extends('layouts.dashboard')

@section('content')
    
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/6.png") }}" alt=""/> Pilih surat yang ingin dibuat</h3>                
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="">
                <div class="card-body" >
                    
                    <a href="layanan/surat_ket_catatan_kepolisian/create" class="btn btn-primary" >SK Catatan Kepolisian</a>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                <div class="card-body" >
                    
                    <a href="layanan/surat_ket_penduduk/create" class="btn btn-primary">SK Penduduk</a>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                <div class="card-body" >
                    
                    <a href="layanan/surat_ket_pengantar/create" class="btn btn-primary">SK Pengantar</a>
                </div>
                </div>
            </div>
        </div>
    </div>

  

       
    
  
@endsection
