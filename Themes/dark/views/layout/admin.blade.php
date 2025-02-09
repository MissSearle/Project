<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" {{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
    @include('theme::partial.head')
</head>
<body class="{{ (!empty($bodyClass)) ? $bodyClass : 'theme-warning' }}">
    @include('theme::partial.loader')

    <!-- BEGIN #app -->
    <div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
        @includeWhen(empty($appHeaderHide), 'theme::partial.header')
        @includeWhen(empty($appSidebarHide), 'theme::partial.sidebar')
        @includeWhen(!empty($appTopNav), 'theme::partial.top-nav')

        @if (empty($appContentHide))
        <!-- BEGIN #content -->
        <div id="content" class="app-content  {{ (!empty($appContentClass)) ? $appContentClass : '' }}">
            @yield('content')
        </div>
        <!-- END #content -->
        @else
        @yield('content')
        @endif

        @includeWhen(!empty($appFooter), 'theme::partial.footer')
    </div>
    <!-- END #app -->

    @yield('outter_content')
    @include('theme::partial.scroll-top-btn')
    @include('theme::partial.scripts')
</body>
</html>

