@extends('layout.default')

@section('title', 'Buttons')

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
							<li class="breadcrumb-item"><a href="#">UI KITS</a></li>
							<li class="breadcrumb-item active">BUTTONS</li>
						</ul>
						
						<h1 class="page-header">
							Buttons <small>page header description goes here...</small>
						</h1>
						
						<hr class="mb-4 opacity-3" />
						
						<!-- BEGIN #classes -->
						<div id="classes" class="mb-5">
							<h4>Classes</h4>
							<p>
								Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.
								Please read the <a href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank">official Bootstrap documentation</a> for the full list of options.
							</p>
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
									<button type="button" class="btn btn-theme">Theme</button>
									<hr />
									<div class="d-flex flex-wrap">
										<button type="button" class="btn btn-default mb-2 me-2">Default</button>
										<button type="button" class="btn btn-secondary mb-2 me-2">Secondary</button>
										<button type="button" class="btn btn-light mb-2 me-2">Light</button>
										<button type="button" class="btn btn-dark mb-2 me-2">Dark</button>
										<button type="button" class="btn btn-info mb-2 me-2">Info</button>
										<button type="button" class="btn btn-primary mb-2 me-2">Primary</button>
										<button type="button" class="btn btn-purple mb-2 me-2">Purple</button>
										<button type="button" class="btn btn-indigo mb-2 me-2">Indigo</button>
										<button type="button" class="btn btn-link mb-2 me-2">Link</button>
										<span class="d-lg-block d-none w-100"></span>
										<button type="button" class="btn btn-danger mb-2 me-2">Danger</button>
										<button type="button" class="btn btn-pink mb-2 me-2">Pink</button>
										<button type="button" class="btn btn-warning mb-2 me-2">Warning</button>
										<button type="button" class="btn btn-yellow mb-2 me-2">Yellow</button>
										<button type="button" class="btn btn-lime mb-2 me-2">Lime</button>
										<button type="button" class="btn btn-success mb-2 me-2">Success</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-1.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #classes -->
						
						<!-- BEGIN #outlineButtons -->
						<div id="outlineButtons" class="mb-5">
							<h4>Outline buttons</h4>
							<p>
								In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.
							</p>
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
									<button type="button" class="btn btn-outline-theme">Theme</button>
									<hr />
									<div class="d-flex flex-wrap">
										<button type="button" class="btn btn-outline-default mb-2 me-2">Default</button>
										<button type="button" class="btn btn-outline-secondary mb-2 me-2">Secondary</button>
										<button type="button" class="btn btn-outline-light mb-2 me-2">Light</button>
										<button type="button" class="btn btn-outline-dark mb-2 me-2">Dark</button>
										<button type="button" class="btn btn-outline-info mb-2 me-2">Info</button>
										<button type="button" class="btn btn-outline-primary mb-2 me-2">Primary</button>
										<button type="button" class="btn btn-outline-purple mb-2 me-2">Purple</button>
										<button type="button" class="btn btn-outline-indigo mb-2 me-2">Indigo</button>
										<button type="button" class="btn btn-outline-link mb-2 me-2">Link</button>
										<span class="d-lg-block d-none w-100"></span>
										<button type="button" class="btn btn-outline-danger mb-2 me-2">Danger</button>
										<button type="button" class="btn btn-outline-pink mb-2 me-2">Pink</button>
										<button type="button" class="btn btn-outline-warning mb-2 me-2">Warning</button>
										<button type="button" class="btn btn-outline-yellow mb-2 me-2">Yellow</button>
										<button type="button" class="btn btn-outline-lime mb-2 me-2">Lime</button>
										<button type="button" class="btn btn-outline-green mb-2 me-2">Green</button>
										<button type="button" class="btn btn-outline-success mb-2 me-2">Success</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-2.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #outlineButtons -->
						
						<!-- BEGIN #sizes -->
						<div id="sizes" class="mb-5">
							<h4>Sizes</h4>
							<p>
								Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.
							</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4">
										<div class="mb-2 small text-white text-opacity-50">
											<b class="fw-bold">LARGE BUTTON</b>
										</div>
										<button type="button" class="btn btn-theme btn-lg me-1">Large button</button>
										<button type="button" class="btn btn-default btn-lg">Large button</button>
									</div>
									<div class="mb-4">
										<div class="mb-2 small text-white text-opacity-50">
											<b class="fw-bold">SMALL BUTTON</b>
										</div>
										<button type="button" class="btn btn-theme btn-sm me-1">Small button</button>
										<button type="button" class="btn btn-default btn-sm">Small button</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-3.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #sizes -->
						
						<!-- BEGIN #states -->
						<div id="states" class="mb-5">
							<h4>States</h4>
							<p>
								Buttons will appear pressed when active or you can still force the same active appearance by adding <code>.active</code> class.
								Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code> element.
							</p>
							<div class="card">
								<div class="card-header with-btn">
									INSTALLATION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4">
										<div class="mb-2 small text-white text-opacity-50">
											<b class="fw-bold">ACTIVE STATE</b>
										</div>
										<a href="#" class="btn btn-theme btn-lg active me-1">Primary link</a>
										<a href="#" class="btn btn-default btn-lg active">Link</a>
									</div>
									<div class="mb-4">
										<div class="mb-2 small text-white text-opacity-50">
											<b class="fw-bold">DISABLED STATE</b>
										</div>
										<button type="button" class="btn btn-lg btn-theme me-1" disabled>Primary button</button>
										<button type="button" class="btn btn-default btn-lg" disabled>Button</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-4.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #states -->
						
						<!-- BEGIN #buttonGroup -->
						<div id="buttonGroup" class="mb-5">
							<h4>Button group</h4>
							<p>
								Group a series of buttons together on a single line with the button group, and super-power them with JavaScript.
							</p>
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
									<div class="btn-group">
										<button type="button" class="btn btn-outline-default">Left</button>
										<button type="button" class="btn btn-outline-default">Middle</button>
										<button type="button" class="btn btn-outline-default">Right</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-5.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #buttonGroup -->
						
						<!-- BEGIN #groupSize -->
						<div id="groupSize" class="mb-5">
							<h4>Group size</h4>
							<p>
								Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.
							</p>
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
									<div class="mb-3">
										<div class="btn-group btn-group-lg">
											<button type="button" class="btn btn-outline-default">Left</button>
											<button type="button" class="btn btn-outline-default">Middle</button>
											<button type="button" class="btn btn-outline-default">Right</button>
										</div>
									</div>
									<div class="mb-3">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-default">Left</button>
											<button type="button" class="btn btn-outline-default">Middle</button>
											<button type="button" class="btn btn-outline-default">Right</button>
										</div>
									</div>
									<div class="mb-0">
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-outline-default">Left</button>
											<button type="button" class="btn btn-outline-default">Middle</button>
											<button type="button" class="btn btn-outline-default">Right</button>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-6.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #groupSize -->
						
						<!-- BEGIN #verticalGroup -->
						<div id="verticalGroup" class="mb-5">
							<h4>Vertical Group</h4>
							<p>
								Make a set of buttons appear vertically stacked rather than horizontally. Split button dropdowns are not supported here.
							</p>
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
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-outline-default">Button</button>
										<button type="button" class="btn btn-outline-default">Button</button>
										<button type="button" class="btn btn-outline-default">Button</button>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-7.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #verticalGroup -->
						
						<!-- BEGIN #buttonToolbar -->
						<div id="buttonToolbar" class="mb-5">
							<h4>Button toolbar</h4>
							<p>
								Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.
							</p>
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
									<div class="btn-toolbar">
										<div class="btn-group me-2">
											<button type="button" class="btn btn-outline-default">1</button>
											<button type="button" class="btn btn-outline-default">2</button>
											<button type="button" class="btn btn-outline-default">3</button>
											<button type="button" class="btn btn-outline-default">4</button>
										</div>
										<div class="btn-group me-2">
											<button type="button" class="btn btn-outline-default">5</button>
											<button type="button" class="btn btn-outline-default">6</button>
											<button type="button" class="btn btn-outline-default">7</button>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-outline-default">8</button>
										</div>
									</div>
								</div>
								<div class="hljs-container">
									<pre><code class="xml" data-url="/assets/data/ui-buttons/code-8.json"></code></pre>
								</div>
							</div>
						</div>
						<!-- END #buttonToolbar -->
					</div>
					<!-- END col-9-->
					<!-- BEGIN col-3 -->
					<div class="col-xl-3">
						<!-- BEGIN #sidebar-bootstrap -->
						<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
							<nav class="nav">
								<a class="nav-link" href="#classes" data-toggle="scroll-to">Classes</a>
								<a class="nav-link" href="#outlineButtons" data-toggle="scroll-to">Outline buttons</a>
								<a class="nav-link" href="#sizes" data-toggle="scroll-to">Sizes</a>
								<a class="nav-link" href="#states" data-toggle="scroll-to">States</a>
								<a class="nav-link" href="#buttonGroup" data-toggle="scroll-to">Button group</a>
								<a class="nav-link" href="#groupSize" data-toggle="scroll-to">Group size</a>
								<a class="nav-link" href="#verticalGroup" data-toggle="scroll-to">Vertical group</a>
								<a class="nav-link" href="#buttonToolbar" data-toggle="scroll-to">Button toolbar</a>
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
