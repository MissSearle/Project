@extends('layout.default')

@section('title', 'Products')

@section('content')
	<div class="d-flex align-items-center mb-3">
		<div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">PAGES</a></li>
				<li class="breadcrumb-item active">PRODUCTS</li>
			</ul>
			<h1 class="page-header mb-0">Products</h1>
		</div>
		
		<div class="ms-auto">
			<a href="#" class="btn btn-theme btn-sm w-130px py-2 fs-11px d-flex align-items-center justify-content-center">
				<iconify-icon icon="material-symbols-light:add" class="fs-22px me-1 ms-n3 my-n3"></iconify-icon>
				ADD PRODUCT
			</a>
		</div>
	</div>
	
	<div class="d-flex">
		<div class="mb-sm-4 mb-3 d-sm-flex">
			<div class="mt-sm-0 mt-2 me-2"><a href="#" class="text-body text-decoration-none d-flex align-items-center"><iconify-icon icon="material-symbols-light:download-sharp" class="fs-20px opacity-5 me-2 my-n1"></iconify-icon> Export</a></div>
			<div class="ms-sm-4 mt-sm-0 mt-2 me-2"><a href="#" class="text-body text-decoration-none d-flex align-items-center"><iconify-icon icon="material-symbols-light:upload-sharp" class="fs-20px opacity-5 me-2 my-n1"></iconify-icon> Import</a></div>
			<div class="ms-sm-4 mt-sm-0 mt-2 me-2 dropdown-toggle">
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
	</div>
	
	<div class="card">
		<ul class="nav nav-tabs nav-tabs-v2 small text-uppercase mb-4 px-2">
			<li class="nav-item me-4"><a href="#allTab" class="nav-link active px-2 py-2" data-bs-toggle="tab">All</a></li>
			<li class="nav-item me-4"><a href="#publishedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Published</a></li>
			<li class="nav-item me-4"><a href="#expiredTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Expired</a></li>
			<li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Deleted</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="allTab">
				<!-- BEGIN input-group -->
				<div class="input-group mb-4">
					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">Filter Products&nbsp;</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div role="separator" class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
					<div class="flex-fill position-relative z-1">
						<div class="input-group">
							<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0">
								<i class="fa fa-search opacity-5"></i>
							</div>
							<input type="text" class="form-control ps-30px" placeholder="Enter product name">
						</div>
					</div>
				</div>
				<!-- END input-group -->
				
				<!-- BEGIN table -->
				<div class="table-responsive">
					<table class="table table-hover text-nowrap small mb-4">
						<thead>
							<tr>
								<th></th>
								<th>PRODUCT</th>
								<th>INVENTORY</th>
								<th>TYPE</th>
								<th>VENDOR</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product1" />
										<label class="form-check-label" for="product1"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-6.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Force Majeure White T Shirt</a>
										</div>
									</div>
								</td>
								<td class="align-middle">83 in stock for 3 variants</td>
								<td class="align-middle">Cotton</td>
								<td class="align-middle">Force Majeure</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product2" />
										<label class="form-check-label" for="product2"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-7.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Eco-friendly fashion, organic cotton, slow fashion polo shirts</a>
										</div>
									</div>
								</td>
								<td class="align-middle">79 in stock for 3 variants</td>
								<td class="align-middle">Cotton</td>
								<td class="align-middle">Polo</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product3" />
										<label class="form-check-label" for="product3"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-8.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Nike Shoes (Red Color)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">19 in stock for 1 variants</td>
								<td class="align-middle">Sports</td>
								<td class="align-middle">Nike</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product4" />
										<label class="form-check-label" for="product4"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-9.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Nike Air Max (Blue Color)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">19 in stock for 1 variants</td>
								<td class="align-middle">Sports</td>
								<td class="align-middle">Nike</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product5" />
										<label class="form-check-label" for="product5"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-10.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Skate Sneaker (Orange Color)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">19 in stock for 1 variants</td>
								<td class="align-middle">Sports</td>
								<td class="align-middle">Skate</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product6" />
										<label class="form-check-label" for="product6"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-11.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Teen Fashion T-shirt (Black)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">30 in stock for 4 variants</td>
								<td class="align-middle">T-Shirt</td>
								<td class="align-middle">Tulsa</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product7" />
										<label class="form-check-label" for="product7"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-12.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Levis Blue Jeans</a>
										</div>
									</div>
								</td>
								<td class="align-middle">49 in stock for 8 variants</td>
								<td class="align-middle">Jeans</td>
								<td class="align-middle">Levis</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product8" />
										<label class="form-check-label" for="product8"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-13.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Boots (White Color)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">19 in stock for 1 variants</td>
								<td class="align-middle">Sports</td>
								<td class="align-middle">Nike</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product9" />
										<label class="form-check-label" for="product9"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-14.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Hiking Boots</a>
										</div>
									</div>
								</td>
								<td class="align-middle">94 in stock for 1 variants</td>
								<td class="align-middle">Sports</td>
								<td class="align-middle">Skate</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product10" />
										<label class="form-check-label" for="product10"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-15.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Dress (Pink)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">23 in stock for 5 variants</td>
								<td class="align-middle">Dress</td>
								<td class="align-middle">Sktoe</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product11" />
										<label class="form-check-label" for="product11"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-17.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Sunglasses (Black)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">15 in stock for 3 variants</td>
								<td class="align-middle">Accessories</td>
								<td class="align-middle">SunCo</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product12" />
										<label class="form-check-label" for="product12"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-18.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Running Shoes (Blue)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">45 in stock for 7 variants</td>
								<td class="align-middle">Footwear</td>
								<td class="align-middle">RunFast</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product13" />
										<label class="form-check-label" for="product13"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-19.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Leather Jacket (Black)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">8 in stock for 2 variants</td>
								<td class="align-middle">Jacket</td>
								<td class="align-middle">LeatherCo</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product14" />
										<label class="form-check-label" for="product14"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-20.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Smartwatch (Silver)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">20 in stock for 4 variants</td>
								<td class="align-middle">Electronics</td>
								<td class="align-middle">TechTime</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product15" />
										<label class="form-check-label" for="product15"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-21.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Handbag (Brown)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">25 in stock for 3 variants</td>
								<td class="align-middle">Bags</td>
								<td class="align-middle">FashionBag</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product16" />
										<label class="form-check-label" for="product16"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-22.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Wireless Earbuds (White)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">30 in stock for 5 variants</td>
								<td class="align-middle">Electronics</td>
								<td class="align-middle">AudioTech</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product17" />
										<label class="form-check-label" for="product17"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-23.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Blender (Red)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">12 in stock for 2 variants</td>
								<td class="align-middle">Home Appliance</td>
								<td class="align-middle">KitchenPro</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product18" />
										<label class="form-check-label" for="product18"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-24.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Gaming Console (Black)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">18 in stock for 3 variants</td>
								<td class="align-middle">Electronics</td>
								<td class="align-middle">GameOn</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product19" />
										<label class="form-check-label" for="product19"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-25.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">Wristwatch (Gold)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">10 in stock for 2 variants</td>
								<td class="align-middle">Accessories</td>
								<td class="align-middle">TimeKeeper</td>
							</tr>
							<tr>
								<td class="w-10px align-middle px-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="product20" />
										<label class="form-check-label" for="product20"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img alt="" class="object-fit-cover w-30px h-30px" src="/assets/img/product/product-26.jpg" />
										<div class="ms-3">
											<a href="/page/product/details" class="text-body text-opacity-75 text-decoration-none">T-shirt (White)</a>
										</div>
									</div>
								</td>
								<td class="align-middle">50 in stock for 6 variants</td>
								<td class="align-middle">Clothing</td>
								<td class="align-middle">Wearable</td>
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
