@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Ekspedisi
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
                        tgl_pengiriman	
                        </th>
                        <th>
                        tgl_surat
                        </th>
                        <th>
                        nomor_surat
                        </th>
                        <th>
                        isi_singkat_surat
                        </th>
                        <th>
                        ditujukan_kepada
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $ekspedisi->id ?? '' }}
                            </td>
                            <td>
                                {{ $ekspedisi->tgl_pengiriman	 ?? '' }}
                            </td>
                            <td>
                                {{ $ekspedisi->tgl_surat ?? '' }}
                            </td>
                            <td>
                                {{ $ekspedisi->nomor_surat ?? '' }} 
                            </td>
                            <td>
                                {{ $ekspedisi->isi_singkat_surat ?? '' }}
                            </td>
                            <td>
                                {{ $ekspedisi->ditujukan_kepada ?? '' }} 
                            </td>
                            <td>
                                {{ $ekspedisi->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection