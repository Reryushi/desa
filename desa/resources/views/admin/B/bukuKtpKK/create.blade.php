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
        Buat Data KTP dan KK
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form action="{{ route("admin.buku_ktp.store") }}" method="POST" enctype="multipart/form-data" style="padding:20px ">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('no_kk') ? 'has-error' : '' }}">
                    <label for="nomor_kk">Nomor KK*</label>
                    <input type="number" id="no_kk" name="no_kk" class="form-control" value="{{ old('no_kk', isset($ktp_kk) ? $ktp_kk->no_kk : '') }}">
                    @if($errors->has('no_kk'))
                        <p class="help-block">
                            {{ $errors->first('no_kk') }}
                        </p>
                    @endif
                </div>
            </div> 

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', isset($ktp_kk) ? $ktp_kk->nama_lengkap : '') }}">
                    @if($errors->has('nama_lengkap'))
                        <p class="help-block">
                            {{ $errors->first('nama_lengkap') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nik') ? 'has-error' : '' }}">
                    <label for="nik">NIK*</label>
                    <input type="number" id="nik" name="nik" class="form-control" value="{{ old('nik', isset($ktp_kk) ? $ktp_kk->nik : '') }}">
                    @if($errors->has('nik'))
                        <p class="help-block">
                            {{ $errors->first('nik') }}
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
                <div class="form-group col-md-3 {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir*</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', isset($ktp_kk) ? $ktp_kk->tempat_lahir : '') }}">
                    @if($errors->has('tempat_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tempat_lahir') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                    <label for="tanggal_lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', isset($ktp_kk) ? $ktp_kk->tanggal_lahir : '') }}">
                    @if($errors->has('tanggal_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_lahir') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('gol_darah') ? 'has-error' : '' }}">
                    <label for="gol_darah">Golongan Darah*</label>
                        <select name="gol_darah" id="gol_darah" class="form-control">
                            <option value="A">
                                    A
                            </option>
                            <option value="B">
                                    B
                            </option>
                            <option value="AB">
                                    AB
                            </option>
                            <option value="O">
                                    O
                            </option>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('agama') ? 'has-error' : '' }}">
                    <label for="agama">Agama*</label>
                        <select name="agama" id="agama" class="form-control">
                       
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
                <div class="form-group col-md-3 {{ $errors->has('pendidikan') ? 'has-error' : '' }}">
                    <label for="pendidikan">Pendidikan Terakhir*</label>
                        <select name="pendidikan" id="pendidikan" class="form-control">
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
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', isset($ktp_kk) ? $ktp_kk->pekerjaan : '') }}">
                    @if($errors->has('pekerjaan'))
                        <p class="help-block">
                            {{ $errors->first('pekerjaan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="alamat">Alamat*</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', isset($ktp_kk) ? $ktp_kk->alamat : '') }}">
                    @if($errors->has('alamat'))
                        <p class="help-block">
                            {{ $errors->first('alamat') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('status_perkawinan') ? 'has-error' : '' }}">
                    <label for="status_perkawinan">Status Perkawinan*</label>
                        <select name="status_perkawinan" id="status_perkawinan" class="form-control">
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
                <div class="form-group col-md-3 {{ $errors->has('tempat_ektp_keluar') ? 'has-error' : '' }}">
                    <label for="tempat_ektp_keluar">Tempat E-KTP dikeluarkan*</label>
                    <input type="text" id="tempat_ektp_keluar" name="tempat_ektp_keluar" class="form-control" value="{{ old('tempat_ektp_keluar', isset($ktp_kk) ? $ktp_kk->tempat_ektp_keluar : '') }}">
                    @if($errors->has('tempat_ektp_keluar'))
                        <p class="help-block">
                            {{ $errors->first('tempat_ektp_keluar') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_ektp_keluar') ? 'has-error' : '' }}">
                    <label for="tanggal_ektp_keluar">Tanggal E-KTP dikeluarkan*</label>
                    <input type="date" id="tanggal_ektp_keluar" name="tanggal_ektp_keluar" class="form-control" value="{{ old('tanggal_ektp_keluar', isset($ktp_kk) ? $ktp_kk->tanggal_ektp_keluar : '') }}">
                    @if($errors->has('tanggal_ektp_keluar'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_ektp_keluar') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('status_hub_keluarga') ? 'has-error' : '' }}">
                    <label for="status_hub_keluarga">Status hubungan dalam keluarga*</label>
                        <select name="status_hub_keluarga" id="status_hub_keluarga" class="form-control">
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
                <div class="form-group col-md-3 {{ $errors->has('nama_ayah') ? 'has-error' : '' }}">
                    <label for="nama_ayah">Nama Ayah*</label>
                    <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" value="{{ old('nama_ayah', isset($ktp_kk) ? $ktp_kk->nama_ayah : '') }}">
                    @if($errors->has('nama_ayah'))
                        <p class="help-block">
                            {{ $errors->first('nama_ayah') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('nama_ibu') ? 'has-error' : '' }}">
                    <label for="nama_ibu">Nama Ibu*</label>
                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" value="{{ old('nama_ibu', isset($ktp_kk) ? $ktp_kk->nama_ibu : '') }}">
                    @if($errors->has('nama_ibu'))
                        <p class="help-block">
                            {{ $errors->first('nama_ibu') }}
                        </p>
                    @endif
                </div>
            </div>
           
            <div class="row">           
                <div class="form-group col-md-3 {{ $errors->has('tgl_tinggal_didesa') ? 'has-error' : '' }}">
                    <label for="tgl_tinggal_didesa">Tanggal Mulai Tinggal didesa*</label>
                    <input type="date" id="tgl_tinggal_didesa" name="tgl_tinggal_didesa" class="form-control" value="{{ old('tgl_tinggal_didesa', isset($ktp_kk) ? $ktp_kk->tgl_tinggal_didesa : '') }}">
                    @if($errors->has('tgl_tinggal_didesa'))
                        <p class="help-block">
                            {{ $errors->first('tgl_tinggal_didesa') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ket') ? 'has-error' : '' }}">
                    <label for="ket">Keterangan</label>
                    <input type="text" id="ket" name="ket" class="form-control" value="{{ old('ket', isset($ktp_kk) ? $ktp_kk->ket : '') }}">
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