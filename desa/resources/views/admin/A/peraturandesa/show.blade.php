@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Peraturan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>Jenis</th>
                        <th>tgl_ditetapkan</th>
                        <th>tentang</th>
                        <th>uraian</th>
                        <th>tgl_kesepakatan</th>
                        <th>tgl_lapor</th>
                        <th>tgl_undang_lembaran_desa</th>
                        <th>tgl_undang_berita_desa</th>
                        <th>keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $peraturandesa->jenis }}
                        </td>
                        <td>
                            {{ $peraturandesa->tgl_ditetapkan }}
                        </td>
                        <td>
                            {{ $peraturandesa->tentang }}
                        </td>
                        <td>
                            {{ $peraturandesa->uraian }}
                        </td>
                        <td>
                            {{ $peraturandesa->tgl_kesepakatan }}
                        </td>
                        <td>
                            {{ $peraturandesa->tgl_lapor }}
                        </td>
                        <td>
                            {{ $peraturandesa->tgl_undang_lembaran_desa }}
                        </td>
                        <td>
                            {{ $peraturandesa->tgl_undang_berita_desa }}
                        </td>
                        <td>
                            {{ $peraturandesa->keterangan }}
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection