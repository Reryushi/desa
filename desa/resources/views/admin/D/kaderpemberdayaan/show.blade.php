@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Kader
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
                        umur
                        </th>
                        <th>
                        jenis kelamin
                        </th>
                        <th>
                        pendidikan kursus
                        </th>
                        <th>
                        bidang
                        </th>
                        <th>
                        alamat
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $kaderpemberdayaan->id ?? '' }}
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->nama	 ?? '' }}
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->umur ?? '' }}
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->jenis_kelamin ?? '' }} 
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->pendidikan_kursus ?? '' }}
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->bidang ?? '' }} 
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->alamat ?? '' }}
                            </td>
                            <td>
                                {{ $kaderpemberdayaan->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection