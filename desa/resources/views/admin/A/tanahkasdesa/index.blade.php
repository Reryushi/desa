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
                                <a href="{{ route("admin.tanahkasdesa.create") }}" rel="tooltip" title="Add New Tanah Kas Desa"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
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
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tanahkasdesa as $key => $tanahkasdesa)
                                        <tr data-entry-id="{{ $tanahkasdesa->id }}">
                                            <td>

                                            </td>
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
                                            <td>
                                            
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tanahkasdesa.show', $tanahkasdesa->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tanahkasdesa.edit', $tanahkasdesa->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                            
                                                    <form action="{{ route('admin.tanahkasdesa.destroy', $tanahkasdesa->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
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

