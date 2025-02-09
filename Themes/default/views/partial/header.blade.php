<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN desktop-toggler -->
    <div class="desktop-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END desktop-toggler -->

    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        @if (!empty($appTopNav) && !empty($appSidebarHide))
        <button type="button" class="menu-toggler" data-toggle="app-top-nav-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        @else
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        @endif
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <a href="/" class="brand-logo w-100">
            <iconify-icon icon="lets-icons:time-progress-duotone" class="fs-24px me-2 text-theme"></iconify-icon>
            <span class="brand-text fw-500 fs-14px">{{ global_setting('site_name', 'Default Site Name') }}</span>


        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <!--
        <div class="menu-item dropdown d-lg-flex d-none">
            <a href="#" class="menu-link">
                <span>$1,859,050.12</span>
            </a>
        </div>
        -->

        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
                <iconify-icon icon="ph:envelope" class="menu-icon {{ auth()->user()->receivedMessages()->where('is_read', false)->count() > 0 ? 'text-danger' : 'text-white' }}"></iconify-icon>
            </a>
            <div class="dropdown-menu dropdown-menu-end fade w-300px p-0">
                <h6 class="dropdown-header fw-semibold py-2">MAIL</h6>
                @php
                $messages = auth()->user()->receivedMessages()->latest()->limit(5)->get();
                @endphp

                @if($messages->count() > 0)
                @foreach($messages as $message)
                <a class="dropdown-item d-flex align-items-center fs-10px" href="{{ route('messenger.user.message', $message->id) }}">
                    <div>
                        <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon icon="material-symbols-light:mail-outline" class="{{ $message->is_read ? 'text-white' : 'text-danger' }}"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">{{ $message->subject }}</div>
                        <div class="text-white text-opacity-75">{{ Str::limit($message->content, 30, '...') }}</div>
                        <div class="text-white text-opacity-50 small">{{ $message->created_at->diffForHumans() }}</div>
                    </div>
                </a>
                @endforeach
                @else
                <div class="dropdown-item text-center py-2">No new messages</div>
                @endif
                <a class="dropdown-item fs-10px text-center py-2 d-block" href="{{ route('messenger.user.index') }}">VIEW ALL</a>
            </div>
        </div>

        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon" id="notificationDropdown">
                <iconify-icon icon="ph:bell" class="menu-icon {{ auth()->user()->unreadNotifications->count() > 0 ? 'text-danger' : 'text-white' }}">
                </iconify-icon>
            </a>
            <div class="dropdown-menu dropdown-menu-end fade w-300px p-0">
                <h6 class="dropdown-header fw-semibold py-2">NOTIFICATIONS</h6>

                @php
                $notifications = auth()->user()->notifications()->latest()->limit(5)->get();
                @endphp

                @if($notifications->count() > 0)
                @foreach($notifications as $notification)
                <div class="dropdown-item no-hover d-flex align-items-center fs-10px">
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="d-flex align-items-center">
                            @if(is_null($notification->read_at))
                            <iconify-icon icon="ph:circle-fill" class="text-warning me-2 unread-notification" width="8"></iconify-icon>
                            @endif
                            <span class="text-white text-opacity-75">
                                {{ Str::limit($notification->data['message'], 50, '...') }}
                            </span>
                        </div>
                        <div class="text-white text-opacity-50 small">
                            {{ $notification->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                @endforeach
                @else
                <div class="dropdown-item text-center py-2">No new notifications</div>
                @endif

                <a class="dropdown-item fs-10px text-center py-2 d-block" href="{{ route('notifications.user') }}">VIEW ALL</a>
            </div>
        </div>



        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link d-flex align-items-center">
                <div class="menu-img online me-sm-2 ms-lg-0 ms-n2">
                    <img src="{{ theme_asset('img/user/profile.jpg') }}" alt="Profile" class="" loading="lazy" />

                </div>
                <div class="menu-text d-sm-block d-none">
                    <span class="d-block"><span>{{ auth()->user()->name }}</span></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-10px fade">
                <!--<h6 class="dropdown-header">USER OPTIONS</h6>-->
                <a class="dropdown-item" href="/profile">EDIT ACCOUNT</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">LOG OUT</button>
                </form>

            </div>
        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->