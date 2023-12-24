<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle {{ request()->routeIs('bus.*') ? 'active' : '' }} " href="#" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ __('Bus Information') }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('bus.index') }}">
                {{ __('Bus Lists') }}
            </a>
            <a class="dropdown-item" href="{{ route('bus.add') }}">
                {{ __('Bus Add') }}
            </a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle {{ request()->routeIs('location.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ __('Location Information') }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('location.index') }}">
                {{ __('Location Lists') }}
            </a>
            <a class="dropdown-item" href="{{ route('location.add') }}">
                {{ __('Location Add') }}
            </a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle {{ request()->routeIs('trip.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ __('Trip Information') }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('trip.index') }}">
                {{ __('Trips') }}
            </a>
            <a class="dropdown-item" href="{{ route('trip.add') }}">
                {{ __('Trip Add') }}
            </a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle {{ request()->routeIs('ticket.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ __('Ticket Sell') }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('ticket.index') }}">
                {{ __('Ticket') }}
            </a>
            <a class="dropdown-item" href="{{ route('ticket.sells') }}">
                {{ __('Sell Ticket') }}
            </a>
        </div>
    </li>
</ul>
<ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
