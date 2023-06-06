<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Online Store')</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('product.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('category.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.about') }}">About</a>
                    </li>
                </ul>
                <ul class="ms-auto navbar-nav">
                    <li class="nav-item icon-asset text-center me-4">
                        <a href="" class="nav-link bi bi-cart"></a>
                    </li>
                    @guest
                        <li class="nav-item bg-outline-primary rounded-4 px-3 me-lg-3">
                            <a href="{{ route('login') }}" class="nav-link active">Login</a>
                        </li>
                        <li class="nav-item rounded-4 px-3 bg-primary">
                            <a href="{{ route('register') }}"
                                class="nav-link text-white">Register</a>
                        </li>
                    @else
                        <a href="{{ route('myaccount.orders') }}" class="nav-link active">My
                            Orders</a>
                        <form action="{{ route('logout') }}" method="POST" id="logout">
                            <li class="nav-item">
                                <a class="nav-link active" role="button"
                                    onclick="document.getElementById('logout').submit();">Logout</a>
                            </li>
                            @csrf
                        </form>
                    @endguest
            </div>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="mt-5">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <h5 class="text-white">Navigation</h5>
                        <ul class="list-unstyled">
                            <li><a href="article.html">My Article</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">More</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled text-footer">
                            <li>Address: JL. Prof. Sudarto, Tembalang, Semarang</li>
                            <li>Email: dafariski555@gmail.com</li>
                            <li>Phone: 088776454332</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <center>
                        <p class="mb-0 text-white">Dibuat oleh @dafariski | 2022</p>
                    </center>
                </div>
            </div>
        </div>
    </footer>
    {{-- END FOOTER --}}

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>
