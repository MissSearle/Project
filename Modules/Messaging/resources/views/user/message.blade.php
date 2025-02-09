@extends('theme::layout.user')
@section('title', 'Message')

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        <a href="{{ $message->receiver_id == Auth::id() ? route('messenger.user.index') : route('messenger.user.outbox') }}" class="btn btn-secondary">
            Back to {{ $message->receiver_id == Auth::id() ? 'Inbox' : 'Outbox' }}
        </a>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row gx-3">
    <div class="col-xl-8">
        <div class="card mb-3">
            <div class="card-header with-btn">
                {{ $message->created_at ? $message->created_at->format('M d, Y h:i A') : 'N/A' }}
                <div class="card-header-btn">
                    <a href="#" data-toggle="card-expand" class="btn">
                        <iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table-py-1px fs-10px fw-semibold text-white">
                    <tbody>
                        <tr>
                            <td class="pe-3 text-white text-opacity-50">{{ $message->receiver_id == Auth::id() ? 'FROM:' : 'TO:' }}</td>
                            <td>{{ $message->receiver_id == Auth::id() ? $message->sender->name : $message->receiver->name }}</td>
                        </tr>
                        <tr>
                            <td class="pe-3 text-white text-opacity-50">SUBJECT:</td>
                            <td>{{ $message->subject }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p>{{ $message->content }}</p>
                <hr>
                @if($message->is_saved)
                <div class="btn-group btn-group-sm">
                    <form action="{{ route('messenger.user.delete', $message->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-default text-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-outline-default text-warning" onclick="handleAction('{{ route('messenger.user.unsave', $message->id) }}', 'POST')">Unsave</button>
                </div>
                @elseif($message->receiver_id == Auth::id())
                <div class="btn-group btn-group-sm">
                    <form action="{{ route('messenger.user.delete', $message->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-default text-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-outline-default text-success" onclick="handleAction('{{ route('messenger.user.save', $message->id) }}', 'POST')">Save</button>
                    @if(!$message->is_read)
                    <button type="button" class="btn btn-outline-default text-warning" onclick="handleAction('{{ route('messenger.user.markAsRead', $message->id) }}', 'POST')">Mark as Read</button>
                    @endif
                </div>
                @endif
            </div>
            @if($message->receiver_id == Auth::id())
            <div class="card-footer bg-none d-flex px-0">
                <form action="{{ route('messenger.user.reply', $message->id) }}" method="POST" class="w-100">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Type your reply here...">
                        <button type="submit" class="btn btn-theme">Reply</button>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>

<script>
function handleAction(url, method) {
    if (confirm('Are you sure?')) {
        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = '{{ $message->receiver_id == Auth::id() ? route('messenger.user.index') : route('messenger.user.outbox') }}';
            } else {
                alert('An error occurred. Please try again.');
            }
        });
    }
}
</script>
@endsection
