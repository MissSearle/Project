@extends('layout.default')

@section('title', 'Product Details')

@push('css')
	<link href="/assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet">
	<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet">
	<link href="/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/summernote/dist/summernote-lite.min.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="/assets/plugins/blueimp-tmpl/js/tmpl.min.js"></script>
	<script src="/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
	<script src="/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
	<script src="/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
	<script src="/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="/assets/js/demo/page-product-details.demo.js"></script>
@endpush

@section('content')
	<div class="d-flex align-items-center mb-3">
		<div>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:;">PAGES</a></li>
				<li class="breadcrumb-item active">PRODUCT DETAILS</li>
			</ol>
			<h1 class="page-header mb-0">Product Details</h1>
		</div>
	</div>
	
	<div class="row gx-4">
		<div class="col-xl-8">
			<div class="card mb-4">
				<div class="card-header with-btn">
					PRODUCT INFORMATION
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Title <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="title" placeholder="Product name">
					</div>
					<div class="">
						<label class="form-label">Description <span class="text-danger">*</span></label>
						<textarea class="summernote" rows="10"></textarea>
					</div>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					MEDIA
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<form id="fileupload" action="//jquery-file-upload.appspot.com/" name="file_upload_form" method="POST" enctype="multipart/form-data">
					<div class="card-body pb-2">
						<div class="fileupload-buttonbar mb-2">
							<div class="d-block d-lg-flex align-items-center">
								<span class="btn btn-theme fileinput-button me-2 mb-1">
									<iconify-icon icon="material-symbols-light:add" class="fs-20px d-inline-block my-n2 ms-n2"></iconify-icon>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple>
								</span>
								<button type="submit" class="btn btn-secondary me-2 mb-1 start">
									<iconify-icon icon="material-symbols-light:upload-sharp" class="fs-20px d-inline-block my-n2 ms-n2"></iconify-icon>
									<span>Start upload</span>
								</button>
								<button type="reset" class="btn btn-secondary me-2 mb-1 cancel">
									<iconify-icon icon="material-symbols-light:cancel-outline" class="fs-20px d-inline-block my-n2 ms-n2"></iconify-icon>
									<span>Cancel upload</span>
								</button>
								<button type="button" class="btn btn-secondary me-2 mb-1 delete">
									<iconify-icon icon="material-symbols-light:delete-forever-outline-sharp" class="fs-20px d-inline-block my-n2 ms-n2"></iconify-icon>
									<span>Delete</span>
								</button>
								<div class="form-check ms-2 mb-1">
									<input type="checkbox" id="toggle-delete" class="form-check-input toggle">
									<label for="toggle-delete" class="form-check-label">Select Files</label>
								</div>
							</div>
						</div>
						<div id="error-msg"></div>
					</div>
					<table class="table table-card mb-0 fs-13px">
						<thead>
							<tr class="fs-12px">
								<th class="pt-2 pb-2 w-25">Preview</th>
								<th class="pt-2 pb-2 w-25">Filename</th>
								<th class="pt-2 pb-2 w-25">Size</th>
								<th class="pt-2 pb-2 w-25">Action</th>
							</tr>
						</thead>
						<tbody class="files">
							<tr class="empty-row">
								<td colspan="4" class="text-center p-3">
									<div class="text-body text-opacity-25"><iconify-icon icon="material-symbols-light:folder-zip-outline-sharp" class="fa-5x"></iconify-icon></div> 
									No file uploaded
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					VARIANTS
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="alert alert-success py-2">
						Add variants if this product comes in multiple versions, like different sizes or colors.
					</div>
					<div class="row mb-2">
						<div class="col-4">Option name</div>
						<div class="col-8">Option values</div>
					</div>
					<div class="row mb-3 gx-3">
						<div class="col-4"><input type="text" class="form-control" name="variant[0][name]" placeholder="e.g Size" value="Size"></div>
						<div class="col-7">
							<ul id="tag-size" class="tagit form-control">
								<li>XL</li>
								<li>S</li>
							</ul>
						</div>
						<div class="col-1">
							<a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center"><iconify-icon icon="material-symbols-light:close-rounded" class="fs-18px"></iconify-icon></a>
						</div>
					</div>
					<div class="row mb-3 gx-3">
						<div class="col-4"><input type="text" class="form-control" name="variant[1][name]" placeholder="e.g Color" value="Color"></div>
						<div class="col-7">
							<ul id="tag-color" class="tagit form-control">
								<li>Black</li>
							</ul>
						</div>
						<div class="col-1">
							<a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center"><iconify-icon icon="material-symbols-light:close-rounded" class="fs-18px"></iconify-icon></a>
						</div>
					</div>
					<div class="row mb-3 gx-3">
						<div class="col-4"><input type="text" class="form-control" name="variant[1][name]" placeholder="e.g Color" value="Material"></div>
						<div class="col-7">
							<ul id="tag-material" class="tagit form-control">
							</ul>
						</div>
						<div class="col-1">
							<a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center"><iconify-icon icon="material-symbols-light:close-rounded" class="fs-18px"></iconify-icon></a>
						</div>
					</div>
					<p>Modify the variants to be created:</p>
					<table class="table">
						<thead>
							<tr>
								<th class="w-10px"></th>
								<th>Variant</th>
								<th class="w-150px">SKU</th>
								<th class="w-150px">Price</th>
								<th class="w-50px">Quantity</th>
								<th class="w-150px"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle">
									<div class="form-check">
										<input type="checkbox" name="variant[0][enabled]" id="variant_0_enabled" value="1" checked class="form-check-input">
										<label class="form-check-label">&nbsp;</label>
									</div>
								</td>
								<td class="align-middle">
									<span class="text-theme">XL</span>
									<span class="text-muted mx-1"> • </span>
									<span class="text-body">Black</span>
								</td>
								<td><input type="text" class="form-control" value="" placeholder="#SKU000001"></td>
								<td><input type="text" class="form-control" value="" placeholder="0.00"></td>
								<td><input type="text" class="form-control" value="" placeholder="0"></td>
								<td><a href="#" class="btn btn-secondary d-block">Upload Image</a></td>
							</tr>
							<tr>
								<td class="align-middle">
									<div class="form-check">
										<input type="checkbox" name="variant[1][enabled]" id="variant_1_enabled" value="1" class="form-check-input">
										<label class="form-check-label">&nbsp;</label>
									</div>
								</td>
								<td class="align-middle">
									<span class="text-theme">S</span>
									<span class="text-muted mx-1"> • </span>
									<span class="text-body">Black</span>
								</td>
								<td><input type="text" class="form-control" value="" placeholder="#SKU000001"></td>
								<td><input type="text" class="form-control" value="" placeholder="0.00"></td>
								<td><input type="text" class="form-control" value="" placeholder="0"></td>
								<td><a href="#" class="btn btn-secondary d-block">Upload Image</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					WARRANTY
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-lg-0 mb-3">
								<label class="form-label">Warranty Type</label>
								<select class="form-select" name="warranty_type_id">
									<option value="">-- Select Warranty Type --</option>
									<option value="1">No Warranty</option>
									<option value="2">Local Supplier Warranty</option>
									<option value="3">Local Manufacturer Warranty</option>
									<option value="4">International Manufacturer Warranty</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-lg-0 mb-3">
								<label class="form-label">Warranty Period</label>
								<select class="form-select" name="warranty_id">
									<option value="">-- Select Warranty Period --</option>
									<option value="1">1 Month</option>
									<option value="2">3 Months</option>
									<option value="3">6 Months</option>
									<option value="4">1 Year</option>
									<option value="5">2 Years</option>
									<option value="6">3 Years</option>
									<option value="7">4 Years</option>
									<option value="8">5 Years</option>
									<option value="9">6 Years</option>
									<option value="10">7 Years</option>
									<option value="11">8 Years</option>
									<option value="12">9 Years</option>
									<option value="13">10 Years</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					PACKAGE CONTENT
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">What's in the box</label>
						<input type="text" class="form-control" placeholder="e.g T-shirt" name="package_content">
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Weight</label>
								<input type="text" class="form-control" name="weight" placeholder="(kg)">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-label">Parcel Size</label>
								<div class="row">
									<div class="col-4">
										<div class="input-group">
											<span class="input-group-text">W</span>
											<input type="text" class="form-control" placeholder="(cm)" name="width">
										</div>
									</div>
									<div class="col-4">
										<div class="input-group">
											<span class="input-group-text">L</span>
											<input type="text" class="form-control" placeholder="(cm)" name="length">
										</div>
									</div>
									<div class="col-4">
										<div class="input-group">
											<span class="input-group-text">H</span>
											<input type="text" class="form-control" placeholder="(cm)" name="height">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="p-3 bg-white bg-opacity-5 small">
						<div class="form-group mb-0">
							<label class="form-label fw-semibold">Shipping</label>
							<div class="shipping-container">
								<hr class="my-2 mt-0" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">No shipping fee</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingFree" name="shipping_free_enable" checked value="1">
											<label class="form-check-label" for="shippingFree">&nbsp;</label>
										</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">
										AliExpress
									</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingAliExpress" name="shipping_enable" value="AliExpress">
											<label class="form-check-label" for="shippingAliExpress">&nbsp;</label>
										</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">
										SaleHoo
									</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingSaleHoo" name="shipping_enable" value="SaleHoo">
											<label class="form-check-label" for="shippingSaleHoo">&nbsp;</label>
										</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">
										Megagoods
									</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingMegagoods" name="shipping_enable" value="Megagoods">
											<label class="form-check-label" for="shippingMegagoods">&nbsp;</label>
										</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">
										Wholesale2B
									</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingWholesale2B" name="shipping_enable" value="Wholesale2B">
											<label class="form-check-label" for="shippingWholesale2B">&nbsp;</label>
										</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row align-items-center">
									<div class="col-6 pt-1 pb-1">
										Sunrise Wholesale
									</div>
									<div class="col-6 d-flex align-items-center">
										<div class="form-check form-switch ms-auto">
											<input type="checkbox" class="form-check-input" id="shippingSunriseWholesale" name="shipping_enable" value="Sunrise Wholesale">
											<label class="form-check-label" for="shippingSunriseWholesale">&nbsp;</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card mb-4">
				<div class="card-header with-btn">
					SALES CHANNELS (2/3)
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-1 d-flex">
							<div class="me-3"><i class="fa fa-store fa-lg fa-fw text-body text-opacity-50"></i></div>
							<div>Online Store</div>
							<span class="badge bg-white bg-opacity-15 text-white fw-semibold fs-11px ms-auto me-2 d-flex align-items-center">2024-01-05</span>
						</div>
						<div class="w-50px d-flex justify-content-center pt-1"><a href="#" class="text-decoration-none text-theme"><iconify-icon icon="material-symbols-light:calendar-today-outline-sharp" class="fa-2x my-n2"></iconify-icon></a></div>
					</div>
					<hr class="my-3" />
					<div class="d-flex">
						<div class="flex-1 d-flex">
							<div class="me-3"><i class="fab fa-shopify fa-lg fa-fw text-body text-opacity-50"></i></div>
							<div>Shopify</div>
							<span class="badge bg-white bg-opacity-15 text-white fw-semibold fs-11px ms-auto me-2 d-flex align-items-center">2024-01-05</span>
						</div>
						<div class="w-50px d-flex justify-content-center pt-1"><a href="#" class="text-decoration-none text-theme"><iconify-icon icon="material-symbols-light:calendar-today-outline-sharp" class="fa-2x my-n2"></iconify-icon></a></div>
					</div>
					<hr class="my-3" />
					<div class="d-flex">
						<div class="flex-1 d-flex">
							<div class="me-3"><i class="fab fa-amazon fa-lg fa-fw text-body text-opacity-50"></i></div>
							<div>
								<div>Amazon</div>
								<div class="d-flex mt-1 text-body text-opacity-50 small">
									<div><i class="fa fa-circle text-warning fs-6px d-block mt-2"></i></div>
									<div class="flex-1 ps-2">
										<div class="mb-2">
											Amazon is disconnected. Connect your Amazon Seller Central account to continue using this sales channel.
										</div>
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="w-50px d-flex pt-1 justify-content-center"><a href="#" class="text-decoration-none text-body text-opacity-50"><iconify-icon icon="material-symbols-light:cancel-outline" class="fa-2x my-n2"></iconify-icon></a></div>
					</div>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					ORGANIZATION
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Product type</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Product type">
							<button class="btn btn-secondary"><i class="fa fa-search"></i></button>
						</div>
					</div>
					<div class="mb-0">
						<label class="form-label">Vendor</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Apple store supplies">
							<button class="btn btn-secondary"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					COLLECTIONS
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center position-relative mb-2">
						<span class="position-absolute top-0 bottom-0 start-0 d-flex align-items-center px-10px"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control ps-30px" placeholder="Search for collections">
					</div>
					<p class="mb-0 small text-body text-opacity-50">
						<i class="fa fa-question-circle fa-fw"></i> Add this product to a collection so it's easy to find in your store.
					</p>
				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header with-btn">
					TAGS
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<div class="card-body">
					<ul id="tags" class="tagit form-control mb-3">
						<li>Laptop</li>
						<li>Apple</li>
					</ul>
					<div class="small"><a href="#">View all tags</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- BEGIN template-upload -->
	<script id="template-upload" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-upload">
			<td>
				<span class="preview d-flex justify-content-center flex-align-center" style="height: 80px"></span>
			</td>
			<td>
				<p class="name mb-1">{%=file.name%}</p>
				<strong class="error text-danger"></strong>
			</td>
			<td>
				<p class="size mb-2">Processing...</p>
				<div class="progress progress-sm mb-0 h-10px progress-striped active"><div class="progress-bar bg-theme" style="min-width: 2em; width:0%;"></div></div>
			</td>
			<td nowrap>
				{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-theme btn-sm d-block w-100 start" disabled>
						<span>Start</span>
					</button>
				{% } %}
				{% if (!i) { %}
					<button class="btn btn-default btn-sm d-block w-100 cancel mt-2">
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
	</script>
	<!-- END template-upload -->
	
	<!-- BEGIN template-download -->
	<script id="template-download" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-download">
			<td>
				<span class="preview d-flex justify-content-center flex-align-center" style="height: 80px">
					{% if (file.thumbnailUrl) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
					{% } %}
				</span>
			</td>
			<td>
				<p class="name">
					{% if (file.url) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
					{% } else { %}
						<span>{%=file.name%}</span>
					{% } %}
				</p>
				{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
				{% } %}
			</td>
			<td>
				<span class="size">{%=o.formatFileSize(file.size)%}</span>
			</td>
			<td nowrap>
				{% if (file.deleteUrl) { %}
					<button class="btn btn-outline-danger btn-sm btn-block delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
						<span>Delete</span>
					</button>
					<div class="form-check mt-2">
						<input type="checkbox" id="{%=file.deleteUrl%}" name="delete" value="1" class="form-check-input toggle">
						<label for="{%=file.deleteUrl%}" class="form-check-label"></label>
					</div>
				{% } else { %}
					<button class="btn btn-default btn-sm d-block w-100 cancel">
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
	</script>
	<!-- END template-download -->
@endsection
