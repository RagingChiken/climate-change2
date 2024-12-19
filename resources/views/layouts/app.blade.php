
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Change Awareness</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/CLIMATECHANGE2.png') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="d-flex justify-content-between p-3">
            <div>
                <a href="tel:+1234567890">+1 234 567 890</a> | 
                <a href="mailto:info@climatechange.org">info@climatechange.org</a>
            </div>
            <div>
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
            </div>
        </header>
        

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('image/CLIMATECHANGE2.png') }}" alt="Logo" style="height: 50px;">
    </a>
    <a class="navbar-brand" href="/">{{ __('Climate Change') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto"> <!-- Changed ml-auto to ms-auto for Bootstrap 5 -->
            <li class="nav-item"><a class="nav-link" href="/">{{ __('Home') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">{{ __('About Us') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">{{ __('Contact Us') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="/solution">{{ __('Solution') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="/blogs">{{ __('Blogs') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="/forum">{{ __('Discussion Forum') }}</a></li>
            <li class="nav-item">
                <form action="{{ route('search') }}" method="GET" class="d-flex"> <!-- Changed form-inline to d-flex -->
                    <input type="text" class="form-control me-2" name="query" placeholder="{{ __('Search...') }}"> <!-- Added margin end for spacing -->
                </form>
            </li>
            <li class="nav-item"><a class="btn btn-success" href="/donate">{{ __('Donate Now') }}</a></li>
            <!-- Login and Register Buttons -->
            <li class="nav-item">
                <a class="btn btn-outline-primary me-2" href="/auth/login" style="margin-left: 10 ">{{ __('Login') }}</a> <!-- Updated route to /auth/login -->
            </li>
            <!-- Language Switcher -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('setlocale', 'en') }}">EN</a>
                <a class="nav-link" href="{{ route('setlocale', 'id') }}">ID</a>
            </li>
        </ul>
    </div>
</nav>

        <!-- Main Content -->
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Popper.js (required for Bootstrap JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script> <!-- Updated Popper.js version -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Updated Bootstrap JS version with bundle -->


    <!-- Footer -->

    <div class="container">
        <footer class="footer footer-expand-lg footer-light bg-light">
            <div style= "padding: 20px;">
                <a class="footer-brand" href="{{ url('/') }}">
                    <img src="{{ asset('image/CLIMATECHANGE2.png') }}" alt="Logo" style="height: 50px;">
                </a>
                <a class="navbar-brand" style="font-size: 1.5rem;" href="/">{{ __('Climate Change') }}</a>
                <div>
                    <a href="tel:+1234567890">+1 234 567 890</a> | 
                    <a href="mailto:info@climatechange.org">info@climatechange.org</a>
                </div>
            </div>
    </div>
</footer>
</body>
</html>