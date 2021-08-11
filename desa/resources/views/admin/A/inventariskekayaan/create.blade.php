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
        Buat Inventaris Kekayaan
    </div>
    <div class="card-body">
    <form action="{{ route("admin.inventariskekayaan.store") }}" method="POST" enctype="multipart/form-data" style="padding: 20px ">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('jenis_barang_bangunan') ? 'has-error' : '' }}">
                    <label for="jenis_barang_bangunan">Jenis Barang / Bangunan *</label>
                    <input type="text" id="jenis_barang_bangunan" name="jenis_barang_bangunan" class="form-control" value="{{ old('jenis_barang_bangunan', isset($inventariskekayaan) ? $inventariskekayaan->jenis_barang_bangunan : '') }}">
                    @if($errors->has('jenis_barang_bangunan'))
                        <p class="help-block">
                            {{ $errors->first('jenis_barang_bangunan') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('asal_barang_bangunan') ? 'has-error' : '' }}">
                    <label for="asal_barang_bangunan">Asal Barang / Bangunan *</label>
                    
                    <select name="asal_barang_bangunan" id="asal_barang_bangunan" class="form-control">
                        <option value="sendiri">
                                sendiri
                        </option>
                        <option value="pemerintah">
                                pemerintah
                        </option>
                        <option value="provinsi">
                                provinsi
                        </option>
                        <option value="kab_kota">
                               kab/kota
                        </option>
                        <option value="sumbangan">
                                 sumbangan
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('asal_keadaan_barang') ? 'has-error' : '' }}">
                    <label for="asal_keadaan_barang">Keadaan Asal Barang *</label>
                    <select name="asal_keadaan_barang" id="asal_keadaan_barang" class="form-control">
                        <option value="baik">
                               baik
                        </option>
                        <option value="rusak">
                                rusak
                        </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('penghapusan_barang_bangunan') ? 'has-error' : '' }}">
                    <label for="penghapusan_barang_bangunan">Penghapusan Barang / Bangunan *</label>
                    <select name="penghapusan_barang_bangunan" id="penghapusan_barang_bangunan" class="form-control">
                        <option value="rusak">rusak
                        </option>
                        <option value="dijual">
                                dijual
                        </option>
                        <option value="disumbangkan">
                                disumbangkan
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_penghapusan') ? 'has-error' : '' }}">
                    <label for="tgl_penghapusan">Tanggal Penghapusan *</label>
                    <input type="date" id="tgl_penghapusan" name="tgl_penghapusan" class="form-control" value="{{ old('tgl_penghapusan', isset($inventariskekayaan) ? $inventariskekayaan->tgl_penghapusan : '') }}">
                    @if($errors->has('tgl_penghapusan'))
                        <p class="help-block">
                            {{ $errors->first('tgl_penghapusan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('penghapusan_keadaan_barang') ? 'has-error' : '' }}">
                    <label for="penghapusan_keadaan_barang">Keadaan Barang Penghapusan *</label>
                    <select name="penghapusan_keadaan_barang" id="penghapusan_keadaan_barang" class="form-control">
                        <option value="baik">baik
                        </option>
                        <option value="rusak">
                                rusak
                        </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">Keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($inventariskekayaan) ? $inventariskekayaan->keterangan : '') }}">
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