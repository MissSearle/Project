@extends('theme::layout.user')
@section('title', 'Dashboard')

@section('content')
<h1 class="page-header">
    Notifications
</h1>
<hr class="mb-4 opacity-3">

<div class="row g-2">
    <div class="col-md-6 col-sm-12 col-lg-6">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="text-end mb-3">
            <form method="POST" action="{{ route('notifications.markAllAsRead') }}">
                @csrf
                <button type="submit" class="btn btn-outline-warning btn-sm">Mark all as read</button>
            </form>
        </div>
        @if($notifications->count() > 0)
        @foreach($notifications as $notification)
        <div class="card mb-3">
            <div class="card-body @if(is_null($notification->read_at)) bg-theme bg-opacity-30 text-white @endif">
                <p class="card-text">

                    @if(is_null($notification->read_at))
                    <span class="badge bg-success bg-opacity-10 text-success border border-success">NEW</span>
                    @endif
                </p>
                <p class="card-text">
                    {{ $notification->data['message'] ?? 'No message content' }}
                </p>
                <p class="card-text">
                    <small class="text-body text-opacity-50">
                        {{ $notification->created_at->diffForHumans() }}
                    </small>
                </p>
                <div class="text-end">
                    <form method="POST" action="{{ route('notifications.markAsRead', ['id' => $notification->id]) }}" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-outline-warning btn-sm">Mark as read</button>
                    </form>
                    <form method="POST" action="{{ route('notifications.delete', $notification->id) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Pagination -->
        <div class="mt-3 d-flex justify-content-center">
            {{ $notifications->links('vendor.pagination.custom') }}
        </div>

        @else
        <p class="text-center text-muted">No notifications available.</p>
        @endif
    </div>
</div>
@endsection
