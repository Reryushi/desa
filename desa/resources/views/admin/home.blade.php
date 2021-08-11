@extends('layouts.admin')
@section('style')
    @parent

@endsection
@section('content')
<style>

.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}



.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 40px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
    <div class="content "  >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 " >
                    <div class="card">
                        <div class="content">

						<!-- @if ($result < 0 && $result_day < 0 )
                            <div class="row">
                                
							<div class="col-md-4 col-xl-3">
								<div class="card bg-c-blue order-card">
									<div class="card-block">
										<h5 class="m-b-20">Pesanan kamar bulan ini</h5>
										<h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{$monthly_report_room}}</span></h2>
										
									</div>
								</div>
							</div>
						@endif

						@if ($result_cost < 0 && $result_cost_day < 0)
							<div class="col-md-4 col-xl-3">
								<div class="card bg-c-green order-card">
									<div class="card-block">
										<h5 class="m-b-20">Pendapatan bulan ini</h5>
										<h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>Rp. <?php echo number_format($monthly_report_cost)?></span></h2>
										
									</div>
								</div>
							</div>
						@endif -->

						<!-- Filter dengan bulan -->
						<!-- @if ($result >= 0)
								<div class="row">
                                
									<div class="col-md-4">
										<div class="card order-card" style="background-color:#316C85">
											<div class="card-block">
												<h5 class="m-b-20">Pesanan Bulan {{$name_of_date}}</h5>
												<h3 class="text-right"><i class="ti-shopping-cart-full f-left"></i><span style="color:#C2C82E">{{$result}}</span></h3>
												
											</div>
										</div>
									</div>		
								@endif

								@if ($result_cost >= 0)
										<div class="col-md-4">
											<div class="card order-card" style="background-color:#3AAE2C">
												<div class="card-block">
													<h5 class="m-b-20">Pendapatan Bulan {{$name_of_date}}</h5>
													<h3 class="text-right"><i class="ti-money f-left"></i><span style="color:#C2C82E">Rp. <?php echo number_format($result_cost)?></span></h3>
													
												</div>
											</div>
										</div>
									
								@endif -->

							<!-- Filter dengan hari -->
								<!-- @if ($result_day >= 0)
								<div class="row">
                                
									<div class="col-md-4 ">
										<div class="card order-card" style="background-color:#316C85">
											<div class="card-block">
												<h5 class="m-b-20">Pesanan Tanggal {{$name_of_day}}</h5>
												<h3 class="text-right"><i class="ti-shopping-cart-full f-left"></i><span style="color:#C2C82E">{{$result_day}}</span></h3>
												
											</div>
										</div>
									</div>		
								@endif

								@if ($result_cost_day >= 0)
										<div class="col-md-4">
											<div class="card order-card" style="background-color:#3AAE2C">
												<div class="card-block">
													<h5 class="m-b-20">Pendapatan Tanggal {{$name_of_day}}</h5>
													<h3 class="text-right"><i class="ti-money f-left"></i><span style="color:#C2C82E">Rp. <?php echo number_format($result_cost_day)?></span></h3>
													
												</div>
											</div>
										</div>
									
								@endif
							{!! Form::open(array('url' => 'admin')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            {{ csrf_field() }}
							<div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="text-center">Lihat Pesanan Berdasarkan Bulan</label>
                                        <input type="month" class="form-control" name="pesanan">
                                    </div>
                                </div>
								<div class="" style="padding-top:43px">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Lihat</button>
								</div>
                           <br>
								
                            
                            {!! Form::close() !!}

							{!! Form::open(array('url' => 'admin')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            {{ csrf_field() }}
							
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="text-center">Lihat Pesanan Berdasarkan Hari</label>
                                        <input type="date" class="form-control" name="pesan">
                                    </div>
                                </div>
								<div class="" style="padding-top:43px">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Lihat</button>
								</div>
                            </div>
								
                            
                            {!! Form::close() !!} -->
                                
								
                            </div>
							
                        </div>

                    </div>
                    <!-- <div style="width: 800px;height: 500px;">
                        <canvas id="myChart"></canvas>
                    </div> -->

					
					<div class="container">
						<div class="row">
							
						</div>
					</div>

                </div>

				
        </div>
    </div>

    
@endsection
@section('scripts')
    @parent

    
    <!-- Circle Percentage-chart -->
    <script src="{{ asset('backend/js/jquery.easypiechart.min.js') }}"></script>

    

    <!--  Charts Plugin -->
    <script src="{{ asset('backend/js/chartist.min.js') }}"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="{{ asset('backend/js/demo.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>
@endsection

