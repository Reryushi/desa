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
        Edit Peraturan
    </div>

    <div style="background-color: #ebedf0" class="card-body">
        <form action="{{ route("admin.peraturandesa.update", [$peraturandesa->id]) }}" method="POST" enctype="multipart/form-data" style="padding:20px">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis') ? 'has-error' : '' }}">
                    <label for="jenis">Jenis *</label>
                    <input type="text" id="jenis" name="jenis" class="form-control" value="{{ old('jenis', isset($peraturandesa) ? $peraturandesa->jenis : '') }}">
                    @if($errors->has('jenis'))
                        <p class="help-block">
                            {{ $errors->first('jenis') }}
                        </p>
                    @endif
                </div>  
            </div>
            <div class="row">
                <div class="form-group col-md-3{{ $errors->has('tgl_ditetapkan') ? 'has-error' : '' }}">
                    <label for="tgl_ditetapkan">Tanggal Ditetapkan *</label>
                    <input type="date" id="tgl_ditetapkan" name="tgl_ditetapkan" class="form-control" value="{{ old('tgl_ditetapkan', isset($peraturandesa) ? $peraturandesa->tgl_ditetapkan : '') }}">
                    @if($errors->has('tgl_ditetapkan'))
                        <p class="help-block">
                            {{ $errors->first('tgl_ditetapkan') }}
                        </p>
                    @endif
                </div>
            </div>  
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('tentang') ? 'has-error' : '' }}">
                    <label for="tentang">Tentang *</label>
                    <input type="text" id="tentang" name="tentang" class="form-control" value="{{ old('tentang', isset($peraturandesa) ? $peraturandesa->tentang : '') }}">
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
                    <input type="text" id="uraian" name="uraian" class="form-control" value="{{ old('uraian', isset($peraturandesa) ? $peraturandesa->uraian : '') }}">
                    @if($errors->has('uraian'))
                        <p class="help-block">
                            {{ $errors->first('uraian') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_kesepakatan') ? 'has-error' : '' }}">
                    <label for="tgl_kesepakatan">Tanggal Kesepakatan *</label>
                    <input type="date" id="tgl_kesepakatan" name="tgl_kesepakatan" class="form-control" value="{{ old('tgl_kesepakatan', isset($peraturandesa) ? $peraturandesa->tgl_kesepakatan : '') }}">
                    @if($errors->has('tgl_kesepakatan'))
                        <p class="help-block">
                            {{ $errors->first('tgl_kesepakatan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_lapor') ? 'has-error' : '' }}">
                    <label for="tgl_lapor">Tanggal Lapor *</label>
                    <input type="date" id="tgl_lapor" name="tgl_lapor" class="form-control" value="{{ old('tgl_lapor', isset($peraturandesa) ? $peraturandesa->tgl_lapor : '') }}">
                    @if($errors->has('tgl_lapor'))
                        <p class="help-block">
                            {{ $errors->first('tgl_lapor') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_undang_lembaran_desa') ? 'has-error' : '' }}">
                    <label for="tgl_undang_lembaran_desa">Tanggal Diundangkan dalam lembaran desa *</label>
                    <input type="date" id="tgl_undang_lembaran_desa" name="tgl_undang_lembaran_desa" class="form-control" value="{{ old('tgl_undang_lembaran_desa', isset($peraturandesa) ? $peraturandesa->tgl_undang_lembaran_desa : '') }}">
                    @if($errors->has('tgl_undang_lembaran_desa'))
                        <p class="help-block">
                            {{ $errors->first('tgl_undang_lembaran_desa') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_undang_berita_desa') ? 'has-error' : '' }}">
                    <label for="tgl_undang_berita_desa">Tanggal Diundangkan dalam berita desa *</label>
                    <input type="date" id="tgl_undang_berita_desa" name="tgl_undang_berita_desa" class="form-control" value="{{ old('tgl_undang_berita_desa', isset($peraturandesa) ? $peraturandesa->tgl_undang_berita_desa : '') }}">
                    @if($errors->has('tgl_undang_berita_desa'))
                        <p class="help-block">
                            {{ $errors->first('tgl_undang_berita_desa') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                <label for="keterangan">Keterangan *</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($peraturandesa) ? $peraturandesa->keterangan : '') }}">
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