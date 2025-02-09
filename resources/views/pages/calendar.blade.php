@extends('layout.default', [
	'appClass' => 'app-content-full-height',
	'appContentClass' => 'py-0 px-3'
])

@section('title', 'Calendar')

@push('css')
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
@endpush

@push('js')
	<script src="/assets/plugins/moment/moment.js"></script>
	<script src="/assets/plugins/@fullcalendar/core/index.global.min.js"></script>
	<script src="/assets/plugins/@fullcalendar/daygrid/index.global.min.js"></script>
	<script src="/assets/plugins/@fullcalendar/timegrid/index.global.min.js"></script>
	<script src="/assets/plugins/@fullcalendar/list/index.global.min.js"></script>
	<script src="/assets/plugins/@fullcalendar/bootstrap/index.global.min.js"></script>
	<script src="/assets/plugins/@fullcalendar/interaction/index.global.min.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="/assets/js/demo/calendar.demo.js"></script>
@endpush

@section('content')
  <!-- BEGIN calendar -->
	<div class="d-flex">
		<!-- BEGIN calendar-sidebar -->
		<div class="w-250px d-lg-block d-none">
			<div class="desktop-sticky-top px-3 py-4">
				<a href="#" class="btn btn-theme btn-sm d-block mb-3">CREATE EVENT</a>
				<div data-render="inline-datepicker"></div>
				<hr class="my-4" />
				<div class="fc-event-list" id="external-events">
					<div class="fw-semibold small mb-2 mt-n2">Work:</div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(255, 93, 172, .35)"><i class="fa fa-circle fs-5px me-2 text-pink"></i> Team Meeting</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(255, 84, 84, .35)"><i class="fa fa-circle fs-5px me-2 text-danger"></i> Project Deadline</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(255, 169, 38, .35)"><i class="fa fa-circle fs-5px me-2 text-warning"></i> Client Call</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(255, 241, 68, .35)"><i class="fa fa-circle fs-5px me-2 text-yellow"></i> Presentation</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(37, 220, 59, .35)"><i class="fa fa-circle fs-5px me-2 text-green"></i> Code Review</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(0, 255, 156, .35)"><i class="fa fa-circle fs-5px me-2 text-teal"></i> Staff Training</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(0, 208, 253, .35)"><i class="fa fa-circle fs-5px me-2 text-info"></i> Conference</div></div>
					
					<div class="fw-semibold small mb-2 mt-4">Personal:</div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(108, 152, 255, .35)"><i class="fa fa-circle fs-5px me-2 text-primary"></i> Holiday</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(144, 145, 255, .35)"><i class="fa fa-circle fs-5px me-2 text-indigo"></i> Sick Leave</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(212, 106, 255, .35)"><i class="fa fa-circle fs-5px me-2 text-purple"></i> Breakfast</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(97, 122, 134, .35)"><i class="fa fa-circle fs-5px me-2 text-gray-500"></i> Lunch</div></div>
					<div class="fc-event-item"><div class="fc-event-link" data-color="rgba(255, 255, 255, 0.75)"><i class="fa fa-circle fs-5px me-2 text-muted"></i> Dinner</div></div>
				</div>
			</div>
		</div>
		<!-- ENG calendar-sidebar -->
		<!-- BEGIN calendar-body -->
		<div class="flex-1 p-3 p-lg-4">
			<div id="calendar"></div>
		</div>
		<!-- ENG calendar-body -->
	</div>
	<!-- end calendar -->
@endsection
