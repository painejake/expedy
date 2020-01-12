<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="/favicon.ico">

    <title>{{ config('app.name', 'Expedy') }}</title>

    <!-- Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body class="bg-light">

    @include('layouts.nav')

    <main id="app" class="container">

      @yield('content')

      <footer class="text-center mt-3 text-secondary">
        <p class="mb-0"><small><a class="text-secondary" href="https://github.com/painejake/expedy">{{ config('app.name', 'Expedy') }}</a> made with ❤️</small></p>
        <small>Page rendered in {{ number_format((microtime(true) - LARAVEL_START), 4) }} seconds</small>
      </footer>

    </main>

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
