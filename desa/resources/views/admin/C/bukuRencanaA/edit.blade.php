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

<!-- style="padding:20px " -->
<div class="card">
    <div class="card-header" style="padding:10px ">
        Edit Data Penduduk
    </div>

    <div class="card-body">
        <form style="padding:20px " action="{{ route("admin.buku_rencanaA.update", [$buku_rencanaA->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tahun_anggaran') ? 'has-error' : '' }}">
                    <label for="">Tahun Anggaran*</label>
                    <input type="text" id="tahun_anggaran" name="tahun_anggaran" class="form-control" value="{{ $buku_rencanaA->tahun_anggaran }}">
                    @if($errors->has('tahun_anggaran'))
                        <p class="help-block">
                            {{ $errors->first('tahun_anggaran') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('bidang') ? 'has-error' : '' }}">
                    <label for="">Bidang*</label>
                    <input type="text" id="bidang" name="bidang" class="form-control" 
                    value="{{  $buku_rencanaA->bidang  }}">
                    @if($errors->has('bidang'))
                        <p class="help-block">
                            {{ $errors->first('bidang') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('kegiatan') ? 'has-error' : '' }}">
                    <label for="">Kegiatan*</label>
                    <input type="text" id="kegiatan" name="kegiatan" class="form-control" 
                    value="{{  $buku_rencanaA->kegiatan }}">
                    @if($errors->has('kegiatan'))
                        <p class="help-block">
                            {{ $errors->first('kegiatan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('waktu_pelaksanaan') ? 'has-error' : '' }}">
                    <label for="">Waktu Pelaksanaan*</label>
                    <input type="date" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control" 
                    value="{{  $buku_rencanaA->waktu_pelaksanaan  }}">
                    @if($errors->has('waktu_pelaksanaan'))
                        <p class="help-block">
                            {{ $errors->first('waktu_pelaksanaan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('uraian') ? 'has-error' : '' }}">
                    <label for="">Uraian*</label>
                    <input type="text" id="uraian" name="uraian" class="form-control" 
                    value="{{ $buku_rencanaA->uraian }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('volume') ? 'has-error' : '' }}">
                    <label for="">Volume*</label>
                    <input type="number" id="volume" name="volume" class="form-control" 
                    value="{{ $buku_rencanaA->volume }}">
                    @if($errors->has('volume'))
                        <p class="help-block">
                            {{ $errors->first('volume') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('harga_satuan') ? 'has-error' : '' }}">
                    <label for="">Harga Satuan*</label>
                    <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" 
                    value="{{ $buku_rencanaA->harga_satuan  }}">
                    @if($errors->has('harga_satuan'))
                        <p class="help-block">
                            {{ $errors->first('harga_satuan') }}
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