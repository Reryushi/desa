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
        Edit Kegiatan
    </div>

    <div class="card-body">
        <form style="padding:20px " action="{{ route("admin.kegiatanpembangunan.update", [$kegiatanpembangunan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col {{ $errors->has('nama_proyek_kegiatan') ? 'has-error' : '' }}">
                    <label for="nama_proyek_kegiatan">Nama Proyek / Kegiatan *</label>
                    <input type="text" id="nama_proyek_kegiatan" name="nama_proyek_kegiatan" class="form-control" value="{{ old('nama_proyek_kegiatan', isset($kegiatanpembangunan) ? $kegiatanpembangunan->nama_proyek_kegiatan : '') }}">
                    @if($errors->has('nama_proyek_kegiatan'))
                        <p class="help-block">
                            {{ $errors->first('nama_proyek_kegiatan') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('volume') ? 'has-error' : '' }}">
                    <label for="volume">Volume *</label>
                    <input type="number" id="volume" name="volume" class="form-control" value="{{ old('volume', isset($kegiatanpembangunan) ? $kegiatanpembangunan->volume : '') }}">
                    @if($errors->has('volume'))
                        <p class="help-block">
                            {{ $errors->first('volume') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col {{ $errors->has('sumber_dana') ? 'has-error' : '' }}">
                    <label for="sumber_dana">Sumber Dana *</label>
                    <select name="sumber_dana" id="sumber_dana" class="form-control">
                        <option value="pemerintah"
                                @if ($kegiatanpembangunan->sumber_dana == 'pemerintah') selected="selected" @endif>pemerintah
                        </option>
                        <option value="provinsi"
                                @if ($kegiatanpembangunan->sumber_dana == 'provinsi') selected="selected" @endif>
                                provinsi
                        </option>
                        <option value="kab_kota"
                                @if ($kegiatanpembangunan->sumber_dana == 'kab_kota') selected="selected" @endif>
                                kab/kota
                        </option>
                        <option value="swadaya"
                                @if ($kegiatanpembangunan->sumber_dana == 'swadaya') selected="selected" @endif>
                                swadaya
                        </option>
                    </select>
                </div>
            </div>

                <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
                        <label for="jumlah">Jumlah *</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" value="{{ old('jumlah', isset($kegiatanpembangunan) ? $kegiatanpembangunan->jumlah : '') }}">
                        @if($errors->has('jumlah'))
                        <p class="help-block">
                                {{ $errors->first('jumlah') }}
                        </p>
                        @endif
                </div>     

            <div class="row">
                <div class="form-group col {{ $errors->has('waktu') ? 'has-error' : '' }}">
                    <label for="waktu">Waktu *</label>
                    <input type="time" id="waktu" name="waktu" class="form-control" value="{{ old('waktu', isset($kegiatanpembangunan) ? $kegiatanpembangunan->waktu : '') }}">
                    @if($errors->has('waktu'))
                        <p class="help-block">
                            {{ $errors->first('waktu') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col {{ $errors->has('sifat_proyek') ? 'has-error' : '' }}">
                    <label for="sifat_proyek">Sifat Proyek *</label>
                    <select name="sifat_proyek" id="sifat_proyek" class="form-control">
                        <option value="baru"
                                @if ($kegiatanpembangunan->sifat_proyek == 'baru') selected="selected" @endif>baru
                        </option>
                        <option value="lanjutan"
                                @if ($kegiatanpembangunan->sifat_proyek == 'lanjutan') selected="selected" @endif>
                                lanjutan
                        </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col {{ $errors->has('pelaksana') ? 'has-error' : '' }}">
                    <label for="pelaksana">Pelaksana *</label>
                    <input type="text" id="pelaksana" name="pelaksana" class="form-control" value="{{ old('pelaksana', isset($kegiatanpembangunan) ? $kegiatanpembangunan->pelaksana : '') }}">
                    @if($errors->has('pelaksana'))
                        <p class="help-block">
                            {{ $errors->first('pelaksana') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($kegiatanpembangunan) ? $kegiatanpembangunan->keterangan : '') }}">
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