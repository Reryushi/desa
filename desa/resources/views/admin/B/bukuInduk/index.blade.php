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
                                <a href="{{ route("admin.buku_induk.create") }}" rel="tooltip" title="Add New Buku Induk"
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
                                        Nama Lengkap / Panggilan
                                        </th >
                                        <th rowspan="2">
                                        Jenis Kelamin
                                        </th>
                                        <th rowspan="2">
                                        Status Perkawinan
                                        </th>
                                        <th colspan="2">
                                        Tempat Tanggal Lahir
                                        </th>
                                        <th rowspan="2">
                                        Agama
                                        </th>
                                        <th rowspan="2">
                                        Pendidikan Terakhir
                                        </th>
                                        <th rowspan="2">
                                        Pekerjaan
                                        </th>
                                        <th rowspan="2">
                                        Dapat Membaca Huruf
                                        </th>
                                        <th rowspan="2">
                                        Kewarganegaraan
                                        </th>
                                        <th rowspan="2">
                                        Alamat Lengkap
                                        </th>
                                        <th rowspan="2">
                                        Kedudukan Dalam Keluarga
                                        </th>
                                        <th rowspan="2">
                                        NIK
                                        </th>
                                        <th rowspan="2">
                                        Nomor KK
                                        </th>
                                        <th rowspan="2">
                                        Ket
                                        </th>
                                        <th rowspan="2">
                                            &nbsp;
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Tempat</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i= 0;?>
                                    @foreach($induk as $key => $induk)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $induk->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $induk->nama_lengkap	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->jenis_kelamin ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->status_perkawinan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->tempat_lahir	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->tanggal_lahir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->agama ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->pendidikan_terakhir	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->pekerjaan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->tidak_buta_huruf ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->wn	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->alamat ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->status_di_kk ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->nik	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->nomor_kk ?? '' }}
                                            </td>
                                            <td>
                                                {{ $induk->ket ?? '' }}
                                            </td>
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_induk.show', $induk->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_induk.edit', $induk->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_induk.destroy', $induk->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
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

