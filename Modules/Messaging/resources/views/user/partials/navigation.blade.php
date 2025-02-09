<div class="mb-md-3 mb-2 d-flex flex-wrap">
    <div class="me-4 mb-md-0 mb-2 pe-2">
        <a href="{{ route('messenger.user.index') }}" class="text-decoration-none text-body d-flex align-items-center">
            <iconify-icon icon="material-symbols:inbox" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Inbox ({{ $inboxCount }})
        </a>
    </div>
    <div class="me-4 mb-md-0 mb-2 pe-2">
        <a href="{{ route('messenger.user.outbox') }}" class="text-decoration-none text-body d-flex align-items-center">
            <iconify-icon icon="material-symbols:outbox" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Outbox ({{ $outboxCount }})
        </a>
    </div>
    <div class="me-4 mb-md-0 mb-2 pe-2">
        <a href="{{ route('messenger.user.saved') }}" class="text-decoration-none text-body d-flex align-items-center">
            <iconify-icon icon="material-symbols:save" class="fs-20px opacity-5 me-2 my-n2"></iconify-icon> Saved ({{ $savedCount }})
        </a>
    </div>
</div>
