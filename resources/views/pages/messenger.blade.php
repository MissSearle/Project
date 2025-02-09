@extends('layout.default', [
    'appClass' => 'app-content-full-height',
    'appContentClass' => 'd-flex flex-column'
])

@section('title', 'Messenger')

@push('js')
	<script src="/assets/js/demo/page-messenger.demo.js"></script>
@endpush

@section('content')
	<h1 class="page-header">Messenger <small>header small text goes here...</small></h1>
			
	<div class="card flex-1 m-0 d-flex flex-column overflow-hidden">
		<div class="card-header with-btn">
			MESSENGER
			<div class="card-header-btn">
				<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
				<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
				<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
			</div>
		</div>
		<div class="card-body messenger p-0 flex-1 overflow-hidden">
			<div class="messenger-sidebar">
				<div class="messenger-sidebar-header">
					<div class="position-relative w-100">
						<button type="submit" class="btn position-absolute top-0 text-body"><i class="fa fa-search"></i></button>
						<input type="text" class="form-control ps-5" placeholder="Search Messenger">
					</div>
				</div>
				<div class="messenger-sidebar-body">
					<div data-scrollbar="true" data-height="100%">
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link active">
								<div class="messenger-media">
									<div class="messenger-media-icon bg-white bg-opacity-15 text-white fs-24px">
										<iconify-icon icon="material-symbols-light:robot-2-outline"></iconify-icon>
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Mobile App Development Group 10</div>
									<div class="messenger-text">Roberto says Hey Gabe, can you forward me the meeting notes?</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">13:02</div>
									<div class="messenger-badge">2</div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-2.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Roberto</div>
									<div class="messenger-text">Say hello to Alice</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">14:59</div>
									<div class="messenger-badge">1</div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-3.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Graduation Party</div>
									<div class="messenger-text"><b>Dan:</b> Wow, almost 2,500 members!</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">14:42</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-4.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Karen Stanford</div>
									<div class="messenger-text">Table for four, 2 PM. Be there.</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">14:40</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-5.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Wave Hunters</div>
									<div class="messenger-text"><b>Monika Parker:</b> Poll</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">12:45</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-6.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Little Sister</div>
									<div class="messenger-text">I got a job at NASA!</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">12:45</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-7.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Monika Parker</div>
									<div class="messenger-text">I don't remember anything.</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time"><i class="fa fa-check"></i> 10:00</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-8.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Cat Videos</div>
									<div class="messenger-text"><b class="fw-bold"><i class="fa fa-circle-play"></i> Video</b></div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">09:00</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-9.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Garrick Banks</div>
									<div class="messenger-text">What are we doing for Jen's birthday on Friday?</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">09:41</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-10.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Michelle</div>
									<div class="messenger-text">Let's get lunch tomorrow</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">08:45</div>
									<div class="messenger-badge">1</div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-2.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">Dana Klein</div>
									<div class="messenger-text">Next Friday works for me</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">08:30</div>
									<div class="messenger-badge">1</div>
								</div>
							</a>
						</div>
						<div class="messenger-item">
							<a href="#" data-toggle="messenger-content" class="messenger-link">
								<div class="messenger-media">
									<div class="messenger-media-icon">
										<img alt="" src="/assets/img/user/user-1.jpg" />
									</div>
								</div>
								<div class="messenger-info">
									<div class="messenger-name">April</div>
									<div class="messenger-text">Yes or yes? ;)</div>
								</div>
								<div class="messenger-time-badge">
									<div class="messenger-time">08:22</div>
									<div class="messenger-badge empty"></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="messenger-content">
				<div class="messenger-content-header">
					<div class="messenger-content-header-mobile-toggler">
						<a href="#" data-toggle="messenger-content" class="mx-2 d-flex align-items-center h-100 w-18px">
							<iconify-icon icon="material-symbols-light:arrow-back-ios"></iconify-icon>
						</a>
					</div>
					<div class="messenger-content-header-media">
						<div class="media bg-white bg-opacity-15 text-white fs-24px d-flex align-items-center justify-content-center">
							<iconify-icon icon="material-symbols-light:robot-2-outline"></iconify-icon>
						</div>
					</div>
					<div class="messenger-content-header-info">
						Mobile App Development Group
						<small>10 members</small>
					</div>
					<div class="messenger-content-header-btn">
						<a href="#" class="btn btn-link fs-20px"><iconify-icon icon="material-symbols-light:search-rounded"></iconify-icon></a>
						<div class="dropdown">
							<a href="#" class="btn btn-link fs-20px" data-bs-toggle="dropdown"><iconify-icon icon="material-symbols-light:settings-outline"></iconify-icon></a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex align-items-center"><i class="fa fa-pencil my-n1 me-3"></i> Edit</a>
								<a href="#" class="dropdown-item d-flex align-items-center"><i class="fa fa-info-circle my-n1 me-3"></i> Info</a>
								<a href="#" class="dropdown-item d-flex align-items-center"><i class="fa fa-bell my-n1 me-3"></i> Mute</a>
								<a href="#" class="dropdown-item d-flex align-items-center"><i class="fa fa-circle-xmark fs-5 my-n1 me-3"></i> Clear chat history</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item d-flex align-items-center"><i class="fa fa-trash fs-5 my-n1 me-3"></i> Delete and leave</a>
							</div>
						</div>
					</div>
				</div>
				<div class="messenger-content-body invisible">
					<div data-scrollbar="true" data-height="100%">
						<div class="widget-chat">
							<div class="widget-chat-date">YESTERDAY</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-5.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Ann Gray</div>
									<div class="widget-chat-message last">
										Hey folks, please check your emails. I have shared you the slide.
									</div>
									<div class="widget-chat-status">Yesterday 3:25PM</div>
								</div>
							</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-6.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Jeffrey Clark</div>
									<div class="widget-chat-message last">
										Hey folks, please check your emails. I have shared you the slide.
									</div>
									<div class="widget-chat-status">Yesterday 3:27PM</div>
								</div>
							</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-7.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Adam Lee</div>
									<div class="widget-chat-message last">
										Yes, we are going to use this slide. But we will have only 5 minutes to present it.
									</div>
									<div class="widget-chat-status">Yesterday 3:30PM</div>
								</div>
							</div>
							<div class="widget-chat-date">TODAY</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-1.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Roberto Lambert</div>
									<div class="widget-chat-message last">
										Hi, will be a little late to the production meeting.
									</div>
									<div class="widget-chat-status">2:21PM</div>
								</div>
							</div>
							<div class="widget-chat-item reply">
								<div class="widget-chat-content">
									<div class="widget-chat-message last">
										No problem. I will be sure to take notes.
									</div>
									<div class="widget-chat-status">2:22PM</div>
								</div>
							</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-2.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Roberto Lambert</div>
									<div class="widget-chat-message last">
										Thank you! I should be there by 9:10.
									</div>
									<div class="widget-chat-status">2:25PM</div>
								</div>
							</div>
							<div class="widget-chat-item reply">
								<div class="widget-chat-content">
									<div class="widget-chat-message last">
										Don't rush. I've got it covered.
									</div>
									<div class="widget-chat-status">2:27PM</div>
								</div>
							</div>
							<div class="widget-chat-item">
								<div class="widget-chat-media"><img src="/assets/img/user/user-1.jpg" alt=""></div>
								<div class="widget-chat-content">
									<div class="widget-chat-name">Roberto Lambert</div>
									<div class="widget-chat-message last">
										Hey Gabe, can you forward me the meeting notes?
									</div>
									<div class="widget-chat-status">4:30PM</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="messenger-content-footer">
					<div class="input-group position-relative ps-3">
						<div class="input-group position-absolute top-0 start-0 px-3 w-auto">
							<button class="btn border-0 d-flex align-items-center px-0 me-2 ms-2" id="trigger"><iconify-icon icon="material-symbols-light:sentiment-satisfied-outline"  class="fs-18px"></iconify-icon></button>
							<button class="btn border-0 d-flex align-items-center px-0" type="button"><iconify-icon icon="material-symbols-light:attachment" class="fs-18px"></iconify-icon></button>
						</div>
						<input type="text" class="form-control ps-50px z-1" id="input" placeholder="Write a message...">
						<div class="input-group position-absolute top-0 end-0 w-auto p-1 h-100 z-2">
							<button class="btn btn-secondary h-100 py-0 fw-semibold d-flex align-items-center" type="button">Send <iconify-icon icon="material-symbols-light:arrow-upward" class="fs-18px ms-1 me-n1"></iconify-icon></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
@endsection
