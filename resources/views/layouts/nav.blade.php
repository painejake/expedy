<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('dashboard.index') }}">{{ config('app.name', 'Expedy') }}</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>

            <li class="nav-item {{ request()->is('routes*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('routes.index') }}">Routes</a>
            </li>

            <li class="nav-item {{ request()->is('expeditions*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('expeditions.index') }}">Expeditions</a>
            </li>

            <li class="nav-item dropdown {{ request()->is('settings*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('settings.index') }}">Settings</a>
            </li>

        </ul>

        <a class="btn btn-outline-info my-2 my-sm-0 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>

@if (request()->is('dashboard*'))
    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="#">Dashboard</a>
        </nav>
    </div>

@elseif (request()->is('routes*'))
    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link {{ request()->is('routes') ? 'active' : '' }}" href="{{ route('routes.index') }}">Routes</a>
            <a class="nav-link {{ request()->is('routes/create') ? 'active' : '' }}" href="{{ route('routes.create') }}">Create</a>
        </nav>
    </div>

@elseif (request()->is('expeditions*'))
    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link {{ request()->is('expeditions') ? 'active' : '' }}" href="{{ route('expeditions.index') }}">Expeditions</a>
        </nav>
    </div>

@elseif (request()->is('settings*'))
    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link {{ request()->is('settings') ? 'active' : '' }}" href="{{ route('settings.index') }}">Settings</a>
            <a class="nav-link {{ request()->is('settings/profile') ? 'active' : '' }}" href="{{ route('settings.profile') }}">Profile</a>
            <a class="nav-link {{ request()->is('settings/export') ? 'active' : '' }}" href="{{ route('settings.export') }}">Export</a>
        </nav>
    </div>

@endif