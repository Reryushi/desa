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
        Buat Agenda
    </div>
    <div class="card-body">
    <form action="{{ route("admin.agenda.store") }}" method="POST" enctype="multipart/form-data" style="padding: 20px ">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_penerimaan_pengiriman_surat') ? 'has-error' : '' }}">
                    <label for="tgl_penerimaan_pengiriman_surat">Tanggal Penerimaan Pengiriman Surat *</label>
                    <input type="date" id="tgl_penerimaan_pengiriman_surat" name="tgl_penerimaan_pengiriman_surat" class="form-control" value="{{ old('tgl_penerimaan_pengiriman_surat', isset($agenda) ? $agenda->tgl_penerimaan_pengiriman_surat : '') }}">
                    @if($errors->has('tgl_penerimaan_pengiriman_surat'))
                        <p class="help-block">
                            {{ $errors->first('tgl_penerimaan_pengiriman_surat') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_masuk') ? 'has-error' : '' }}">
                    <label for="nomor_masuk">Nomor Surat Masuk *</label>
                    <input type="text" id="nomor_masuk" name="nomor_masuk" class="form-control" value="{{ old('nomor_masuk', isset($agenda) ? $agenda->nomor_masuk : '') }}">
                    @if($errors->has('nomor_masuk'))
                        <p class="help-block">
                            {{ $errors->first('nomor_masuk') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_masuk') ? 'has-error' : '' }}">
                    <label for="tgl_masuk">Tanggal Surat Masuk *</label>
                    <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ old('tgl_masuk', isset($agenda) ? $agenda->tgl_masuk : '') }}">
                    @if($errors->has('tgl_masuk'))
                        <p class="help-block">
                            {{ $errors->first('tgl_masuk') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pengirim_masuk') ? 'has-error' : '' }}">
                        <label for="pengirim_masuk">Pengirim *</label>
                        <input type="text" id="pengirim_masuk" name="pengirim_masuk" class="form-control" value="{{ old('pengirim_masuk', isset($agenda) ? $agenda->pengirim_masuk : '') }}">
                        @if($errors->has('pengirim_masuk'))
                        <p class="help-block">
                                {{ $errors->first('pengirim_masuk') }}
                        </p>
                        @endif
                </div>     
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('isi_singkat_masuk') ? 'has-error' : '' }}">
                    <label for="isi_singkat_masuk">Isi Singkat *</label>
                    <input type="text" id="isi_singkat_masuk" name="isi_singkat_masuk" class="form-control" value="{{ old('isi_singkat_masuk', isset($agenda) ? $agenda->isi_singkat_masuk : '') }}">
                    @if($errors->has('isi_singkat_masuk'))
                        <p class="help-block">
                            {{ $errors->first('isi_singkat_masuk') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_keluar') ? 'has-error' : '' }}">
                    <label for="nomor_keluar">Nomor Surat Keluar *</label>
                    <input type="text" id="nomor_keluar" name="nomor_keluar" class="form-control" value="{{ old('nomor_keluar', isset($agenda) ? $agenda->nomor_keluar : '') }}">
                    @if($errors->has('nomor_keluar'))
                        <p class="help-block">
                            {{ $errors->first('nomor_keluar') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_keluar') ? 'has-error' : '' }}">
                    <label for="tgl_keluar">Tanggal Surat Keluar *</label>
                    <input type="date" id="tgl_keluar" name="tgl_keluar" class="form-control" value="{{ old('tgl_keluar', isset($agenda) ? $agenda->tgl_keluar : '') }}">
                    @if($errors->has('tgl_keluar'))
                        <p class="help-block">
                            {{ $errors->first('tgl_keluar') }}
                        </p>
                    @endif
                </div>
            </div>     

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ditujukan_keluar') ? 'has-error' : '' }}">
                    <label for="ditujukan_keluar">Ditujukan Surat Keluar *</label>
                    <input type="text" id="ditujukan_keluar" name="ditujukan_keluar" class="form-control" value="{{ old('ditujukan_keluar', isset($agenda) ? $agenda->ditujukan_keluar : '') }}">
                    @if($errors->has('ditujukan_keluar'))
                        <p class="help-block">
                            {{ $errors->first('ditujukan_keluar') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('isi_surat_keluar') ? 'has-error' : '' }}">
                    <label for="isi_surat_keluar">Isi Singkat Surat Keluar *</label>
                    <input type="text" id="isi_surat_keluar" name="isi_surat_keluar" class="form-control" value="{{ old('isi_surat_keluar', isset($agenda) ? $agenda->isi_surat_keluar : '') }}">
                    @if($errors->has('isi_surat_keluar'))
                        <p class="help-block">
                            {{ $errors->first('isi_surat_keluar') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">Keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($agenda) ? $agenda->keterangan : '') }}">
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