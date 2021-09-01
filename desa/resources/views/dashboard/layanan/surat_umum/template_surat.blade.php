@extends('layouts.dashboard')
@section('content')
<style>
    .form-control {
        background-color:white;
    }

    .card {
        background-color:#ebedf0;
    }

    .form-group label{
        font-size:14px;
    }

    .form-group input{
        background-color:white;
    }
</style>

<div class="card">
    <div class="card-header" style="padding:10px ">
        Buat Surat Keterangan Catatan Kepolisian
    </div>
    <div class="card-body" >
    
    {!! Form::open(array('url' => 'dashboard/layanan/surat_umum', 'id' => 'template', 'style' => 'padding:20px')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            {{ csrf_field() }}
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>id Surat<star>*</star></label>
                                        <input type="text" name="id" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Judul<star>*</star></label>
                                        <input type="text" name="judul" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Penduduk<star>*</star></label>
                                        <input type="text" name="penduduk_id" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style=" position: relative;">
                                        <label>Jenis Surat</label>
                                        <select name="jenis" class="form-select-sm">
                                            <option value="SK Kepolisian">Surat Keterangan Kepolisian </option>
                                            <option value="SK Pengantar">Surat Keterangan Pengantar </option>
                                            <option value="SK Penduduk">Surat Keterangan Penduduk </option>
                                            <option value="SK Usaha">Surat Keterangan Usaha </option>
                                            <option value="SK Pergi Kawin">Surat Keterangan Pergi Kawin </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Untuk Keperluan<star>*</star></label>
                                        <input type="text" name="keperluan" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nomor Surat<star>*</star></label>
                                        <input type="text" name="nomor_surat" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Surat<star>*</star></label>
                                        <input type="date" name="tgl_surat" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Surat Berakhir<star>*</star></label>
                                        <input type="date" name="surat_berakhir" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div> -->

                            <br><br><br><br><br><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Buat Surat</button>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
    </div><br>
</div>
@endsection
