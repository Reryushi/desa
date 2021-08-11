@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Rencana
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
                        lokasi
                        </th>
                        <th>
                        sumber_biaya
                        </th>
                        <th>
                        jumlah
                        </th>
                        <th>
                        pelaksana
                        </th>
                        <th>
                        manfaat
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $rencanakerja->id ?? '' }}
                            </td>
                            <td>
                                {{ $rencanakerja->nama_proyek_kegiatan	 ?? '' }}
                            </td>
                            <td>
                                {{ $rencanakerja->lokasi ?? '' }}
                            </td>
                            <td>
                                {{ $rencanakerja->sumber_biaya ?? '' }} 
                            </td>
                            <td>
                                {{ $rencanakerja->jumlah ?? '' }}
                            </td>
                            <td>
                                {{ $rencanakerja->pelaksana ?? '' }} 
                            </td>
                            <td>
                                {{ $rencanakerja->manfaat ?? '' }}
                            </td>
                            <td>
                                {{ $rencanakerja->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection