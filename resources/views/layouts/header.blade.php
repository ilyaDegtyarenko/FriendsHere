<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <a id='navbar-toggle' data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('register') }}">{{ trans('structure.title.registration') }}</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">{{ trans('structure.title.login') }}</a></li>
                    @else
                        <li class="nav-item dropdown">

                            <li><a class="nav-link disabled" href="" onclick="event.preventDefault();">{{ auth()->user()->name }}</a></li>
                            <li class="dropdown-divider m-0"></li>

                            <li><a class="nav-link" href="">Профиль</a></li>
                            <li><a class="nav-link" href="">Настройки</a></li>
                            <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('structure.title.logout') }}</a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>

            </div>

        </div>
    </nav>
</header>