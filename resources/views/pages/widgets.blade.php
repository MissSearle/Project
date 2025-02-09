@extends('layout.default')

@section('title', 'Widgets')

@push('css')
  <link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
@endpush

@push('js')
	<script src="/assets/plugins/lity/dist/lity.min.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
	<script src="/assets/plugins/chart.js/dist/chart.umd.js"></script>
	<script src="/assets/js/demo/widgets.demo.js"></script>
	<script src="/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN container -->
	<div class="container">
		<!-- BEGIN row -->
		<div class="row justify-content-center">
			<!-- BEGIN col-10 -->
			<div class="col-xl-10">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-9 -->
					<div class="col-xl-9">
						<h1 class="page-header">
							Widgets <small>page header description goes here...</small>
						</h1>
						<hr class="mb-4 opacity-3" />
						
						<!-- BEGIN #cardWidget -->
						<div id="cardWidget" class="mb-5">
							<h4>Card widget</h4>
							<p>Card widget is created by using existing Bootstrap <code>.card</code> component with <code>.card-img</code>, <code>.card-img-overlay</code> and <code>.d-flex</code> utilities.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<img src="/assets/img/widget/cover-1.jpg" alt="" class="object-fit-cover h-250px" />
												<div class="card-img-overlay d-flex flex-column bg-black bg-opacity-50">
													<div class="flex-fill">
														<div class="d-flex align-items-center">
															<h6 class="m-0">Youtube</h6>
															<div class="dropdown ms-auto">
																<a href="#" class="text-white text-opacity-75" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a href="//www.youtube.com/watch?v=_AS5nu4u1ss" class="dropdown-item">View</a>
																</div>
															</div>
														</div>
													</div>
													<div>
														<a href="//www.youtube.com/watch?v=_AS5nu4u1ss" data-lity class="text-white text-decoration-none d-flex align-items-center">
															<div class="bg-white bg-opacity-15 text-white w-40px h-40px d-flex align-items-center justify-content-center">
																<iconify-icon icon="material-symbols-light:play-arrow-outline" class="fs-36px"></iconify-icon>
															</div>
															<div class="ms-3 flex-1">
																<div class="fw-semibold">Tesla’s Revolutionary Electric Future</div>
																<div class="small text-white text-opacity-50">
																	<i class="far fa-eye"></i> 1.58m views 
																	<i class="far fa-clock ms-3"></i> 39min ago
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-1.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #cardWidget -->
						
						<!-- BEGIN #listWidget -->
						<div id="listWidget" class="mb-5">
							<h4>List widget</h4>
							<p>List widget is created by using existing Bootstrap <code>.list-group</code> component with <code>.d-flex</code> and droplet utilities css classes.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6">
											<div class="text-body mb-2 fw-semibold">With icon</div>
											<div class="list-group mb-3">
												<div class="list-group-item d-flex align-items-center">
													<div class="w-35px h-35px fs-26px d-flex align-items-center justify-content-center bg-white bg-opacity-15 text-white">
														<iconify-icon icon="material-symbols-light:home-app-logo"></iconify-icon>
													</div>
													<div class="flex-fill px-3 py-1">
														<div class="fw-semibold">Apps Store</div>
														<div class="small text-body text-opacity-50">102 new download</div>
													</div>
													<div class="dropdown">
														<a href="#" data-bs-toggle="dropdown" class="text-body text-opacity-50"><i class="fa fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">View</a>
															<a href="#" class="dropdown-item">Analytics</a>
															<a href="#" class="dropdown-item">Report</a>
														</div>
													</div>
												</div>
												<div class="list-group-item d-flex align-items-center">
													<div class="w-35px h-35px fs-26px d-flex align-items-center justify-content-center bg-white bg-opacity-15 text-white">
														<iconify-icon icon="material-symbols-light:menu-book-outline-sharp"></iconify-icon>
													</div>
													<div class="flex-fill px-3 py-1">
														<div class="fw-semibold">iBooks App</div>
														<div class="small text-body text-opacity-50">32 new download</div>
													</div>
													<div class="dropdown">
														<a href="#" data-bs-toggle="dropdown" class="text-body text-opacity-50"><i class="fa fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">View</a>
															<a href="#" class="dropdown-item">Analytics</a>
															<a href="#" class="dropdown-item">Report</a>
														</div>
													</div>
												</div>
											</div>
											<div class="text-body mb-2 fw-semibold">With image</div>
											<div class="list-group mb-3">
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
													<img src="/assets/img/user/user.jpg" alt="" class="w-35px h-35px object-fit-cover" />
													<div class="flex-fill ps-3">
														<div class="fw-semibold d-flex align-items-center">
															Isaiah Hughes <span class="fa fa-circle text-success fs-4px ms-2"></span>
														</div>
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
													<img src="/assets/img/user/user-2.jpg" alt="" class="w-35px h-35px object-fit-cover" />
													<div class="flex-fill ps-3">
														<div class="fw-semibold d-flex align-items-center">
															Ryan Turner <span class="fa fa-circle text-body text-opacity-50 fs-4px ms-2"></span>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="text-body mb-2 fw-semibold">With settings</div>
											<div class="list-group">
												<div class="list-group-item d-flex align-items-center">
													<div class="flex-fill py-1">
														<div class="fw-semibold">Server auto backup</div>
														<div class="small text-body text-opacity-50">last backup since yesterday</div>
													</div>
													<div>
														<div class="form-check me-n1">
															<input type="checkbox" class="form-check-input" id="customSwitch1" checked>
															<label class="form-check-label" for="customSwitch1"></label>
														</div>
													</div>
												</div>
												<div class="list-group-item d-flex align-items-center">
													<div class="flex-fill py-1">
														<div class="fw-semibold">Analytics enabled</div>
														<div class="small text-body text-opacity-50">3,392 data collected</div>
													</div>
													<div>
														<div class="form-switch me-n1">
															<input type="checkbox" class="form-check-input" id="customSwitch2" >
															<label class="form-check-label" for="customSwitch2"></label>
														</div>
													</div>
												</div>
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
													<div class="flex-fill py-1">
														<div class="fw-semibold">Link with arrow</div>
													</div>
													<div>
														<i class="fa fa-chevron-right"></i>
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
													<div class="flex-fill py-1">
														<div class="fw-semibold">Link with arrow</div>
													</div>
													<div>
														<i class="fa fa-chevron-right"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-2.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #listWidget -->
						
						<!-- BEGIN #statsWidget -->
						<div id="statsWidget" class="mb-5">
							<h4>Stats widget</h4>
							<p>States widget is created by using Bootstrap <code>.card</code> component with <code>.d-flex</code> and <code>background-color</code> utilities.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-body">
													<div class="mb-2 small text-white fw-semibold d-flex align-items-center">
														<div class="flex-fill">TOTAL ORDERS</div>
														<div>
															<a href="#" data-bs-toggle="dropdown" class="text-white text-opacity-50"><i class="bi bi-three-dots-vertical fa-lg"></i></a>
															<div class="dropdown-menu dropdown-menu-end">
																<a href="#" class="dropdown-item">View full report</a>
																<a href="#" class="dropdown-item">Reload</a>
																<a href="#" class="dropdown-item">Export Data</a>
															</div>
														</div>
													</div>
													<div class="row mb-1">
														<div class="col-lg-12 position-relative">
															<h1 class="mb-1 d-flex align-items-center text-theme">
																302
																<span class="bg-white bg-opacity-15 badge fs-9px fw-semibold text-white px-2 py-2 d-flex align-items-center ms-3">
																	<i class="fa fa-exclamation-circle me-2 opacity-5"></i> 
																	3 pending orders
																</span>
															</h1>
															<div class="small"><span class="badge bg-theme bg-opacity-15 text-theme py-2 me-1 fs-9px">+12%</span> compare to last week</div>
															<i class="fab fa-google-wallet display-3 lh-1 text-body text-opacity-20 me-3 position-absolute end-0 top-0"></i>
														</div>
													</div>
													<div class="mt-3 fs-9px fw-semibold text-body text-opacity-50">
														<div>LAST UPDATED ON:</div>
														<div class="text-body text-opacity-75">Feb 3, 4:09:57 AM UTC</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-3.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #statsWidget -->
						
						<!-- BEGIN #chartWidget -->
						<div id="chartWidget" class="mb-5">
							<h4>Chart widget</h4>
							<p>Chart widget created by using Bootstrap <code>.card</code> and <code>.list-group</code> component combined with Chart.js plugins.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-header with-btn">
													WEEKLY ANALYTICS
													<div class="card-header-btn">
														<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
														<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
														<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
													</div>
												</div>
												<div class="card-body text-body text-center">
													<canvas id="barChart" class="h-150px w-100 d-block mb-n1"></canvas>
												</div>
												<div class="card-body d-flex align-items-center">
													<div class="w-35px h-35px bg-theme bg-opacity-15 text-theme d-flex align-items-center justify-content-center fs-30px">
														<iconify-icon icon="material-symbols-light:frame-person-outline-sharp"></iconify-icon>
													</div>
													<div class="flex-fill px-3 py-1">
														<div class="fw-semibold">Total Visitors</div>
														<div class="small text-body text-opacity-50">11 Mar - 18 Mar</div>
													</div>
													<div>
														<div class="fw-semibold h3 m-0">1.3m</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-4.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #chartWidget -->
						
						<!-- BEGIN #userListWidget -->
						<div id="userListWidget" class="mb-5">
							<h4>User list widget</h4>
							<p>User list widget used to display people who participate in a project or a group.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="widget-user-list">
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-1.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-2.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-3.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-4.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-5.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-6.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="/assets/img/user/user-7.jpg" alt="" /></a></div>
										<div class="widget-user-list-item"><a href="#" class="widget-user-list-link bg-white bg-opacity-15 text-white fs-10px fw-semibold">+26</a></div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-5.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #userListWidget -->
						
						<!-- BEGIN #mapWidget -->
						<div id="mapWidget" class="mb-5">
							<h4>Map widget</h4>
							<p>Map widget created with Bootstrap <code>.card</code> and <code>.list-group</code> component twitted with helper css classes.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-header with-btn">
													GOOGLE MAP
													<div class="card-header-btn">
														<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
														<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
														<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
													</div>
												</div>
												<div>
													<div class="ratio ratio-21x9">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.5886473867613!2d-122.41743634015282!3d37.776451983493104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sTwitter+HQ!5e0!3m2!1sen!2s!4v1495935122933" allowfullscreen></iframe>
													</div>
												</div>
												<div class="card-body d-flex align-items-center">
													<div class="w-30px h-30px d-flex text-white text-opacity-50 fs-20px bg-white bg-opacity-15 align-items-center justify-content-center">
														<iconify-icon icon="material-symbols-light:map-outline-sharp"></iconify-icon>
													</div>
													<div class="flex-fill px-3">
														<div class="fw-semibold text-white">via Road I-88E</div>
														<div class="small lh-sm">Fastest route, the usual traffic</div>
													</div>
													<div class="text-nowrap py-1">
														<div class="text-success fw-semibold">3h 54min</div>
														<div class="small lh-sm">393km</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-6.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #mapWidget -->
						
						<!-- BEGIN #chatWidget -->
						<div id="chatWidget" class="mb-5">
							<h4>Chat widget</h4>
							<p>Chat widget created by using Bootstrap <code>.card</code> component with custom created bubble chat ui.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-header with-btn">
													DISCUSSION GROUP
													<div class="card-header-btn">
														<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
														<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
														<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
													</div>
												</div>
												<div class="card-body h-200px" data-scrollbar="true">
													<div class="widget-chat">
														<div class="widget-chat-item">
															<div class="widget-chat-media"><img src="/assets/img/user/user-2.jpg" alt="" /></div>
															<div class="widget-chat-content">
																<div class="widget-chat-name">Roberto Lambert</div>
																<div class="widget-chat-message last">
																	Hey, I'm testing out group messaging.
																</div>
															</div>
														</div>
														<div class="widget-chat-item reply">
															<div class="widget-chat-content">
																<div class="widget-chat-message last">
																	Cool
																</div>
																<div class="widget-chat-status">Read 16:26</div>
															</div>
														</div>
														<div class="widget-chat-date">Today 14:21</div>
														<div class="widget-chat-item">
															<div class="widget-chat-media"><img src="/assets/img/user/user-3.jpg" alt="" /></div>
															<div class="widget-chat-content">
																<div class="widget-chat-name">Rick Powell</div>
																<div class="widget-chat-message last">
																	Awesome! What's new?
																</div>
															</div>
														</div>
														<div class="widget-chat-item">
															<div class="widget-chat-media"><img src="/assets/img/user/user-2.jpg" alt="" /></div>
															<div class="widget-chat-content">
																<div class="widget-chat-name">Roberto Lambert</div>
																<div class="widget-chat-message">
																	Not much, It's got a new look, contact pics show up in group messaging, some other small stuff.
																</div>
																<div class="widget-chat-message last">
																	How's crusty old iOS 6 treating you?
																</div>
															</div>
														</div>
														<div class="widget-chat-item reply">
															<div class="widget-chat-content">
																<div class="widget-chat-message last">
																	Sucks
																</div>
																<div class="widget-chat-status">Read 16:30</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class="input-group">
														<input type="text" class="form-control ps-3" placeholder="Write something..." />
														<button class="btn btn-theme w-70px" type="button">SEND</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-7.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #chatWidget -->
						
						<!-- BEGIN #profileWidget -->
						<div id="profileWidget" class="mb-5">
							<h4>Profile widget</h4>
							<p>Profile widget created by using Bootstrap <code>.card</code> component with Bootstrap grid.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="position-relative overflow-hidden h-160px">
													<img src="/assets/img/widget/cover-2.jpg" class="card-img-top" alt="" />
													<div class="card-img-overlay text-center text-white bg-black bg-opacity-50 backdrop-filter-3px d-flex align-items-center flex-column justify-content-center">
														<div class="my-3">
															<img src="/assets/img/user/user.jpg" alt="" class="h-80px" />
														</div>
														<div>
															<div class="fw-semibold text-white">Maurice Patterson</div>
															<div class="small text-white text-opacity-50">Never give up</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class="row text-center">
														<div class="col-4">
															<div class="fw-semibold fs-5 text-white">415</div>
															<div class="fs-9px">POSTS</div>
														</div>
														<div class="col-4">
															<div class="fw-semibold fs-5 text-white">140k</div>
															<div class="fs-9px">FOLLOWERS</div>
														</div>
														<div class="col-4">
															<div class="fw-semibold fs-5 text-white">697</div>
															<div class="fs-9px">FOLLOWING</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-8.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #profileWidget -->
						
						<!-- BEGIN #productWidget -->
						<div id="productWidget" class="mb-5">
							<h4>Product widget</h4>
							<p>Product widget created by using Bootstrap <code>.list-group</code> component with <code>.d-flex</code> utilities.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="list-group">
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
													<div class="w-45px h-45px d-flex align-items-center justify-content-center bg-white p-2">
														<img src="/assets/img/product/product-1.jpg" alt="" class="mw-100 mh-100" />
													</div>
													<div class="flex-fill px-3">
														<div class="fw-semibold fs-11px">iPhone 14 Pro Max</div>
														<div class="fw-semibold fs-9px text-white text-opacity-50">PHONE</div>
														<div class="d-flex align-items-center fs-9px">
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-outline-sharp" class="text-theme fs-11px me-2"></iconify-icon>
															<div class="pt-1px">(128)</div>
														</div>
													</div>
													<div>
														<span class="badge text-white bg-white bg-opacity-15 fs-10px py-2 px-2 fw-semibold d-block">
															$999.00
														</span>
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
													<div class="w-45px h-45px d-flex align-items-center justify-content-center bg-white p-2">
														<img src="/assets/img/product/product-2.jpg" alt="" class="mw-100 mh-100" />
													</div>
													<div class="flex-fill px-3 py-1">
														<div class="fw-semibold fs-11px">MacBook Pro</div>
														<div class="fw-semibold fs-9px text-white text-opacity-50">LAPTOP</div>
														<div class="d-flex align-items-center fs-9px">
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-outline-sharp" class="text-theme fs-11px me-2"></iconify-icon>
															<div class="pt-1px">(93)</div>
														</div>
													</div>
													<div>
														<span class="badge text-white bg-white bg-opacity-15 fs-10px py-2 px-2 fw-semibold d-block">
															$599.00
														</span>
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
													<div class="w-45px h-45px d-flex align-items-center justify-content-center bg-white p-2">
														<img src="/assets/img/product/product-3.jpg" alt="" class="mw-100 mh-100" />
													</div>
													<div class="flex-fill px-3 py-1">
														<div class="fw-semibold fs-11px">Apple Watch Series 9</div>
														<div class="fw-semibold fs-9px text-white text-opacity-50">WATCH</div>
														<div class="d-flex align-items-center fs-9px">
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-sharp" class="text-theme fs-11px"></iconify-icon>
															<iconify-icon icon="material-symbols-light:kid-star-outline-sharp" class="text-theme fs-11px me-2"></iconify-icon>
															<div class="pt-1px">(41)</div>
														</div>
													</div>
													<div>
														<span class="badge text-white bg-white bg-opacity-15 fs-10px py-2 px-2 fw-semibold d-block">
															$399.00
														</span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-9.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #productWidget -->
						
						<!-- BEGIN #reminderWidget -->
						<div id="reminderWidget" class="mb-5">
							<h4>Reminder widget</h4>
							<p>Reminder widget used to create a simple calendar to notify the user upcoming events or task.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-header">TODAY, NOV 4</div>
												<div class="card-body p-0 widget-reminder">
													<div class="widget-reminder-item">
														<div class="widget-reminder-time">09:00<br>12:00</div>
														<div class="widget-reminder-divider bg-success"></div>
														<div class="widget-reminder-content">
															<div class="fw-semibold text-white">Meeting with HR</div>
															<div> - Conference Room</div>
														</div>
													</div>
													<div class="widget-reminder-item">
														<div class="widget-reminder-time">20:00<br>23:00</div>
														<div class="widget-reminder-divider bg-primary"></div>
														<div class="widget-reminder-content">
															<div class="fw-semibold text-white">Dinner with Richard</div>
															<div> - Tom's Too Restaurant</div>
															<div class="d-flex align-items-center mt-2">
																<div class="flex-fill d-flex align-items-center">
																	<img src="/assets/img/user/user-3.jpg" alt="" width="16" class="me-2" /> Richard Leong
																</div>
																<a href="#" class="ms-auto">Contact</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card-header">TOMORROW, NOV 5</div>
												<div class="card-body p-0 widget-reminder">
													<div class="widget-reminder-item">
														<div class="widget-reminder-time">All day</div>
														<div class="widget-reminder-divider bg-gray-300"></div>
														<div class="widget-reminder-content">
															<div class="fw-semibold text-white">Terry Birthday</div>
														</div>
													</div>
													<div class="widget-reminder-item">
														<div class="widget-reminder-time">08:00</div>
														<div class="widget-reminder-divider bg-gray-300"></div>
														<div class="widget-reminder-content">
															<div class="fw-semibold text-white">Meeting</div>
														</div>
													</div>
													<div class="widget-reminder-item">
														<div class="widget-reminder-time">00:00<br>00:30</div>
														<div class="widget-reminder-divider bg-gray-300"></div>
														<div class="widget-reminder-content">
															<div class="fw-semibold text-white">Server Maintenance</div>
															<div> - Data Centre</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-10.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #reminderWidget -->
						
						<!-- BEGIN #imageListWidget -->
						<div id="imageListWidget" class="mb-5">
							<h4>Image list widget</h4>
							<p>Image list widget created by using Bootstrap <code>.card</code> and <code>.list-group</code> component with <code>.d-flex</code> utilities.</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="card">
												<div class="card-body">
													<a href="#" class="d-flex align-items-center text-body text-decoration-none fs-12px">
														<div class="flex-fill pe-3">
															<div class="fw-semibold">Library (20)</div>
															<div class="fs-10px text-white text-opacity-50">3,192 Image Found</div>
														</div>
														<div>
															<i class="fa fa-chevron-right fa-lg text-body text-opacity-50"></i>
														</div>
													</a>
												</div>
												<div class="widget-img-list mt-1px">
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-1.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-1.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-2.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-2.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-3.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-3.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-4.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-4.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-5.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-5.jpg)"></span></a></div>
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
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-31.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-31.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-32.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-32.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-33.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-33.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-34.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-34.jpg)"></span></a></div>
													<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-35.jpg" data-lity><span class="img" style="background-image: url(/assets/img/gallery/gallery-35.jpg)"></span></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/widgets/code-11.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #imageListWidget -->
					</div>
					<!-- END col-9 -->
					
					<!-- BEGIN col-3 -->
					<div class="col-xl-3">
						<!-- BEGIN #sidebarBootstrap -->
						<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
							<nav class="nav">
								<a class="nav-link" href="#cardWidget" data-toggle="scroll-to">Card widget</a>
								<a class="nav-link" href="#listWidget" data-toggle="scroll-to">List widget</a>
								<a class="nav-link" href="#statsWidget" data-toggle="scroll-to">Stats widget</a>
								<a class="nav-link" href="#chartWidget" data-toggle="scroll-to">Chart widget</a>
								<a class="nav-link" href="#userListWidget" data-toggle="scroll-to">User list widget</a>
								<a class="nav-link" href="#mapWidget" data-toggle="scroll-to">Map widget</a>
								<a class="nav-link" href="#chatWidget" data-toggle="scroll-to">Chat widget</a>
								<a class="nav-link" href="#profileWidget" data-toggle="scroll-to">Profile widget</a>
								<a class="nav-link" href="#productWidget" data-toggle="scroll-to">Product widget</a>
								<a class="nav-link" href="#reminderWidget" data-toggle="scroll-to">Reminder widget</a>
								<a class="nav-link" href="#imageListWidget" data-toggle="scroll-to">Image list widget</a>
							</nav>
						</nav>
						<!-- END #sidebarBootstrap -->
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END col-10 -->
		</div>
		<!-- END row -->
	</div>
	<!-- END container -->
@endsection
