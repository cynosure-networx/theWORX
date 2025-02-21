<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        @yield('pageMeta')

        <!-- Font Imports -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">
        @yield('pageFonts')

        <!-- Styles -->
        <!-- Core Style -->
        <link rel="stylesheet" href="{{ asset('css/template/style.css') }}" />

        <!-- Font Icons -->
        <link rel="stylesheet" href="{{ asset('css/template/font-icons.css') }}" />

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/template/swiper.css') }}" />


        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/template/custom.css') }}" />

        {{-- @vite('resouces/css/app.css', 'resources/js/app.js') --}}

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        @yield('pageStyles')

        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:image:alt" content="" />

        <link rel="icon" href="/favicon.ico" sizes="any" />
        <link rel="icon" href="/icon.svg" type="image/svg+xml" />
        <link rel="apple-touch-icon" href="icon.png" />

        <meta name="theme-color" content="#1d9eeb;
" />

        <title>
            {{ config('theworx.website-name') }} @hasSection('metaTitle') - @yield('metaTitle')
            @endif
        </title>

        @yield('headScripts')
    </head>

    <body class="stretched">
        <!-- Document Wrapper
	    ============================================= -->
        <div id="wrapper">
            {{-- @include('layouts.includes.topbar') --}}

            @include('layouts.includes.header')

            @hasSection('pageTitle')
                @include('layouts.partials.page-title')
            @endif

            <!-- Content
            ============================================= -->

            {{-- @include('layouts.partials.breaking-news') --}}

            {{-- {{ $slot }} --}}

            @yield('content')

            <!-- #content end -->

            @include('layouts.includes.footer')

        </div>
        <!-- Wrapper end -->

        <!-- Go To Top
	============================================= -->
        <div id="gotoTop" class="uil uil-angle-up"></div>

        <!-- JavaScripts
	============================================= -->
        <script src="{{ asset('js/template/plugins.min.js') }}"></script>
        <script src="{{ asset('js/template/functions.bundle.js') }}"></script>

        @yield('footerScripts')
    </body>
</html>
