@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Agenda
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
                        tgl_penerimaan_pengiriman_surat	
                        </th>
                        <th>
                        nomor_masuk
                        </th>
                        <th>
                        tgl_masuk
                        </th>
                        <th>
                        pengirim_masuk
                        </th>
                        <th>
                        isi_singkat_masuk
                        </th>
                        <th>
                        nomor_keluar
                        </th>
                        <th>
                        tgl_keluar	
                        </th>
                        <th>
                        ditujukan_keluar
                        </th>
                        <th>
                        isi_surat_keluar
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $agenda->id ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->tgl_penerimaan_pengiriman_surat	 ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->nomor_masuk ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->tgl_masuk ?? '' }} 
                            </td>
                            <td>
                                {{ $agenda->pengirim_masuk ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->isi_singkat_masuk ?? '' }} 
                            </td>
                            <td>
                                {{ $agenda->nomor_keluar	 ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->tgl_keluar ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->ditujukan_keluar ?? '' }} 
                            </td>
                            <td>
                                {{ $agenda->isi_surat_keluar ?? '' }}
                            </td>
                            <td>
                                {{ $agenda->keterangan ?? '' }} 
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection