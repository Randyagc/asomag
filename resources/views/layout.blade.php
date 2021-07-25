<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            @yield('titulo', 'Asociación Femenina MAG')
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- Para uso de MIX--}}
        <link rel="stylesheet" media="only screen and (min-width: 320px)" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{--> Styles --}}
        <link rel="stylesheet" media="only screen and (min-width: 320px)" href="{{ asset("css/menunav.css") }}">
    </head>

    <body>
        <header>
            @include('partials.session-status')
        </header>
        @include('partials.menunav')
        <div class="container">
            @yield('content')
        </div>
        <footer class="text-center text-success fixed-bottom py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </body>
</html>
