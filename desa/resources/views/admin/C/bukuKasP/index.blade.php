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
                                <a href="{{ route("admin.buku_kasP.create") }}" rel="tooltip" title="Add New Buku Kas Pembantu"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                <thead style="background-color:#F1F1F1">
                                    <tr>
                                        <th rowspan="2">Nomor <br>Urut</th>
                                        <th rowspan="2">Tanggal</th>
                                        <th rowspan="2">Uraian</th>
                                        <th colspan="2">Penerimaan (Rp.)</th>
                                        <th rowspan="2">Nomor <br>Bukti</th>
                                        <th colspan="2">Pengeluaran (Rp.)</th>
                                        <th rowspan="2">Jumlah <br>Pengembalian ke <br>Bendahara</th>
                                        <th rowspan="2">Saldo Kas <br>(Rp.)</th>
                                        <th rowspan="2">
                                                &nbsp;
                                            </th>
                                    </tr>
                                    <tr>
                                        <td>Dari Bendahara</td>
                                        <td>Swadaya Masyarakat</td>
                                        <td>Belanja Barang dan Jasa</td>
                                        <td>Belanja Modal</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($buku_kasP as $key => $buku_kasP)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $buku_kasP->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $buku_kasP->tanggal ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->uraian ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->dari_bendahara	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->swadaya_masyarakat ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->nomor_bukti ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->beli_barang_jasa	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->beli_modal ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->pengembalian_ke_bendahara ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_kasP->saldo_kas	 ?? '' }}
                                            </td>
                                    <td >
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_kasP.show', $buku_kasP->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_kasP.edit', $buku_kasP->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_kasP.destroy', $buku_kasP->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('delete') }}">
                                                    </form>
                                            
                                            </td>
                                    </tr>
                                    @endforeach
                                    <tr style="background-color:#F8F8F8">
                                        <td></td>
                                        <td></td>
                                        <td>Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color:#F8F8F8">
                                        <td></td>
                                        <td></td>
                                        <td>Total Penerimaan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3">Total Pengeluaran</td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color:#F8F8F8">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3">Total Pengeluaran + Saldo Kas</td>
                                        <td></td>
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
