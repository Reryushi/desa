@extends('layouts.front')

@section('content')

<style>

    table.my-font td { 
        font-size: 18px; 
        padding:10px;
        }

    table.my-font th { 
        text-align: center;
        padding:10px;
        color: #0b7e95;
        }
    table.my-font {
        background-color: #e6e7e7;
        
    }
    table, th, td  {
        border :0.7px solid #1b1b1b;
    }

</style>
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <br><br>
                    <h2>Data Data Desa Gunung Katun Tanjungan</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                   
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($rekapitulasi) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Data Rekapitulasi desa saat ini.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                            <div class="table-responsive">
                                <table class=" table-striped table-hover datatable my-font" >
                                    <thead >
                                        <tr >
                                        
                                            <th rowspan="4" >
                                            Nomor Urut
                                            </th>
                                            <th rowspan="4">
                                            Nama Dusun / Lingkungan
                                            </th >
                                            <th colspan="7">
                                            Jumlah Penduduk Awal Bulan
                                            </th>
                                            <th colspan="8">
                                            Tambahan Bulan ini
                                            </th>
                                            <th colspan="8">
                                            Pengurangan Bulan ini
                                            </th>
                                            <th colspan="7" rowspan="2">
                                            Jml Penduduk Akhir Bulan
                                            </th>
                                            <th rowspan="4">
                                            Ket
                                            </th>
                                        
                                        </tr>

                                        <tr>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th rowspan="3">Jml KK</th>
                                            <th rowspan="3">Jml Anggota Keluarga</th>
                                            <th rowspan="3">Jml Jiwa</th>
                                            <th colspan="4">Lahir</th>
                                            <th colspan="4">Datang</th>
                                            <th colspan="4">Meninggal</th>
                                            <th colspan="4">Pindah</th>
                                        </tr>

                                        <tr>
                                            <th rowspan="2">L</th>
                                            <th rowspan="2">P</th>
                                            <th rowspan="2">L</th>
                                            <th rowspan="2">P</th>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th colspan="2">WNA</th>
                                            <th colspan="2">WNI</th>
                                            <th rowspan="2">Jml KK</th>
                                            <th rowspan="2">Jml Anggota Keluarga</th>
                                            <th rowspan="2">Jml Jiwa</th>
                                        </tr>

                                        <tr>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    <?php $i= 0;?>
                                        @foreach($rekapitulasi as $key => $rekapitulasi)
                                        
                                        <?php $i++;?>
                                            <tr data-entry-id="{{ $rekapitulasi->id }}">
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                            
                                                <td >
                                                    {{ $rekapitulasi->nama_dusun	 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_awal_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_awal_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_awal_l	 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_awal_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_kk_awal ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_anggota_awal	 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_jiwa_awal ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_lahir_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_lahir_p	 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_lahir_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_lahir_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_datang_l	 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_datang_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_datang_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_datang_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_meninggal_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_meninggal_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_meninggal_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_meninggal_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_pindah_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_pindah_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_pindah_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_pindah_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_akhir_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wna_akhir_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_akhir_l ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->wni_akhir_p ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_kk_akhir ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_anggota_akhir ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->jml_jiwa_akhir ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $rekapitulasi->ket ?? '' }}
                                                </td>
                                    
                                        

                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else

                    <h3>Tidak ada data rekapitulasi.</h3>
                @endif

                @if(count($rencanakerja) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Rencana kerja desa.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           <?php $index = 0; ?>
                            @foreach($rencanakerja as $rencanakerja)
                            @continue($rencanakerja->date > today()->format('Y-m-d') || $rencanakerja->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                            <?php $index++ ?>
                                <div class="row events">
                                    <!-- <div class="col-md-2"> <img src="{{ ('front/images/event/'. $rencanakerja->image) }}" alt="" /> </div> -->
                                    <div class="col-md-3">
                                        <h4 style="color:#0b7e95">{{$index}}. {{ $rencanakerja->nama_proyek_kegiatan }}</h4> 
                                    </div>
                                    <div class="col-md-3">
                                        <p style="color:black">lokasi : {{ $rencanakerja->lokasi }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">sumber : {{ $rencanakerja->sumber_biaya }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">manfaat : {{ $rencanakerja->manfaat }}</p>
                                    </div>  
                                </div>
                                <!--END aparat-->
                            @endforeach
                           
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                        <h3>Tidak ada data rencana kerja pembangunan.</h3>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           
                           
                        </div>
                    </div>
                    
                @endif

                @if(count($tanahkas) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Tanah kas desa.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th width="10">

                                            </th>
                                    
                                            <th>
                                            Asal Tanah
                                            </th>
                                            <th>
                                            Luas
                                            </th>
                                            <th>
                                            Kelas
                                            </th>
                                            <th>
                                            Perolehan 
                                            </th>
                                            <th>
                                            Tanggal Perolehan	
                                            </th>
                                            <th>
                                            Jenis
                                            </th>
                                            <th>
                                            Patok tanda batas
                                            </th>
                                            <th>
                                            Papan Nama
                                            </th>
                                            <th>
                                            Lokasi
                                            </th>
                                            <th>
                                            Peruntukan
                                            </th>
                                            <th>
                                            Mutasi
                                            </th>
                                            <th>
                                            Keterangan
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tanahkasdesa as $key => $tanahkasdesa)
                                            <tr data-entry-id="{{ $tanahkasdesa->id }}">
                                                <td>

                                                </td>
                                            
                                                <td>
                                                    {{ $tanahkasdesa->asal_tanah_kas ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->luas ?? '' }} 
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->kelas ?? '' }} 
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->perolehan_tanah ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->tgl_perolehan ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->jenis_tanah ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->patok_tanda_batas ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->papan_nama ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->lokasi ?? '' }} 
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->peruntukan ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->mutasi ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $tanahkasdesa->keterangan ?? '' }}
                                                </td>
                                                

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                        <h3>Tidak ada data Tanah Kas.</h3>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           
                           
                        </div>
                    </div>
                    
                @endif

                @if(count($tanahdesa) > 0)
                   
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                            <h2>Tanah desa.</h2>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           <?php $index = 0; ?>
                            @foreach($tanahdesa as $tanahdesa)
                            @continue($tanahdesa->date > today()->format('Y-m-d') || $tanahdesa->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                            <?php $index++ ?>
                                <div class="row events">
                                    <!-- <div class="col-md-2"> <img src="{{ ('front/images/event/'. $tanahdesa->image) }}" alt="" /> </div> -->
                                    <div class="col-md-2">
                                        <h4 style="color:#0b7e95">{{$index}}. nama : {{ $tanahdesa->nama_perorangan_badan_hukum }}</h4> 
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">jumlah : {{ $tanahdesa->jml }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">status hak tanah : {{ $tanahdesa->status_hak_tanah }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="color:black">penggunaan tanah : {{ $tanahdesa->penggunaan_tanah }}</p>
                                    </div>  
                                    <div class="col-md-2">
                                        <p style="color:black">keterangan : {{ $tanahdesa->keterangan }}</p>
                                    </div>  
                                </div>
                                <!--END aparat-->
                            @endforeach
                           
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="head-typo typo-com" style="background-color:rgba(139,159,157,0.4)">
                        <h3>Tidak ada data Tanah Desa .</h3>
                            <!-- <p style="color:black">Semua Berita yang sudah berlalu.</p> -->
                           
                           
                        </div>
                    </div>
                    
                @endif
                <!--END TYPOGRAPHY SECTION-->
            </div>
        </div>
    </div>
@endsection
