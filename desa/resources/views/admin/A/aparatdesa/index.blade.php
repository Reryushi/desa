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
                                <a href="{{ route("admin.aparatdesa.create") }}" rel="tooltip" title="Add New Aparat Desa"
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
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($aparatdesa as $key => $aparatdesa)
                                        <tr data-entry-id="{{ $aparatdesa->id }}">
                                            <td>

                                            </td>
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
                                            <td>
                                            
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.aparatdesa.show', $aparatdesa->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.aparatdesa.edit', $aparatdesa->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                            
                                                    <form action="{{ route('admin.aparatdesa.destroy', $aparatdesa->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
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

