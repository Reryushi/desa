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
                                <a href="{{ route("admin.buku_sementara.create") }}" rel="tooltip" title="Add New Buku Penduduk Sementara"
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
                                        Nomor Identitas / Tanda Pengenal
                                        </th>
                                        <th rowspan="2">
                                        Tempat & Tanggal Lahir
                                        </th>
                                        <th rowspan="2">
                                        Pekerjaan
                                        </th>
                                        <th colspan="2">
                                        Kewarganegaraan
                                        </th>
                                        <th rowspan="2">
                                        Datang dari
                                        </th>
                                        <th rowspan="2">
                                        Maksud dan tujuan kedatangan
                                        </th>
                                        <th rowspan="2">
                                        Nama dan alamat yang didatangi
                                        </th>
                                        <th rowspan="2">
                                        Datang tanggal
                                        </th>
                                        <th rowspan="2">
                                        Pergi tanggal
                                        </th>
                                        <th rowspan="2">
                                        Ket
                                        </th>
                                        <th rowspan="2">
                                            &nbsp;
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Kebangsaan</th>
                                        <th>Keturunan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($penduduk as $key => $penduduk)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $penduduk->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $penduduk->nama_lengkap	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->jenis_kelamin ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->nomor_identitas ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->tempat_lahir	 ?? '' }}, {{ $penduduk->tanggal_lahir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->pekerjaan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->kebangsaan	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->keturunan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->datang_dari ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->tujuan_kedatangan	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->nama_didatangi ?? '' }}, {{ $penduduk->alamat_didatangi ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->tanggal_datang	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->tanggal_pergi ?? '' }}
                                            </td>
                                            <td>
                                                {{ $penduduk->ket ?? '' }}
                                            </td>
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_sementara.show', $penduduk->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_sementara.edit', $penduduk->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_sementara.destroy', $penduduk->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
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
