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
                                <a href="{{ route("admin.buku_kas_umum.create") }}" rel="tooltip" title="Add New Buku Kas Umum"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                    
                                        <th rowspan="">
                                        Nomor Urut
                                        </th>
                                        <th rowspan="">
                                        Tgl.
                                        </th >
                                        <th rowspan="">
                                        Uraian
                                        </th>
                                        <th rowspan="">
                                        Penerimaan (Rp.)
                                        </th>
                                        <th colspan="2">
                                        Pengeluaran (Rp.)
                                        </th>
                                        <th rowspan="2">
                                        No Bukti
                                        </th>
                                        <th rowspan="2">
                                        Jumlah Pengeluaran Komulatif
                                        </th>
                                        <th rowspan="2">
                                        Saldo
                                        </th>
                                        
                                        <th rowspan="2">
                                            &nbsp;
                                        </th>
                                    </tr>

                                
                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($buku_kas_umum as $key => $buku_kas_umum)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $buku_kas_umum->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $buku_kas_umum->tanggal	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->kode_rekening ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->uraian ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->penerimaan	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->pengeluaran ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->no_bukti ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->pengeluaran_komulatif	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kas_umum->saldo ?? '' }}
                                            </td>
                                        
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_kas_umum.show', $buku_kas_umum->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_kas_umum.edit', $buku_kas_umum->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_kas_umum.destroy', $buku_kas_umum->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('delete') }}">
                                                    </form>
                                            
                                            </td>

                                        </tr>
                                        
                                    @endforeach
                                    <tr>
                                    
                                        <th colspan="3" >
                                        Jumlah
                                        </th>
                                        <th rowspan="" style="background-color:#111111">
                                        
                                        </th >
                                        <th rowspan="">
                                        Rp. {{$total_penerimaan}}
                                        </th>
                                        <th rowspan="">
                                        Rp. {{$total_pengeluaran}}
                                        </th>
                                        <th colspan="3" style="background-color:#111111">
                                        
                                        </th>
                                        
                                    </tr>
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

