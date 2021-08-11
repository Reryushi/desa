@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Aparat
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
                        nama
                        </th>
                        <th>
                        niap
                        </th>
                        <th>
                        nip
                        </th>
                        <th>
                        jenis_kelamin
                        </th>
                        <th>
                        tempat_lahir
                        </th>
                        <th>
                        tgl_lahir
                        </th>
                        <th>
                        agama
                        </th>
                        <th>
                        pangkat_golongan
                        </th>
                        <th>
                        jabatan
                        </th>
                        <th>
                        pend_terakhir
                        </th>
                        <th>
                        tgl_keputusan_pengangkatan
                        </th>
                        <th>
                        tgl_keputusan_pemberhentian
                        </th>
                        <th>
                        keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                                {{ $aparatdesa->id ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->nama ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->niap ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->nip ?? '' }} 
                            </td>
                            <td>
                                {{ $aparatdesa->jenis_kelamin ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->tempat_lahir ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->tgl_lahir ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->agama ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->pangkat_golongan ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->jabatan ?? '' }} 
                            </td>
                            <td>
                                {{ $aparatdesa->pend_terakhir ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->tgl_keputusan_pengangkatan ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->tgl_keputusan_pemberhentian ?? '' }}
                            </td>
                            <td>
                                {{ $aparatdesa->keterangan ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection