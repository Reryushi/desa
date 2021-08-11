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
        Buat Tanah Desa
    </div>
    <div class="card-body">
    <form action="{{ route("admin.tanahdesa.store") }}" method="POST" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_perorangan_badan_hukum') ? 'has-error' : '' }}">
                    <label for="nama_perorangan_badan_hukum">Nama Perorangan / Badan Hukum *</label>
                    <input type="text" id="nama_perorangan_badan_hukum" name="nama_perorangan_badan_hukum" class="form-control" value="{{ old('nama_perorangan_badan_hukum', isset($tanahdesa) ? $tanahdesa->nama_perorangan_badan_hukum : '') }}">
                    @if($errors->has('nama_perorangan_badan_hukum'))
                        <p class="help-block">
                            {{ $errors->first('nama_perorangan_badan_hukum') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jml') ? 'has-error' : '' }}">
                    <label for="jml">Jumlah *</label>
                    <input type="number" id="jml" name="jml" class="form-control" value="{{ old('jml', isset($tanahdesa) ? $tanahdesa->jml : '') }}">
                    @if($errors->has('jml'))
                        <p class="help-block">
                            {{ $errors->first('jml') }}
                        </p>
                    @endif
                </div>
                </div>

                <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('status_hak_tanah') ? 'has-error' : '' }}">
                    <label for="status_hak_tanah">Status Hak Tanah *</label>
                    <select name="status_hak_tanah" id="status_hak_tanah" class="form-control">
                        <option value="HM">HM
                        </option>
                        <option value="HGB">
                                HGB
                        </option>
                        <option value="HP">
                                HP
                        </option>
                        <option value="HGU">
                                HGU
                        </option>
                        <option value="HPL">
                                HPL
                        </option>
                        <option value="MA">
                                MA
                        </option>
                        <option value="VI">
                                VI
                        </option>
                        <option value="TN">
                                TN
                        </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('penggunaan_tanah') ? 'has-error' : '' }}">
                    <label for="penggunaan_tanah">Penggunaan Tanah *</label>
                    <select name="penggunaan_tanah" id="penggunaan_tanah" class="form-control">
                        <option value="perumahan">perumahan
                        </option>
                        <option value="perdangan_jasa">
                                perdangan_jasa
                        </option>
                        <option value="perkantoran">
                                perkantoran
                        </option>
                        <option value="industri">
                                industri
                        </option>
                        <option value="fasilitas_umum">
                                fasilitas_umum
                        </option>
                        <option value="sawah">
                                sawah
                        </option>
                        <option value="tegalan">
                                tegalan
                        </option>
                        <option value="perkebunan">
                                perkebunan
                        </option>
                        <option value="peternakan_perikanan">
                                peternakan_perikanan
                        </option>
                        <option value="hutan_belukan">
                                hutan_belukan
                        </option>
                        <option value="hutan_lindung">
                                hutan_lindung
                        </option>
                        <option value="mutasi_tanah">
                                mutasi_tanah
                        </option>
                        <option value="tanah_kosong">
                                tanah_kosong
                        </option>
                        <option value="lainnya">
                                lainnya
                        </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                        <label for="keterangan">Keterangan *</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($tanahdesa) ? $tanahdesa->keterangan : '') }}">
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