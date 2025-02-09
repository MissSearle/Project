@extends('layout.default')

@section('title', 'Scrum Board')

@push('css')
	<link href="/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="/assets/js/demo/page-scrum-board.demo.js"></script>
@endpush

@section('content')
	<div class="d-flex align-items-center mb-md-3 mb-2">
		<div class="flex-fill">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">PAGES</a></li>
				<li class="breadcrumb-item active">SCRUM BOARD</li>
			</ul>
	
			<h1 class="page-header mb-0">
				Scrum Board
			</h1>
		</div>
		<div class="ms-auto">
			<a href="#modalAddTask" data-bs-toggle="modal" class="btn btn-theme btn-sm py-2 fs-11px w-120px d-flex align-items-center justify-content-center">
				<iconify-icon icon="material-symbols-light:add" class="fs-22px me-1 ms-n3 my-n3"></iconify-icon>
				ADD TASK
			</a>
		</div>
	</div>
	
	<div class="mb-md-4 mb-3 d-md-flex">
		<div class="me-2">
			<a href="#" data-bs-toggle="dropdown" class="text-body text-decoration-none d-flex align-items-center"><iconify-icon icon="material-symbols-light:folder-outline-rounded" class="fs-20px opacity-5 me-2"></iconify-icon> project <b class="caret opacity-5 ms-3"></b></a>
			<div class="dropdown-menu">
				<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw me-1"></i> project/mobile-app-dev</a>
				<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw me-1"></i> project/bootstrap-5</a>
				<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw me-1"></i> project/mvc-version</a>
				<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw me-1"></i> project/ruby-version</a>
			</div>
		</div>
		<div class="ms-md-4 mt-md-0 mt-2 me-2 text-body d-flex align-items-center"><iconify-icon icon="material-symbols-light:cable" class="fs-20px opacity-5 me-2"></iconify-icon> 1,392 pull request</div>
		<div class="ms-md-4 mt-md-0 mt-2 me-2 text-body  d-flex align-items-center"><iconify-icon icon="material-symbols-light:settings-outline" class="fs-20px opacity-5 me-2"></iconify-icon> 52 participant</div>
		<div class="ms-md-4 mt-md-0 mt-2 me-2 text-body  d-flex align-items-center"><iconify-icon icon="material-symbols-light:nest-clock-farsight-analog-outline" class="fs-20px opacity-5 me-2"></iconify-icon> 14 day(s)</div>
	</div>
	
	<!-- BEGIN row -->
	<div class="row gy-3 gx-3">
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN card -->
			<div class="card">
				<!-- BEGIN card-header -->
				<div class="card-header with-btn">
					TO DO (5)
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<!-- END card-header -->
				<!-- BEGIN list-group -->
				<div class="list-group list-group-flush card-body p-0 text-white">
					<!-- BEGIN list-group-item -->
					<div class="list-group-item d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-question-circle opacity-5 fa-fw fa-lg"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">Enable open search</div>
							<div class="small mb-2 opacity-75">#29949 opened yesterday by Terry</div>
							<div class="">
								<span class="badge bg-primary bg-opacity-10 text-primary border border-primary">docs</span>
								<span class="badge bg-success bg-opacity-10 text-success border border-success">feature</span>
							</div>
							<hr class="my-3" />
							<div class="d-flex align-items-center mb-2 small">
								<div class="fw-semibold me-2">
									Task (2/3)
								</div>
								<div class="flex-1">
									<a href="#" class="text-body text-opacity-50" data-bs-toggle="collapse" data-bs-target="#todoBoard">
										<i class="bi bi-plus-square"></i>
									</a>
								</div>
								<div class="progress progress-xs w-100px me-3 h-4px">
									<div class="progress-bar progress-bar-striped" style="width: 66%;"></div>
								</div>
								<div>66%</div>
							</div>
							<div class="form-group mb-0 pb-1 fs-11px text-body text-opacity-75">
								<div class="collapse show" id="todoBoard">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="customCheck1" checked>
										<label class="form-check-label mb-1px ps-1" for="customCheck1">create ui for autocomplete</label>
									</div>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="customCheck2" checked>
										<label class="form-check-label mb-1px ps-1" for="customCheck2">integrate jquery autocomplete with ui</label>
									</div>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="customCheck3">
										<label class="form-check-label mb-1px ps-1" for="customCheck3">backend search return as json data</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END list-group-item -->
					<!-- BEGIN list-group-item -->
					<a href="#" class="list-group-item list-group-item-action d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-question-circle opacity-5 fa-fw fa-lg opacity-5"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">Investigate adding markdownlint</div>
							<div class="small opacity-75 mb-2">#29919 opened 9 days ago by xMediaKron</div>
							<div class="mb-1">
								<span class="badge bg-white bg-opacity-10 text-white text-opacity-75 border border-white">build</span>
								<span class="badge bg-indigo bg-opacity-10 text-indigo border border-indigo">v5</span>
							</div>
						</div>
					</a>
					<!-- END list-group-item -->
					<!-- BEGIN list-group-item -->
					<a href="#" class="list-group-item list-group-item-action d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-question-circle text-muted fa-fw fa-lg opacity-5"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">Add a "Submit a Resource" form</div>
							<div class="small opacity-75 mb-2">#29916 opened 9 days ago by Wasbbok</div>
							<div class="mb-1 d-flex align-items-center">
								<span class="badge bg-success bg-opacity-10 text-success border border-success me-2">enhancement</span>
								<div class="widget-user-list">
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px"><img src="/assets/img/user/user-1.jpg" alt=""></div></div>
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px"><img src="/assets/img/user/user-2.jpg" alt=""></div></div>
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px"><img src="/assets/img/user/user-3.jpg" alt=""></div></div>
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px"><img src="/assets/img/user/user-4.jpg" alt=""></div></div>
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px"><img src="/assets/img/user/user-5.jpg" alt=""></div></div>
									<div class="widget-user-list-item w-20px h-20px"><div class="widget-user-list-link w-20px h-20px bg-white bg-opacity-15 text-white fs-9px fw-semibold">+2</div></div>
								</div>
							</div>
						</div>
					</a>
					<!-- END list-group-item -->
					<!-- BEGIN list-group-item -->
					<a href="#" class="list-group-item list-group-item-action d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-question-circle text-muted fa-fw fa-lg opacity-5"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">Custom control border color missing on focus</div>
							<div class="small opacity-75 mb-2">#29796 opened 29 days ago by mdo</div>
							<div class="mb-1">
								<span class="badge bg-pink bg-opacity-10 text-pink border border-pink">docs</span>
							</div>
						</div>
					</a>
					<!-- END list-group-item -->
					<!-- BEGIN list-group-item -->
					<a href="#" class="list-group-item list-group-item-action d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-question-circle text-muted fa-fw fa-lg opacity-5"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">New design for corporate page</div>
							<div class="small opacity-75 mb-2">#29919 opened 19 days ago by sean</div>
							<div class="mb-1">
								<span class="badge bg-white bg-opacity-10 text-white text-opacity-75 border border-white">design</span>
								<span class="badge bg-primary bg-opacity-10 text-primary border border-primary">v5</span>
							</div>
						</div>
					</a>
					<!-- END list-group-item -->
				</div>
				<!-- END list-group -->
			</div>
			<!-- END card -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN card -->
			<div class="card mb-3">
				<!-- BEGIN card-header -->
				<div class="card-header with-btn">
					IN PROGRESS (2)
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<!-- END card-header -->
				<!-- BEGIN list-group -->
				<div class="list-group list-group-flush card-body p-0">
					<!-- BEGIN list-group-item -->
					<div class="list-group-item d-flex px-3 text-body">
						<div class="me-3">
							<i class="fa fa-tools fa-fw fa-lg opacity-5"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">HTML5 flexbox old browser compatibility</div>
							<div class="small mb-2 opacity-75">#29982 handled by Sean</div>
							<div class="mb-1">
								<span class="badge bg-indigo bg-opacity-10 text-indigo border border-indigo">enhancement</span>
							</div>
							<hr class="my-3" />
							<div class="d-flex align-items-center mb-2 small">
								<div class="fw-semibold me-2">
									Task (1/2)
								</div>
								<div class="flex-1">
									<a href="#" class="text-body text-opacity-50" data-bs-toggle="collapse" data-bs-target="#inProgressBoard">
										<i class="bi bi-plus-square"></i>
									</a>
								</div>
								<div class="progress progress-xs w-100px me-2 h-4px">
									<div class="progress-bar progress-bar-striped bg-warning" style="width: 50%;"></div>
								</div>
								<div>50%</div>
							</div>
							<div class="form-group mb-0 pb-1 fs-11px text-body text-opacity-75">
								<div class="collapse show" id="inProgressBoard">
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck4" checked>
										<label class="form-check-label mb-1px ps-1" for="customCheck4">check all browser compatibility for HTML5 flexbox</label>
									</div>
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck5">
										<label class="form-check-label mb-1px ps-1" for="customCheck5">fallback integration by using other display property</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END list-group-item -->
					<!-- BEGIN list-group-item -->
					<div class="list-group-item d-flex px-3 text-body">
						<div class="me-3">
							<i class="fa fa-bug text-danger fa-fw fa-lg"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-600 text-body">Mobile app autoclose on iOS</div>
							<div class="small mb-2 opacity-75">#29953 handled by Ken</div>
							<div class="mb-1">
								<span class="badge bg-white bg-opacity-10 text-white text-opacity-75 border border-white">issue</span>
								<span class="badge bg-danger bg-opacity-10 text-danger border border-danger">bug</span>
							</div>
							<hr class="my-3" />
							<div class="d-flex align-items-center mb-2 small">
								<div class="fw-semibold me-2">
									Task (0/1)
								</div>
								<div class="flex-1">
									<a href="#" class="text-body text-opacity-50" data-bs-toggle="collapse" data-bs-target="#inProgress2Board">
										<i class="bi bi-plus-square"></i>
									</a>
								</div>
								<div class="progress progress-xs w-100px me-3 h-4px">
									<div class="progress-bar progress-bar-striped bg-danger" style="width: 5%;"></div>
								</div>
								<div>0%</div>
							</div>
							<div class="form-group mb-0 pb-1 fs-11px text-body text-opacity-75">
								<div class="collapse show" id="inProgress2Board">
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck6">
										<label class="form-check-label mb-1px ps-1" for="customCheck6">debug and fix mobile auto close while using GPS issue</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END list-group-item -->
				</div>
				<!-- END list-group -->
			</div>
			<!-- END card -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN card -->
			<div class="card mb-3">
				<!-- BEGIN card-header -->
				<div class="card-header with-btn">
					DONE (1)
					<div class="card-header-btn">
						<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
						<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
						<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
					</div>
				</div>
				<!-- END card-header -->
				<!-- BEGIN list-group -->
				<div class="list-group list-group-flush card-body p-0">
					<!-- BEGIN list-group-item -->
					<div class="list-group-item d-flex px-3 text-body">
						<div class="me-3">
							<i class="far fa-check-circle text-success fa-fw fa-lg"></i> 
						</div>
						<div class="flex-fill">
							<div class="fw-semibold">Angular version missing daterangepicker</div>
							<div class="small mb-2 opacity-75">#29930 closed yesterday by Sean</div>
							<div class="mb-1">
								<span class="badge bg-white bg-opacity-10 text-white text-opacity-75 border border-white">build</span>
								<span class="badge bg-success bg-opacity-10 text-success border border-success">feature</span>
							</div>
							<hr class="my-3" />
							<div class="d-flex align-items-center mb-2 small">
								<div class="fw-semibold me-2">
									Task (3/3)
								</div>
								<div class="flex-1">
									<a href="#" class="text-body text-opacity-50" data-bs-toggle="collapse" data-bs-target="#completedBoard">
										<i class="bi bi-plus-square"></i>
									</a>
								</div>
								<div class="progress progress-xs w-100px me-3 h-4px">
									<div class="progress-bar progress-bar-striped bg-success" style="width: 100%;"></div>
								</div>
								<div>100%</div>
							</div>
							<div class="form-group mb-0 pb-1 fs-11px text-body text-opacity-75">
								<div class="collapse show" id="completedBoard">
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck7" checked>
										<label class="form-check-label pt-1px" for="customCheck7">install angular-daterangepicker</label>
									</div>
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck8" checked>
										<label class="form-check-label pt-1px" for="customCheck8">customize ui with scss</label>
									</div>
									<div class="form-check mb-2px">
										<input type="checkbox" class="form-check-input" id="customCheck9" checked>
										<label class="form-check-label pt-1px" for="customCheck9">backend integration for data filter with daterange input</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END list-group-item -->
				</div>
				<!-- END list-group -->
			</div>
			<!-- END card -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
	</div>
	<!-- END row -->
	
	<!-- BEGIN modal -->
	<div class="modal fade" id="modalAddTask">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Task</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Title</label>
						<input type="text" class="form-control" placeholder="e.g Feature enhancement">
					</div>
					<div class="mb-3">
						<label class="form-label">Status</label>
						<select class="form-select">
							<option value="">To Do</option>
							<option value="">In Progress</option>
							<option value="">Done</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Tags</label>
						<ul id="jquery-tagit" class="tagit form-control">
							<li>enhancement</li>
						</ul>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" rows="10"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-outline-default w-100px" data-bs-dismiss="modal">CANCEL</a>
					<button type="button" class="btn btn-theme w-100px">CREATE</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END modal -->
@endsection
