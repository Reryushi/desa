@extends('layouts.admin')
@section('style')
    @parent
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="content">
                            <div class="toolbar">
                                <a href="{{ route("admin.buku_ktp.create") }}" rel="tooltip" title="Add New Buku KTP dan KK"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                    
                                        <th rowspan="2">
                                        Nomor Urut
                                        </th>
                                        <th rowspan="2">
                                        No. KK
                                        </th >
                                        <th rowspan="2">
                                        Nama Lengkap
                                        </th>
                                        <th rowspan="2">
                                        NIK
                                        </th>
                                        <th rowspan="2">
                                        Jenis Kelamin
                                        </th>
                                        <th rowspan="2">
                                        Tempat / Tanggal Lahir
                                        </th>
                                        <th rowspan="2">
                                        Gol. Darah
                                        </th>
                                        <th rowspan="2">
                                        Agama
                                        </th>
                                        <th rowspan="2">
                                        Pendidikan
                                        </th>
                                        <th rowspan="2">
                                        Pekerjaan
                                        </th>
                                        <th rowspan="2">
                                        Alamat
                                        </th>
                                        <th rowspan="2">
                                        Status Perkawinan
                                        </th>
                                        <th rowspan="2">
                                        Tempat dan Tanggal Dikeluarkan
                                        </th>
                                        <th rowspan="2">
                                        Status Hub. Keluarga
                                        </th>
                                        <th rowspan="2">
                                        Kewarganegaraan
                                        </th>
                                        <th colspan="2">
                                        Orang Tua
                                        </th>
                                        <th rowspan="2">
                                        Tgl. Mulai Tinggal di Desa
                                        </th>
                                        <th rowspan="2">
                                        Ket.
                                        </th>
                                        <th rowspan="2">
                                            &nbsp;
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Ayah</th>
                                        <th>Ibu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($ktp_kk as $key => $ktp_kk)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $ktp_kk->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $ktp_kk->no_kk	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->nama_lengkap ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->nik ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->jenis_kelamin	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->tempat_lahir ?? '' }} /  {{ $ktp_kk->tanggal_lahir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->gol_darah ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->agama	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->pendidikan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->pekerjaan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->alamat	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->status_perkawinan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->tempat_ektp_keluar ?? '' }} {{ $ktp_kk->tanggal_ektp_keluar ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->status_hub_keluarga	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->wn ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->nama_ayah ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->nama_ibu ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->tgl_tinggal_didesa ?? '' }}
                                            </td>
                                            <td>
                                                {{ $ktp_kk->ket ?? '' }}
                                            </td>
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_ktp.show', $ktp_kk->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_ktp.edit', $ktp_kk->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_ktp.destroy', $ktp_kk->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('delete') }}">
                                                    </form>
                                            
                                            </td>

                                        </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
</div>
                        </div>
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
@section('scripts')
    @parent

    <!-- Sweet Alert 2 plugin -->
    <script src="{{ asset('backend/js/sweetalert2.js') }}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{ asset('backend/js/bootstrap-table.js') }}"></script>
    <script type="text/javascript">

        // var delete_button = function(){
        //     swal({  title: "Are you sure?",
        //         text: "After you delete the user, all user room and events bookings will also be deleted.",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonClass: "btn btn-info btn-fill",
        //         confirmButtonText: "Yes, delete it!",
        //         cancelButtonClass: "btn btn-danger btn-fill",
        //         closeOnConfirm: false,
        //     },function(){
        //         $('form#delete-user').submit();
        //     });
        // }

        var $table = $('#bootstrap-table');
        $().ready(function () {
            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'ti-close'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
        });

    </script>
    <script>
       $(function () {
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
      

        $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        })
    </script>
@endsection

