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
        <form style="padding:20px " action="{{ route("admin.buku_induk.update", [$buku_induk->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="{{$buku_induk->nama_lengkap}}">
                    @if($errors->has('nama_lengkap'))
                        <p class="help-block">
                            {{ $errors->first('nama_lengkap') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                    <label for="jenis_kelamin">Jenis Kelamin*</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="{{$buku_induk->jenis_kelamin}}">
                            {{$buku_induk->jenis_kelamin}}
                            </option>
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
                <div class="form-group col-md-3 {{ $errors->has('status_perkawinan') ? 'has-error' : '' }}">
                    <label for="status_perkawinan">Status Perkawinan*</label>
                        <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                            <option value="{{$buku_induk->status_perkawinan}}">
                            {{$buku_induk->status_perkawinan}}
                            </option>
                            <option value="Belum Menikah">
                                    Belum Menikah
                            </option>
                            <option value="Menikah">
                                    Menikah
                            </option>
                            <option value="Cerai Hidup">
                                    Cerai Hidup
                            </option>
                            <option value="Cerai Mati">
                                    Cerai Mati
                            </option>
                        </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir*</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{$buku_induk->tempat_lahir}}">
                    @if($errors->has('tempat_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tempat_lahir') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                    <label for="tanggal_lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $buku_induk->tanggal_lahir }}">
                    @if($errors->has('tanggal_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_lahir') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('agama') ? 'has-error' : '' }}">
                    <label for="agama">Agama*</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="{{$buku_induk->agama}}">
                            {{$buku_induk->agama}}
                            </option>
                            <option value="Islam">
                                    Islam
                            </option>
                            <option value="Protestan">
                                    Protestan
                            </option>
                            <option value="Katolik">
                                    Katolik
                            </option>
                            <option value="Hindu">
                                    Hindu
                            </option>
                            <option value="Buddha">
                                    Buddha
                            </option>
                            <option value="Khonghucu">
                                    Khonghucu
                            </option>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pendidikan_terakhir') ? 'has-error' : '' }}">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir*</label>
                        <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control">
                            <option value="{{$buku_induk->pendidikan_terakhir}}">
                            {{$buku_induk->pendidikan_terakhir}}
                            </option>
                            <option value="Tidak Bersekolah">
                                    Tidak Bersekolah
                            </option>
                            <option value="TK">
                                    TK / sederajat
                            </option>
                            <option value="SD">
                                    SD / sederajat
                            </option>
                            <option value="SMP">
                                    SMP / sederajat
                            </option>
                            <option value="SMA">
                                    SMA / sederajat
                            </option>
                            <option value="Diploma">
                                    D1 / D2 / D3
                            </option>
                            <option value="S1">
                                    S1
                            </option>
                            <option value="S2">
                                    S2
                            </option>
                            <option value="S3">
                                    S3
                            </option>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
                    <label for="pekerjaan">Pekerjaan*</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="{{ $buku_induk->pekerjaan  }}">
                    @if($errors->has('pekerjaan'))
                        <p class="help-block">
                            {{ $errors->first('pekerjaan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tidak_buta_huruf') ? 'has-error' : '' }}">
                    <label for="tidak_buta_huruf">Buta Huruf*</label>
                        <select name="tidak_buta_huruf" id="tidak_buta_huruf" class="form-control">
                            <option value="{{$buku_induk->tidak_buta_huruf}}">
                            {{$buku_induk->tidak_buta_huruf}}
                            </option>
                            <option value="1">
                                    Tidak Buta Huruf
                            </option>
                            <option value="0">
                                    Buta Huruf
                            </option>
                        </select>
                </div>
            </div>   

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('wn') ? 'has-error' : '' }}">
                    <label for="wn">Warga Negara*</label>
                        <select name="wn" id="wn" class="form-control">
                            <option value="{{$buku_induk->wn}}">
                            {{$buku_induk->wn}}
                            </option>
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
                <div class="form-group col-md-6 {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="alamat">Alamat*</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{  $buku_induk->alamat }}">
                    @if($errors->has('alamat'))
                        <p class="help-block">
                            {{ $errors->first('alamat') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('status_di_kk') ? 'has-error' : '' }}">
                    <label for="status_di_kk">Status hubungan dalam keluarga*</label>
                        <select name="status_di_kk" id="status_di_kk" class="form-control">
                            <option value="{{$buku_induk->status_di_kk}}">
                            {{$buku_induk->status_di_kk}}
                            </option>
                            <option value="Kepala Keluarga">
                                    Kepala Keluarga
                            </option>
                            <option value="Suami">
                                    Suami
                            </option>
                            <option value="Istri">
                                    Istri
                            </option>
                            <option value="Anak">
                                    Anak
                            </option>
                            <option value="Cucu">
                                    Cucu
                            </option>
                            <option value="Suami">
                                    Suami
                            </option>
                            <option value="Orangtua">
                                    Orangtua
                            </option>
                            <option value="Mertua">
                                    Mertua
                            </option>
                            <option value="Famili Lain">
                                    Famili Lain
                            </option>
                            <option value="Pembantu">
                                    Pembantu
                            </option>
                            <option value="Lainnya">
                                    Lainnya
                            </option>
                        </select>
                </div>
            </div>  

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nik') ? 'has-error' : '' }}">
                    <label for="nik">NIK*</label>
                    <input type="number" id="nik" name="nik" class="form-control" value="{{ $buku_induk->nik }}">
                    @if($errors->has('nik'))
                        <p class="help-block">
                            {{ $errors->first('nik') }}
                        </p>
                    @endif
                </div>
            </div> 

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_kk') ? 'has-error' : '' }}">
                    <label for="nomor_kk">Nomor KK*</label>
                    <input type="number" id="nomor_kk" name="nomor_kk" class="form-control" value="{{ $buku_induk->nomor_kk}}">
                    @if($errors->has('nomor_kk'))
                        <p class="help-block">
                            {{ $errors->first('nomor_kk') }}
                        </p>
                    @endif
                </div>
            </div> 

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ket') ? 'has-error' : '' }}">
                    <label for="ket">Keterangan *</label>
                    <input type="text" id="ket" name="ket" class="form-control" value="{{  $buku_induk->ket  }}">
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