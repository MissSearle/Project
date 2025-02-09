@extends('layout.default', [
	'appHeaderHide' => true,
	'appSidebarHide' => true,
	'appContentHide' => true,
	'appClass' => 'app-full-height app-without-header p-0'
])

@section('title', 'Coming Soon Page')

@push('css')
  <link href="/assets/plugins/kbw-countdown/dist/css/jquery.countdown.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/kbw-countdown/dist/js/jquery.plugin.js"></script>
	<script src="/assets/plugins/kbw-countdown/dist/js/jquery.countdown.js"></script>
	<script src="/assets/js/demo/page-coming-soon.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN coming-soon -->
	<div class="coming-soon">
		<div class="flex-1">
			<!-- BEGIN coming-soon-timer -->
			<div class="coming-soon-timer my-3">
				<div id="timer"></div>
			</div>
			<!-- END coming-soon-timer -->
			<!-- BEGIN coming-soon-content -->
			<div class="coming-soon-content">
				<div class="flex-1 mb-5">
					<h2 class="mb-3">We're coming soon!</h2>
					<p class="mb-5">We are working very hard on the new version of our site.<br /> It will bring a lot of new features. Stay tuned!</p>
					<div class="input-group mb-2 w-300px mx-auto">
						<input type="text" class="form-control" placeholder="Email Address" />
						<button type="submit" class="btn btn-theme fw-semibold">Subscribe</button>
					</div>
					<div class="small text-body text-opacity-50">* Subscribe and get notified for latest news</div>
				</div>
			</div>
			<!-- END coming-soon-content -->
			<div class="text-center small mt-5 pt-1 mb-n5">
				&copy; 2024 SeanTheme Right Reserved
			</div>
		</div>
	</div>
	<!-- END coming-soon -->
@endsection
