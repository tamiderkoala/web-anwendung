<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">FOOD LOVE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->

                        <nav class="my-2 my-md-0 mr-md-3">
                                <a class="p-2 text-dark" href="/">Startseite</a>
                                <a class="p-2 text-dark" href="/posts">Rezepte</a>
                                <a class="p-2 text-dark" href="/posts/create"><b>Beitrag erstellen</b></a>

                        </nav>
                    <!-- Authentication Links -->
                    @guest
                        <li class="btn btn-outline-primary">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Einloggen') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="btn btn-outline-primary">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrieren') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="btn btn-outline-primary nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/dashboard">Dein Profil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
