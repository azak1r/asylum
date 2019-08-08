<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>The Geek Asylum - @yield('title')</title>

        <meta name="description" content="Community website for The Geek Asylum gaming department.">
        <meta name="keywords" content="gaming, game, community, html, bootstrap, webpack">
        <meta name="author" content="Azak1r">

        <link rel="icon" type="image/png" href="assets/images/dark/icon.png">

        <!-- Styling -->
        @include('components.styling')

    </head>
    <body>
        @include('components.loader')

        @include('partials.navbar')

        <div class="content-wrap">
            @yield('content')

            @include('partials.footer')
        </div>

        @include('components.scripts')
        @yield('script')
    </body>
</html>