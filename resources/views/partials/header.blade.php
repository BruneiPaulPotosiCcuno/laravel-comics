<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container d-flex justify-content-between">
            <a href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
            </a>
            <div class="navbar" id="navbarNavDropdown">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item @class(['active' => Route::currentRouteName() === 'home'])">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item @class(['active' => Route::currentRouteName() === 'comics'])">
                        <a class="nav-link" href="{{ route('comics') }}">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>