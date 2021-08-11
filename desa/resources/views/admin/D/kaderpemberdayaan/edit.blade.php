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
        Edit kader
    </div>

    <div class="card-body">
        <form style="padding:20px " action="{{ route("admin.kaderpemberdayaan.update", [$kaderpemberdayaan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col {{ $errors->has('nama_proyek_kegiatan') ? 'has-error' : '' }}">
                    <label for="nama">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($kaderpemberdayaan) ? $kaderpemberdayaan->nama : '') }}">
                    @if($errors->has('nama'))
                        <p class="help-block">
                            {{ $errors->first('nama') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('umur') ? 'has-error' : '' }}">
                    <label for="umur">Umur *</label>
                    <input type="number" id="umur" name="umur" class="form-control" value="{{ old('umur', isset($kaderpemberdayaan) ? $kaderpemberdayaan->umur : '') }}">
                    @if($errors->has('umur'))
                        <p class="help-block">
                            {{ $errors->first('umur') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="laki-laki"
                                @if ($kaderpemberdayaan->jenis_kelamin == 'laki-laki') selected="selected" @endif>laki-laki
                        </option>
                        <option value="perempuan"
                                @if ($kaderpemberdayaan->jenis_kelamin == 'perempuan') selected="selected" @endif>
                                perempuan
                        </option>
                    </select>
                </div>
            </div>

                <div class="form-group {{ $errors->has('pendidikan_kursus') ? 'has-error' : '' }}">
                        <label for="pendidikan_kursus">Pendidikan Kursus *</label>
                        <input type="text" id="pendidikan_kursus" name="pendidikan_kursus" class="form-control" value="{{ old('pendidikan_kursus', isset($kaderpemberdayaan) ? $kaderpemberdayaan->pendidikan_kursus : '') }}">
                        @if($errors->has('pendidikan_kursus'))
                        <p class="help-block">
                                {{ $errors->first('pendidikan_kursus') }}
                        </p>
                        @endif
                </div>     

            <div class="row">
                <div class="form-group col {{ $errors->has('bidang') ? 'has-error' : '' }}">
                    <label for="bidang">Bidang *</label>
                    <input type="text" id="bidang" name="bidang" class="form-control" value="{{ old('bidang', isset($kaderpemberdayaan) ? $kaderpemberdayaan->bidang : '') }}">
                    @if($errors->has('bidang'))
                        <p class="help-block">
                            {{ $errors->first('bidang') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="alamat">Alamat *</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', isset($kaderpemberdayaan) ? $kaderpemberdayaan->alamat : '') }}">
                    @if($errors->has('alamat'))
                        <p class="help-block">
                            {{ $errors->first('alamat') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($kaderpemberdayaan) ? $kaderpemberdayaan->keterangan : '') }}">
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