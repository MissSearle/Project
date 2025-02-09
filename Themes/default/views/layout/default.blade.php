<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" {{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
    @include('theme::partial.head')
</head>
<body>
    <div id="app" class="app app-full-height app-without-header p-0">

        @yield('content')

    </div>

    @yield('outter_content')
    @include('theme::partial.scripts')
</body>
</html>

