@extends('layout.default')

@section('title', 'Table Elements')

@push('js')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
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
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">TABLES</a></li>
							<li class="breadcrumb-item active">TABLE ELEMENTS</li>
						</ul>
						
						<h1 class="page-header">
							Table Elements <small>page header description goes here...</small>
						</h1>
						
						<hr class="mb-4 opacity-3" />
						
						<!-- BEGIN #basicTable -->
						<div id="basicTable" class="mb-5">
							<h4>Basic Table</h4>
							<p>Using the most basic table markup, here’s how .table-based tables look in Bootstrap. You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.</p>
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
									<div class="row mb-n3">
										<div class="col-xl-6">
											<div class="small text-white text-opacity-50 mb-3"><b class="fw-bold">DEFAULT TABLE</b></div>
											<table class="table">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-xl-6">
											<div class="small text-white text-opacity-50 mb-3"><b class="fw-bold">DARK TABLE</b></div>
											<table class="table table-dark">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-1.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #basicTable -->
						
						<!-- BEGIN #tableHeadOptions -->
						<div id="tableHeadOptions" class="mb-5">
							<h4>Table head options</h4>
							<p>Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code>.thead-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.</p>
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
									<div class="row mb-n3">
										<div class="col-xl-6">
											<div class="small text-white text-opacity-50 mb-3"><b class="fw-bold">DARK HEADER</b></div>
											<table class="table">
												<thead class="table-dark">
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-xl-6">
											<div class="small text-white text-opacity-50 mb-3"><b class="fw-bold">LIGHT HEADER</b></div>
											<table class="table">
												<thead class="table-light">
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-2.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #tableHeadOptions -->
						
						<!-- BEGIN #stripedRows -->
						<div id="stripedRows" class="mb-5">
							<h4>Striped rows</h4>
							<p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
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
									<table class="table table-striped mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-3.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #stripedRows -->
						
						<!-- BEGIN #borderedTable -->
						<div id="borderedTable" class="mb-5">
							<h4>Bordered table</h4>
							<p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
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
									<table class="table table-bordered mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-4.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #borderedTable -->
						
						<!-- BEGIN #borderlessTable -->
						<div id="borderlessTable" class="mb-5">
							<h4>Borderless table</h4>
							<p></p>
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
									<table class="table table-borderless mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-5.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #borderlessTable -->
						
						<!-- BEGIN #hoverableRows -->
						<div id="hoverableRows" class="mb-5">
							<h4>Hoverable rows</h4>
							<p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
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
									<table class="table table-hover mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-6.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #hoverableRows -->
						
						<!-- BEGIN #smallTable -->
						<div id="smallTable" class="mb-5">
							<h4>Small table</h4>
							<p>Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
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
									<table class="table table-sm mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<td >2</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-7.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #smallTable -->
						
						<!-- BEGIN #contextualClasses -->
						<div id="contextualClasses" class="mb-5">
							<h4>Contextual classes</h4>
							<p>Use contextual classes to color table rows or individual cells.</p>
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
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">Class</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
											</tr>
										</thead>
										<tbody>
											<tr class="table-active">
												<th scope="row">Active</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr>
												<th scope="row">Default</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-primary">
												<th scope="row">Primary</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-secondary">
												<th scope="row">Secondary</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-success">
												<th scope="row">Success</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-danger">
												<th scope="row">Danger</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-warning">
												<th scope="row">Warning</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-info">
												<th scope="row">Info</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-light">
												<th scope="row">Light</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="table-dark">
												<th scope="row">Dark</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="bg-primary text-white">
												<th scope="row">Warning</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="bg-success text-white">
												<th scope="row">Info</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="bg-warning text-white">
												<th scope="row">Light</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="bg-danger text-white">
												<th scope="row">Dark</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr class="bg-info text-white">
												<th scope="row">Dark</th>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-8.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #contextualClasses -->
						
						<!-- BEGIN #captions -->
						<div id="captions" class="mb-5">
							<h4>Captions</h4>
							<p>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
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
									<table class="table mb-0">
										<caption>List of users</caption>
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-9.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #captions -->
						
						<!-- BEGIN #responsiveTables -->
						<div id="responsiveTables" class="mb-5">
							<h4>Responsive tables</h4>
							<p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table</code> with <code>.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code>.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
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
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
													<th scope="col">Heading</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
													<td>Cell</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/table-elements/code-10.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #responsiveTables -->
					</div>
					<!-- END col-9-->
					<!-- BEGIN col-3 -->
					<div class="col-xl-3">
						<!-- BEGIN #sidebar-bootstrap -->
						<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
							<nav class="nav">
								<a class="nav-link" href="#basicTable" data-toggle="scroll-to">Basic table</a>
								<a class="nav-link" href="#tableHeadOptions" data-toggle="scroll-to">Table head options</a>
								<a class="nav-link" href="#stripedRows" data-toggle="scroll-to">Striped rows</a>
								<a class="nav-link" href="#borderedTable" data-toggle="scroll-to">Bordered table</a>
								<a class="nav-link" href="#borderlessTable" data-toggle="scroll-to">Borderless table</a>
								<a class="nav-link" href="#hoverableRows" data-toggle="scroll-to">Hoverable rows</a>
								<a class="nav-link" href="#smallTable" data-toggle="scroll-to">Small table</a>
								<a class="nav-link" href="#contextualClasses" data-toggle="scroll-to">Contextual classes</a>
								<a class="nav-link" href="#captions" data-toggle="scroll-to">Captions</a>
								<a class="nav-link" href="#responsiveTables" data-toggle="scroll-to">Responsive tables</a>
							</nav>
						</nav>
						<!-- END #sidebar-bootstrap -->
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
