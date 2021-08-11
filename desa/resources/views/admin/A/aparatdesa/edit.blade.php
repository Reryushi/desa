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
        Edit Aparat
    </div>

    <div class="card-body">
        <form action="{{ route("admin.aparatdesa.update", [$aparatdesa->id]) }}" method="POST" enctype="multipart/form-data" style="padding: 20px ">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama') ? 'has-error' : '' }}">
                    <label for="nama">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($aparatdesa) ? $aparatdesa->nama : '') }}">
                    @if($errors->has('nama'))
                        <p class="help-block">
                            {{ $errors->first('nama') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('niap') ? 'has-error' : '' }}">
                    <label for="niap">NIAP *</label>
                    <input type="text" id="niap" name="niap" class="form-control" value="{{ old('niap', isset($aparatdesa) ? $aparatdesa->niap : '') }}">
                    @if($errors->has('niap'))
                        <p class="help-block">
                            {{ $errors->first('niap') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nip') ? 'has-error' : '' }}">
                    <label for="nip">NIP *</label>
                    <input type="text" id="nip" name="nip" class="form-control" value="{{ old('nip', isset($aparatdesa) ? $aparatdesa->nip : '') }}">
                    @if($errors->has('nip'))
                        <p class="help-block">
                            {{ $errors->first('nip') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                    <select name="pend_terakhir" id="pend_terakhir" class="form-control">
                        <option value="Laki-Laki">Laki-Laki
                        </option>
                        <option value="Perempuan">
                                Perempuan
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir *</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', isset($aparatdesa) ? $aparatdesa->tempat_lahir : '') }}">
                    @if($errors->has('tempat_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tempat_lahir') }}
                        </p>
                    @endif
                </div>  
                <div class="form-group col-md-3 {{ $errors->has('tgl_lahir') ? 'has-error' : '' }}">
                    <label for="tgl_lahir">Tanggal Lahir *</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir', isset($aparatdesa) ? $aparatdesa->tgl_lahir : '') }}">
                    @if($errors->has('tgl_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tgl_lahir') }}
                        </p>
                    @endif
                </div>
            </div>
            
              

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('agama') ? 'has-error' : '' }}">
                    <label for="agama">Agama *</label>
                    <input type="text" id="agama" name="agama" class="form-control" value="{{ old('agama', isset($aparatdesa) ? $aparatdesa->agama : '') }}">
                    @if($errors->has('agama'))
                        <p class="help-block">
                            {{ $errors->first('agama') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pangkat_golongan') ? 'has-error' : '' }}">
                    <label for="pangkat_golongan">Pangkat / Golongan *</label>
                    <input type="text" id="pangkat_golongan" name="pangkat_golongan" class="form-control" value="{{ old('pangkat_golongan', isset($aparatdesa) ? $aparatdesa->pangkat_golongan : '') }}">
                    @if($errors->has('pangkat_golongan'))
                        <p class="help-block">
                            {{ $errors->first('pangkat_golongan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jabatan') ? 'has-error' : '' }}">
                    <label for="jabatan">Jabatan *</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control" value="{{ old('jabatan', isset($aparatdesa) ? $aparatdesa->jabatan : '') }}">
                    @if($errors->has('jabatan'))
                        <p class="help-block">
                            {{ $errors->first('jabatan') }}
                        </p>
                    @endif
                </div>   
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pend_terakhir') ? 'has-error' : '' }}">
                    <label for="pend_terakhir">Pendidikan *</label>
                    <select name="pend_terakhir" id="pend_terakhir" class="form-control">
                        <option value="SMA">SMA
                        </option>
                        <option value="D3">
                                D3
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
                        <option value="lainnya">
                                lainnya
                        </option>
                    </select>
                </div>
                
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_keputusan_pengangkatan') ? 'has-error' : '' }}">
                    <label for="tgl_keputusan_pengangkatan">Tanggal Keputusan Pengangkatan *</label>
                    <input type="date" id="tgl_keputusan_pengangkatan" name="tgl_keputusan_pengangkatan" class="form-control" value="{{ old('tgl_keputusan_pengangkatan', isset($aparatdesa) ? $aparatdesa->tgl_keputusan_pengangkatan : '') }}">
                    @if($errors->has('tgl_keputusan_pengangkatan'))
                        <p class="help-block">
                            {{ $errors->first('tgl_keputusan_pengangkatan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_keputusan_pemberhentian') ? 'has-error' : '' }}">
                    <label for="tgl_keputusan_pemberhentian">Tanggal Keputusan Pemberhentian *</label>
                    <input type="date" id="tgl_keputusan_pemberhentian" name="tgl_keputusan_pemberhentian" class="form-control" value="{{ old('tgl_keputusan_pemberhentian', isset($aparatdesa) ? $aparatdesa->tgl_keputusan_pemberhentian : '') }}">
                    @if($errors->has('tgl_keputusan_pemberhentian'))
                        <p class="help-block">
                            {{ $errors->first('tgl_keputusan_pemberhentian') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6{{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">Keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($aparatdesa) ? $aparatdesa->keterangan : '') }}">
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