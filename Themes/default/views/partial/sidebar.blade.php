@php
use App\Services\MenuService;

$currentUrl = url()->current();
$isAdminRoute = Str::startsWith(Request::path(), 'admin');

// Fetch menu dynamically based on enabled modules
$menus = MenuService::getMenus($isAdminRoute ? 'admin' : 'user');
@endphp
<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar" style="width: 200px;">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN user-info -->
        <div class="card mb-3">
            <div class="card-header">User Info</div>
            <div class="card-body">
                <p><strong>Username:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Rank:</strong> {{ auth()->user()->rank }}</p>
                <p><strong>Health:</strong> {{ auth()->user()->health }}</p>
            </div>
        </div>
        <!-- END user-info -->

        <!-- BEGIN menu -->
        <div class="card mb-3">
            <div class="card-header">Navigation</div> {{-- Single Header --}}
            @foreach($menus as $items)
                @foreach($items as $menu)
                    @php
                    $menuUrl = $menu['url'] ?? '#';
                    $menuText = $menu['text'] ?? '';

                    // Check active state
                    $active = request()->is(ltrim($menuUrl, '/')) ? 'active' : '';
                    @endphp

                    <div class="card-body menu-card p-0">
                        <div class="menu-item" style="padding-left: 5px; padding-right: 5px; {{ $active ? 'font-weight: bold; color: var(--bs-theme);' : '' }}">
                            <a href="{{ url($menuUrl) }}" class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="flex-fill py-1">
                                    <div class="fw-semibold">{{ $menuText }}</div>
                                </div>
                                <div>
                                    {!! app('hooks')->runHook('menu_item_suffix', $menu) !!}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <!-- END menu -->

        @auth
        @if (auth()->user()->role === 'admin')
        <div class="mt-auto p-15px w-100">
            @if (request()->is('admin/*'))
            <a href="{{ route('dashboard.user.index') }}" class="btn d-block btn-secondary btn-sm py-6px w-100">
                GAME DASHBOARD
            </a>
            @else
            <a href="{{ route('dashboard.admin.index') }}" class="btn d-block btn-secondary btn-sm py-6px w-100">
                ADMIN PANEL
            </a>
            @endif
        </div>
        @endif
        @endauth
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->

<!-- BEGIN mobile-sidebar-backdrop -->
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
<!-- END mobile-sidebar-backdrop -->

<style>
.menu-card:hover {
    background-color: rgba(var(--bs-theme-rgb), 0.1);
}
</style>

