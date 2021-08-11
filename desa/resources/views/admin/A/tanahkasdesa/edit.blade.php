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
        Edit Tanah Kas
    </div>

    <div class="card-body">
        <form  style="padding:20px " action="{{ route("admin.tanahkasdesa.update", [$tanahkasdesa->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('asal_tanah_kas') ? 'has-error' : '' }}">
                    <label for="asal_tanah_kas">Asal Tanah Kas Desa  *</label>
                    <input type="text" id="asal_tanah_kas" name="asal_tanah_kas" class="form-control" value="{{ old('asal_tanah_kas', isset($tanahkasdesa) ? $tanahkasdesa->asal_tanah_kas : '') }}">
                    @if($errors->has('asal_tanah_kas'))
                        <p class="help-block">
                            {{ $errors->first('asal_tanah_kas') }}
                        </p>
                    @endif
                </div>  
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('luas') ? 'has-error' : '' }}">
                    <label for="luas">Luas*</label>
                    <input type="number" id="luas" name="luas" class="form-control" value="{{ old('luas', isset($tanahkasdesa) ? $tanahkasdesa->luas : '') }}">
                    @if($errors->has('luas'))
                        <p class="help-block">
                            {{ $errors->first('luas') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('kelas') ? 'has-error' : '' }}">
                    <label for="kelas">Kelas *</label>
                    <input type="text" id="kelas" name="kelas" class="form-control" value="{{ old('kelas', isset($tanahkasdesa) ? $tanahkasdesa->kelas : '') }}">
                    @if($errors->has('kelas'))
                        <p class="help-block">
                            {{ $errors->first('kelas') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('perolehan_tanah') ? 'has-error' : '' }}">
                    <label for="perolehan_tanah">Perolehan Tanah *</label>
                    <select name="perolehan_tanah" id="perolehan_tanah" class="form-control">
                        <option value="milik_desa">milik_desa
                        </option>
                        <option value="pemerintah">
                                pemerintah
                        </option>
                        <option value="provinsi">provinsi
                        </option>
                        <option value="kab_kota">
                                kab/kota
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('tgl_perolehan') ? 'has-error' : '' }}">
                    <label for="tgl_perolehan">Tanggal Perolehan *</label>
                    <input type="date" id="tgl_perolehan" name="tgl_perolehan" class="form-control" value="{{ old('tgl_perolehan', isset($tanahkasdesa) ? $tanahkasdesa->tgl_perolehan : '') }}">
                    @if($errors->has('tgl_perolehan'))
                        <p class="help-block">
                            {{ $errors->first('tgl_perolehan') }}
                        </p>
                    @endif
                </div>    
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jenis_tanah') ? 'has-error' : '' }}">
                    <label for="jenis_tanah">Jenis Tanah *</label>
                    <select name="jenis_tanah" id="jenis_tanah" class="form-control">
                        <option value="sawah">sawah
                        </option>
                        <option value="tegal">
                                tegal
                        </option>
                        <option value="kebun">kebun
                        </option>
                        <option value="tambak_kolam">
                                tambak_kolam
                        </option>
                        <option value="tanah_kering_darat">
                                tanah_kering_darat
                        </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('patok_tanda_batas') ? 'has-error' : '' }}">
                    <label for="patok_tanda_batas">Patok Tanda Batas *</label>
                    <select name="patok_tanda_batas" id="patok_tanda_batas" class="form-control">
                        <option value="ada">ada
                        </option>
                        <option value="tidak_ada">
                                tidak_ada
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('papan_nama') ? 'has-error' : '' }}">
                    <label for="papan_nama">Papan Nama *</label>
                    <select name="papan_nama" id="papan_nama" class="form-control">
                        <option value="ada">ada
                        </option>
                        <option value="tidak_ada">
                                tidak_ada
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('lokasi') ? 'has-error' : '' }}">
                    <label for="lokasi">Lokasi *</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ old('lokasi', isset($tanahkasdesa) ? $tanahkasdesa->lokasi : '') }}">
                    @if($errors->has('lokasi'))
                        <p class="help-block">
                            {{ $errors->first('lokasi') }}
                        </p>
                    @endif
                </div>    
            </div>
            

            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('peruntukan') ? 'has-error' : '' }}">
                    <label for="peruntukan">Peruntukan *</label>
                    <input type="text" id="peruntukan" name="peruntukan" class="form-control" value="{{ old('peruntukan', isset($tanahkasdesa) ? $tanahkasdesa->peruntukan : '') }}">
                    @if($errors->has('peruntukan'))
                        <p class="help-block">
                            {{ $errors->first('peruntukan') }}
                        </p>
                    @endif  
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('mutasi') ? 'has-error' : '' }}">
                    <label for="mutasi">Mutasi *</label>
                    <input type="text" id="mutasi" name="mutasi" class="form-control" value="{{ old('mutasi', isset($tanahkasdesa) ? $tanahkasdesa->mutasi : '') }}">
                    @if($errors->has('mutasi'))
                        <p class="help-block">
                            {{ $errors->first('mutasi') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                    <label for="keterangan">Keterangan *</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($tanahkasdesa) ? $tanahkasdesa->keterangan : '') }}">
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