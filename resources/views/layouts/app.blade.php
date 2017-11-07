<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
    <div class="{{ route_class() }}-page" id="app">
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>

        @include('layouts._footer')
    </div>

    <!-- Script -->
    <script src="{{ mix('js/app.js') }}"></script>
</html>