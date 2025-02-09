@extends('theme::layout.user')
@section('title', 'Inbox')

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        @include('messaging::user.partials.breadcrumb', ['currentPage' => 'INBOX'])
        <h1 class="page-header mb-0">Mail</h1>
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

<div class="row gx-3">
    <div class="col-xl-8">
        <div class="card mb-3">
            <div class="card-header with-btn">
                Inbox
            </div>
            <div class="card-body">
                @include('messaging::user.partials.message-list', ['messages' => $messages])
            </div>
            <div class="card-footer bg-none d-flex px-0">
                <a href="{{ route('messenger.user.create') }}" class="btn btn-theme ms-auto d-flex align-items-center">
                    <iconify-icon icon="material-symbols-light:add" class="fs-20px me-1 ms-n2 my-n2 d-inline-flex"></iconify-icon> Send new message
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Send Message Modal -->
<div class="modal fade" id="sendMessageModal" tabindex="-1" aria-labelledby="sendMessageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendMessageModalLabel">Send New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="sendMessageForm" action="{{ route('messenger.user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="receiver_id" class="form-label">To</label>
                        <div class="typeahead__container">
                            <div class="typeahead__field">
                                <div class="typeahead__query input-group">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    <input class="form-control" name="user_id" id="typeahead" placeholder="Start searching'" autocomplete="off">
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
    </div>
</div>
@endsection
