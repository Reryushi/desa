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
        Buat Data Kas Pembantu Pajak, Retribusi, dan Penerimaan Lainnya
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form style="padding:20px " action="{{ route("admin.buku_kas_prpl.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                    <label for="">Tanggal*</label>
                    <input type="date" name="tanggal" class="form-control" 
                    value="{{ old('tanggal', isset($buku_kas_prpl) ? $buku_kas_prpl->tanggal : '') }}">
                    @if($errors->has('tanggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pajak') ? 'has-error' : '' }}">
                    <label for="">Uraian pajak*</label>
                    <input type="text" name="pajak" class="form-control" 
                    value="{{ old('pajak', isset($buku_kas_prpl) ? $buku_kas_prpl->pajak : '') }}">
                    @if($errors->has('pajak'))
                        <p class="help-block">
                            {{ $errors->first('pajak') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('retribusi') ? 'has-error' : '' }}">
                    <label for="">Uraian retribusi*</label>
                    <input type="text" name="retribusi" class="form-control" 
                    value="{{ old('retribusi', isset($buku_kas_prpl) ? $buku_kas_prpl->retribusi : '') }}">
                    @if($errors->has('retribusi'))
                        <p class="help-block">
                            {{ $errors->first('retribusi') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pl') ? 'has-error' : '' }}">
                    <label for="">Uraian penerimaan lainnya*</label>
                    <input type="text" name="pl" class="form-control" 
                    value="{{ old('pl', isset($buku_kas_prpl) ? $buku_kas_prpl->pl : '') }}">
                    @if($errors->has('pl'))
                        <p class="help-block">
                            {{ $errors->first('pl') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('pemotongan') ? 'has-error' : '' }}">
                    <label for="">Pemotongan*</label>
                    <input type="number" name="pemotongan" class="form-control" 
                    value="{{ old('pemotongan', isset($buku_kas_prpl) ? $buku_kas_prpl->pemotongan : '') }}">
                    @if($errors->has('pemotongan'))
                        <p class="help-block">
                            {{ $errors->first('pemotongan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('penyetoran') ? 'has-error' : '' }}">
                    <label for="">Penyetoran*</label>
                    <input type="number" name="penyetoran" class="form-control" 
                    value="{{ old('penyetoran', isset($buku_kas_prpl) ? $buku_kas_prpl->penyetoran : '') }}">
                    @if($errors->has('penyetoran'))
                        <p class="help-block">
                            {{ $errors->first('penyetoran') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('saldo') ? 'has-error' : '' }}">
                    <label for="">Saldo*</label>
                    <input type="number" name="saldo" class="form-control" 
                    value="{{ old('saldo', isset($buku_kas_prpl) ? $buku_kas_prpl->saldo : '') }}">
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