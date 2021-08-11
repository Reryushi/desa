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
        Edit Data Penduduk Sementara
    </div>

    <div class="card-body">
        <form style="padding:20px " action="{{ route("admin.buku_sementara.update", [$buku_sementara->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="{{  $buku_sementara->nama_lengkap }}">
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
                            <option value="{{$buku_sementara->jenis_kelamin}}">
                            {{$buku_sementara->jenis_kelamin}}
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
                <div class="form-group col-md-6 {{ $errors->has('nomor_identitas') ? 'has-error' : '' }}">
                    <label for="nomor_identitas">Nomor Identitas / Tanda Pengenal*</label>
                    <input type="number" id="nomor_identitas" name="nomor_identitas" class="form-control" value="{{ $buku_sementara->nomor_identitas  }}">
                    @if($errors->has('nomor_identitas'))
                        <p class="help-block">
                            {{ $errors->first('nomor_identitas') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir*</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{  $buku_sementara->tempat_lahir  }}">
                    @if($errors->has('tempat_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tempat_lahir') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                    <label for="tanggal_lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $buku_sementara->tanggal_lahir }}">
                    @if($errors->has('tanggal_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tanggal_lahir') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
                    <label for="pekerjaan">Pekerjaan*</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="{{ $buku_sementara->pekerjaan }}">
                    @if($errors->has('pekerjaan'))
                        <p class="help-block">
                            {{ $errors->first('pekerjaan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('kebangsaan') ? 'has-error' : '' }}">
                    <label for="kebangsaan">Kebangsaan*</label>
                        <select name="kebangsaan" id="kebangsaan" class="form-control">
                            <option value="{{$buku_sementara->kebangsaan}}">
                            {{$buku_sementara->kebangsaan}}
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
                <div class="form-group col-md-6 {{ $errors->has('keturunan') ? 'has-error' : '' }}">
                    <label for="keturunan">Keturunan*</label>
                    <input type="text" id="keturunan" name="keturunan" class="form-control" value="{{ $buku_sementara->keturunan  }}">
                    @if($errors->has('keturunan'))
                        <p class="help-block">
                            {{ $errors->first('keturunan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('datang_dari') ? 'has-error' : '' }}">
                    <label for="datang_dari">Datang dari*</label>
                    <input type="text" id="datang_dari" name="datang_dari" class="form-control" value="{{ $buku_sementara->datang_dari  }}">
                    @if($errors->has('datang_dari'))
                        <p class="help-block">
                            {{ $errors->first('datang_dari') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('tujuan_kedatangan') ? 'has-error' : '' }}">
                    <label for="tujuan_kedatangan">Tujuan Kedatangan*</label>
                    <input type="text" id="tujuan_kedatangan" name="tujuan_kedatangan" class="form-control" value="{{ $buku_sementara->tujuan_kedatangan  }}">
                    @if($errors->has('tujuan_kedatangan'))
                        <p class="help-block">
                            {{ $errors->first('tujuan_kedatangan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_didatangi') ? 'has-error' : '' }}">
                    <label for="nama_didatangi">Nama yang didatangi*</label>
                    <input type="text" id="nama_didatangi" name="nama_didatangi" class="form-control" value="{{ $buku_sementara->nama_didatangi }}">
                    @if($errors->has('nama_didatangi'))
                        <p class="help-block">
                        nama_didatangi                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('alamat_didatangi') ? 'has-error' : '' }}">
                    <label for="alamat_didatangi">Alamat yang didatangi*</label>
                    <input type="text" id="alamat_didatangi" name="alamat_didatangi" class="form-control" value="{{ $buku_sementara->alamat_didatangi  }}">
                    @if($errors->has('alamat_didatangi'))
                        <p class="help-block">
                        alamat_didatangi                        </p>
                    @endif
                </div>
            </div>     

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal_datang') ? 'has-error' : '' }}">
                    <label for="tanggal_datang">Tanggal datang*</label>
                    <input type="date" id="tanggal_datang" name="tanggal_datang" class="form-control" value="{{ $buku_sementara->tanggal_datang  }}">
                    @if($errors->has('tanggal_datang'))
                        <p class="help-block">
                        tanggal_datang                        </p>
                    @endif
                </div>
            </div>        

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal_pergi') ? 'has-error' : '' }}">
                    <label for="tanggal_pergi">Tanggal pergi*</label>
                    <input type="date" id="tanggal_pergi" name="tanggal_pergi" class="form-control" value="{{  $buku_sementara->tanggal_pergi }}">
                    @if($errors->has('tanggal_pergi'))
                        <p class="help-block">
                        tanggal_pergi                        </p>
                    @endif
                </div>
            </div>        

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ket') ? 'has-error' : '' }}">
                    <label for="ket">Keterangan </label>
                    <input type="text" id="ket" name="ket" class="form-control" value="{{ $buku_sementara->ket  }}">
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