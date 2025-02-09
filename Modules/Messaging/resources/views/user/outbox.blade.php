@extends('theme::layout.user')
@section('title', 'Outbox')

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        @include('messaging::user.partials.breadcrumb', ['currentPage' => 'OUTBOX'])
        <h1 class="page-header mb-0">Mail</h1>
    </div>
</div>

@include('messaging::user.partials.navigation')

<div class="row gx-3">
    <div class="col-xl-8">
        <div class="card mb-3">
            <div class="card-header with-btn">
                Outbox
            </div>
            <div class="card-body">
                @include('messaging::user.partials.message-list', ['messages' => $messages])
            </div>
        </div>
    </div>
</div>
@endsection
