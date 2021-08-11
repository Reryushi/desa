@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Inventaris Hasil
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
                        jenis_hasil_bangunan	
                        </th>
                        <th>
                        volume
                        </th>
                        <th>
                        biaya
                        </th>
                        <th>
                        lokasi
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $inventarishasil->id ?? '' }}
                            </td>
                            <td>
                                {{ $inventarishasil->jenis_hasil_bangunan	 ?? '' }}
                            </td>
                            <td>
                                {{ $inventarishasil->volume ?? '' }}
                            </td>
                            <td>
                                {{ $inventarishasil->biaya ?? '' }} 
                            </td>
                            <td>
                                {{ $inventarishasil->lokasi ?? '' }}
                            </td>
                            <td>
                                {{ $inventarishasil->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection