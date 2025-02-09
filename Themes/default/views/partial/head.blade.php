<meta charset="utf-8">
<title>{{ global_setting('site_name', 'Default Site Name') }} | @yield('title')</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@yield('metaDescription')">
<meta name="author" content="@yield('metaAuthor')">
<meta name="keywords" content="@yield('metaKeywords')">

@stack('metaTag')

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="{{ theme_asset('css/vendor.min.css') }}" rel="stylesheet">
<link href="{{ theme_asset('css/app.min.css') }}" rel="stylesheet">
<link href="{{ theme_asset('plugins/tag-it/css/jquery.tagit.css') }}" rel="stylesheet" />
<link href="{{ theme_asset('plugins/jquery-typeahead/dist/jquery.typeahead.min.css') }}" rel="stylesheet" />







<!-- ================== END BASE CSS STYLE ================== -->

@stack('css')
