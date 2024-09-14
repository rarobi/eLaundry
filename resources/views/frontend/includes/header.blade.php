<header id="home" class="flex-wrap sticky-top">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img style="height: 50px" src="#" alt="{{ env('APP_NAME') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav h5">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('home') ? 'active' : '') }}" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    @if(auth()->user())
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('dashboard*') ? 'active' : '') }}" href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('login') ? 'active' : '') }}" href="{{ url('/login') }}">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
</header>
