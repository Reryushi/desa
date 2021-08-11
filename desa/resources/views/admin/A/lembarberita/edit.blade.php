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
        Edit Lembar Berita
    </div>

    <div class="card-body">
        <form action="{{ route("admin.lembarberita.update", [$lembarberita->id]) }}" method="POST" enctype="multipart/form-data" style="padding:20px">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis_peraturan') ? 'has-error' : '' }}">
                    <label for="jenis_peraturan">Jenis Peraturan *</label>
                    <input type="text" id="jenis_peraturan" name="jenis_peraturan" class="form-control" value="{{ old('jenis_peraturan', isset($lembarberita) ? $lembarberita->jenis_peraturan : '') }}">
                    @if($errors->has('jenis_peraturan'))
                        <p class="help-block">
                            {{ $errors->first('jenis_peraturan') }}
                        </p>
                    @endif
                </div>  
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_surat') ? 'has-error' : '' }}">
                    <label for="tgl_ditetapkan">Tanggal Ditetapkan *</label>
                    <input type="date" id="tgl_ditetapkan" name="tgl_ditetapkan" class="form-control" value="{{ old('tgl_ditetapkan', isset($lembarberita) ? $lembarberita->tgl_ditetapkan : '') }}">
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
                    <input type="text" id="tentang" name="tentang" class="form-control" value="{{ old('tentang', isset($lembarberita) ? $lembarberita->tentang : '') }}">
                    @if($errors->has('tentang'))
                        <p class="help-block">
                            {{ $errors->first('tentang') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3  {{ $errors->has('tgl_diundangkan') ? 'has-error' : '' }}">
                        <label for="tgl_diundangkan">Tanggal Diundangkan *</label>
                        <input type="date" id="tgl_diundangkan" name="tgl_diundangkan" class="form-control" value="{{ old('tgl_diundangkan', isset($lembarberita) ? $lembarberita->tgl_diundangkan : '') }}">
                        @if($errors->has('tgl_diundangkan'))
                        <p class="help-block">
                                {{ $errors->first('tgl_diundangkan') }}
                        </p>
                        @endif
                </div> 
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('nomor_diundangkan') ? 'has-error' : '' }}">
                    <label for="nomor_diundangkan">Nomor Diundangkan *</label>
                    <input type="number" id="nomor_diundangkan" name="nomor_diundangkan" class="form-control" value="{{ old('nomor_diundangkan', isset($lembarberita) ? $lembarberita->nomor_diundangkan : '') }}">
                    @if($errors->has('nomor_diundangkan'))
                        <p class="help-block">
                            {{ $errors->first('nomor_diundangkan') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($lembarberita) ? $lembarberita->keterangan : '') }}">
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