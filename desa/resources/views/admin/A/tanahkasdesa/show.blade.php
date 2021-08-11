@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Tanah Kas
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
                        asal_tanah_kas
                        </th>
                        <th>
                        luas
                        </th>
                        <th>
                        kelas
                        </th>
                        <th>
                        perolehan_tanah
                        </th>
                        <th>
                        tgl_perolehan	
                        </th>
                        <th>
                        jenis_tanah
                        </th>
                        <th>
                        patok_tanda_batas
                        </th>
                        <th>
                        papan_nama
                        </th>
                        <th>
                        lokasi
                        </th>
                        <th>
                        peruntukan
                        </th>
                        <th>
                        mutasi
                        </th>
                        <th>
                        keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <td>
                                {{ $tanahkasdesa->id ?? '' }}
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
                </tbody>
        </table>
    </div>
</div>

@endsection