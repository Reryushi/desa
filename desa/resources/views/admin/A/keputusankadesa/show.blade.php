@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Keputusan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>tgl_keputusan_kades</th>
                        <th>tentang</th>
                        <th>uraian</th>
                        <th>tgl_lapor</th>
                        <th>keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $keputusankadesa->tgl_keputusan_kades }}
                        </td>
                        <td>
                            {{ $keputusankadesa->tentang }}
                        </td>
                        <td>
                            {{ $keputusankadesa->uraian }}
                        </td>
                        <td>
                            {{ $keputusankadesa->tgl_lapor }}
                        </td>
                        <td>
                            {{ $keputusankadesa->keterangan }}
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection