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
        Edit Ekspedisi
    </div>

    <div class="card-body">
        <form action="{{ route("admin.ekspedisi.update", [$ekspedisi->id]) }}" method="POST" enctype="multipart/form-data" style="padding: 20px">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_penerimaan_pengiriman_surat') ? 'has-error' : '' }}">
                    <label for="tgl_pengiriman">Tanggal Pengiriman *</label>
                    <input type="date" id="tgl_pengiriman" name="tgl_pengiriman" class="form-control" value="{{ old('tgl_pengiriman', isset($ekspedisi) ? $ekspedisi->tgl_pengiriman : '') }}">
                    @if($errors->has('tgl_pengiriman'))
                        <p class="help-block">
                            {{ $errors->first('tgl_pengiriman') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_surat') ? 'has-error' : '' }}">
                    <label for="tgl_surat">Tanggal Surat *</label>
                    <input type="date" id="tgl_surat" name="tgl_surat" class="form-control" value="{{ old('tgl_surat', isset($ekspedisi) ? $ekspedisi->tgl_surat : '') }}">
                    @if($errors->has('tgl_surat'))
                        <p class="help-block">
                            {{ $errors->first('tgl_surat') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_surat') ? 'has-error' : '' }}">
                    <label for="nomor_surat">Nomor Surat *</label>
                    <input type="number" id="nomor_surat" name="nomor_surat" class="form-control" value="{{ old('nomor_surat', isset($ekspedisi) ? $ekspedisi->nomor_surat : '') }}">
                    @if($errors->has('nomor_surat'))
                        <p class="help-block">
                            {{ $errors->first('nomor_surat') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('isi_singkat_surat') ? 'has-error' : '' }}">
                        <label for="isi_singkat_surat">Isi Singkat *</label>
                        <input type="text" id="isi_singkat_surat" name="isi_singkat_surat" class="form-control" value="{{ old('isi_singkat_surat', isset($ekspedisi) ? $ekspedisi->isi_singkat_surat : '') }}">
                        @if($errors->has('isi_singkat_surat'))
                        <p class="help-block">
                                {{ $errors->first('isi_singkat_surat') }}
                        </p>
                        @endif
                </div>     
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ditujukan_kepada') ? 'has-error' : '' }}">
                    <label for="ditujukan_kepada">Ditujukan Kepada *</label>
                    <input type="text" id="ditujukan_kepada" name="ditujukan_kepada" class="form-control" value="{{ old('ditujukan_kepada', isset($ekspedisi) ? $ekspedisi->ditujukan_kepada : '') }}">
                    @if($errors->has('ditujukan_kepada'))
                        <p class="help-block">
                            {{ $errors->first('ditujukan_kepada') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($ekspedisi) ? $ekspedisi->keterangan : '') }}">
                    @if($errors->has('keterangan'))
                        <p class="help-block">
                            {{ $errors->first('keterangan') }}
                        </p>
                    @endif
                </div>
            </div>    
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('save') }}">
            </div>
        </form>
    </div>
</div>

@endsection