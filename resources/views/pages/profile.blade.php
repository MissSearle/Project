@extends('layout.default')

@section('title', 'Profile')

@push('css')
  <link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet">
@endpush

@push('js')
  <script src="/assets/plugins/lity/dist/lity.min.js"></script>
@endpush

@section('content')
	<!-- BEGIN profile -->
	<div class="profile">
		<!-- BEGIN profile-sidebar -->
		<div class="profile-sidebar">
			<div class="desktop-sticky-top small">
				<img src="/assets/img/user/profile.jpg" class="object-fit-cover h-200px w-100 d-block mb-4" alt="" />
				
				<!-- profile info -->
				<h4 class="mb-0">John Smith</h4>
				<div class="mb-3 text-theme">@johnsmith</div>
				<p>
					Principal UXUI Design & Brand Architecture for Studio. Creator of SeanTheme.
					Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
				</p>
				<div class="mb-1">
					<i class="fa fa-map-marker-alt fa-fw opacity-5 me-1"></i> New York, NY
				</div>
				<div class="mb-3">
					<i class="fa fa-link fa-fw opacity-5 me-1"></i> seantheme.com/studio-svelte
				</div>
				
				<hr class="my-4" />
				
				<!-- people-to-follow -->
				<div class="fw-semibold mb-3 fs-12px">People to follow</div>
				<div class="d-flex align-items-center mb-3">
					<img src="/assets/img/user/user-1.jpg" alt="" width="30" />
					<div class="flex-fill px-3">
						<div class="fw-semibold text-white text-truncate w-100px">Noor Rowe</div>
						<div class="small text-white text-opacity-50">3.1m followers</div>
					</div>
					<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
				</div>
				<div class="d-flex align-items-center mb-3">
					<img src="/assets/img/user/user-2.jpg" alt="" width="30" />
					<div class="flex-fill px-3">
						<div class="fw-semibold text-white text-truncate w-100px">Abbey Parker</div>
						<div class="small text-white text-opacity-50">302k followers</div>
					</div>
					<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
				</div>
				<div class="d-flex align-items-center mb-3">
					<img src="/assets/img/user/user-3.jpg" alt="" width="30" />
					<div class="flex-fill px-3">
						<div class="fw-semibold text-white text-truncate w-100px">Savannah Nicholson</div>
						<div class="small text-white text-opacity-50">720k followers</div>
					</div>
					<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
				</div>
				<div class="d-flex align-items-center mb-3">
					<img src="/assets/img/user/user-4.jpg" alt="" width="30" />
					<div class="flex-fill px-3">
						<div class="fw-semibold text-white text-truncate w-100px">Kenny Bright</div>
						<div class="small text-white text-opacity-50">1.4m followers</div>
					</div>
					<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
				</div>
				<div class="d-flex align-items-center">
					<img src="/assets/img/user/user-5.jpg" alt="" width="30" />
					<div class="flex-fill px-3">
						<div class="fw-semibold text-white text-truncate w-100px">Cara Poole</div>
						<div class="small text-white text-opacity-50">989k followers</div>
					</div>
					<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
				</div>
			</div>
		</div>
		<!-- END profile-sidebar -->
			
		<!-- BEGIN profile-content -->
		<div class="profile-content">
			<div class="row">
				<div class="col-xl-8">
					<ul class="profile-tab nav nav-tabs nav-tabs-v2 mb-3">
						<li class="nav-item">
							<a href="#profile-post" class="nav-link active" data-bs-toggle="tab">
								<div class="nav-field">Posts</div>
								<div class="nav-value">382</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
								<div class="nav-field">Followers</div>
								<div class="nav-value">1.3m</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#profile-media" class="nav-link" data-bs-toggle="tab">
								<div class="nav-field">Photos</div>
								<div class="nav-value">1,397</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#profile-video" class="nav-link" data-bs-toggle="tab">
								<div class="nav-field">Videos</div>
								<div class="nav-value">120</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
								<div class="nav-field">Following</div>
								<div class="nav-value">2,592</div>
							</a>
						</li>
					</ul>
					<div class="tab-content p-0">
						<!-- BEGIN tab-pane -->
						<div class="tab-pane fade show active" id="profile-post">
							<div class="card mb-3">
								<div class="card-body">
									<!-- post header -->
									<div class="d-flex align-items-center">
										<a href="#"><img src="/assets/img/user/profile.jpg" alt="" width="36" /></a>
										<div class="flex-fill ps-3">
											<div class="fw-semibold"><a href="#" class="text-decoration-none">Clyde Stanley</a> at <a href="#" class="text-decoration-none">South Lake Tahoe, California</a></div>
											<div class="text-body text-opacity-50 small">March 16</div>
										</div>
									</div>
									
									<!-- post content -->
									<div class="my-3">Best vacation of 2024</div>
									<div class="profile-img-list mb-1">
										<div class="profile-img-list-item main"><a href="/assets/img/gallery/gallery-80.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-80.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-81.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-81.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-82.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-82.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-83.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-83.jpg)"></span></a></div>
										<div class="profile-img-list-item with-number">
											<a href="/assets/img/gallery/gallery-84.jpg" data-lity class="profile-img-list-link">
												<span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-84.jpg)"></span>
												<div class="profile-img-number">+12</div>
											</a>
										</div>
									</div>
									
									<!-- post action -->
									<div class="row mb-n3 pb-1">
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:thumb-up-outline" class="fs-16px me-2 my-n1"></iconify-icon> Likes
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:chat-bubble-outline" class="fs-16px me-2 my-n1"></iconify-icon> Comment
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:arrow-top-right" class="fs-16px me-2 my-n1"></iconify-icon> Share
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center">
										<img src="/assets/img/user/user.jpg" alt="" width="30" />
										<div class="flex-fill ps-2">
											<div class="position-relative d-flex align-items-center">
												<input type="text" class="form-control" placeholder="Write a comment..." />
												<div class="position-absolute end-0 text-center">
													<a href="#" class="text-muted me-2"><i class="fa fa-smile"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-camera"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-video"></i></a>
													<a href="#" class="text-muted me-3"><i class="fa fa-paw"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3">
								<div class="card-body">
									<!-- post header -->
									<div class="d-flex align-items-center mb-3">
										<a href="#"><img src="/assets/img/user/profile.jpg" alt="" width="36" /></a>
										<div class="flex-fill ps-3">
											<div class="fw-semibold"><a href="#" class="text-decoration-none">Clyde Stanley</a> is watching <a href="#" class="text-decoration-none">PATAGONIA 8k</a></div>
											<div class="text-body text-opacity-50 small">March 12</div>
										</div>
									</div>
				
									<!-- post content -->
									<div class="mb-3">Nice PATAGONIA footage in 8K</div>
									<div class="ratio ratio-16x9 mb-1">
										<iframe src="https://www.youtube.com/embed/ChOhcHD8fBA?showinfo=0"></iframe>
									</div>
									
									<!-- post action -->
									<div class="row mb-n3 pb-1">
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:thumb-up-outline" class="fs-16px me-2 my-n1"></iconify-icon> Likes
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:chat-bubble-outline" class="fs-16px me-2 my-n1"></iconify-icon> Comment
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:arrow-top-right" class="fs-16px me-2 my-n1"></iconify-icon> Share
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center">
										<img src="/assets/img/user/user.jpg" alt="" width="30" />
										<div class="flex-fill ps-2">
											<div class="position-relative d-flex align-items-center">
												<input type="text" class="form-control" placeholder="Write a comment..." />
												<div class="position-absolute end-0 text-center">
													<a href="#" class="text-muted me-2"><i class="fa fa-smile"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-camera"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-video"></i></a>
													<a href="#" class="text-muted me-3"><i class="fa fa-paw"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3">
								<div class="card-body">
									<!-- post header -->
									<div class="d-flex align-items-center mb-3">
										<a href="#" class="text-decoration-none"><img src="/assets/img/user/profile.jpg" alt="" width="36" /></a>
										<div class="flex-fill ps-3">
											<div class="fw-semibold"><a href="#" class="text-decoration-none">Clyde Stanley</a></div>
											<div class="text-body text-opacity-50 small">March 4</div>
										</div>
									</div>
				
									<!-- post content -->
									<div class="mb-1">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Quisque sodales urna justo, ac ultrices magna consectetur id.<br><br>
										Donec tempor ligula sit amet nunc porta, sed aliquam leo sagittis.<br>
										Ut auctor congue efficitur. Praesent aliquam pulvinar neque, placerat semper massa elementum et.
									</div>
									
									<!-- post action -->
									<div class="row mb-n3 pb-1">
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:thumb-up-outline" class="fs-16px me-2 my-n1"></iconify-icon> Likes
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:chat-bubble-outline" class="fs-16px me-2 my-n1"></iconify-icon> Comment
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:arrow-top-right" class="fs-16px me-2 my-n1"></iconify-icon> Share
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center">
										<img src="/assets/img/user/user.jpg" alt="" width="30" />
										<div class="flex-fill ps-2">
											<div class="position-relative d-flex align-items-center">
												<input type="text" class="form-control" placeholder="Write a comment..." />
												<div class="position-absolute end-0 text-center">
													<a href="#" class="text-muted me-2"><i class="fa fa-smile"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-camera"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-video"></i></a>
													<a href="#" class="text-muted me-3"><i class="fa fa-paw"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3">
								<div class="card-body">
									<!-- post header -->
									<div class="d-flex align-items-center mb-3">
										<a href="#"><img src="/assets/img/user/profile.jpg" alt="" width="36" /></a>
										<div class="flex-fill ps-3">
											<div class="fw-semibold"><a href="#" class="text-decoration-none">Clyde Stanley</a> at <a href="#" class="text-decoration-none">United States</a></div>
											<div class="text-body text-opacity-50 small">May 5</div>
										</div>
									</div>
					
									<!-- post content -->
									<div class="mb-3">Business Trip</div>
									<div class="profile-img-list mb-1">
										<div class="profile-img-list-item main"><a href="/assets/img/gallery/gallery-5.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-91.jpg)"></span></a></div>
										<div class="profile-img-list-item main"><a href="/assets/img/gallery/gallery-6.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-92.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-7.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-93.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-8.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-94.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-9.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-95.jpg)"></span></a></div>
										<div class="profile-img-list-item"><a href="/assets/img/gallery/gallery-10.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(/assets/img/gallery/gallery-96.jpg)"></span></a></div>
									</div>
									
									<!-- post action -->
									<div class="row mb-n3 pb-1">
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:thumb-up-outline" class="fs-16px me-2 my-n1"></iconify-icon> Likes
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:chat-bubble-outline" class="fs-16px me-2 my-n1"></iconify-icon> Comment
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-body text-opacity-75 text-decoration-none d-flex align-items-center justify-content-center p-2">
												<iconify-icon icon="material-symbols-light:arrow-top-right" class="fs-16px me-2 my-n1"></iconify-icon> Share
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center">
										<img src="/assets/img/user/user.jpg" alt="" width="30" />
										<div class="flex-fill ps-2">
											<div class="position-relative d-flex align-items-center">
												<input type="text" class="form-control" placeholder="Write a comment..." />
												<div class="position-absolute end-0 text-center">
													<a href="#" class="text-muted me-2"><i class="fa fa-smile"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-camera"></i></a>
													<a href="#" class="text-muted me-2"><i class="fa fa-video"></i></a>
													<a href="#" class="text-muted me-3"><i class="fa fa-paw"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END tab-pane -->
						
						<!-- BEGIN tab-pane -->
						<div class="tab-pane fade" id="profile-followers">
							<div class="card">
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Ethel Wilkes</a></div>
										<div class="text-white text-opacity-50 small">North Raundspic</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-2.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Shanaya Hansen</a></div>
										<div class="text-white text-opacity-50 small">North Raundspic</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-3.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">James Allman</a></div>
										<div class="text-white text-opacity-50 small">North Raundspic</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-4.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Marie Welsh</a></div>
										<div class="text-white text-opacity-50 small">Crencheporford</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-5.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Lamar Kirkland</a></div>
										<div class="text-white text-opacity-50 small">Prince Ewoodswan</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-6.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Bentley Osborne</a></div>
										<div class="text-white text-opacity-50 small">Red Suvern</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-7.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Ollie Goulding</a></div>
										<div class="text-white text-opacity-50 small">Doa</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-8.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Hiba Calvert</a></div>
										<div class="text-white text-opacity-50 small">Stemunds</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-9.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Rivka Redfern</a></div>
										<div class="text-white text-opacity-50 small">Fallnee</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
								<div class="card-body d-flex align-items-center">
									<img src="/assets/img/user/user-10.jpg" alt="" width="36" />
									<div class="flex-fill px-3">
										<div><a href="#" class="text-white fw-semibold text-decoration-none">Roshni Fernandez</a></div>
										<div class="text-white text-opacity-50 small">Mount Lerdo</div>
									</div>
									<a href="#" class="btn btn-sm btn-outline-theme">Follow</a>
								</div>
							</div>
							<div class="text-center p-3"><a href="#" class="text-body text-decoration-none">Show more <b class="caret"></b></a></div>
						</div>
						<!-- END tab-pane -->
						
						<!-- BEGIN tab-pane -->
						<div class="tab-pane fade" id="profile-media">
							<div class="card">
								<div class="card-header">MAY 20</div>
								<div class="card-body p-0">
									<div class="widget-img-list">
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-1.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-1.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-2.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-2.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-3.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-3.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-4.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-4.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-5.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-5.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-6.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-6.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-7.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-7.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-8.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-8.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-9.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-9.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-10.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-10.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-11.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-11.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-12.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-12.jpg)"></span></a></div>
									</div>
								</div>
								<div class="card-header">MAY 16</div>
								<div class="card-body p-0">
									<div class="widget-img-list">
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-13.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-13.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-14.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-14.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-15.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-15.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-16.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-16.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-17.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-17.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-18.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-18.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-19.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-19.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-20.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-20.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-21.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-21.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-22.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-22.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-23.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-23.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-24.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-24.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-25.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-25.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-26.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-26.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-27.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-27.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-28.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-28.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-29.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-29.jpg)"></span></a></div>
										<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-30.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-30.jpg)"></span></a></div>
									</div>
								</div>
							</div>
							<div class="text-center p-3"><a href="#" class="text-body text-decoration-none">Show more <b class="caret"></b></a></div>
						</div>
						<!-- END tab-pane -->
						
						<!-- BEGIN tab-pane -->
						<div class="tab-pane fade" id="profile-video">
							<div class="card mb-3">
								<div class="card-header">COLLECTIONS #1</div>
								<div class="card-body p-0">
									<div class="row gx-1">
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=N9SlWUo1iBA" data-lity="">
												<img src="https://img.youtube.com/vi/N9SlWUo1iBA/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=0AcncLM3yRY" data-lity="">
												<img src="https://img.youtube.com/vi/0AcncLM3yRY/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=JUh4koZ8Uqw" data-lity="">
												<img src="https://img.youtube.com/vi/JUh4koZ8Uqw/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=juvg1Bai7OA" data-lity="">
												<img src="https://img.youtube.com/vi/juvg1Bai7OA/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=RRmwjIgBAfI" data-lity="">
												<img src="https://img.youtube.com/vi/RRmwjIgBAfI/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=6wewEiRYczw" data-lity="">
												<img src="https://img.youtube.com/vi/6wewEiRYczw/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=4NW1cl-gyIU" data-lity="">
												<img src="https://img.youtube.com/vi/4NW1cl-gyIU/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=KCONWLnm7FQ" data-lity="">
												<img src="https://img.youtube.com/vi/KCONWLnm7FQ/mqdefault.jpg" alt="" class="d-block w-100">
											</a>
										</div>
									</div>
								</div>
								<div class="card-header">COLLECTIONS #2</div>
								<div class="card-body p-0">
									<div class="row gx-1">
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=HTJt2gfG6f4" data-lity="">
												<img src="https://img.youtube.com/vi/HTJt2gfG6f4/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=-SxrHSzCQnc" data-lity="">
												<img src="https://img.youtube.com/vi/-SxrHSzCQnc/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=ZtT3jaTcCsY" data-lity="">
												<img src="https://img.youtube.com/vi/ZtT3jaTcCsY/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=ml1I1mYZHjQ" data-lity="">
												<img src="https://img.youtube.com/vi/ml1I1mYZHjQ/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=lEA7RuDt7YA" data-lity="">
												<img src="https://img.youtube.com/vi/lEA7RuDt7YA/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=AQ79_eDLg4w" data-lity="">
												<img src="https://img.youtube.com/vi/AQ79_eDLg4w/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=W0PrnBQs_W4" data-lity="">
												<img src="https://img.youtube.com/vi/W0PrnBQs_W4/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
										<div class="col-md-4 col-6 mb-1">
											<a href="https://www.youtube.com/watch?v=NcBjx_eyvxc" data-lity="">
												<img src="https://img.youtube.com/vi/NcBjx_eyvxc/mqdefault.jpg" alt="" class="d-block w-100" />
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END tab-pane -->
					</div>
				</div>
				<div class="col-xl-4">
					<div class="desktop-sticky-top d-none d-lg-block">
						<div class="fw-500 px-0 d-flex text-white my-3">
							<span class="flex-fill">Trends for you</span> 
							<a href="#" class="text-white"><i class="fa fa-cog"></i></a>
						</div>
						<div class="card mb-3">
							<div class="card-body px-3 py-2">
								<div class="text-white fw-semibold small">Trending Worldwide</div>
								<div class="text-theme fw-semibold mb-2">#BreakingNews</div>
								<a href="#" class="card overflow-hidden mb-1 text-body text-decoration-none">
									<div class="row gx-0">
										<div class="col-md-8">
											<div class="card-body p-2 px-3">
												<div class="fs-10px text-white text-opacity-50 mb-1">Space</div>
												<div class="h-30px fs-12px overflow-hidden lh-sm mb-1">Distant star explosion is brightest ever seen, study finds</div>
											</div>
										</div>
										<div class="col-md-4 d-flex">
											<div class="h-100 w-100" style="background: url(/assets/img/gallery/news-1.jpg) center; background-size: cover;"></div>
										</div>
									</div>
								</a>
								<div><small class="text-white text-opacity-50">1.89m share</small></div>
							</div>
							<div class="card-body px-3 py-2">
								<div class="text-theme fw-semibold mb-2">#TrollingForGood</div>
								<div class="fs-11px lh-sm">Be a good Troll and spread some positivity on Studio today.</div>
								<div><small class="text-white text-opacity-50"><i class="fa fa-external-link-square-alt"></i> Promoted by Studio Trolls</small></div>
							</div>
							<div class="card-body px-3 py-2">
								<div class="text-white fw-semibold small">Trending Worldwide</div>
								<div class="text-theme fw-semibold mb-2">#CronaOutbreak</div>
								<div class="fs-13px">The coronavirus is affecting 210 countries around the world and 2 ...</div>
								<div><small class="text-white text-opacity-50">49.3m share</small></div>
							</div>
							<div class="card-body px-3 py-2">
								<div class="text-white fw-semibold small">Trending in New York</div>
								<div class="text-theme fw-semibold mb-2">#CoronavirusPandemic</div>
								<a href="#" class="card overflow-hidden mb-1 text-body text-decoration-none">
									<div class="row gx-0">
										<div class="col-md-8">
											<div class="card-body py-2 px-3">
												<div class="fs-10px text-white text-opacity-50 mb-1">Coronavirus</div>
												<div class="h-30px fs-12px overflow-hidden lh-sm mb-1">Coronavirus: US suspends travel from Europe</div>
											</div>
										</div>
										<div class="col-md-4 d-flex">
											<div class="h-100 w-100" style="background: url(/assets/img/gallery/news-2.jpg) center; background-size: cover;"></div>
										</div>
									</div>
								</a>
								<div><small class="text-white text-opacity-50">821k share</small></div>
							</div>
							<div class="card-body px-3 py-2">
								<div class="text-white fw-semibold small">Trending Worldwide</div>
								<div class="text-theme fw-semibold mb-2">#ClimateChangeAction</div>
								<div class="fs-13px">Global movements and initiatives are increasing to address climate change...</div>
								<div><small class="text-white text-opacity-50">35.2m shares</small></div>
							</div>
							<div class="card-body p-0">
								<a href="#" class="list-group-item list-group-action text-center px-3 py-2">
								Show more
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END profile-content -->
	</div>
	<!-- END profile -->
@endsection
