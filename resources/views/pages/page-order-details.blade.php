@extends('layout.default')

@section('title', 'Order Details')

@section('content')
	<div class="d-flex align-items-center mb-3">
		<div>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:;">PAGES</a></li>
				<li class="breadcrumb-item active">ORDER DETAILS</li>
			</ol>
			<h1 class="page-header mb-0">Order Details</h1>
		</div>
	</div>
	
	<div class="mb-md-3 mb-2 d-flex flex-wrap">
		<div class="me-4 mb-md-0 mb-2 pe-2"><a href="#" class="text-decoration-none text-body d-flex align-items-center"><iconify-icon icon="material-symbols-light:print-outline-sharp" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Print</a></div>
		<div class="me-4 mb-md-0 mb-2 pe-2"><a href="#" class="text-decoration-none text-body d-flex align-items-center"><iconify-icon icon="material-symbols-light:settings-backup-restore" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Restock items</a></div>
		<div class="me-4 mb-md-0 mb-2 pe-2"><a href="#" class="text-decoration-none text-body d-flex align-items-center"><iconify-icon icon="material-symbols-light:edit-document-outline-sharp" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Edit</a></div>
		<div class="me-4 mb-md-0 mb-2 pe-2 dropdown-toggle">
			<a href="#" data-bs-toggle="dropdown" class="text-decoration-none text-body d-inline-flex align-items-center">More Actions</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div role="separator" class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
			</div>
		</div>
	</div>
	<div class="row gx-3">
		<div class="col-xl-8">
			<div class="card mb-3">
				<div class="card-header with-btn">
					PRODUCTS (3)
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-8 d-flex align-items-center">
							<div class="h-50px w-50px d-flex align-items-center justify-content-center position-relative bg-white p-2">
								<img src="/assets/img/product/product-1.jpg" alt="" class="mw-100 mh-100">
								<span class="w-16px h-16px p-0 d-flex align-items-center justify-content-center badge bg-theme text-theme-color position-absolute end-0 top-0 fw-semibold fs-11px mt-n2 me-n2">1</span>
							</div>
							<div class="ps-3 flex-1">
								<div><a href="#" class="text-decoration-none text-body">iPhone 14 Pro Max</a></div>
								<div class="text-body text-opacity-50 small">
									SKU: IP14PROMAX-512
								</div>
							</div>
						</div>
						<div class="col-lg-2 m-0 ps-lg-3">
							$999 x 1
						</div>
						<div class="col-lg-2 m-0 text-end">
							$999
						</div>
					</div>
					<hr class="my-3" />
					<div class="row align-items-center">
						<div class="col-lg-8 d-flex align-items-center">
							<div class="h-50px w-50px d-flex align-items-center justify-content-center position-relative bg-white p-2">
								<img src="/assets/img/product/product-2.jpg" alt="" class="mw-100 mh-100">
								<span class="w-16px h-16px p-0 d-flex align-items-center justify-content-center badge bg-theme text-theme-color position-absolute end-0 top-0 fw-semibold fs-11px mt-n2 me-n2">1</span>
							</div>
							<div class="ps-3 flex-1">
								<div class=""><a href="#" class="text-decoration-none text-body">One Plus 10 Pro</a></div>
								<div class="text-body text-opacity-50 small">
									SKU: ONEPLUS-10PRO
								</div>
							</div>
						</div>
						<div class="col-lg-2 m-0 ps-lg-3">
							$1,999 x 1
						</div>
						<div class="col-lg-2 m-0 text-end">
							$1,999
						</div>
					</div>
					<hr class="my-3" />
					<div class="row align-items-center">
						<div class="col-lg-8 d-flex align-items-center">
							<div class="h-50px w-50px d-flex align-items-center justify-content-center position-relative bg-white p-2">
								<img src="/assets/img/product/product-3.jpg" alt="" class="mw-100 mh-100">
								<span class="w-16px h-16px p-0 d-flex align-items-center justify-content-center badge bg-theme text-theme-color position-absolute end-0 top-0 fw-semibold fs-11px mt-n2 me-n2">1</span>
							</div>
							<div class="ps-3 flex-1">
								<div class=""><a href="#" class="text-decoration-none text-body">Galaxy s23 Ultra</a></div>
								<div class="text-body text-opacity-50 small">
									SKU: SAMSUNG-GALAXYS23
								</div>
							</div>
						</div>
						<div class="col-lg-2 m-0 ps-lg-3">
							$599 x 1
						</div>
						<div class="col-lg-2 text-body m-0 text-end">
							$599
						</div>
					</div>
				</div>
				<div class="card-footer bg-none d-flex px-0">
					<a href="#" class="btn btn-secondary ms-auto dropdown-toggle me-2">More </a>
					<a href="#" class="btn btn-theme d-flex align-items-center"><iconify-icon icon="material-symbols-light:add" class="fs-20px me-1 ms-n2 my-n2 d-inline-flex"></iconify-icon> Add Tracking</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header with-btn">
					PAYMENT RECORDS
					<div class="card-header-btn">
						<a href="#" class="text-decoration-none">VIEW RECORDS</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-borderless table-sm m-0">
						<tbody>
							<tr>
								<td class="w-150px">Subtotal</td>
								<td>3 items</td>
								<td class="text-end">$3,496.00</td>
							</tr>
							<tr>
								<td>Tax</td>
								<td>GST 5%</td>
								<td class="text-end">$174.80</td>
							</tr>
							<tr>
								<td>Shipping Fee</td>
								<td>promo code: <u class="text-success fw-bold small">FREESHIPPING</u> <small>(<span class="text-decoration-line-through">$120.00</span>)</small></td>
								<td class="text-end">$0.00</td>
							</tr>
							<tr>
								<td class="pb-2" colspan="2"><b>Total</b></td>
								<td class="text-end pb-2 text-decoration-underline"><b>$3670.80</b></td>
							</tr>
							<tr>
								<td colspan="3">
									<hr class="m-0">
								</td>
							</tr>
							<tr>
								<td class="pt-2 pb-2 text-nowrap">
									Paid by customer
								</td>
								<td class="pt-2 pb-2">
									via <a href="#" class="text-decoration-none">Paypal</a> (#IRU9589320)
								</td>
								<td class="pt-2 pb-2 text-end">$3670.80</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer bg-none d-flex px-0">
					<a href="#" class="btn btn-theme ms-auto d-flex align-items-center"><iconify-icon icon="material-symbols-light:check" class="fs-20px me-1 ms-n2 my-n2 d-inline-flex"></iconify-icon> Mark as paid</a>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card mb-3">
				<div class="card-header with-btn">
					NOTES
					<div class="card-header-btn">
						<a href="#" class="text-decoration-none">EDIT</a>
					</div>
				</div>
				<div class="card-body">
					No notes from customer
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header with-btn">
					CUSTOMER
					<div class="card-header-btn">
						<a href="#" class="text-decoration-none">EDIT</a>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center">
						<a href="#" class="d-block"><img src="/assets/img/user/user-1.jpg" alt="" width="45" /></a>
						<div class="flex-fill ps-2">
							<a href="#" class="d-block text-decoration-none text-body fw-semibold">John Smith</a>
							<span class="fs-13px text-body text-opacity-50">johnsmith@gmail.com</span>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header with-btn">
					SHIPPING INFORMATION
					<div class="card-header-btn">
						<a href="#" class="text-decoration-none">EDIT</a>
					</div>
				</div>
				<div class="card-body">
					<i class="fa fa-phone"></i> +916-663-4289<br /><br />
					867 Highland View Drive<br />
					Newcastle, CA<br />
					California<br />
					95658<br />
					<br />
					<a href="#" class="text-decoration-none"><i class="fa fa-map fa-fw"></i> View map</a>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header with-btn">
					BILLING INFORMATION
					<div class="card-header-btn">
						<a href="#" class="text-decoration-none">EDIT</a>
					</div>
				</div>
				<div class="card-body">
					867 Highland View Drive<br />
					Newcastle, CA<br />
					California<br />
					95658<br />
				</div>
			</div>
		</div>
	</div>
@endsection
