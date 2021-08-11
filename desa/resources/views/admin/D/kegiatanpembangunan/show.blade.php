@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Kegiatan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                    
                        <th>
                        id
                        </th>
                        <th>
                        nama_proyek_kegiatan	
                        </th>
                        <th>
                        volume
                        </th>
                        <th>
                        sumber_dana
                        </th>
                        <th>
                        jumlah
                        </th>
                        <th>
                        waktu
                        </th>
                        <th>
                        sifat_proyek
                        </th>
                        <th>
                        pelaksana
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $kegiatanpembangunan->id ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->nama_proyek_kegiatan	 ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->volume ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->sumber_dana ?? '' }} 
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->jumlah ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->waktu ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->sifat_proyek ?? '' }} 
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->pelaksana ?? '' }}
                            </td>
                            <td>
                                {{ $kegiatanpembangunan->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection