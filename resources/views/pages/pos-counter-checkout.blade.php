@extends('layout.default', [
	'appHeaderHide' => true,
	'appSidebarHide' => true,
	'appClass' => 'app-content-full-height app-without-sidebar app-without-header',
	'appContentClass' => 'p-0'
])

@section('title', 'Counter Checkout')

@push('js')
  <script src="/assets/js/demo/pos-counter-checkout.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN pos -->
	<div class="pos pos-with-header pos-with-sidebar" id="pos">
		<!-- BEGIN pos-container -->
		<div class="pos-container">
			<!-- BEGIN pos-header -->
			<div class="pos-header">
				<div class="logo">
					<a href="/">
						<div class="logo-img"><iconify-icon icon="material-symbols-light:food-bank"></iconify-icon></div>
						<div class="logo-text">FOOD BANK</div>
					</a>
				</div>
				<div class="time" id="time">00:00</div>
				<div class="nav">
					<div class="nav-item">
						<a href="/pos/counter-checkout" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Counter Checkout">
							<iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
					<div class="nav-item">
						<a href="/pos/kitchen-order" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen Order">
							<iconify-icon icon="material-symbols-light:order-approve-outline-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
					<div class="nav-item">
						<a href="/pos/table-booking" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Table Booking">
							<iconify-icon icon="material-symbols-light:calendar-month-outline-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
					<div class="nav-item">
						<a href="/pos/menu-stock" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Menu Stock">
							<iconify-icon icon="material-symbols-light:inventory-2-outline-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
				</div>
			</div>
			<!-- END pos-header -->
	
			<!-- BEGIN pos-counter-content -->
			<div class="pos-content">
				<div class="pos-content-container p-3">
					<div class="row g-3">
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">1</div>
										<div class="small">9 order</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">4 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">35:20</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$318.20</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">Unpaid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">2</div>
										<div class="small">12 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">6 / 8</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">12:69</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$682.20</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">Unpaid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">3</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">4</div>
										<div class="small">max 4 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">5</div>
										<div class="small">max 4 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">6</div>
										<div class="small">3 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">3 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">20:52</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$56.49</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">Unpaid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">7</div>
										<div class="small">6 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">3 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">58:40</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$329.02</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-16px d-block text-success"></iconify-icon></div>
												<div class="w-60px text-success">Paid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">8</div>
										<div class="small">0 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">2 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">05:12</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$329.02</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">Unpaid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">9</div>
										<div class="small">4 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">2 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">52:58</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$49.50</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">Unpaid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table in-use">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">10</div>
										<div class="small">12 orders</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">9 / 12</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">66:69</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">$768.24</div>
											</div>
											<div class="col-6 d-flex justify-content-center text-success">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-16px d-block text-success"></iconify-icon></div>
												<div class="w-60px">Paid</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table disabled">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">11</div>
										<div class="small">Reserved for Sean</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 4</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">12</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">13</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">14</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">15</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">16</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">17</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">18</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">19</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="pos-checkout-table available">
								<a href="#" class="pos-checkout-table-container" data-toggle="select-table">
									<div class="pos-checkout-table-header">
										<div class="status"><i class="fa fa-circle"></i></div>
										<div class="fw-semibold small">TABLE</div>
										<div class="h1 mb-0">20</div>
										<div class="small">max 6 pax</div>
									</div>
									<div class="pos-checkout-table-info small">
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:group-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">0 / 6</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:receipt-outline" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
											<div class="col-6 d-flex justify-content-center">
												<div class="w-20px"><iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="fs-16px d-block"></iconify-icon></div>
												<div class="w-60px">-</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END pos-counter-content -->
		
			<!-- BEGIN pos-sidebar -->
			<div class="pos-sidebar" id="pos-sidebar">
				<!-- BEGIN pos-sidebar-header -->
				<div class="pos-sidebar-header my-2px">
					<div class="back-btn">
						<button type="button" data-toggle-class="pos-mobile-sidebar-toggled" data-toggle-target="#pos" class="btn">
							<i class="fa fa-chevron-left"></i>
						</button>
					</div>
					<div class="icon"><i class="fa fa-plate-wheat"></i></div>
					<div class="title">Table 01</div>
					<div class="order">Order: <span class="fw-semibold">#0001</span></div>
				</div>
				<!-- END pos-sidebar-header -->
				
				<!-- BEGIN pos-sidebar-body -->
				<div class="pos-sidebar-body" data-scrollbar="true" data-height="100%">
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-2.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Grill Pork Chop</div>
										<div class="mb-1">$12.99</div>
										<div class="small">- size: large</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$12.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-8.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Orange Juice</div>
										<div class="mb-1">$5.00</div>
										<div class="small">- size: large<br>- less ice</div>
									</div>
									<div class="col-2">x2</div>
									<div class="col-3 fw-semibold text-white">$10.00</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-13.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Vanilla Ice-cream</div>
										<div class="mb-1">$3.99</div>
										<div class="small">- scoop: 1 <br>- flavour: vanilla</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$3.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-1.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Grill chicken chop</div>
										<div class="mb-1">$3.99</div>
										<div class="small">- size: large<br>- spicy: medium</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$10.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-10.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Mushroom Soup</div>
										<div class="mb-1">$3.99</div>
										<div class="small">- size: large<br>- more cheese</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$3.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-5.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Hawaiian Pizza</div>
										<div class="mb-1">$15.00</div>
										<div class="small">- size: large<br>- more onion</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$15.00</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-15.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Perfect Yeast Doughnuts</div>
										<div class="mb-1">$2.99</div>
										<div class="small">- size: 1 set<br>- flavour: random</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$2.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
					<!-- BEGIN pos-order -->
					<div class="pos-order py-3">
						<div class="pos-order-product">
							<div class="img" style="background-image: url(/assets/img/pos/product-14.jpg)"></div>
							<div class="flex-1">
								<div class="row">
									<div class="col-7">
										<div class="fw-semibold text-white">Macarons</div>
										<div class="mb-1">$4.99</div>
										<div class="small">- size: 1 set<br>- flavour: random</div>
									</div>
									<div class="col-2">x1</div>
									<div class="col-3 fw-semibold text-white">$4.99</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-order -->
				</div>
				<!-- END pos-sidebar-body -->
				
				<!-- BEGIN pos-sidebar-footer -->
				<div class="pos-sidebar-footer mt-2px">
					<div class="d-flex align-items-center mb-2">
						<div>Subtotal</div>
						<div class="flex-1 text-end h6 mb-0">$64.94</div>
					</div>
					<div class="d-flex align-items-center">
						<div>Taxes (6%)</div>
						<div class="flex-1 text-end h6 mb-0">$3.90</div>
					</div>
					<hr />
					<div class="d-flex align-items-center mb-2">
						<div>Total</div>
						<div class="flex-1 text-end h4 mb-0">$68.84</div>
					</div>
					<div class="mt-3">
						<div class="d-flex">
							<a href="#" class="btn btn-secondary btn-sm w-70px">
								<iconify-icon icon="material-symbols-light:cast-outline-sharp" class="d-flex fs-24px justify-content-center mt-1"></iconify-icon>
								<span>E-WALLET</span>
							</a>
							<span class="w-10px"></span>
							<a href="#" class="btn btn-secondary btn-sm w-70px">
								<iconify-icon icon="material-symbols-light:credit-card-outline-sharp" class="d-flex fs-24px justify-content-center mt-1"></iconify-icon>
								<span>BILL</span>
							</a>
							<span class="w-10px"></span>
							<a href="#" class="btn btn-default btn-sm flex-fill">
								<iconify-icon icon="material-symbols-light:account-balance-wallet-outline-sharp" class="d-flex fs-24px justify-content-center mt-1"></iconify-icon>
								<span>CASH</span>
							</a>
						</div>
					</div>
				</div>
				<!-- END pos-sidebar-footer -->
			</div>
			<!-- END pos-sidebar -->
		</div>
		<!-- END pos-container -->
	</div>
	<!-- END pos -->
@endsection
