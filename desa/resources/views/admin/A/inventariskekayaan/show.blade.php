@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Inventaris
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>jenis_barang_bangunan</th>
                        <th>asal_barang_bangunan</th>
                        <th>asal_keadaan_barang</th>
                        <th>penghapusan_barang_bangunan</th>
                        <th>tgl_penghapusan</th>
                        <th>penghapusan_keadaan_barang</th>
                        <th>keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $inventariskekayaan->jenis_barang_bangunan }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->asal_barang_bangunan }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->asal_keadaan_barang }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->penghapusan_barang_bangunan }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->tgl_penghapusan }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->penghapusan_keadaan_barang }}
                        </td>
                        <td>
                            {{ $inventariskekayaan->keterangan }}
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection