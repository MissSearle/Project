@extends('layout.default', [
	'appHeaderHide' => true,
	'appSidebarHide' => true,
	'appClass' => 'app-content-full-height app-without-sidebar app-without-header',
	'appContentClass' => 'p-0'
])

@section('title', 'Kitchen Order')

@push('js')
	<script src="/assets/js/demo/pos-kitchen-order.demo.js"></script>
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
						<a href="/pos/kitchen-order" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen Order">
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
		
			<!-- BEGIN pos-content -->
			<div class="pos-content">
				<div class="pos-content-container p-0">
					<div class="pos-task">
						<div class="pos-task-info fs-10px">
							<div class="h5 mb-1">Table 05</div>
							<div class="mb-4">Order No: #9049</div>
							<div class="mb-2">
								<span class="badge bg-theme text-theme-color fs-10px">DINE-IN</span>
							</div>
							<div>07:13 time</div>
						</div>
						<div class="pos-task-body">
							<div class="fs-6 mb-3 text-white">
								Completed: (1/3)
							</div>
							<div class="row gx-4">
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-2.jpg);"></div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Pork Burger</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- large size<br />
													- extra cheese
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-14.jpg);"></div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Macarons</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- serve after dishes
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-8.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Vita C Detox Juice</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- large size<br />
													- less ice<br />
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pos-task">
						<div class="pos-task-info fs-10px">
							<div class="h5 mb-1">Table 14</div>
							<div class="mb-4">Order No: #9047</div>
							<div class="mb-2">
								<span class="badge bg-theme text-theme-color fs-10px">DINE-IN</span>
							</div>
							<div><span class="text-danger">12:13</span> time</div>
						</div>
						<div class="pos-task-body">
							<div class="fs-6 mb-3 text-white">
								Completed: (3/4)
							</div>
							<div class="row gx-4">
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-11.jpg);"></div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Baked chicken wing</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- 6 pieces<br />
													- honey source<br />
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-12.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Veggie Spaghetti</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- size: large <br />
													- spicy level: light
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-7.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Coffee Latte</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- no sugar<br />
													- more cream
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-1.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Grill Chicken Chop</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pos-task">
						<div class="pos-task-info fs-10px">
							<div class="h5 mb-1">Table 17</div>
							<div class="mb-4">Order No: #9046</div>
							<div class="mb-2">
								<span class="badge text-bg-secondary fs-10px">DINE-IN</span>
							</div>
							<div>All dish served<br />12:30 total time</div>
						</div>
						<div class="pos-task-body">
							<div class="fs-6 mb-3 text-white">
								Completed: (3/3)
							</div>
							<div class="row gx-4">
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-2.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Pork Burger</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- large size<br />
													- extra cheese<br />
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-10.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Mushroom soup</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte<br />
													- more cheese<br />
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-8.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Vita C Detox Juice</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- large size<br />
													- less ice<br />
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pos-task">
						<div class="pos-task-info fs-10px">
							<div class="h5 mb-1">Table 18</div>
							<div class="mb-4">Order No: #9043</div>
							<div class="mb-2">
								<span class="badge text-bg-secondary fs-10px">DINE-IN</span>
							</div>
							<div>All dish served<br />12:30 total time</div>
						</div>
						<div class="pos-task-body">
							<div class="fs-6 mb-3 text-white">
								Completed: (2/2)
							</div>
							<div class="row gx-4">
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-13.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Vanilla Ice Cream</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-9.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Pancake</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pos-task">
						<div class="pos-task-info fs-10px">
							<div class="h5 mb-1">Table 02</div>
							<div class="mb-4">Order No: #9045</div>
							<div class="mb-2">
								<span class="badge text-bg-secondary fs-10px">TAKE AWAY</span>
							</div>
							<div>All dish served<br />22:28 total time</div>
						</div>
						<div class="pos-task-body">
							<div class="fs-6 mb-3 text-white">
								Completed: (3/3)
							</div>
							<div class="row gx-4">
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-4.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Vegan Salad Bowl&reg;</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-6.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Avocado Shake</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-5 mb-lg-0">
									<div class="pos-task-product completed">
										<div class="pos-task-product-img">
											<div class="cover" style="background-image: url(/assets/img/pos/product-5.jpg);"></div>
											<div class="caption">
												<div>Completed</div>
											</div>
										</div>
										<div class="pos-task-product-info">
											<div class="flex-1">
												<div class="d-flex mb-1">
													<div class="fs-6 flex-1 text-white fw-semibold">Hawaiian Pizza&reg;</div>
													<div class="fs-6 text-white fw-semibold">x1</div>
												</div>
												<div class="text-body text-opacity-75 small">
													- ala carte
												</div>
											</div>
										</div>
										<div class="pos-task-product-action">
											<a href="#" class="btn btn-theme btn-sm disabled">COMPLETE</a>
											<a href="#" class="btn btn-secondary btn-sm disabled">CANCEL</a>
										</div>
									</div>
								</div>
							</div>
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
