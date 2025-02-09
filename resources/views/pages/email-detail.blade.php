@extends('layout.default', [
	'appClass' => 'app-content-full-height',
	'appContentClass' => 'p-0'
])

@section('title', 'Detail')

@section('content')
	<!-- BEGIN mailbox -->
	<div class="mailbox">
		<!-- BEGIN mailbox-toolbar -->
		<div class="mailbox-toolbar">
			<div class="mailbox-toolbar-item"><span class="mailbox-toolbar-text">Mailboxes</span></div>
			<div class="mailbox-toolbar-item"><a href="/email/inbox" class="mailbox-toolbar-link active">Inbox</a></div>
			<div class="mailbox-toolbar-item"><a href="/email/inbox" class="mailbox-toolbar-link">Sent</a></div>
			<div class="mailbox-toolbar-item"><a href="/email/inbox" class="mailbox-toolbar-link">Drafts (1)</a></div>
			<div class="mailbox-toolbar-item"><a href="/email/inbox" class="mailbox-toolbar-link">Junk</a></div>
			<div class="mailbox-toolbar-item"><a href="/email/compose" class="mailbox-toolbar-link text-theme bg-theme bg-opacity-10">New Message <i class="fa fa-pen fs-12px ms-1"></i></a></div>
		</div>
		<!-- END mailbox-toolbar -->
		<!-- BEGIN mailbox-body -->
		<div class="mailbox-body">
			<!-- BEGIN mailbox-sidebar -->
			<div class="mailbox-sidebar d-none d-lg-block">
				<div data-scrollbar="true" data-height="100%">
					<div class="mailbox-list">
						<div class="mailbox-list-item unread has-attachment active">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox1">
									<label class="form-check-label" for="mailCheckbox1"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Apple</span>
										<span class="mailbox-time">1 hour ago</span>
									</div>
									<div class="mailbox-title">Your payment is received</div>
									<div class="mailbox-desc">
										Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item unread has-attachment">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox2">
									<label class="form-check-label" for="mailCheckbox2"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Chance Graham</span>
										<span class="mailbox-time">5 hours ago</span>
									</div>
									<div class="mailbox-title">Trip to South America</div>
									<div class="mailbox-desc">
										Quisque luctus sapien sodales pulvinar porta. In pretium accumsan elit, vitae blandit arcu suscipit eu. Ut tortor libero, gravida ut nisl tincidunt, efficitur laoreet mauris.
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item has-attachment">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox3">
									<label class="form-check-label" for="mailCheckbox3"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Paypal Inc</span>
										<span class="mailbox-time">Aug 11</span>
									</div>
									<div class="mailbox-title">Important information about your order #019244</div>
									<div class="mailbox-desc">
										Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim.
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox4">
									<label class="form-check-label" for="mailCheckbox4"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Fitbit</span>
										<span class="mailbox-time">Aug 09</span>
									</div>
									<div class="mailbox-title">Stylish accessories for your Charge 2</div>
									<div class="mailbox-desc">
										How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. 
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox5">
									<label class="form-check-label" for="mailCheckbox5"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Apple</span>
										<span class="mailbox-time">Aug 09</span>
									</div>
									<div class="mailbox-title">Your invoice from Apple.</div>
									<div class="mailbox-desc">
										Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. 
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox6">
									<label class="form-check-label" for="mailCheckbox6"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Hotels.com</span>
										<span class="mailbox-time">Aug 09</span>
									</div>
									<div class="mailbox-title">[Ends tonight!] 48 Hour Sale - Save up to 50% + save an extra 10%</div>
									<div class="mailbox-desc">
										Phasellus vulputate, ligula ac hendrerit euismod, nunc metus maximus tellus, aliquam finibus justo lorem a augue. 
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox7">
									<label class="form-check-label" for="mailCheckbox7"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Google Calendar</span>
										<span class="mailbox-time">Aug 08</span>
									</div>
									<div class="mailbox-title">Daily schedule on Tuesday, May 9, 2024</div>
									<div class="mailbox-desc">
										Suspendisse potenti. Praesent ac ullamcorper sem. Mauris luctus accumsan felis
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox8">
									<label class="form-check-label" for="mailCheckbox8"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Facebook Blueprint</span>
										<span class="mailbox-time">Aug 08</span>
									</div>
									<div class="mailbox-title">April 2024 – Blueprint Highlights</div>
									<div class="mailbox-desc">
										Phasellus pretium viverra tortor, eu sagittis erat aliquam nec. Nunc et volutpat ligula. Duis viverra posuere enim, ac bibendum massa viverra id.
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox9">
									<label class="form-check-label" for="mailCheckbox9"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Customer Care</span>
										<span class="mailbox-time">Aug 08</span>
									</div>
									<div class="mailbox-title">Re: [Case #1567940] - Re: [Important] Exabytes</div>
									<div class="mailbox-desc">
										Nam imperdiet molestie arcu, et gravida quam lacinia lobortis.
									</div>
								</a>
							</div>
						</div>
						<div class="mailbox-list-item">
							<div class="mailbox-checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="mailCheckbox10">
									<label class="form-check-label" for="mailCheckbox10"></label>
								</div>
							</div>
							<div class="mailbox-message">
								<a href="email_detail.html" class="mailbox-list-item-link">
									<div class="mailbox-sender">
										<span class="mailbox-sender-name">Flight Status</span>
										<span class="mailbox-time">Aug 07</span>
									</div>
									<div class="mailbox-title">[Case#2024022137015743] *FLIGHT RETIMED* **MH2713/15JUL17**</div>
									<div class="mailbox-desc">
										Etiam condimentum orci ut velit suscipit, ut accumsan elit aliquet. Nulla cursus mi at augue vestibulum suscipit. Aenean ut risus euismod, laoreet justo non, convallis quam.
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END mailbox-sidebar -->
			<!-- BEGIN mailbox-content -->
			<div class="mailbox-content">
				<!-- BEGIN scrollbar -->
				<div data-scrollbar="true" data-height="100%">
					<!-- BEGIN mailbox-detail -->
					<div class="mailbox-detail">
						<!-- BEGIN mail-detail-header -->
						<div class="mailbox-detail-header">
							<div class="d-flex align-items-center">
								<a href="#">
									<img src="/assets/img/user/user.jpg" alt="" width="36" />
								</a>
								<div class="flex-fill ms-3">
									<div class="d-flex align-items-center">
										<div class="flex-fill">
											<div class="fw-semibold"><span class="text-white">John Smith</span> &lt;johnsmith@studio.com&gt;</div>
											<div>
												<span>to</span> <a href="#" class="text-decoration-none">sales@seantheme.com</a>, <a href="#" class="text-decoration-none">support@seantheme.com</a>
											</div>
										</div>
										<div class="small text-end text-white text-opacity-50">Nov 27, 2024 <br>at 7.00pm</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END mailbox-detail-header -->
						<!-- BEGIN mailbox-detail-content -->
						<div class="mailbox-detail-content">
							<h5 class="mb-4">Your payment is received</h5>
							<!-- BEGIN mailbox-detail-attachment -->
							<div class="mailbox-detail-attachment">
								<div class="mailbox-attachment">
									<a href="#">
										<div class="document-file">
											<iconify-icon icon="material-symbols-light:article-outline-sharp" class="icon"></iconify-icon>
										</div>
										<div class="document-name">invoice.zip</div>
									</a>
								</div>
								<div class="mailbox-attachment">
									<a href="#">
										<div class="document-file">
											<iconify-icon icon="material-symbols-light:hangout-video-outline-sharp" class="icon"></iconify-icon>
										</div>
										<div class="document-name">video.mp4</div>
									</a>
								</div>
								<div class="mailbox-attachment">
									<a href="#">
										<div class="document-file">
											<img src="/assets/img/gallery/gallery-101.jpg" alt="" class="object-fit-cover h-60px w-100" />
										</div>
										<div class="document-name">image.jpg</div>
									</a>
								</div>
							</div>
							<div class="mb-4"><a href="#" class="btn btn-sm bg-white bg-opacity-15 text-white px-3">DOWNLOAD</a></div>
							<!-- END mailbox-detail-attachment -->
							<!-- BEGIN mailbox-detail-body -->
							<div class="mailbox-detail-body">
								Hi Dear Customer,<br>
								<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel auctor nisi, vel auctor orci. <br>
								Aenean in pretium odio, ut lacinia tellus. Nam sed sem ac enim porttitor vestibulum vitae at erat.<br>
								<br>
								Curabitur auctor non orci a molestie. Nunc non justo quis orci viverra pretium id ut est. <br>
								Nullam vitae dolor id enim consequat fermentum. Ut vel nibh tellus. <br>
								Duis finibus ante et augue fringilla, vitae scelerisque tortor pretium. <br>
								Phasellus quis eros erat. Nam sed justo libero.<br>
								<br>
								Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								Sed tempus dapibus libero ac commodo.<br>
								<br>
								<br>
								Regards,<br>
								Twitter Inc,<br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
								P: (123) 456-7890<br>
							</div>
							<!-- END mailbox-detail-body -->
						</div>
						<!-- END mailbox-detail-content -->
					</div>
					<!-- END mailbox-detail -->
				</div>
				<!-- END scrollbar -->
			</div>
			<!-- END mailbox-content -->
		</div>
		<!-- END mailbox-body -->
	</div>
	<!-- END mailbox -->
@endsection
