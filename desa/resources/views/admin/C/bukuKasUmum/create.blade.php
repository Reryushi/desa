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
        Buat Data Kas Umum
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form style="padding:20px " action="{{ route("admin.buku_kas_umum.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                    <label for="">Tanggal*</label>
                    <input type="date" name="tanggal" class="form-control" 
                    value="{{ old('tanggal', isset($buku_kas_umum) ? $buku_kas_umum->tanggal : '') }}">
                    @if($errors->has('tanggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('kode_rekening') ? 'has-error' : '' }}">
                    <label for="">Kode Rekening*</label>
                    <input type="text" name="kode_rekening" class="form-control" 
                    value="{{ old('kode_rekening', isset($buku_kas_umum) ? $buku_kas_umum->kode_rekening : '') }}">
                    @if($errors->has('kode_rekening'))
                        <p class="help-block">
                            {{ $errors->first('kode_rekening') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('uraian') ? 'has-error' : '' }}">
                    <label for="">Uraian*</label>
                    <input type="text" name="uraian" class="form-control" 
                    value="{{ old('uraian', isset($buku_kas_umum) ? $buku_kas_umum->uraian : '') }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('penerimaan') ? 'has-error' : '' }}">
                    <label for="">Penerimaan*</label>
                    <input type="number" name="penerimaan" class="form-control" 
                    value="{{ old('penerimaan', isset($buku_kas_umum) ? $buku_kas_umum->penerimaan : '') }}">
                    @if($errors->has('penerimaan'))
                        <p class="help-block">
                            {{ $errors->first('penerimaan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pengeluaran') ? 'has-error' : '' }}">
                    <label for="">Pengeluaran*</label>
                    <input type="number" name="pengeluaran" class="form-control" 
                    value="{{ old('pengeluaran', isset($buku_kas_umum) ? $buku_kas_umum->pengeluaran : '') }}">
                    @if($errors->has('pengeluaran'))
                        <p class="help-block">
                            {{ $errors->first('pengeluaran') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('no_bukti') ? 'has-error' : '' }}">
                    <label for="">Nomor Bukti*</label>
                    <input type="text" name="no_bukti" class="form-control" 
                    value="{{ old('no_bukti', isset($buku_kas_umum) ? $buku_kas_umum->no_bukti : '') }}">
                    @if($errors->has('no_bukti'))
                        <p class="help-block">
                            {{ $errors->first('no_bukti') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pengeluaran_komulatif') ? 'has-error' : '' }}">
                    <label for="">Jumlah Pengeluaran Komulatif*</label>
                    <input type="number" name="pengeluaran_komulatif" class="form-control" 
                    value="{{ old('pengeluaran_komulatif', isset($buku_kas_umum) ? $buku_kas_umum->pengeluaran_komulatif : '') }}">
                    @if($errors->has('pengeluaran_komulatif'))
                        <p class="help-block">
                            {{ $errors->first('pengeluaran_komulatif') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('saldo') ? 'has-error' : '' }}">
                    <label for="">Saldo*</label>
                    <input type="number" name="saldo" class="form-control" 
                    value="{{ old('saldo', isset($buku_kas_umum) ? $buku_kas_umum->saldo : '') }}">
                    @if($errors->has('saldo'))
                        <p class="help-block">
                            {{ $errors->first('saldo') }}
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