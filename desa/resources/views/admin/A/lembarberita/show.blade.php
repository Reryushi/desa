@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Detail Lembar Berita
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
                        jenis_peraturan	
                        </th>
                        <th>
                        tgl_ditetapkan
                        </th>
                        <th>
                        tentang
                        </th>
                        <th>
                        tgl_diundangkan
                        </th>
                        <th>
                        nomor_diundangkan
                        </th>
                        <th>
                        keterangan
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                  
                            <td>
                                {{ $lembarberita->id ?? '' }}
                            </td>
                            <td>
                                {{ $lembarberita->jenis_peraturan	 ?? '' }}
                            </td>
                            <td>
                                {{ $lembarberita->tgl_ditetapkan ?? '' }}
                            </td>
                            <td>
                                {{ $lembarberita->tentang ?? '' }} 
                            </td>
                            <td>
                                {{ $lembarberita->tgl_diundangkan ?? '' }}
                            </td>
                            <td>
                                {{ $lembarberita->nomor_diundangkan ?? '' }} 
                            </td>
                            <td>
                                {{ $lembarberita->keterangan	 ?? '' }}
                            </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

@endsection