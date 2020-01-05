<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">

    <!-- Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Expeditions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Routes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Data Export</a>
            </div>
          </li>
        </ul>

        <a class="btn btn-outline-info my-2 my-sm-0 text-white" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Favourites
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Reporting</a>
      </nav>
    </div>


    <main id="app" class="container">

      @yield('content')

      <footer class="text-center mt-3 text-secondary">
        <p><a class="text-secondary" href="https://github.com/painejake/expedy">{{ config('app.name', 'Laravel') }}</a>, made with ❤️</p>
      </footer>

    </main>

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
