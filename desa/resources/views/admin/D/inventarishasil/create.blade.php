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
        Buat Inventaris Hasil
    </div>
    <div class="card-body">
    <form style="padding:20px " action="{{ route("admin.inventarishasil.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col {{ $errors->has('jenis_hasil_bangunan') ? 'has-error' : '' }}">
                    <label for="jenis_hasil_bangunan">Jenis Hasil Bangunan *</label>
                    <input type="text" id="jenis_hasil_bangunan" name="jenis_hasil_bangunan" class="form-control" value="{{ old('jenis_hasil_bangunan', isset($inventarishasil) ? $inventarishasil->jenis_hasil_bangunan : '') }}">
                    @if($errors->has('jenis_hasil_bangunan'))
                        <p class="help-block">
                            {{ $errors->first('jenis_hasil_bangunan') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col {{ $errors->has('volume') ? 'has-error' : '' }}">
                    <label for="volume">Volume *</label>
                    <input type="text" id="volume" name="volume" class="form-control" value="{{ old('volume', isset($inventarishasil) ? $inventarishasil->volume : '') }}">
                    @if($errors->has('volume'))
                        <p class="help-block">
                            {{ $errors->first('volume') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col {{ $errors->has('biaya') ? 'has-error' : '' }}">
                    <label for="biaya">Biaya *</label>
                    <input type="number" id="biaya" name="biaya" class="form-control" value="{{ old('biaya', isset($inventarishasil) ? $inventarishasil->biaya : '') }}">
                    @if($errors->has('biaya'))
                        <p class="help-block">
                            {{ $errors->first('biaya') }}
                        </p>
                    @endif
                </div>
            </div>

                <div class="form-group {{ $errors->has('lokasi') ? 'has-error' : '' }}">
                        <label for="lokasi">Lokasi *</label>
                        <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ old('lokasi', isset($inventarishasil) ? $inventarishasil->lokasi : '') }}">
                        @if($errors->has('lokasi'))
                        <p class="help-block">
                                {{ $errors->first('lokasi') }}
                        </p>
                        @endif
                </div>     

            <div class="row">
                <div class="form-group col {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($inventarishasil) ? $inventarishasil->keterangan : '') }}">
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