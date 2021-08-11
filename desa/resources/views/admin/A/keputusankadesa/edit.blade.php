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
        Edit Keputusan
    </div>

    <div style="background-color: #ebedf0" class="card-body">
        <form action="{{ route("admin.keputusankadesa.update", [$keputusankadesa->id]) }}" method="POST" enctype="multipart/form-data" style="padding:20px">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('tentang') ? 'has-error' : '' }}">
                    <label for="tentang">Tentang *</label>
                    <input type="text" id="tentang" name="tentang" class="form-control" value="{{ old('tentang', isset($keputusankadesa) ? $keputusankadesa->tentang : '') }}">
                    @if($errors->has('tentang'))
                        <p class="help-block">
                            {{ $errors->first('tentang') }}
                        </p>
                    @endif
                </div>
               
            </div>
            
            <div class="row">
                
                <div class="form-group col-md-6 {{ $errors->has('uraian') ? 'has-error' : '' }}">
                    <label for="uraian">Uraian *</label>
                    <input type="text" id="uraian" name="uraian" class="form-control" value="{{ old('uraian', isset($keputusankadesa) ? $keputusankadesa->uraian : '') }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_keputusan_kades') ? 'has-error' : '' }}">
                    <label for="tgl_keputusan_kades">Tanggal Keputusan Kepala Desa *</label>
                    <input type="date" id="tgl_keputusan_kades" name="tgl_keputusan_kades" class="form-control" value="{{ old('tgl_keputusan_kades', isset($keputusankadesa) ? $keputusankadesa->tgl_keputusan_kades : '') }}">
                    @if($errors->has('tgl_keputusan_kades'))
                        <p class="help-block">
                            {{ $errors->first('tgl_keputusan_kades') }}
                        </p>
                    @endif
                </div>  
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_lapor') ? 'has-error' : '' }}">
                    <label for="tgl_lapor">Tanggal Dilaporkan *</label>
                    <input type="date" id="tgl_lapor" name="tgl_lapor" class="form-control" value="{{ old('tgl_lapor', isset($keputusankadesa) ? $keputusankadesa->tgl_lapor : '') }}">
                    @if($errors->has('tgl_lapor'))
                        <p class="help-block">
                            {{ $errors->first('tgl_lapor') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                <label for="keterangan">Keterangan *</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($keputusankadesa) ? $keputusankadesa->keterangan : '') }}">
                @if($errors->has('keterangan'))
                    <p class="help-block">
                        {{ $errors->first('keterangan') }}
                    </p>
                @endif
            </div>          
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('save') }}">
            </div>
        </form>
    </div>
</div>

@endsection