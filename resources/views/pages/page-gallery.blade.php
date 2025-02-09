@extends('layout.default', [
	'appClass' => 'app-content-full-height app-sidebar-collapsed',
	'appContentClass' => 'p-0',
	'htmlAttribute' => ' itemscope itemtype="http://schema.org/WebPage"'
])

@section('title', 'Gallery')

@push('css')
	<link href="/assets/plugins/photoswipe/dist/photoswipe.css" rel="stylesheet" />
@endpush

@push('js')
  <script type="module" src="/assets/js/demo/page-gallery.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN d-flex -->
	<div class="d-block d-md-flex align-items-stretch">
		<!-- BEGIN gallery-menu-container -->
		<div class="gallery-menu-container">
			<!-- BEGIN gallery-menu -->
			<div class="gallery-menu text-uppercase">
				<div class="gallery-menu-header">Main</div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link active"><iconify-icon icon="material-symbols-light:broken-image-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Photos</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:ecg-heart-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Memories</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:location-city" class="fs-18px my-n1 me-3"></iconify-icon> City Life</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:nights-stay-outline" class="fs-18px my-n1 me-3"></iconify-icon> Night Shots</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:airplanemode-active" class="fs-18px my-n1 me-3"></iconify-icon> Holiday Moments</a></div>
				<div class="gallery-menu-header">Shared</div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:cloud-outline" class="fs-18px my-n1 me-3"></iconify-icon> Activity</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:document-scanner-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Documents</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:download-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Downloads</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:edit-square-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Edited Photos</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:raw-on-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Raw Photos</a></div>
				<div class="gallery-menu-header">Albums</div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:camera-outline" class="fs-18px my-n1 me-3"></iconify-icon> All Photos</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:account-circle-outline" class="fs-18px my-n1 me-3"></iconify-icon> People</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:location-on-outline" class="fs-18px my-n1 me-3"></iconify-icon> Places</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:camera-video-outline" class="fs-18px my-n1 me-3"></iconify-icon> Selfies</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:vrpano-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Panaromas</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:family-star-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Depth Effect</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:fit-screen-outline" class="fs-18px my-n1 me-3"></iconify-icon> Screenshots</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:video-library-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Video Clips</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:podcasts" class="fs-18px my-n1 me-3"></iconify-icon> Live Photos</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:stay-current-portrait" class="fs-18px my-n1 me-3"></iconify-icon> Portraits</a></div>
				<div class="gallery-menu-item"><a href="#" class="gallery-menu-link"><iconify-icon icon="material-symbols-light:timer-5-outline-sharp" class="fs-18px my-n1 me-3"></iconify-icon> Timelapses</a></div>
			</div>
			<!-- END gallery-menu -->
		</div>
		<!-- END gallery-menu-container -->
		<!-- BEGIN gallery-content-container -->
		<div class="gallery-content-container">
			<!-- BEGIN gallery-content -->
			<div class="gallery-content">
				<!-- BEGIN gallery -->
				<div class="gallery">
					<!-- BEGIN gallery-header -->
					<div class="d-flex align-items-center mb-3">
						<!-- BEGIN gallery-title -->
						<div class="gallery-title mb-0">
							<a href="#">
								Wedding <i class="fa fa-chevron-right"></i> 
								<small>May 11, 2024</small>
							</a>
						</div>
						<!-- END gallery-title -->
						
						<!-- BEGIN btn-group -->
						<div class="ms-auto btn-group">
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-play"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-plus"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload"></i></a>
						</div>
						<!-- END btn-group -->
					</div>
					<!-- END gallery-header -->
					
					<!-- BEGIN gallery-image -->
					<div class="gallery-image">
						<ul class="gallery-image-list">
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-42.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-42.jpg" alt="Wedding Image 1" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-43.jpg" data-pswp-width="752" data-pswp-height="442"><img src="/assets/img/gallery/gallery-43.jpg" alt="Wedding Image 2" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-44.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-44.jpg" alt="Wedding Image 3" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-45.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-45.jpg" alt="Wedding Image 4" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-46.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-46.jpg" alt="Wedding Image 5" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-47.jpg" data-pswp-width="752" data-pswp-height="532"><img src="/assets/img/gallery/gallery-47.jpg" alt="Wedding Image 6" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-48.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-48.jpg" alt="Wedding Image 7" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-49.jpg" data-pswp-width="752" data-pswp-height="1130"><img src="/assets/img/gallery/gallery-49.jpg" alt="Wedding Image 8" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-50.jpg" data-pswp-width="752" data-pswp-height="1128"><img src="/assets/img/gallery/gallery-50.jpg" alt="Wedding Image 9" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-51.jpg" data-pswp-width="752" data-pswp-height="866"><img src="/assets/img/gallery/gallery-51.jpg" alt="Wedding Image 10" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-52.jpg" data-pswp-width="752" data-pswp-height="752"><img src="/assets/img/gallery/gallery-52.jpg" alt="Wedding Image 11" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-53.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-53.jpg" alt="Wedding Image 12" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-54.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-54.jpg" alt="Wedding Image 13" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-55.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-55.jpg" alt="Wedding Image 14" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-56.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-56.jpg" alt="Wedding Image 15" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-57.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-57.jpg" alt="Wedding Image 16" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-58.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-58.jpg" alt="Wedding Image 17" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-59.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-59.jpg" alt="Wedding Image 18" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-60.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-60.jpg" alt="Wedding Image 19" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-61.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-61.jpg" alt="Wedding Image 20" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-62.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-62.jpg" alt="Wedding Image 21" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-63.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-63.jpg" alt="Wedding Image 22" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-64.jpg" data-pswp-width="768" data-pswp-height="513"><img src="/assets/img/gallery/gallery-64.jpg" alt="Wedding Image 23" class="object-fit-cover" /></a></li>
						</ul>
					</div>
					<!-- END gallery-image -->
				</div>
				<!-- END gallery -->
				<!-- BEGIN gallery -->
				<div class="gallery">
					<!-- BEGIN gallery-header -->
					<div class="d-flex align-items-center mb-3">
						<!-- BEGIN gallery-title -->
						<div class="gallery-title mb-0">
							<a href="#">
								Collections #339 <i class="fa fa-chevron-right"></i> 
								<small>May 8, 2024</small>
							</a>
						</div>
						<!-- END gallery-title -->
						
						<!-- BEGIN btn-group -->
						<div class="ms-auto btn-group">
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-play"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-plus"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload"></i></a>
						</div>
						<!-- END btn-group -->
					</div>
					<!-- END gallery-header -->
					
					<!-- BEGIN gallery-image -->
					<div class="gallery-image">
						<ul class="gallery-image-list">
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-21.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-21.jpg" alt="Collection #145 Image 1" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-22.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-22.jpg" alt="Collection #145 Image 2" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-23.jpg" data-pswp-width="752" data-pswp-height="486"><img src="/assets/img/gallery/gallery-23.jpg" alt="Collection #145 Image 3" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-24.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-24.jpg" alt="Collection #145 Image 4" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-25.jpg" data-pswp-width="752" data-pswp-height="1128"><img src="/assets/img/gallery/gallery-25.jpg" alt="Collection #145 Image 5" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-26.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-26.jpg" alt="Collection #145 Image 6" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-27.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-27.jpg" alt="Collection #145 Image 7" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-28.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-28.jpg" alt="Collection #145 Image 8" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-29.jpg" data-pswp-width="752" data-pswp-height="1128"><img src="/assets/img/gallery/gallery-29.jpg" alt="Collection #145 Image 9" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-30.jpg" data-pswp-width="752" data-pswp-height="940"><img src="/assets/img/gallery/gallery-30.jpg" alt="Collection #145 Image 10" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-65.jpg" data-pswp-width="508" data-pswp-height="768"><img src="/assets/img/gallery/gallery-65.jpg" alt="Collection #145 Image 11" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-66.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-66.jpg" alt="Collection #145 Image 12" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-67.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-67.jpg" alt="Collection #145 Image 13" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-68.jpg" data-pswp-width="768" data-pswp-height="489"><img src="/assets/img/gallery/gallery-68.jpg" alt="Collection #145 Image 14" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-69.jpg" data-pswp-width="768" data-pswp-height="613"><img src="/assets/img/gallery/gallery-69.jpg" alt="Collection #145 Image 15" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-70.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-70.jpg" alt="Collection #145 Image 16" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-71.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-71.jpg" alt="Collection #145 Image 17" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-72.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-72.jpg" alt="Collection #145 Image 18" class="object-fit-cover" /></a></li>
						</ul>
					</div>
					<!-- END gallery-image -->
				</div>
				<!-- END gallery -->
				<!-- BEGIN gallery -->
				<div class="gallery">
					<!-- BEGIN gallery-header -->
					<div class="d-flex align-items-center mb-3">
						<!-- BEGIN gallery-title -->
						<div class="gallery-title mb-0">
							<a href="#">
								Collections #144 <i class="fa fa-chevron-right"></i> 
								<small>May 4, 2024</small>
							</a>
						</div>
						<!-- END gallery-title -->
						
						<!-- BEGIN btn-group -->
						<div class="ms-auto btn-group">
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-play"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-plus"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload"></i></a>
						</div>
						<!-- END btn-group -->
					</div>
					<!-- END gallery-header -->
					
					<!-- BEGIN gallery-image -->
					<div class="gallery-image">
						<ul class="gallery-image-list">
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-31.jpg" data-pswp-width="752" data-pswp-height="752"><img src="/assets/img/gallery/gallery-31.jpg" alt="Collection #144 Image 1" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-32.jpg" data-pswp-width="752" data-pswp-height="1128"><img src="/assets/img/gallery/gallery-32.jpg" alt="Collection #144 Image 2" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-33.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-33.jpg" alt="Collection #144 Image 3" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-34.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-34.jpg" alt="Collection #144 Image 4" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-35.jpg" data-pswp-width="752" data-pswp-height="1136"><img src="/assets/img/gallery/gallery-35.jpg" alt="Collection #144 Image 5" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-36.jpg" data-pswp-width="752" data-pswp-height="1128"><img src="/assets/img/gallery/gallery-36.jpg" alt="Collection #144 Image 6" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-37.jpg" data-pswp-width="752" data-pswp-height="480"><img src="/assets/img/gallery/gallery-37.jpg" alt="Collection #144 Image 7" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-38.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-38.jpg" alt="Collection #144 Image 8" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-39.jpg" data-pswp-width="752" data-pswp-height="422"><img src="/assets/img/gallery/gallery-39.jpg" alt="Collection #144 Image 9" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-40.jpg" data-pswp-width="752" data-pswp-height="464"><img src="/assets/img/gallery/gallery-40.jpg" alt="Collection #144 Image 10" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-41.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-41.jpg" alt="Collection #144 Image 11" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-73.jpg" data-pswp-width="768" data-pswp-height="558"><img src="/assets/img/gallery/gallery-73.jpg" alt="Collection #144 Image 12" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-74.jpg" data-pswp-width="614" data-pswp-height="768"><img src="/assets/img/gallery/gallery-74.jpg" alt="Collection #144 Image 13" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-75.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-75.jpg" alt="Collection #144 Image 14" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-76.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-76.jpg" alt="Collection #144 Image 15" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-77.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-77.jpg" alt="Collection #144 Image 16" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-78.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-78.jpg" alt="Collection #144 Image 17" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-79.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-79.jpg" alt="Collection #144 Image 18" class="object-fit-cover" /></a></li>
						</ul>
					</div>
					<!-- END gallery-image -->
				</div>
				<!-- END gallery -->
				<!-- BEGIN gallery -->
				<div class="gallery">
					<!-- BEGIN gallery-header -->
					<div class="d-flex align-items-center mb-3">
						<!-- BEGIN gallery-title -->
						<div class="gallery-title mb-0">
							<a href="#">
								Collection #143 <i class="fa fa-chevron-right"></i> 
								<small>May 3, 2024</small>
							</a>
						</div>
						<!-- END gallery-title -->
						
						<!-- BEGIN btn-group -->
						<div class="ms-auto btn-group">
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-play"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-plus"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload"></i></a>
						</div>
						<!-- END btn-group -->
					</div>
					<!-- END gallery-header -->
					
					<!-- BEGIN gallery-image -->
					<div class="gallery-image">
						<ul class="gallery-image-list">
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-1.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-1.jpg" alt="Collection #143 Image 1" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-2.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-2.jpg" alt="Collection #143 Image 2" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-3.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-3.jpg" alt="Collection #143 Image 3" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-4.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-4.jpg" alt="Collection #143 Image 4" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-80.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-80.jpg" alt="Collection #143 Image 5" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-81.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-81.jpg" alt="Collection #143 Image 6" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-82.jpg" data-pswp-width="614" data-pswp-height="768"><img src="/assets/img/gallery/gallery-82.jpg" alt="Collection #143 Image 7" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-83.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-83.jpg" alt="Collection #143 Image 8" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-84.jpg" data-pswp-width="432" data-pswp-height="768"><img src="/assets/img/gallery/gallery-84.jpg" alt="Collection #143 Image 9" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-85.jpg" data-pswp-width="768" data-pswp-height="576"><img src="/assets/img/gallery/gallery-85.jpg" alt="Collection #143 Image 10" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-86.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-86.jpg" alt="Collection #143 Image 11" class="object-fit-cover" /></a></li>
						</ul>
					</div>
					<!-- END gallery-image -->
				</div>
				<!-- END gallery -->
				<!-- BEGIN gallery -->
				<div class="gallery">
					<!-- BEGIN gallery-header -->
					<div class="d-flex align-items-center mb-3">
						<!-- BEGIN gallery-title -->
						<div class="gallery-title mb-0">
							<a href="#">
								Random <i class="fa fa-chevron-right"></i> 
								<small>May 1, 2024</small>
							</a>
						</div>
						<!-- END gallery-title -->
						
						<!-- BEGIN btn-group -->
						<div class="ms-auto btn-group">
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-play"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-plus"></i></a>
							<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload"></i></a>
						</div>
						<!-- END btn-group -->
					</div>
					<!-- END gallery-header -->
					
					<!-- BEGIN gallery-image -->
					<div class="gallery-image">
						<ul class="gallery-image-list">
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-5.jpg" data-pswp-width="752" data-pswp-height="500"><img src="/assets/img/gallery/gallery-5.jpg" alt="Random Image 1" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-6.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-6.jpg" alt="Random Image 2" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-7.jpg" data-pswp-width="752" data-pswp-height="476"><img src="/assets/img/gallery/gallery-7.jpg" alt="Random Image 3" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-8.jpg" data-pswp-width="752" data-pswp-height="472"><img src="/assets/img/gallery/gallery-8.jpg" alt="Random Image 4" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-9.jpg" data-pswp-width="752" data-pswp-height="504"><img src="/assets/img/gallery/gallery-9.jpg" alt="Random Image 5" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-10.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-10.jpg" alt="Random Image 6" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-11.jpg" data-pswp-width="752" data-pswp-height="564"><img src="/assets/img/gallery/gallery-11.jpg" alt="Random Image 7" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-12.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-12.jpg" alt="Random Image 8" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-13.jpg" data-pswp-width="752" data-pswp-height="502"><img src="/assets/img/gallery/gallery-13.jpg" alt="Random Image 9" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-87.jpg" data-pswp-width="614" data-pswp-height="768"><img src="/assets/img/gallery/gallery-87.jpg" alt="Random Image 10" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-88.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-88.jpg" alt="Random Image 11" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-89.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-89.jpg" alt="Random Image 12" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-90.jpg" data-pswp-width="576" data-pswp-height="768"><img src="/assets/img/gallery/gallery-90.jpg" alt="Random Image 13" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-91.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-91.jpg" alt="Random Image 14" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-92.jpg" data-pswp-width="768" data-pswp-height="579"><img src="/assets/img/gallery/gallery-92.jpg" alt="Random Image 15" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-93.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-93.jpg" alt="Random Image 16" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-94.jpg" data-pswp-width="576" data-pswp-height="768"><img src="/assets/img/gallery/gallery-94.jpg" alt="Random Image 17" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-95.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-95.jpg" alt="Random Image 18" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-96.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-96.jpg" alt="Random Image 19" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-97.jpg" data-pswp-width="468" data-pswp-height="768"><img src="/assets/img/gallery/gallery-97.jpg" alt="Random Image 20" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-98.jpg" data-pswp-width="512" data-pswp-height="768"><img src="/assets/img/gallery/gallery-98.jpg" alt="Random Image 21" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-99.jpg" data-pswp-width="576" data-pswp-height="768"><img src="/assets/img/gallery/gallery-99.jpg" alt="Random Image 22" class="object-fit-cover" /></a></li>
							<li><a href="javascript:;" data-pswp-src="/assets/img/gallery/gallery-100.jpg" data-pswp-width="768" data-pswp-height="512"><img src="/assets/img/gallery/gallery-100.jpg" alt="Random Image 23" class="object-fit-cover" /></a></li>
						</ul>
					</div>
					<!-- END gallery-image -->
				</div>
				<!-- END gallery -->
			</div>
			<!-- END gallery-content -->
		</div>
		<!-- END gallery-content-container -->
	</div>
	<!-- END d-flex -->
@endsection
