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
        Edit Rencana
    </div>

    <div class="card-body">
        <form style="padding:20px " action="{{ route("admin.rencanakerja.update", [$rencanakerja->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col {{ $errors->has('nama_proyek_kegiatan') ? 'has-error' : '' }}">
                    <label for="nama_proyek_kegiatan">Nama Proek / Kegiatan *</label>
                    <input type="text" id="nama_proyek_kegiatan" name="nama_proyek_kegiatan" class="form-control" value="{{ old('nama_proyek_kegiatan', isset($rencanakerja) ? $rencanakerja->nama_proyek_kegiatan : '') }}">
                    @if($errors->has('nama_proyek_kegiatan'))
                        <p class="help-block">
                            {{ $errors->first('nama_proyek_kegiatan') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('lokasi') ? 'has-error' : '' }}">
                    <label for="lokasi">Lokasi *</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ old('lokasi', isset($rencanakerja) ? $rencanakerja->lokasi : '') }}">
                    @if($errors->has('lokasi'))
                        <p class="help-block">
                            {{ $errors->first('lokasi') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col {{ $errors->has('sumber_biaya') ? 'has-error' : '' }}">
                    <label for="sumber_biaya">Sumber Biaya *</label>
                    <select name="sumber_biaya" id="sumber_biaya" class="form-control">
                        <option value="pemerintah"
                                @if ($rencanakerja->sumber_biaya == 'pemerintah') selected="selected" @endif>pemerintah
                        </option>
                        <option value="provinsi"
                                @if ($rencanakerja->sumber_biaya == 'provinsi') selected="selected" @endif>
                                provinsi
                        </option>
                        <option value="kab_kota"
                                @if ($rencanakerja->sumber_biaya == 'kab_kota') selected="selected" @endif>
                                kab/kota
                        </option>
                        <option value="swadaya"
                                @if ($rencanakerja->sumber_biaya == 'swadaya') selected="selected" @endif>
                                swadaya
                        </option>
                    </select>
                </div>
            </div>

                <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
                        <label for="jumlah">Jumlah *</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" value="{{ old('jumlah', isset($rencanakerja) ? $rencanakerja->jumlah : '') }}">
                        @if($errors->has('jumlah'))
                        <p class="help-block">
                                {{ $errors->first('jumlah') }}
                        </p>
                        @endif
                </div>     

            <div class="row">
                <div class="form-group col {{ $errors->has('pelaksana') ? 'has-error' : '' }}">
                    <label for="pelaksana">Pelaksana *</label>
                    <input type="text" id="pelaksana" name="pelaksana" class="form-control" value="{{ old('pelaksana', isset($rencanakerja) ? $rencanakerja->pelaksana : '') }}">
                    @if($errors->has('pelaksana'))
                        <p class="help-block">
                            {{ $errors->first('pelaksana') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col {{ $errors->has('manfaat') ? 'has-error' : '' }}">
                    <label for="manfaat">Manfaat *</label>
                    <input type="text" id="manfaat" name="manfaat" class="form-control" value="{{ old('manfaat', isset($rencanakerja) ? $rencanakerja->manfaat : '') }}">
                    @if($errors->has('manfaat'))
                        <p class="help-block">
                            {{ $errors->first('manfaat') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($rencanakerja) ? $rencanakerja->keterangan : '') }}">
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