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
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white vh-100 fixed-bottom"
            style="width: 280px;">
            <a href="/"
                class="d-flex align-items-center my-3 link-dark text-decoration-none justify-content-center">
                <span class="fs-4 fw-semibold">Admin Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mt-3">
                <li class="nav-item">
                    <a href="{{ route('admin.home.index') }}" class="nav-link active"
                        aria-current="page">
                        <i class="bi bi-house-door me-1"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}"
                        class="nav-link link-dark">
                        <i class="bi bi-shop-window me-1"></i> Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}"
                        class="nav-link link-dark">
                        <i class="bi bi-tags me-1"></i> Category
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}" class="nav-link link-dark">
                        <i class="bi bi-arrow-left me-1"></i> Back to home page
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#"
                    class="d-flex align-items-center link-dark text-decoration-none">
                    <img src="https://github.com/mdo.png" alt="" width="32"
                        height="32" class="rounded-circle me-2">
                    <strong>{{ $viewData['name'] }}</strong>
                </a>
            </div>
        </div>
        <div class="col content-grey" style="margin-left: 285px">
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
