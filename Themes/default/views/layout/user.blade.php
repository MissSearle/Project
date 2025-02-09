<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" {{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
    @include('theme::partial.head')
</head>
<body>
    @include('theme::partial.loader')

    <div id="app" class="app app-boxed-layout app-footer-fixed">
        @include('theme::partial.header')
        @include('theme::partial.sidebar')

        <div id="content" class="app-content">
            @yield('content')
        </div>

        @include('theme::partial.footer')
    </div>

    @yield('outter_content')

    @include('theme::partial.scroll-top-btn')
    @include('theme::partial.scripts')
</body>
</html>

