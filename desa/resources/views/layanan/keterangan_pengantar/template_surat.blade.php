@extends('layouts.admin')
@section('content')
<style>
    .form-control {
        background-color:white;
    }

    .card {
        background-color:#ebedf0;
    }
</style>

<div class="card">
    <div class="card-header" style="padding:10px ">
        Buat Surat Keterangan Pengantar
    </div>
    <div class="card-body">
    {!! Form::open(array('url' => 'admin/surat_ket_pengantar', 'id' => 'template', 'style' => 'padding:20px')) !!}
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
                            <div class="row">
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
                                        <label>Nama Penduduk</label>
                                        <select name="penduduk_id" id="penduduk_id" class="form-control border-input">
                                                @foreach($penduduk as $penduduk)
                                                    <option value="{{ $penduduk->id }}">{{ $penduduk->nama }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keperluan<star>*</star></label>
                                        <input type="text" name="keperluan" class="form-control "
                                               placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                            </div>

                           
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Buat Surat</button>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
    </div>
</div>
@endsection
