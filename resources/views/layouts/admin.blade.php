<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin - Online Store')</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
    <div class="row g-0">
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}"
                class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr>
            <ul class="nav flex-column">
                <li>
                    <a href="{{ route('admin.home.index') }}" class="nav-link text-white">
                        - Admin - Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}"
                        class="nav-link text-white">
                        - Admin - Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}"
                        class="nav-link text-white">
                        - Admin - Category
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}"
                        class="mt-2 btn bg-primary text-white">
                        Go back to the home page
                    </a>
                </li>
            </ul>
        </div>
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">
                    Admin
                </span>
                <img src="{{ asset('/img/undraw_profile.svg') }}"
                    class="img-profile rounded-circle">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a href="https://instagram.com/dafariski77"
                    class="text-reset fw-bold text-decoration-none" target="_blank">
                    Dafa Riski</a>
            </small>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
