<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('theworx.website-name') }}
        @hasSection('metaTitle')
        - @yield('metaTitle')
        @endif
    </title>

    @yield('pageMeta')

    <!-- Font Imports -->
    @yield('pageFonts')

    <!-- Styles -->
    @vite('resources/css/app.css')

    {{-- <link rel="stylesheet" href="build/assets/app-C7j5xxXb.css"> --}}

    @yield('pageStyles')

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="manifest" href="site.webmanifest" crossorigin="use-credentials">
    <meta name="theme-color" content="#ff6600">

    @yield('headScripts')

    @livewireStyles

</head>

<body class="" min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">
{{-- NAVBAR mobile only --}}
@include('layouts.includes.header')

{{ $slot }}

@include('layouts.includes.footer')

@yield('footerScripts')

@vite('resources/js/app.js')

{{-- <link rel="scripts" href="build/assets/app-C1-XIpUa.js"> --}}

@livewireScripts

</body>

</html>
