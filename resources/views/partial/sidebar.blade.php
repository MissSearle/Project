<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            @php
            use App\Models\Menu;

            $currentUrl = url()->current(); // Get the full current URL
            $isAdminRoute = Str::startsWith(Request::path(), 'admin');

            // Fetch menu configuration from the database based on route type
            $menuConfig = Menu::where('type', $isAdminRoute ? 'admin' : 'user')
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get();

            function renderSubMenu($menus, $currentUrl) {
            $subMenu = '';
            foreach ($menus as $menu) {
            $hasSub = $menu->children->isNotEmpty() ? 'has-sub' : '';
            $menuUrl = $menu->url ?? '#';
            $menuText = $menu->text ?? '';
            $menuCaret = $hasSub ? '<span class="menu-caret"><b class="caret"></b></span>' : '';

            $subSubMenu = '';
            if ($hasSub) {
            $subSubMenu .= '<div class="menu-submenu">';
                $subSubMenu .= renderSubMenu($menu->children, $currentUrl);
                $subSubMenu .= '</div>';
            }

            $active = ($currentUrl == url($menuUrl)) ? 'active' : '';
            $subMenu .= '
            <div class="menu-item '. $hasSub .' '. $active .'">
                <a href="'. url($menuUrl) .'" class="menu-link">
                    <span class="menu-text">'. $menuText .'</span>
                    '. $menuCaret .'
                </a>
                '. $subSubMenu .'
            </div>
            ';
            }
            return $subMenu;
            }

            foreach ($menuConfig as $menu) {
            if (!empty($menu->is_header)) {
            echo '<div class="menu-header">'. $menu->text .'</div>';
            continue;
            }
            if (!empty($menu->is_divider)) {
            echo '<div class="menu-divider"></div>';
            continue;
            }


            $hasSub = $menu->children->isNotEmpty() ? 'has-sub' : '';
            $menuUrl = $menu->url ?? '#';
            $menuText = $menu->text ?? '';
            $menuIcon = $menu->icon ?? '';
            $menuCaret = $hasSub ? '<span class="menu-caret"><b class="caret"></b></span>' : '';

            $menuSubMenu = '';
            if ($hasSub) {
            $menuSubMenu .= '<div class="menu-submenu">';
                $menuSubMenu .= renderSubMenu($menu->children, $currentUrl);
                $menuSubMenu .= '</div>';
            }

            $active = ($currentUrl == url($menuUrl)) ? 'active' : '';

            echo '
            <div class="menu-item '. $hasSub .' '. $active .'">
                <a href="'. url($menuUrl) .'" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="'. $menuIcon .'"></iconify-icon>
                    </span>
                    <span class="menu-text">'. $menuText .'</span>
                    '. $menuCaret .'
                </a>
                '. $menuSubMenu .'
            </div>
            ';
            }
            @endphp
        </div>
        <!-- END menu -->

        @auth
        @if (auth()->user()->role === 'admin')
        <div class="mt-auto p-15px w-100">
            @if (Route::currentRouteName() === 'admin.dashboard')
            <a href="{{ url('/dashboard') }}" class="btn d-block btn-secondary btn-sm py-6px w-100">
                GAME DASHBOARD
            </a>
            @else
            <a href="{{ url('/admin/dashboard') }}" class="btn d-block btn-secondary btn-sm py-6px w-100">
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

