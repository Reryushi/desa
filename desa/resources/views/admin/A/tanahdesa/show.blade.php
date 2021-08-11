@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Tanah Desa
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                    <th width="10">

                        </th>
                        <th>
                        id
                        </th>
                        <th>
                        nama_perorangan_badan_hukum
                        </th>
                        <th>
                        jml
                        </th>
                        <th>
                        status_hak_tanah
                        </th>
                        <th>
                        penggunaan_tanah
                        </th>
                        <th>
                        keterangan
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <td>
                                {{ $tanahdesa->id ?? '' }}
                            </td>
                            <td>
                                {{ $tanahdesa->nama_perorangan_badan_hukum ?? '' }}
                            </td>
                            <td>
                                {{ $tanahdesa->jml ?? '' }}
                            </td>
                            <td>
                                {{ $tanahdesa->status_hak_tanah ?? '' }} 
                            </td>
                            <td>
                                {{ $tanahdesa->penggunaan_tanah ?? '' }}
                            </td>
                            <td>
                                {{ $tanahdesa->keterangan ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection