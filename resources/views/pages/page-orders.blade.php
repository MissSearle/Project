@extends('layout.default')

@section('title', 'Orders')

@section('content')
	<div class="d-flex align-items-center mb-3">
		<div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">PAGES</a></li>
				<li class="breadcrumb-item active">ORDERS</li>
			</ul>
			<h1 class="page-header mb-0">Orders</h1>
		</div>
		
		<div class="ms-auto">
			<a href="#" class="btn btn-theme btn-sm fs-11px py-2 w-140px d-flex align-items-center justify-content-center">
				<iconify-icon icon="material-symbols-light:add" class="fs-22px me-1 ms-n3 my-n3"></iconify-icon>
				CREATE ORDERS
			</a>
		</div>
	</div>
	
	<div class="mb-md-4 mb-3 d-md-flex">
		<div class="mt-sm-0 mt-2 me-2"><a href="#" class="text-body text-decoration-none d-flex align-items-center"><iconify-icon icon="material-symbols-light:download-sharp" class="fs-20px opacity-5 me-2 my-n1"></iconify-icon> Export</a></div>
		<div class="ms-md-4 mt-md-0 mt-2 dropdown-toggle">
			<a href="#" data-bs-toggle="dropdown" class="text-body text-decoration-none">More Actions</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div role="separator" class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
			</div>
		</div>
	</div>
	
	<div class="card">
		<ul class="nav nav-tabs nav-tabs-v2 px-2 small text-uppercase mb-4">
			<li class="nav-item me-4"><a href="#allTab" class="nav-link active px-2 py-2" data-bs-toggle="tab">All</a></li>
			<li class="nav-item me-4"><a href="#publishedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Unfulfilled</a></li>
			<li class="nav-item me-4"><a href="#expiredTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Unpaid</a></li>
			<li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Open</a></li>
			<li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Closed</a></li>
			<li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Local delivery</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="allTab">
				<!-- BEGIN input-group -->
				<div class="input-group mb-4">
					<div class="flex-fill position-relative">
						<div class="input-group">
							<input type="text" class="form-control ps-35px" placeholder="Filter orders">
							<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0" style="z-index: 1020;">
								<i class="fa fa-search opacity-5"></i>
							</div>
						</div>
					</div>
					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Payment Status</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> &nbsp;</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div role="separator" class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Fulfillment status</span><span class="d-inline d-md-none"><i class="fa fa-check"></i></span>  &nbsp;</button>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div role="separator" class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
				</div>
				<!-- END input-group -->
				
				<!-- BEGIN table -->
				<div class="table-responsive">
					<table class="table table-hover text-nowrap small mb-4">
						<thead>
							<tr class="text-uppercase">
								<th></th>
								<th>Order</th>
								<th>Date</th>
								<th>Customer</th>
								<th>Total</th>
								<th>Payment status</th>
								<th>Fulfillment status</th>
								<th>Items</th>
								<th>Delivery method</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product1">
										<label class="form-check-label" for="product1"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1950</a></td>
								<td class="align-middle">Thu 26 Nov, 12:23pm</td>
								<td class="align-middle">Amanda Lee</td>
								<td class="align-middle">$398.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
								<td class="align-middle">3 items</td>
								<td class="align-middle">Free shipping</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product2">
										<label class="form-check-label" for="product2"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1949</a></td>
								<td class="align-middle">Thu 26 Nov, 11:54am</td>
								<td class="align-middle">Leonard Oii</td>
								<td class="align-middle">$496.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Local pickup</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product3">
										<label class="form-check-label" for="product3"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1948</a></td>
								<td class="align-middle">Thu 25 Nov, 11:54pm</td>
								<td class="align-middle">John Doe</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
								<td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product4">
										<label class="form-check-label" for="product4"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1947</a></td>
								<td class="align-middle">Thu 25 Nov, 11:53pm</td>
								<td class="align-middle">Terry Ng</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
								<td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product5">
										<label class="form-check-label" for="product5"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1946</a></td>
								<td class="align-middle">Thu 25 Nov, 11:52pm</td>
								<td class="align-middle">Terry Ng</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
								<td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product6">
										<label class="form-check-label" for="product6"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1945</a></td>
								<td class="align-middle">Thu 24 Nov, 2:43pm</td>
								<td class="align-middle">Lelouch Wong</td>
								<td class="align-middle">$900.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-primary bg-opacity-15 text-primary py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> READY FOR PICKUP</span></td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Local pickup</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product7">
										<label class="form-check-label" for="product7"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1944</a></td>
								<td class="align-middle">Thu 23 Nov, 2:43pm</td>
								<td class="align-middle">Cynthia Ting</td>
								<td class="align-middle">$625.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-primary bg-opacity-15 text-primary py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> READY FOR DELIVERY</span></td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Local pickup</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product8">
										<label class="form-check-label" for="product8"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1943</a></td>
								<td class="align-middle">Thu 23 Nov, 11:59am</td>
								<td class="align-middle">Richard Leong</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PARTIALLY REFUNDED</span></td>
								<td class="align-middle"><span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PARTIALLY FULFILLED</span></td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product9">
										<label class="form-check-label" for="product9"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1942</a></td>
								<td class="align-middle">Thu 22 Nov, 8:12am</td>
								<td class="align-middle">Clement Tang</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product10">
										<label class="form-check-label" for="product10"></label>
									</div>
								</td>
								<td class="align-middle"><a href="/page/order/details">#1941</a></td>
								<td class="align-middle">Thu 22 Nov, 7:42am</td>
								<td class="align-middle">Richard Leong</td>
								<td class="align-middle">$195.00</td>
								<td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
								<td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product11">
										<label class="form-check-label" for="product11"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1942</a>
								</td>
								<td class="align-middle">Fri 23 Nov, 8:15am</td>
								<td class="align-middle">Sarah Connor</td>
								<td class="align-middle">$250.00</td>
								<td class="align-middle">
									<span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
								</td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Standard</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product12">
										<label class="form-check-label" for="product12"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1943</a>
								</td>
								<td class="align-middle">Sat 24 Nov, 9:30am</td>
								<td class="align-middle">John Doe</td>
								<td class="align-middle">$120.00</td>
								<td class="align-middle">
									<span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">3 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product13">
										<label class="form-check-label" for="product13"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1944</a>
								</td>
								<td class="align-middle">Sun 25 Nov, 10:00am</td>
								<td class="align-middle">Jane Smith</td>
								<td class="align-middle">$310.00</td>
								<td class="align-middle">
									<span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> CANCELLED </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Standard</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product14">
										<label class="form-check-label" for="product14"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1945</a>
								</td>
								<td class="align-middle">Mon 26 Nov, 11:45am</td>
								<td class="align-middle">Michael Johnson</td>
								<td class="align-middle">$175.00</td>
								<td class="align-middle">
									<span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
								</td>
								<td class="align-middle">4 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product15">
										<label class="form-check-label" for="product15"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1946</a>
								</td>
								<td class="align-middle">Tue 27 Nov, 12:20pm</td>
								<td class="align-middle">Emily Davis</td>
								<td class="align-middle">$80.00</td>
								<td class="align-middle">
									<span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Standard</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product16">
										<label class="form-check-label" for="product16"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1947</a>
								</td>
								<td class="align-middle">Wed 28 Nov, 1:05pm</td>
								<td class="align-middle">David Brown</td>
								<td class="align-middle">$230.00</td>
								<td class="align-middle">
									<span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
								</td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product17">
										<label class="form-check-label" for="product17"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1948</a>
								</td>
								<td class="align-middle">Thu 29 Nov, 2:30pm</td>
								<td class="align-middle">Olivia Martin</td>
								<td class="align-middle">$150.00</td>
								<td class="align-middle">
									<span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> CANCELLED </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">3 items</td>
								<td class="align-middle">Standard</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product18">
										<label class="form-check-label" for="product18"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1949</a>
								</td>
								<td class="align-middle">Fri 30 Nov, 3:45pm</td>
								<td class="align-middle">Sophia White</td>
								<td class="align-middle">$95.00</td>
								<td class="align-middle">
									<span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
								</td>
								<td class="align-middle">2 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product19">
										<label class="form-check-label" for="product19"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1950</a>
								</td>
								<td class="align-middle">Sat 1 Dec, 4:20pm</td>
								<td class="align-middle">James Black</td>
								<td class="align-middle">$110.00</td>
								<td class="align-middle">
									<span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">1 item</td>
								<td class="align-middle">Standard</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product20">
										<label class="form-check-label" for="product20"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1951</a>
								</td>
								<td class="align-middle">Sun 2 Dec, 5:35pm</td>
								<td class="align-middle">Charlotte Green</td>
								<td class="align-middle">$300.00</td>
								<td class="align-middle">
									<span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
								</td>
								<td class="align-middle">3 items</td>
								<td class="align-middle">Express</td>
							</tr>
							<tr>
								<td class="w-10px align-middle">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product21">
										<label class="form-check-label" for="product21"></label>
									</div>
								</td>
								<td class="align-middle">
									<a href="/page/order/details">#1952</a>
								</td>
								<td class="align-middle">Mon 3 Dec, 6:50pm</td>
								<td class="align-middle">Henry King</td>
								<td class="align-middle">$220.00</td>
								<td class="align-middle">
									<span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
								</td>
								<td class="align-middle">
									<span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
										<i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
								</td>
								<td class="align-middle">4 items</td>
								<td class="align-middle">Standard</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- END table -->
				
				<div class="d-md-flex align-items-center">
					<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
						Showing 1 to 20 of 57 entries
					</div>
					<ul class="pagination mb-0 justify-content-center">
						<li class="page-item disabled"><a class="page-link">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
