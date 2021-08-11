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
        Buat Data Kas Pembantu Kegiatan
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form style="padding:20px " action="{{ route("admin.buku_kasP.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                    <label for="">Tanggal*</label>
                    <input type="date" id="" name="tanggal" 
                    class="form-control" value="{{ old('tanggal', isset($buku_kasP) ? $buku_kasP->tanggal : '') }}">
                    @if($errors->has('tanggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('uraian') ? 'has-error' : '' }}">
                    <label for="">Uraian*</label>
                    <input type="text" id="" name="uraian" 
                    class="form-control" value="{{ old('uraian', isset($buku_kasP) ? $buku_kasP->uraian : '') }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>

            <br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('dari_bendahara') ? 'has-error' : '' }}">
                    <label for="">Penerimaan (Rp.)*</label>
                    <label for="">Dari Bendahara</label>
                    <input type="number" id="" name="dari_bendahara" 
                    class="form-control" value="{{ old('dari_bendahara', isset($buku_kasP) ? $buku_kasP->dari_bendahara : '') }}">
                    @if($errors->has('dari_bendahara'))
                        <p class="help-block">
                            {{ $errors->first('dari_bendahara') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('swadaya_masyarakat') ? 'has-error' : '' }}">
                    <label style="color: #ebedf0"> 0000</label><br>
                    <label for="">Dari Swadaya Masyarakat</label>
                    <input type="number" id="" name="swadaya_masyarakat" 
                    class="form-control" value="{{ old('swadaya_masyarakat', isset($buku_kasP) ? $buku_kasP->swadaya_masyarakat : '') }}">
                    @if($errors->has('swadaya_masyarakat'))
                        <p class="help-block">
                            {{ $errors->first('swadaya_masyarakat') }}
                        </p>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_bukti') ? 'has-error' : '' }}">
                    <label for="">Nomor Bukti*</label>
                    <input type="text" id="" name="nomor_bukti" 
                    class="form-control" value="{{ old('nomor_bukti', isset($buku_kasP) ? $buku_kasP->nomor_bukti : '') }}">
                    @if($errors->has('nomor_bukti'))
                        <p class="help-block">
                            {{ $errors->first('nomor_bukti') }}
                        </p>
                    @endif
                </div>
            </div>

            <br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('beli_barang_jasa') ? 'has-error' : '' }}">
                    <label for="">Pengeluaran (Rp.)*</label>
                    <label for="">Belanja Barang dan Jasa</label>
                    <input type="number" id="" name="beli_barang_jasa" 
                    class="form-control" value="{{ old('beli_barang_jasa', isset($buku_kasP) ? $buku_kasP->beli_barang_jasa : '') }}">
                    @if($errors->has('beli_barang_jasa'))
                        <p class="help-block">
                            {{ $errors->first('beli_barang_jasa') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-3 {{ $errors->has('beli_modal') ? 'has-error' : '' }}">
                    <label style="color: #ebedf0"> 0000</label><br>
                    <label for="">Belanja Modal</label>
                    <input type="number" id="" name="beli_modal" 
                    class="form-control" value="{{ old('beli_modal', isset($buku_kasP) ? $buku_kasP->beli_modal : '') }}">
                    @if($errors->has('beli_modal'))
                        <p class="help-block">
                            {{ $errors->first('beli_modal') }}
                        </p>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('pengembalian_ke_bendahara') ? 'has-error' : '' }}">
                    <label for="">Jumlah Pengembalian ke Bendahara*</label>
                    <input type="number" id="" name="pengembalian_ke_bendahara" 
                    class="form-control" value="{{ old('pengembalian_ke_bendahara', isset($buku_kasP) ? $buku_kasP->pengembalian_ke_bendahara : '') }}">
                    @if($errors->has('pengembalian_ke_bendahara'))
                        <p class="help-block">
                            {{ $errors->first('pengembalian_ke_bendahara') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('saldo_kas') ? 'has-error' : '' }}">
                    <label for="">Saldo Kas*</label>
                    <input type="number" id="" name="saldo_kas" 
                    class="form-control" value="{{ old('saldo_kas', isset($buku_kasP) ? $buku_kasP->saldo_kas : '') }}">
                    @if($errors->has('saldo_kas'))
                        <p class="help-block">
                            {{ $errors->first('saldo_kas') }}
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