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
                                <a href="{{ route("admin.surat_umum.create") }}" rel="tooltip" title="Tambah Surat Keterangan"
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
                                        Jenis	
                                        </th>
                                        <th>
                                        nomor surat
                                        </th>
                                        <th>
                                        Nama	
                                        </th>
                                        <th>
                                        Keperluan
                                        </th>
                                        <th>
                                        Mulai Berlaku
                                        </th>
                                        <th>
                                        Tanggal Akhir Surat
                                        </th>
                                        
                                        <th>
                                            Aksi
                                        </th>

                                        <th>
                                            Status
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($surat_umum as $key => $surat_umum)
                                        <tr data-entry-id="{{ $surat_umum->id }}">
                                            <td>

                                            </td>
                                            <td>
                                                {{ $surat_umum->jenis ?? '' }}
                                            </td>
                                            <td>
                                                {{ $surat_umum->nomor_surat	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $surat_umum->penduduk->nama_lengkap	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $surat_umum->keperluan ?? '' }}
                                            </td>
                                            <td>
                                                {{ $surat_umum->tgl_surat ?? '' }} 
                                            </td>
                                            <td>
                                                {{ $surat_umum->surat_berakhir ?? '' }}
                                            </td>
                                            <td>
                                                <div class="table-icons">
                                                    <a rel="tooltip" title="Approve"
                                                        class="btn btn-simple btn-success btn-icon table-action approve"
                                                        href="{{url('admin/surat_umum/'.$surat_umum->id.'/approve')}}">
                                                        <i class="ti-check-box"></i>
                                                    </a>
                                                    <a rel="tooltip" title="Reject"
                                                        class="btn btn-simple btn-danger btn-icon table-action reject"
                                                        href="{{url('admin/surat_umum/'.$surat_umum->id.'/reject')}}">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </td>   
                                            <td>
                                                
                                                    @if ($surat_umum->status == '1')
                                                        <a class="btn btn-xs " style="background-color:green; color:white" href="{{ route('admin.surat_umum.show', $surat_umum->id) }}">
                                                            Download
                                                        </a>
                                                
                                                    @elseif ($surat_umum->status =='2')
                                                        <label class="btn btn-xs " style="background-color:#8A1511">
                                                            Ditolak
                                                        </label>

                                                    @else
                                                        <label class="btn btn-xs " >
                                                            Menunggu
                                                        </label>
                                                    @endif
                                                
                                                  
                                            
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

