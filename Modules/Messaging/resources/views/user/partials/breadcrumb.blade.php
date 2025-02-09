<!-- resources/views/partials/breadcrumb.blade.php -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('messenger.user.index') }}">INBOX</a></li>
    <li class="breadcrumb-item active">{{ $currentPage }}</li>
</ol>
