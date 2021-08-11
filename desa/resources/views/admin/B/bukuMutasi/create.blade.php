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
        Buat Data Mutasi Penduduk
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form action="{{ route("admin.buku_mutasi.store") }}" method="POST" enctype="multipart/form-data" style="padding:20px ">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', isset($mutasi) ? $mutasi->nama_lengkap : '') }}">
                    @if($errors->has('nama_lengkap'))
                        <p class="help-block">
                            {{ $errors->first('nama_lengkap') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir*</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', isset($mutasi) ? $mutasi->tempat_lahir : '') }}">
                    @if($errors->has('tempat_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tempat_lahir') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                    <label for="tanggal_lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', isset($mutasi) ? $mutasi->tanggal_lahir : '') }}">
                    @if($errors->has('tanggal_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_lahir') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                    <label for="jenis_kelamin">Jenis Kelamin*</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="L">
                                    Laki-Laki
                            </option>
                            <option value="P">
                                    Perempuan
                            </option>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('wn') ? 'has-error' : '' }}">
                    <label for="wn">Warga Negara*</label>
                        <select name="wn" id="wn" class="form-control">
                            <option value="wni">
                                    WNI
                            </option>
                            <option value="wna">
                                    WNA
                            </option>
                        </select>
                </div>
            </div>   

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('datang_dari') ? 'has-error' : '' }}">
                    <label for="datang_dari">Datang dari</label>
                    <input type="text" id="datang_dari" name="datang_dari" class="form-control" value="{{ old('datang_dari', isset($mutasi) ? $mutasi->datang_dari : '') }}">
                    @if($errors->has('datang_dari'))
                        <p class="help-block">
                            {{ $errors->first('datang_dari') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_datang') ? 'has-error' : '' }}">
                    <label for="tanggal_datang">Tanggal Datang</label>
                    <input type="date" id="tanggal_datang" name="tanggal_datang" class="form-control" value="{{ old('tanggal_datang', isset($mutasi) ? $mutasi->tanggal_datang : '') }}">
                    @if($errors->has('tanggal_datang'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_datang') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pindah_ke') ? 'has-error' : '' }}">
                    <label for="pindah_ke">Pindah ke</label>
                    <input type="text" id="pindah_ke" name="pindah_ke" class="form-control" value="{{ old('pindah_ke', isset($mutasi) ? $mutasi->pindah_ke : '') }}">
                    @if($errors->has('pindah_ke'))
                        <p class="help-block">
                            {{ $errors->first('pindah_ke') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_pindah') ? 'has-error' : '' }}">
                    <label for="tanggal_pindah">Tanggal Pindah</label>
                    <input type="date" id="tanggal_pindah" name="tanggal_pindah" class="form-control" value="{{ old('tanggal_pindah', isset($mutasi) ? $mutasi->tanggal_pindah : '') }}">
                    @if($errors->has('tanggal_pindah'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_pindah') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('meninggal') ? 'has-error' : '' }}">
                    <label for="meninggal">Meninggal</label>
                    <input type="text" id="meninggal" name="meninggal" class="form-control" value="{{ old('meninggal', isset($mutasi) ? $mutasi->meninggal : '') }}">
                    @if($errors->has('meninggal'))
                        <p class="help-block">
                            {{ $errors->first('meninggal') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_meninggal') ? 'has-error' : '' }}">
                    <label for="tanggal_meninggal">Tanggal Meninggal</label>
                    <input type="date" id="tanggal_meninggal" name="tanggal_meninggal" class="form-control" value="{{ old('tanggal_meninggal', isset($mutasi) ? $mutasi->tanggal_meninggal : '') }}">
                    @if($errors->has('tanggal_meninggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_meninggal') }}
                        </p>
                    @endif
                </div>
            </div>
           
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ket') ? 'has-error' : '' }}">
                    <label for="ket">Keterangan </label>
                    <input type="text" id="ket" name="ket" class="form-control" value="{{ old('ket', isset($mutasi) ? $mutasi->ket : '') }}">
                    @if($errors->has('ket'))
                        <p class="help-block">
                            {{ $errors->first('ket') }}
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