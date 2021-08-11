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
        Buat Data Rekapitulasi Jumlah Penduduk
    </div>

    <div style="background-color: #ebedf0" class="card-body">
    <form style="padding:20px " action="{{ route("admin.buku_rekapitulasi.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('nama_dusun') ? 'has-error' : '' }}">
                    <label for="nama_dusun">Nama Dusun*</label>
                    <input type="text" id="nama_dusun" name="nama_dusun" class="form-control" value="{{ old('nama_dusun', isset($rekapitulasi) ? $rekapitulasi->nama_dusun : '') }}">
                    @if($errors->has('nama_dusun'))
                        <p class="help-block">
                            {{ $errors->first('nama_dusun') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_awal_l') ? 'has-error' : '' }}">
                    <label for="wna_awal_l">Jumlah awal</label><br>
                    <label for="wna_awal_l">WNA</label><br>
                    <label for="wna_awal_l">L*</label>
                    <input type="number" id="wna_awal_l" name="wna_awal_l" class="form-control" 
                    value="{{ old('wna_awal_l', isset($rekapitulasi) ? $rekapitulasi->wna_awal_l : '') }}">
                    @if($errors->has('wna_awal_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_awal_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_awal_p') ? 'has-error' : '' }}">
                    <label for="wna_awal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_awal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_awal_p">P*</label>
                    <input type="number" id="wna_awal_p" name="wna_awal_p" class="form-control" 
                    value="{{ old('wna_awal_p', isset($rekapitulasi) ? $rekapitulasi->wna_awal_p : '') }}">
                    @if($errors->has('wna_awal_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_awal_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_awal_l') ? 'has-error' : '' }}">
                    <label for="wna_awal_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_awal_l">WNI</label><br>
                    <label for="wni_awal_l">L*</label>
                    <input type="number" id="wni_awal_l" name="wni_awal_l" class="form-control" 
                    value="{{ old('wni_awal_l', isset($rekapitulasi) ? $rekapitulasi->wni_awal_l : '') }}">
                    @if($errors->has('wni_awal_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_awal_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_awal_p') ? 'has-error' : '' }}">
                    <label for="wni_awal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_awal_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_awal_p">P*</label>
                    <input type="number" id="wni_awal_p" name="wni_awal_p" class="form-control" 
                    value="{{ old('wni_awal_p', isset($rekapitulasi) ? $rekapitulasi->wni_awal_p : '') }}">
                    @if($errors->has('wni_awal_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_awal_p') }}
                        </p>
                    @endif
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jml_kk_awal') ? 'has-error' : '' }}">
                    <label for="jml_kk_awal">Jumlah Kepala Keluarga awal*</label>
                    <input type="number" id="jml_kk_awal" name="jml_kk_awal" class="form-control" 
                    value="{{ old('jml_kk_awal', isset($rekapitulasi) ? $rekapitulasi->jml_kk_awal : '') }}">
                    @if($errors->has('jml_kk_awal'))
                        <p class="help-block">
                            {{ $errors->first('jml_kk_awal') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jml_anggota_awal') ? 'has-error' : '' }}">
                    <label for="jml_anggota_awal">Jumlah Anggota Keluarga*</label>
                    <input type="number" id="jml_anggota_awal" name="jml_anggota_awal" class="form-control" 
                    value="{{ old('jml_anggota_awal', isset($rekapitulasi) ? $rekapitulasi->jml_anggota_awal : '') }}">
                    @if($errors->has('jml_anggota_awal'))
                        <p class="help-block">
                            {{ $errors->first('jml_anggota_awal') }}
                        </p>
                    @endif
                </div>
            </div>

            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_lahir_l') ? 'has-error' : '' }}">
                    <label for="wna_lahir_l">Jumlah lahir</label><br>
                    <label for="wna_lahir_l">WNA</label><br>
                    <label for="wna_lahir_l">L*</label>
                    <input type="number" id="wna_lahir_l" name="wna_lahir_l" class="form-control" 
                    value="{{ old('wna_lahir_l', isset($rekapitulasi) ? $rekapitulasi->wna_lahir_l : '') }}">
                    @if($errors->has('wna_lahir_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_lahir_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_lahir_p') ? 'has-error' : '' }}">
                    <label for="wna_lahir_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_lahir_p">P*</label>
                    <input type="number" id="wna_lahir_p" name="wna_lahir_p" class="form-control" 
                    value="{{ old('wna_lahir_p', isset($rekapitulasi) ? $rekapitulasi->wna_lahir_p : '') }}">
                    @if($errors->has('wna_lahir_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_lahir_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_lahir_l') ? 'has-error' : '' }}">
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_lahir_l">WNI</label><br>
                    <label for="wni_lahir_l">L*</label>
                    <input type="number" id="wni_lahir_l" name="wni_lahir_l" class="form-control" 
                    value="{{ old('wni_lahir_l', isset($rekapitulasi) ? $rekapitulasi->wni_lahir_l : '') }}">
                    @if($errors->has('wni_lahir_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_lahir_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_lahir_p') ? 'has-error' : '' }}">
                    <label for="wni_lahir_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_lahir_p">P*</label>
                    <input type="number" id="wni_lahir_p" name="wni_lahir_p" class="form-control" 
                    value="{{ old('wni_lahir_p', isset($rekapitulasi) ? $rekapitulasi->wni_lahir_p : '') }}">
                    @if($errors->has('wni_lahir_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_lahir_p') }}
                        </p>
                    @endif
                </div>
            </div>
           

            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_datang_l') ? 'has-error' : '' }}">
                    <label for="wna_datang_l">Jumlah datang</label><br>
                    <label for="wna_meninggal_l">WNA</label><br>
                    <label for="wna_datang_l">L*</label>
                    <input type="number" id="wna_datang_l" name="wna_datang_l" class="form-control" 
                    value="{{ old('wna_datang_l', isset($rekapitulasi) ? $rekapitulasi->wna_datang_l : '') }}">
                    @if($errors->has('wna_datang_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_datang_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_datang_p') ? 'has-error' : '' }}">
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_datang_p">P*</label>
                    <input type="number" id="wna_datang_p" name="wna_datang_p" class="form-control" 
                    value="{{ old('wna_datang_p', isset($rekapitulasi) ? $rekapitulasi->wna_datang_p : '') }}">
                    @if($errors->has('wna_datang_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_datang_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_datang_l') ? 'has-error' : '' }}">
                    
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_datang_l"> WNI </label><br>
                    <label for="wni_datang_l">L*</label>
                    <input type="number" id="wni_datang_l" name="wni_datang_l" class="form-control" 
                    value="{{ old('wni_datang_l', isset($rekapitulasi) ? $rekapitulasi->wni_datang_l : '') }}">
                    @if($errors->has('wni_datang_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_datang_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_datang_p') ? 'has-error' : '' }}">
                    <label for="wni_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_datang_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_datang_p">P*</label>
                    <input type="number" id="wni_datang_p" name="wni_datang_p" class="form-control" 
                    value="{{ old('wni_datang_p', isset($rekapitulasi) ? $rekapitulasi->wni_datang_p : '') }}">
                    @if($errors->has('wni_datang_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_datang_p') }}
                        </p>
                    @endif
                </div>
            </div>

          
            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_meninggal_l') ? 'has-error' : '' }}">
                    <label for="wna_meninggal_l">Jumlah meninggal</label><br>
                    <label for="wna_meninggal_l">WNA</label><br>
                    <label for="wna_meninggal_l">L*</label>
                    <input type="number" id="wna_meninggal_l" name="wna_meninggal_l" class="form-control" 
                    value="{{ old('wna_meninggal_l', isset($rekapitulasi) ? $rekapitulasi->wna_meninggal_l : '') }}">
                    @if($errors->has('wna_meninggal_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_meninggal_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_meninggal_p') ? 'has-error' : '' }}">
                    <label for="wna_meninggal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_meninggal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_meninggal_p">P*</label>
                    <input type="number" id="wna_meninggal_p" name="wna_meninggal_p" class="form-control" 
                    value="{{ old('wna_meninggal_p', isset($rekapitulasi) ? $rekapitulasi->wna_meninggal_p : '') }}">
                    @if($errors->has('wna_meninggal_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_meninggal_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_meninggal_l') ? 'has-error' : '' }}">
                
                    <label for="wna_meninggal_p" style="color:#ebedf0">0</label><br>
                    <label for="wni_meninggal_l">WNI</label><br>
                    <label for="wni_meninggal_l">L*</label>
                    <input type="number" id="wni_meninggal_l" name="wni_meninggal_l" class="form-control" 
                    value="{{ old('wni_meninggal_l', isset($rekapitulasi) ? $rekapitulasi->wni_meninggal_l : '') }}">
                    @if($errors->has('wni_meninggal_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_meninggal_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_meninggal_p') ? 'has-error' : '' }}">
                    <label for="wni_meninggal_p" style="color:#ebedf0">0</label><br>
                    <label for="wna_meninggal_p" style="color:#ebedf0">0</label><br>
                    
                    <label for="wni_meninggal_p">P*</label>
                    <input type="number" id="wni_meninggal_p" name="wni_meninggal_p" class="form-control" 
                    value="{{ old('wni_meninggal_p', isset($rekapitulasi) ? $rekapitulasi->wni_meninggal_p : '') }}">
                    @if($errors->has('wni_meninggal_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_meninggal_p') }}
                        </p>
                    @endif
                </div>
            </div>

            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_pindah_l') ? 'has-error' : '' }}">
                    <label for="wna_pindah_l">Jumlah pindah</label><br>
                    <label for="">WNA</label><br>
                    <label for="">L*</label>
                    <input type="number" id="wna_pindah_l" name="wna_pindah_l" class="form-control" 
                    value="{{ old('wna_pindah_l', isset($rekapitulasi) ? $rekapitulasi->wna_pindah_l : '') }}">
                    @if($errors->has('wna_pindah_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_pindah_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_pindah_p') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">P*</label>
                    <input type="number" id="wna_pindah_p" name="wna_pindah_p" class="form-control" 
                    value="{{ old('wna_pindah_p', isset($rekapitulasi) ? $rekapitulasi->wna_pindah_p : '') }}">
                    @if($errors->has('wna_pindah_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_pindah_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_pindah_l') ? 'has-error' : '' }}">
                
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">WNI</label><br>
                    <label for="">L*</label>
                    <input type="number" id="wni_pindah_l" name="wni_pindah_l" class="form-control" 
                    value="{{ old('wni_pindah_l', isset($rekapitulasi) ? $rekapitulasi->wni_pindah_l : '') }}">
                    @if($errors->has('wni_pindah_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_pindah_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_pindah_p') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">P*</label>
                    <input type="number" id="wni_pindah_p" name="wni_pindah_p" class="form-control" 
                    value="{{ old('wni_pindah_p', isset($rekapitulasi) ? $rekapitulasi->wni_pindah_p : '') }}">
                    @if($errors->has('wni_pindah_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_pindah_p') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <br><br>
            <div class="row">  
                <div class="form-group col-md-2 {{ $errors->has('wna_akhir_l') ? 'has-error' : '' }}">
                    <label for="">Jumlah akhir</label><br>
                    <label for="">WNA</label><br>
                    <label for="">L*</label>
                    <input type="number" id="wna_akhir_l" name="wna_akhir_l" class="form-control" 
                    value="{{ old('wna_akhir_l', isset($rekapitulasi) ? $rekapitulasi->wna_akhir_l : '') }}">
                    @if($errors->has('wna_akhir_l'))
                        <p class="help-block">
                            {{ $errors->first('wna_akhir_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wna_akhir_p') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">P*</label>
                    <input type="number" id="wna_akhir_p" name="wna_akhir_p" class="form-control" 
                    value="{{ old('wna_akhir_p', isset($rekapitulasi) ? $rekapitulasi->wna_akhir_p : '') }}">
                    @if($errors->has('wna_akhir_p'))
                        <p class="help-block">
                            {{ $errors->first('wna_akhir_p') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_akhir_l') ? 'has-error' : '' }}">
                
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">WNI</label><br>
                    <label for="">L*</label>
                    <input type="number" id="wni_akhir_l" name="wni_akhir_l" class="form-control" 
                    value="{{ old('wni_akhir_l', isset($rekapitulasi) ? $rekapitulasi->wni_akhir_l : '') }}">
                    @if($errors->has('wni_akhir_l'))
                        <p class="help-block">
                            {{ $errors->first('wni_akhir_l') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-md-2 {{ $errors->has('wni_akhir_p') ? 'has-error' : '' }}">
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="" style="color:#ebedf0">0</label><br>
                    <label for="">P*</label>
                    <input type="number" id="wni_akhir_p" name="wni_akhir_p" class="form-control" 
                    value="{{ old('wni_akhir_p', isset($rekapitulasi) ? $rekapitulasi->wni_akhir_p : '') }}">
                    @if($errors->has('wni_akhir_p'))
                        <p class="help-block">
                            {{ $errors->first('wni_akhir_p') }}
                        </p>
                    @endif
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jml_kk_akhir') ? 'has-error' : '' }}">
                    <label for="jml_kk_akhir">Jumlah Kepala Keluarga akhir*</label>
                    <input type="number" id="jml_kk_akhir" name="jml_kk_akhir" class="form-control" 
                    value="{{ old('jml_kk_akhir', isset($rekapitulasi) ? $rekapitulasi->jml_kk_akhir : '') }}">
                    @if($errors->has('jml_kk_akhir'))
                        <p class="help-block">
                            {{ $errors->first('jml_kk_akhir') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 {{ $errors->has('jml_anggota_akhir') ? 'has-error' : '' }}">
                    <label for="jml_anggota_akhir">Jumlah Anggota Keluarga*</label>
                    <input type="number" id="jml_anggota_akhir" name="jml_anggota_akhir" class="form-control" 
                    value="{{ old('jml_anggota_akhir', isset($rekapitulasi) ? $rekapitulasi->jml_anggota_akhir : '') }}">
                    @if($errors->has('jml_anggota_akhir'))
                        <p class="help-block">
                            {{ $errors->first('jml_anggota_akhir') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <br><br>
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('ket') ? 'has-error' : '' }}">
                    <label for="ket">Keterangan*</label>
                    <input type="text" id="ket" name="ket" class="form-control" 
                    value="{{ old('ket', isset($rekapitulasi) ? $rekapitulasi->ket : '') }}">
                    @if($errors->has('ket'))
                        <p class="help-block">
                            {{ $errors->first('ket') }}
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