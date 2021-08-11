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
                                <a href="{{ route("admin.buku_rencanaA.create") }}" rel="tooltip" title="Add New Buku Rencana Anggaran"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <h4 style="text-align:center; padding-top:30px">RENCANA ANGGARAN BIAYA</h4>
                                <h5 style="text-align:center;">DESA GUNUNG KATUN TANJUNGAN KECAMATAN TULANG BAWANG UDIK</h5> 
                                <h5 style="text-align:center;">TAHUN ANGGARAN 2021</h5>   

                                <h6 style="padding:40px 0 0 50px;">1. Bidang <span style="padding-left:110px">: ..................................................</span></h6>   
                                <h6 style="padding:0px 0 0 50px;">2. Kegiatan <span style="padding-left:98px">: ..................................................</span></h6> 
                                <h6 style="padding:0px 0 0 50px;">3. Waktu Pelaksanaan <span style="padding-left:18px">: ..................................................</span></h6> 

                                <h6 style="padding:40px 0 10px 50px;">Rincian Pendanaan.</h6>   

                                <table class="table-bordered table-striped table-hover datatable " >
                                <thead>
                                    <tr>
                                    
                                        <th rowspan="">
                                        Nomor Urut
                                        </th>
                                        <th rowspan="">
                                        Uraian
                                        </th >
                                        <th rowspan="">
                                        Volume
                                        </th>
                                        <th rowspan="">
                                        Harga Satuan (Rp.)
                                        </th>
                                        <th colspan="">
                                        Jumlah(rp.)
                                        </th>
                                        
                                        <th rowspan="">
                                            &nbsp;
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($buku_rencanaA as $key => $buku_rencanaA)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $buku_rencanaA->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $buku_rencanaA->uraian	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $buku_rencanaA->volume ?? '' }}
                                            </td>
                                            <td>
                                                Rp. {{ $buku_rencanaA->harga_satuan ?? '' }}
                                            </td>
                                            <td>
                                                Rp. {{ $buku_rencanaA->jumlah	 ?? '' }}
                                            </td>
                                        
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_rencanaA.show', $buku_rencanaA->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_rencanaA.edit', $buku_rencanaA->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_rencanaA.destroy', $buku_rencanaA->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('delete') }}">
                                                    </form>
                                            
                                            </td>

                                        </tr>

                                        
                                        
                                    @endforeach
                                        <tr>
                                            <td colspan="4">Jumlah</td>
                                            <td>Rp. <?php echo number_format($jumlah_total) ?></td>
                                        <tr>
                                </tbody>
                            </table>
                            <h6 style="text-align:right; padding:70px 80px 0 0">..................., tanggal ...........................</h6>
                            <h6 style=" padding:40px 0 0 150px">Disetujui/mengesahkan <span style="padding-left:400px">Pelaksana Kegiatan </span>  </h6>
                            <h6 style=" padding:0 0 0 182px">Kepala Desa </h6>
                            <h6 style=" padding:50px 0 0 132px">....................................................... <span style="padding-left:355px">....................................................... </span> </h6>
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

