@extends('theme::layout.user')
@section('title', 'Saved Messages')

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        @include('messaging::user.partials.breadcrumb', ['currentPage' => 'SAVED'])
        <h1 class="page-header mb-0">Saved Messages</h1>
    </div>
</div>

@include('messaging::user.partials.navigation')

<div class="row gx-3">
    <div class="col-xl-8">
        <div class="card mb-3">
            <div class="card-header with-btn">
                Saved Messages
            </div>
            <div class="card-body">
                @include('messaging::user.partials.message-list', ['messages' => $messages])
            </div>
            <div class="card-footer bg-none d-flex px-0">
                <a href="#" class="btn btn-theme ms-auto d-flex align-items-center">
                    <iconify-icon icon="material-symbols-light:add" class="fs-20px me-1 ms-n2 my-n2 d-inline-flex"></iconify-icon> Send new message
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
