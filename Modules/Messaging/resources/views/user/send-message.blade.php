@extends('theme::layout.user')
@section('title', 'Send New Message')

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        @include('messaging::user.partials.breadcrumb', ['currentPage' => 'SEND NEW MESSAGE'])
        <h1 class="page-header mb-0">Send New Message</h1>
    </div>
</div>

@include('messaging::user.partials.navigation')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="card mb-3">
    <div class="card-body">
        <form id="sendMessageForm" action="{{ route('messenger.user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="receiver_id" class="form-label">To</label>
                <div class="typeahead__container">
                    <div class="typeahead__field">
                        <div class="typeahead__query input-group">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                            <input class="form-control" name="user_id" id="typeahead" placeholder="Start searching" autocomplete="off">
                            <input type="hidden" id="selected_user_id" name="receiver_id">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Message</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
@endsection
