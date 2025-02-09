@extends('layout.default', [
	'appClass' => 'app-boxed-layout'
])

@section('title', 'Boxed Layout')

@push('js')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
@endpush

@section('content')
  <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">LAYOUT</a></li>
		<li class="breadcrumb-item active">BOXED LAYOUT</li>
	</ul>
	
	<h1 class="page-header">
		Boxed Layout <small>page header description goes here...</small>
	</h1>
	
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
			<p>
				Add the following code for boxed layout page setting.
			</p>
		</div>
		<div class="hljs-container">
			<pre><code class="php" data-url="/assets/data/layout-boxed-layout/code-1.json"></code></pre>
		</div>
	</div>
@endsection
