@php
use App\Services\MenuService;

$currentUrl = url()->current();
$isAdminRoute = Str::startsWith(Request::path(), 'admin');

// Fetch menu dynamically based on enabled modules
$menus = MenuService::getMenus($isAdminRoute ? 'admin' : 'user');

function renderSubMenu($items, $currentUrl)
{
$subMenu = '<div class="menu-submenu">';
    foreach ($items as $menu) {
    $menuUrl = $menu['url'] ?? '#';
    $menuText = $menu['text'] ?? '';
    $menuIcon = $menu['icon'] ?? '';
    $hasSub = !empty($menu['children']) ? 'has-sub' : '';
    $menuCaret = $hasSub ? '<span class="menu-caret"><b class="caret"></b></span>' : '';

    // Check active state
    $active = request()->is(ltrim($menuUrl, '/')) ? 'active' : '';

    // Check if any child is active
    $childActive = '';
    if (!empty($menu['children'])) {
        foreach ($menu['children'] as $child) {
            if (request()->is(ltrim($child['url'], '/'))) {
                $childActive = 'active';
                break;
            }
        }
    }

    // Render menu item
    $subMenu .= '
    <div class="menu-item ' . $hasSub . ' ' . $active . ' ' . $childActive . '">
        <a href="' . url($menuUrl) . '" class="menu-link">
            <span class="menu-text">' . $menuText . '</span>
            ' . $menuCaret . '
        </a>';

        // If has children, render recursively
        if (!empty($menu['children'])) {
        $subMenu .= renderSubMenu($menu['children'], $currentUrl);
        }

        $subMenu .= '</div>'; // Close menu-item
    }
    $subMenu .= '</div>'; // Close menu-submenu
return $subMenu;
}
@endphp

<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            @foreach($menus as $category => $items)
            <div class="menu-header">{{ $category }}</div> {{-- Category Header --}}
            @foreach($items as $menu)
            @php
            $menuUrl = $menu['url'] ?? '#';
            $menuText = $menu['text'] ?? '';
            $menuIcon = $menu['icon'] ?? '';
            $hasSub = !empty($menu['children']) ? 'has-sub' : '';
            $menuCaret = $hasSub ? '<span class="menu-caret"><b class="caret"></b></span>' : '';

            // Check active state
            $active = request()->is(ltrim($menuUrl, '/')) ? 'active' : '';

            // Check if any child is active
            $childActive = '';
            if (!empty($menu['children'])) {
                foreach ($menu['children'] as $child) {
                    if (request()->is(ltrim($child['url'], '/'))) {
                        $childActive = 'active';
                        break;
                    }
                }
            }
            @endphp

            <div class="menu-item {{ $hasSub }} {{ $active }} {{ $childActive }}">
                <a href="{{ url($menuUrl) }}" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="{{ $menuIcon }}"></iconify-icon>
                    </span>
                    <span class="menu-text">{{ $menuText }}</span>
                    {!! $menuCaret !!}
                </a>

                {{-- Render submenu if exists --}}
                @if (!empty($menu['children']))
                {!! renderSubMenu($menu['children'], $currentUrl) !!}
                @endif
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

