@extends('layout.default')

@section('title', 'Analytics')

@push('css')
	<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/masonry-layout/dist/masonry.pkgd.min.js"></script>
	<script src="/assets/plugins/chart.js/dist/chart.umd.js"></script>
	<script src="/assets/plugins/moment/min/moment.min.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="/assets/js/demo/analytics.demo.js"></script>
@endpush

@section('content')
	<!-- page header -->
	<h1 class="page-header">
		Analytics <small>stats, overview & performance</small>
	</h1>
	
	<!-- daterangepicker -->
	<div class="d-flex align-items-center mb-3">
		<a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center" id="daterangepicker">
			<span data-id="daterangepicker-date">TODAY</span> 
			<i class="fa fa-chevron-down ms-2 fs-8px"></i>
		</a>
		<span class="ms-3 small">compared to <span data-id="prev-date" id="daterangepicker-compare-date"></span></span>
	</div>

	<!-- BEGIN rows -->
	<div class="row g-3" data-masonry='{"percentPosition": true }'>
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					TOTAL SALES <span class="ms-auto"><a href="#" class="text-decoration-none">VIEW REPORT</a></span>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>$821.50</div>
						<small class="fw-400 ms-auto text-success">+5%</small>
					</div>
					<hr />
					<div>
						<div class="fs-10px fw-semibold mb-3">SALES OVER TIME</div>
						<div class="chart mb-2" style="height: 190px">
							<canvas id="chart1" class="w-100" height="190"></canvas>
						</div>
						<div class="d-flex align-items-center justify-content-center">
							<i class="fa fa-square text-gray-300 me-2"></i> 
							<span class="fs-10px fw-semibold me-4" data-id="prev-date">&nbsp;</span>
							<i class="fa fa-square text-theme me-2"></i> 
							<span class="fs-10px fw-semibold" data-id="today-date">&nbsp;</span>
						</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					ONLINE STORE SESSIONS <span class="ms-auto"><a href="#" class="text-decoration-none">VIEW REPORT</a></span>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>1,239</div>
						<small class="fw-400 ms-auto text-danger">-2.5%</small>
					</div>
					<hr />
					<div class="row mb-2">
						<div class="col-6">Returning Visitors</div>
						<div class="col-3 text-center">242</div>
						<div class="col-3 text-end">
							<span class="text-danger">-</span> 14.0%
						</div>
					</div>
					<div class="row">
						<div class="col-6">New Visitors</div>
						<div class="col-3 text-center">829</div>
						<div class="col-3 text-end">
							<span class="text-success">+</span> 18.3%
						</div>
					</div>
					<hr />
					<div class="fs-10px fw-semibold mb-3">SESSIONS OVER TIME</div>
					<div class="chart mb-2" style="height: 190px">
						<canvas id="chart2" class="w-100" height="190"></canvas>
					</div>
					<div class="d-flex align-items-center justify-content-center">
						<i class="fa fa-square text-gray-300 me-2"></i> 
						<span class="fs-10px fw-semibold me-4" data-id="prev-date">&nbsp;</span>
						<i class="fa fa-square text-theme me-2"></i> 
						<span class="fs-10px fw-semibold" data-id="today-date">&nbsp;</span>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					TOP PRODUCT BY UNITS SOLD
				</div>
				<div class="card-body">
					<div class="row mb-2">
						<div class="col-6">iPhone 11 Pro Max</div>
						<div class="col-3 text-center">329</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 5.0%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">iPad Pro</div>
						<div class="col-3 text-center">219</div>
						<div class="col-3 text-end"><span class="text-danger">-</span> 5.2%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">Macbook Pro</div>
						<div class="col-3 text-center">125</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 2.3%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">iPhone SE 2</div>
						<div class="col-3 text-center">92</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 4.9%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">Apple pencil</div>
						<div class="col-3 text-center">52</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 5.2%</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					RETURNING CUSTOMER RATE
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>52.85%</div>
						<small class="fw-400 ms-auto text-danger">-7%</small>
					</div>
					<hr />
					<div>
						<div class="fs-10px fw-semibold mb-3">CUSTOMERS</div>
						<div class="chart mb-2" style="height: 190px">
							<canvas id="chart3" class="w-100" height="190"></canvas>
						</div>
						<div class="d-flex align-items-center justify-content-center">
							<i class="fa fa-square text-gray-300 me-2"></i> 
							<span class="fs-10px fw-semibold me-4">First-time</span>
							<i class="fa fa-square text-theme me-2"></i> 
							<span class="fs-10px fw-semibold">Returning</span>
						</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					CONVERSION RATE <span class="ms-auto"><a href="#" class="text-decoration-none">VIEW REPORT</a></span>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>5.29%</div>
						<small class="fw-400 ms-auto text-success">+83%</small>
					</div>
					<hr />
					<div class="row mb-2">
						<div class="col-6">
							<div class="text-white fw-semibold">Added to cart</div>
							<div class="text-white text-opacity-50 small">55 session</div>
						</div>
						<div class="col-3 text-center">25.28%</div>
						<div class="col-3 text-end"><span class="text-danger">-</span> 5.0%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div class="text-white fw-semibold">Reached checkout</div>
							<div class="text-white text-opacity-50 small">25 session</div>
						</div>
						<div class="col-3 text-center">15.28%</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 8.2%</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="text-white fw-semibold">Sessions converted</div>
							<div class="text-white text-opacity-50 small">5 session</div>
						</div>
						<div class="col-3 text-center">5.28%</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 8.2%</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					AVERAGE ORDER VALUE
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>$35.12</div>
						<small class="fw-400 ms-auto text-danger">-3.2%</small>
					</div>
					<hr />
					<div>
						<div class="fs-10px fw-semibold mb-3">ORDERS OVER TIME</div>
						<div class="chart mb-2" style="height: 190px">
							<canvas id="chart4" class="w-100" height="190"></canvas>
						</div>
						<div class="d-flex align-items-center justify-content-center">
							<i class="fa fa-square text-gray-300 me-2"></i> 
							<span class="fs-10px fw-semibold me-4" data-id="prev-date">&nbsp;</span>
							<i class="fa fa-square text-theme me-2"></i> 
							<span class="fs-10px fw-semibold" data-id="today-date">&nbsp;</span>
						</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					TOTAL ORDERS
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center h3 mb-0">
						<div>12</div>
						<small class="fw-400 ms-auto text-success">+57%</small>
					</div>
					<hr />
					<div>
						<div class="fs-10px fw-semibold mb-3">ORDERS OVER TIME</div>
						<div class="chart mb-2">
							<canvas id="chart5" class="w-100" height="190"></canvas>
						</div>
						<div class="d-flex align-items-center justify-content-center">
							<i class="fa fa-square text-gray-300 me-2"></i> 
							<span class="fs-10px fw-semibold me-4" data-id="prev-date">&nbsp;</span>
							<i class="fa fa-square text-theme me-2"></i> 
							<span class="fs-10px fw-semibold" data-id="today-date">&nbsp;</span>
						</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					TOP PAGES BY SESSIONS
				</div>
				<div class="card-body">
					<div class="row mb-2">
						<div class="col-6"><div><a href="#" class="text-decoration-none">/phone/apple-15-pro-max</a></div></div>
						<div class="col-3 text-center">15</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 9.0%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6"><div><a href="#" class="text-decoration-none">/tablet/apple-ipad-pro-128gb</a></div></div>
						<div class="col-3 text-center">12</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 8.0%</div>
					</div>
					<div class="row">
						<div class="col-6"><div><a href="#" class="text-decoration-none">/desktop/apple-mac-pro</a></div></div>
						<div class="col-3 text-center">4</div>
						<div class="col-3 text-end"><span class="text-danger">-</span> 3.0%</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					SESSIONS BY DEVICE TYPE <span class="ms-auto"><a href="#" class="text-decoration-none">VIEW REPORT</a></span>
				</div>
				<div class="card-body">
					<div class="row mb-2">
						<div class="col-6">
							<div>Desktop</div>
						</div>
						<div class="col-3 text-center">247</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 4.2%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Mobile</div>
						</div>
						<div class="col-3 text-center">198</div>
						<div class="col-3 text-end"><span class="text-danger">-</span> 2.2%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Tablet</div>
						</div>
						<div class="col-3 text-center">35</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 8.9%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Smart TV</div>
						</div>
						<div class="col-3 text-center">17</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 2.9%</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div>Smart Watch</div>
						</div>
						<div class="col-3 text-center">5</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 0.9%</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
		
		<div class="col-sm-6 col-xl-4">
			<!-- BEGIN card -->
			<div class="card">
				<div class="card-header d-flex">
					VISITS FROM SOCIAL SOURCES <span class="ms-auto"><a href="#" class="text-decoration-none">VIEW REPORT</a></span>
				</div>
				<div class="card-body">
					<!-- list -->
					<div class="row mb-2">
						<div class="col-6">
							<div>Facebook</div>
						</div>
						<div class="col-3 text-center">247</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 4.2%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Twitter</div>
						</div>
						<div class="col-3 text-center">153</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 8.2%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Instagram</div>
						</div>
						<div class="col-3 text-center">98</div>
						<div class="col-3 text-end"><span class="text-danger">-</span> 3.4%</div>
					</div>
					<div class="row mb-2">
						<div class="col-6">
							<div>Pinterest</div>
						</div>
						<div class="col-3 text-center">75</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 1.9%</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div>Dribbble</div>
						</div>
						<div class="col-3 text-center">22</div>
						<div class="col-3 text-end"><span class="text-success">+</span> 2.1%</div>
					</div>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
	<!-- END row -->
@endsection
