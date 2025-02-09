@extends('layout.default', [
])

@section('title', 'Pricing Page')

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:;">PAGES</a></li>
		<li class="breadcrumb-item active">PRICING PAGE</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header mb-4">Pricing Page <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<div class="card">
		<div class="card-body p-0">
			<div class="row gx-0">
				<div class="col-xl-7 position-relative">
					<div class="p-4 p-lg-5">
						<div class="display-5 text-white mb-3">Web Hosting Plan</div>
						<div class="mb-4 font-monospace lh-lg">
							Discover the <b class="text-theme d-inline-flex border-bottom border-1 border-theme">perfect plan</b> for your online presence. In a digital landscape where your website is the gateway to your brand, we offer an array of meticulously crafted hosting plans to suit every ambition and requirement.
						</div>
						<div class="row text-white">
							<div class="col-lg-6">
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:cup-star-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										Robust Performance
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:cpu-bolt-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										Scalability Options
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:shield-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										Security First
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:headphones-round-sound-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										24/7 Support
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:monitor-smartphone-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										User-Friendly Control Panel
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:mouse-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										One-Click Installations
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:gift-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										Value-Added Features
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<iconify-icon class="fs-26px text-theme" icon="solar:dollar-line-duotone"></iconify-icon>
									<div class="flex-1 ps-4 fw-semibold">
										Money-Back Guarantee
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 d-xl-flex align-items-center justify-content-center d-none p-5">
					<img src="/assets/img/pricing/img-1.svg" alt="" height="270" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="row gx-4 py-5">
		<div class="col-xl-3 col-md-6 py-3 py-xl-5">
			<div class="card h-100">
				<div class="card-body p-4 p-lg-5 d-flex flex-column">
					<div class="d-flex align-items-center">
						<div class="flex-1">
							<div class="h6 font-monospace mb-3">Starter Plan</div>
							<div class="display-6 mb-0 text-theme">$5 <small class="h6 fw-light text-body text-opacity-50">/month*</small></div>
						</div>
						<div>
							<iconify-icon class="display-4 text-theme" icon="solar:usb-line-duotone"></iconify-icon>
						</div>
					</div>
					<hr class="my-4" />
					<div class="mb-5 text-body text-opacity-50 flex-1">
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Storage:</span> <b class="text-body fw-semibold">10 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Bandwidth:</span> <b class="text-body fw-semibold">100 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Domain Names:</span> <b class="text-body fw-semibold">1</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">SSL Certificate:</span> <b class="text-body fw-semibold"> Shared</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Email Accounts:</span> <b class="text-body fw-semibold"> 5</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">24/7 Support:</span> <b class="text-body fw-semibold"> Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Backup:</span> <b class="text-body fw-semibold"> Daily</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Uptime Guarantee:</span> <b class="text-body fw-semibold"> 99.9%</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">FTP Access:</span> <b class="text-body fw-semibold"> Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Control Panel:</span> <b class="text-body fw-semibold"> cPanel</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Free Domain:</span> <b class="text-body fw-semibold"> No</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Firewall:</span> <b class="text-body fw-semibold"> No</b></div>
						</div>
					</div>
					<div class="mx-n2">
						<a href="#" class="btn btn-outline-theme btn-lg py-3 fs-13px w-100 font-monospace">Get Started <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 py-3 py-xl-5">
			<div class="card h-100">
				<div class="card-body p-4 p-lg-5 d-flex flex-column">
					<div class="d-flex align-items-center">
						<div class="flex-1">
							<div class="h6 font-monospace mb-3">Booster Plan</div>
							<div class="display-6 mb-0 text-theme">$10 <small class="h5 text-body text-opacity-50">/month*</small></div>
						</div>
						<div>
							<iconify-icon class="display-4 text-theme" icon="solar:map-arrow-up-line-duotone"></iconify-icon>
						</div>
					</div>
					<hr class="my-4" />
					<div class="mb-5 text-body text-opacity-50 flex-1">
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Storage:</span> <b class="text-body fw-semibold">20 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Bandwidth:</span> <b class="text-body fw-semibold">200 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Domain Names:</span> <b class="text-body fw-semibold">2</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">SSL Certificate:</span> <b class="text-body fw-semibold"> Free</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Email Accounts:</span> <b class="text-body fw-semibold"> 10</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">24/7 Support:</span> <b class="text-body fw-semibold"> Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Backup:</span> <b class="text-body fw-semibold"> Daily</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Uptime Guarantee:</span> <b class="text-body fw-semibold"> 99.9%</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">FTP Access:</span> <b class="text-body fw-semibold"> Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Control Panel:</span> <b class="text-body fw-semibold"> cPanel</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Free Domain:</span> <b class="text-body fw-semibold"> No</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Firewall:</span> <b class="text-body fw-semibold"> No</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-times fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">45-Day Money-Back Guarantee</span></div>
						</div>
					</div>
					<div class="mx-n2">
						<a href="#" class="btn btn-outline-theme btn-lg py-3 fs-13px w-100 font-monospace">Get Started <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 py-3 py-xl-0">
			<div class="card h-100">
				<div class="card-body fs-14px p-4 p-lg-5 d-flex flex-column bg-theme bg-opacity-95">
					<div class="d-flex align-items-center">
						<div class="flex-1">
							<div class="h5 font-monospace mb-3 text-theme-color">Premium Plan</div>
							<div class="display-6 mb-0 text-theme-color fw-semibold">$15 <small class="h5 text-theme-color text-opacity-50">/month*</small></div>
						</div>
						<div>
							<iconify-icon class="display-3 text-theme-color" icon="solar:cup-first-line-duotone"></iconify-icon>
						</div>
					</div>
					<hr class="my-4 text-theme-color" />
					<div class="mb-5 text-theme-color text-opacity-50 flex-1">
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Storage:</span> <b class="text-theme-color fw-semibold">50 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Bandwidth:</span> <b class="text-theme-color fw-semibold">500 GB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Domain Names:</span> <b class="text-theme-color fw-semibold">Unlimited</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">SSL Certificate:</span> <b class="text-theme-color fw-semibold">Free</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Email Accounts:</span> <b class="text-theme-color fw-semibold">Unlimited</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">24/7 Support:</span> <b class="text-theme-color fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Backup:</span> <b class="text-theme-color fw-semibold">Daily</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Uptime Guarantee:</span> <b class="text-theme-color fw-semibold">99.9%</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">FTP Access:</span> <b class="text-theme-color fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Control Panel:</span> <b class="text-theme-color fw-semibold">cPanel</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Free Domain:</span> <b class="text-theme-color fw-semibold">No</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Firewall:</span> <b class="text-theme-color fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">E-commerce Support</span></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-theme-color text-opacity-25 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">45-Day Money-Back Guarantee</span></div>
						</div>
					</div>
					<a href="#" class="btn btn-black btn-lg py-3 fs-13px w-100 font-monospace">Get Started <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 py-3 py-xl-5">
			<div class="card h-100">
				<div class="card-body p-4 p-lg-5 d-flex flex-column">
					<div class="d-flex align-items-center">
						<div class="flex-1">
							<div class="h6 font-monospace mb-3">Business Plan</div>
							<div class="display-6 mb-0 text-theme">$99 <small class="h5 text-body text-opacity-50">/month*</small></div>
						</div>
						<div>
							<iconify-icon class="display-4 text-theme" icon="solar:buildings-line-duotone"></iconify-icon>
						</div>
					</div>
					<hr class="my-4" />
					<div class="mb-5 text-body text-opacity-50 flex-1">
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Storage:</span> <b class="text-body fw-semibold">1 TB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Bandwidth:</span> <b class="text-body fw-semibold">20 TB</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Domain Names:</span> <b class="text-body fw-semibold">Unlimited</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">SSL Certificate:</span> <b class="text-body fw-semibold">Free</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Email Accounts:</span> <b class="text-body fw-semibold">Unlimited</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check fa-lg text-body text-opacity-25"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">24/7 Support:</span> <b class="text-body fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Backup:</span> <b class="text-body fw-semibold"> Daily</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Uptime Guarantee:</span> <b class="text-body fw-semibold">99.9%</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">FTP Access:</span> <b class="text-body fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Control Panel:</span> <b class="text-body fw-semibold">cPanel</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Free Domain:</span> <b class="text-body fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">Firewall:</span> <b class="text-body fw-semibold">Yes</b></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">E-commerce Support</span></div>
						</div>
						<div class="d-flex align-items-center mb-2">
							<i class="fa fa-check text-gray-500 fa-lg"></i> 
							<div class="flex-1 ps-4"><span class="font-monospace small">45-Day Money-Back Guarantee</span></div>
						</div>
					</div>
					<div class="mx-n2">
						<a href="#" class="btn btn-outline-theme btn-lg py-3 fs-13px w-100 font-monospace">Get Started <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
