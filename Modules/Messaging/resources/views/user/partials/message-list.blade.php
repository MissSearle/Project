<form id="bulkActionForm" method="POST" action="{{ route('messenger.user.bulkAction') }}">
    @csrf
    <div class="d-flex justify-content-between mb-2">
        <div>
            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="selectAllMessages()">Select All</button>
            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="deselectAllMessages()">Deselect All</button>
        </div>
        <div>
            @if(request()->routeIs('messenger.user.index'))
                <button type="submit" name="action" value="markAsRead" class="btn btn-outline-success btn-sm">Mark as Read</button>
                <button type="submit" name="action" value="save" class="btn btn-outline-primary btn-sm">Save</button>
                <button type="submit" name="action" value="delete" class="btn btn-outline-danger btn-sm">Delete</button>
            @elseif(request()->routeIs('messenger.user.saved'))
                <button type="submit" name="action" value="unsave" class="btn btn-outline-warning btn-sm">Unsave</button>
                <button type="submit" name="action" value="delete" class="btn btn-outline-danger btn-sm">Delete</button>
            @elseif(request()->routeIs('messenger.user.outbox'))
                <button type="submit" name="action" value="delete" class="btn btn-outline-danger btn-sm">Delete</button>
            @endif
        </div>
    </div>
    <div class="list-group">
        @if($messages->isEmpty())
        <div class="list-group-item text-center text-muted">No messages found</div>
        @else
        @foreach($messages as $message)
        @if(request()->routeIs('messenger.user.index') && $message->receiver_id == Auth::id() && $message->deleted_by_receiver == 0)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <input type="checkbox" name="message_ids[]" value="{{ $message->id }}" class="message-checkbox">
                <a href="{{ route('messenger.user.message', $message->id) }}" class="text-decoration-none">
                    {{ $message->subject }}
                </a>
                <span class="text-muted">
                    - From: {{ $message->sender->name }}
                </span>
                @if(!$message->is_read)
                    <span class="badge bg-success bg-opacity-10 text-success border border-success">NEW</span>
                @endif
            </div>
            <div>
                {{ $message->created_at ? $message->created_at->format('M d, Y h:i A') : 'N/A' }}
            </div>
        </div>
        @elseif(request()->routeIs('messenger.user.outbox') && $message->deleted_by_sender == 0)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <input type="checkbox" name="message_ids[]" value="{{ $message->id }}" class="message-checkbox">
                <a href="{{ route('messenger.user.message', $message->id) }}" class="text-decoration-none">
                    {{ $message->subject }}
                </a>
                <span class="text-muted">
                    - To: {{ $message->receiver->name }}
                </span>
            </div>
            <div>
                {{ $message->created_at ? $message->created_at->format('M d, Y h:i A') : 'N/A' }}
            </div>
        </div>
        @elseif(request()->routeIs('messenger.user.saved') && $message->deleted_by_receiver == 0)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <input type="checkbox" name="message_ids[]" value="{{ $message->id }}" class="message-checkbox">
                <a href="{{ route('messenger.user.message', $message->id) }}" class="text-decoration-none">
                    {{ $message->subject }}
                </a>
                <span class="text-muted">
                    - From: {{ $message->sender->name }}
                </span>
            </div>
            <div>
                {{ $message->created_at ? $message->created_at->format('M d, Y h:i A') : 'N/A' }}
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</form>

<script>
function selectAllMessages() {
    document.querySelectorAll('.message-checkbox').forEach(checkbox => checkbox.checked = true);
}

function deselectAllMessages() {
    document.querySelectorAll('.message-checkbox').forEach(checkbox => checkbox.checked = false);
}
</script>
