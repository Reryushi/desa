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
                                <a href="{{ route("admin.buku_rekapitulasi.create") }}" rel="tooltip" title="Add New Buku Rekapitulasi"
                                   class="btn btn-danger" style="margin-right: 20px">
                                    <i class="ti-plus"></i>
                                </a>
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                    
                                        <th rowspan="4">
                                        Nomor Urut
                                        </th>
                                        <th rowspan="4">
                                        Nama Dusun / Lingkungan
                                        </th >
                                        <th colspan="7">
                                        Jumlah Penduduk Awal Bulan
                                        </th>
                                        <th colspan="8">
                                        Tambahan Bulan ini
                                        </th>
                                        <th colspan="8">
                                        Pengurangan Bulan ini
                                        </th>
                                        <th colspan="7" rowspan="2">
                                        Jml Penduduk Akhir Bulan
                                        </th>
                                        <th rowspan="4">
                                        Ket
                                        </th>
                                        <th rowspan="4">
                                            &nbsp;
                                        </th>
                                    </tr>

                                    <tr>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th rowspan="3">Jml KK</th>
                                        <th rowspan="3">Jml Anggota Keluarga</th>
                                        <th rowspan="3">Jml Jiwa</th>
                                        <th colspan="4">Lahir</th>
                                        <th colspan="4">Datang</th>
                                        <th colspan="4">Meninggal</th>
                                        <th colspan="4">Pindah</th>
                                    </tr>

                                    <tr>
                                        <th rowspan="2">L</th>
                                        <th rowspan="2">P</th>
                                        <th rowspan="2">L</th>
                                        <th rowspan="2">P</th>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th colspan="2">WNA</th>
                                        <th colspan="2">WNI</th>
                                        <th rowspan="2">Jml KK</th>
                                        <th rowspan="2">Jml Anggota Keluarga</th>
                                        <th rowspan="2">Jml Jiwa</th>
                                    </tr>

                                    <tr>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i= 0;?>
                                    @foreach($rekapitulasi as $key => $rekapitulasi)
                                    
                                    <?php $i++;?>
                                        <tr data-entry-id="{{ $rekapitulasi->id }}">
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                        
                                            <td>
                                                {{ $rekapitulasi->nama_dusun	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_awal_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_awal_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_awal_l	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_awal_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_kk_awal ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_anggota_awal	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_jiwa_awal ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_lahir_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_lahir_p	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_lahir_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_lahir_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_datang_l	 ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_datang_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_datang_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_datang_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_meninggal_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_meninggal_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_meninggal_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_meninggal_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_pindah_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_pindah_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_pindah_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_pindah_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_akhir_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wna_akhir_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_akhir_l ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->wni_akhir_p ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_kk_akhir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_anggota_akhir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->jml_jiwa_akhir ?? '' }}
                                            </td>
                                            <td>
                                                {{ $rekapitulasi->ket ?? '' }}
                                            </td>
                                
                                            
                                            <td>
                                                
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.buku_rekapitulasi.show', $rekapitulasi->id) }}">
                                                        {{ trans('view') }}
                                                    </a>
                                                
                                            
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.buku_rekapitulasi.edit', $rekapitulasi->id) }}">
                                                        {{ trans('edit') }}
                                                    </a>
                                                
                                                    <form action="{{ route('admin.buku_rekapitulasi.destroy', $rekapitulasi->id) }}" method="POST" onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
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
