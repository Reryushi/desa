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
        Buat Data Bank Desa
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form style="padding:20px "action="{{ route("admin.buku_bank.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                    <label for="">Tanggal Transaksi*</label>
                    <input type="date" name="tanggal" class="form-control" 
                    value="{{ old('tanggal', isset($buku_bank) ? $buku_bank->tanggal : '') }}">
                    @if($errors->has('tanggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('uraian') ? 'has-error' : '' }}">
                    <label for="">Uraian Transaksi*</label>
                    <input type="text" name="uraian" class="form-control" 
                    value="{{ old('uraian', isset($buku_bank) ? $buku_bank->uraian : '') }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('bukti') ? 'has-error' : '' }}">
                    <label for="">Bukti Transaksi*</label>
                    <input type="text" name="bukti" class="form-control" 
                    value="{{ old('bukti', isset($buku_bank) ? $buku_bank->bukti : '') }}">
                    @if($errors->has('bukti'))
                        <p class="help-block">
                            {{ $errors->first('bukti') }}
                        </p>
                    @endif
                </div>
            </div>
<br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('setoran') ? 'has-error' : '' }}">
                    <label for="">Pemasukan*</label><br>
                    <label for="">Setoran (Rp.)</label>
                    <input type="text" name="setoran" class="form-control" 
                    value="{{ old('setoran', isset($buku_bank) ? $buku_bank->setoran : '') }}">
                    @if($errors->has('setoran'))
                        <p class="help-block">
                            {{ $errors->first('setoran') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('bunga') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">000</label><br>
                    <label for="">Bunga Bank (Rp.)</label>
                    <input type="text" name="bunga" class="form-control" 
                    value="{{ old('bunga', isset($buku_bank) ? $buku_bank->bunga : '') }}">
                    @if($errors->has('bunga'))
                        <p class="help-block">
                            {{ $errors->first('bunga') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('penarikan') ? 'has-error' : '' }}">
                    <label for="">Pengeluaran*</label><br>
                    <label for="">Penarikan (Rp.)</label>
                    <input type="text" name="penarikan" class="form-control" 
                    value="{{ old('penarikan', isset($buku_bank) ? $buku_bank->penarikan : '') }}">
                    @if($errors->has('penarikan'))
                        <p class="help-block">
                            {{ $errors->first('penarikan') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('pajak') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">000</label><br>
                    <label for="">Pajak (Rp.)</label>
                    <input type="text" name="pajak" class="form-control" 
                    value="{{ old('pajak', isset($buku_bank) ? $buku_bank->pajak : '') }}">
                    @if($errors->has('pajak'))
                        <p class="help-block">
                            {{ $errors->first('pajak') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('biaya') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">000</label><br>
                    <label for="">Biaya Adminstrasi (Rp.)</label>
                    <input type="text" name="biaya" class="form-control" 
                    value="{{ old('biaya', isset($buku_bank) ? $buku_bank->biaya : '') }}">
                    @if($errors->has('biaya'))
                        <p class="help-block">
                            {{ $errors->first('biaya') }}
                        </p>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('saldo') ? 'has-error' : '' }}">
                    <label for="">Saldo*</label>
                    <input type="number" name="saldo" class="form-control" 
                    value="{{ old('saldo', isset($buku_bank) ? $buku_bank->saldo : '') }}">
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