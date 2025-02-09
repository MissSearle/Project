@extends('layout.default', [
	'appHeaderHide' => true,
	'appSidebarHide' => true,
	'appClass' => 'app-content-full-height app-without-sidebar app-without-header',
	'appContentClass' => 'p-0'
])

@section('title', 'Customer Order')

@push('css')
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/demo/pos-table-booking.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN pos -->
	<div class="pos pos-vertical pos-with-header" id="pos">
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
						<a href="/pos/counter-checkout" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Counter Checkout">
							<iconify-icon icon="material-symbols-light:shopping-cart-checkout-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
					<div class="nav-item">
						<a href="/pos/kitchen-order" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen Order">
							<iconify-icon icon="material-symbols-light:order-approve-outline-sharp" class="nav-icon"></iconify-icon>
						</a>
					</div>
					<div class="nav-item">
						<a href="/pos/table-booking" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Table Booking">
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
		
			<!-- BEGIN pos-content -->
			<div class="pos-content">
				<div class="pos-content-container p-4 mx-2">
					<div class="d-md-flex align-items-center mb-4">
						<div class="flex-1">
							<div class="h5 mb-1">Available Table (8/20)</div>
							<div class="mb-3 mb-md-0 d-flex fs-10px text-white text-opacity-75">
								<div class="d-flex align-items-center me-3">
									<i class="fa fa-circle fa-fw text-body text-opacity-25 fs-4px me-2"></i> Completed
								</div>
								<div class="d-flex align-items-center me-3">
									<i class="fa fa-circle fa-fw text-warning fs-4px me-2"></i> Upcoming
								</div>
								<div class="d-flex align-items-center me-3">
									<i class="fa fa-circle fa-fw text-theme fs-4px me-2"></i> In-progress
								</div>
							</div>
						</div>
						<div>
							<div class="input-group date mb-0" data-render="datepicker" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
								<input type="text" class="form-control" placeholder="Today's">
								<span class="input-group-text input-group-addon">
									<i class="far fa-calendar fa-lg"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="row g-3">
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">01</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="pe-1 text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Reserved by Sean</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
											<div class="info">Reserved by Irene Wong (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Irene Wong (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">02</div>
												<div class="desc">max 8 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Reserved by John (8pax)</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Terry (6pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">03</div>
												<div class="desc">max 8 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">Reserved by Lisa (8pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">Reserved by Lisa (8pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Terry</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">04</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">Reserved by Richard (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">Reserved by Richard (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Paul (3pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">Reserved by Paul (3pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">Reserved by Paul (3pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">05</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">06</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">07</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">08</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">09</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">10</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">11</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">12</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">13</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">14</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">15</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">16</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">17</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="text-theme">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">18</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">19</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="pos-table-booking">
								<div class="pos-table-booking-container">
									<div class="pos-table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title">TABLE</div>
												<div class="no">20</div>
												<div class="desc">max 6 pax</div>
											</div>
											<div class="text-body text-opacity-25">
												<iconify-icon icon="material-symbols-light:check-circle-outline" class="fs-36px"></iconify-icon>
											</div>
										</div>
									</div>
									<div class="pos-table-booking-body">
										<div class="booking">
											<div class="time">08:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">09:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Walk in lunch</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">05:00pm</div>
												<div class="info-title">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking">
											<div class="time">06:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END pos-content -->
		</div>
		<!-- END pos-container -->
	</div>
	<!-- END pos -->
@endsection

@section('outter_content')
	<!-- BEGIN #modalPosBooking -->
	<div class="modal modal-pos fade" id="modalPosBooking">
		<!-- BEGIN modal-dialog -->
		<div class="modal-dialog modal-lg">
			<!-- BEGIN modal-content -->
			<div class="modal-content">
				<!-- BEGIN modal-header -->
				<div class="modal-header align-items-center">
					<h5 class="modal-title d-flex align-items-end">
						Table 01 
						<small class="fs-12px ms-2 text-white text-opacity-50">max 4 pax</small>
					</h5>
					<a href="#" data-bs-dismiss="modal" class="ms-auto btn-close"></a>
				</div>
				<!-- END modal-header -->
				<!-- BEGIN modal-body -->
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>08:00AM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>09:00AM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" value="Reserved by Sean">
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>10:00AM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>11:00AM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>12:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>01:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>02:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>03:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>04:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>05:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" value="Reserved by Irene Wong (4pax)">
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>06:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" value="Reserved by Irene Wong (4pax)">
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>07:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>08:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>09:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
							<div class="form-group mb-2">
								<div class="input-group">
									<div class="input-group-text border-0 w-80px"><small>10:00PM</small></div>
									<input type="text" class="form-control border-0 bg-black bg-opacity-25" placeholder="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END modal-body -->
				<!-- BEGIN modal-footer -->
				<div class="modal-footer">
					<a href="#" class="btn btn-default w-100px" data-bs-dismiss="modal">CANCEL</a>
					<button type="submit" class="btn btn-theme w-100px">BOOK</button>
				</div>
				<!-- END modal-footer -->
			</div>
			<!-- END modal-content -->
		</div>
		<!-- END modal-dialog -->
	</div>
	<!-- END #modalPosBooking -->
@endsection