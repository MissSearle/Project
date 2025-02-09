@extends('layout.default', [
	'appClass' => 'app-content-full-height',
	'appContentClass' => 'p-0'
])

@section('title', 'Full Height')

@push('js')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
@endpush

@section('content')
	<div class="app-content-inner-padding" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">LAYOUT</a></li>
			<li class="breadcrumb-item active">FULL HEIGHT</li>
		</ul>
		
		<h1 class="page-header">
			Full Height <small>page header description goes here...</small>
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
				Add the following code for full height page setting.
				</p>
			</div>
			<div class="hljs-container">
				<pre><code class="php" data-url="/assets/data/layout-full-height/code-1.json"></code></pre>
			</div>
		</div>
		
		<div>
			Content Area with scrollbar. Try to scroll down. <i class="fa fa-arrow-down text-theme"></i>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			You got the bottom
		</div>
	</div>
@endsection
