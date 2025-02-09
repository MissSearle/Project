@extends('layout.default', [
	'appClass' => 'app-sidebar-collapsed'
])

@section('title', 'Minified Sidebar')

@push('js')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
@endpush

@section('content')
  <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">LAYOUT</a></li>
		<li class="breadcrumb-item active">COLLAPSED SIDEBAR</li>
	</ul>
	
	<h1 class="page-header">
		Collpased Sidebar <small>page header description goes here...</small>
	</h1>
	
	<div class="card mb-3">
		<div class="card-header with-btn">
			INSTALLATION
			<div class="card-header-btn">
				<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
				<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
				<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
			</div>
		</div>
		<div class="card-body">
			<p>
				Add the following code for collapsed sidebar page setting.
			</p>
		</div>
		<div class="hljs-container">
			<pre><code class="php" data-url="/assets/data/layout-collapsed-sidebar/code-1.json"></code></pre>
		</div>
	</div>
	<p>
		<a href="#" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app" class="btn btn-theme btn-sm">Toggle Sidebar</a>
	</p>
@endsection
