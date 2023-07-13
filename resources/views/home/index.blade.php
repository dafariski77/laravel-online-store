@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container pb-5">
        <section id="hero">
            <div id="carouselExampleInterval" class="carousel slide rounded-4 mt-5"
                data-bs-ride="carousel">
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <a href="/products">
                            <img src="{{ asset('/img/banner-4.jpg') }}"
                                class="d-block w-100 rounded-4">
                        </a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="/products">
                            <img src="{{ asset('/img/banner-5.jpg') }}"
                                class="d-block w-100 rounded-4">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/products">
                            <img src="{{ asset('/img/banner-3.jpg') }}"
                                class="d-block w-100 rounded-4">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="trends">
            <div class="trends">
                <h3 class="fw-bold">Recent Products</h3>
                <div class="row g-4 mt-2 d-flex justify-content-between px-3">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="col-lg-2 rounded-3 bg-white">
                            <div class="box-part">
                                <img src="{{ asset('/storage/' . $viewData['products'][$i]->getImage()) }}"
                                    class="product-img" />
                                <div class="title mt-4 ms-3">
                                    <p class="mb-1"><small class="color-small">
                                            {{ $viewData['products'][$i]->category->name }}
                                        </small></p>
                                    <a href="{{ route('product.show', $viewData['products'][$i]->getId()) }}"
                                        class="fs-6">
                                        <h6 class="text-dark">
                                            {{ $viewData['products'][$i]->getName() }}
                                        </h6>
                                    </a>
                                    <h5 class=" fw-bold">
                                        ${{ $viewData['products'][$i]->getPrice() }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <section id="category" class="mt-5 py-4">
            <h6>Start exploring our products by categories</h6>
            <h3 class="fw-bold">We have some Categories for you</h3>
            <div class="row mt-3 g-3 justify-content-between col px-1">
                @foreach ($viewData['categories'] as $category)
                    <div class="category p-3 rounded-3 col-2 me-1">
                        <div class="feature d-flex align-items-center">
                            <div class="me-3">
                                <img alt="{{ $category->getName() }}"
                                    src="{{ asset('/storage/' . $category->getImage()) }}"
                                    height="50" class="rounded" />
                            </div>
                            <div>
                                <h6><a href="{{ route('category.show', $category->getId()) }}"
                                        class="text-dark">{{ $category->getName() }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section id="show">
            <div class="row g-4 mt-2 d-flex justify-content-between px-2">
                <div class="col-lg-3 ps-0">
                    <img src="{{ asset('/img/show-1.png') }}"
                        class="show-product rounded-3 w-100" />
                </div>
                <div class="col-lg-3">
                    <img src="{{ asset('/img/show-3.jpeg') }}"
                        class="show-product rounded-3 w-100" />
                </div>
                <div class="col-lg-3">
                    <img src="{{ asset('/img/show-2.jpg') }}"
                        class="show-product rounded-3 w-100" />
                </div>
                <div class="col-lg-3 pe-0">
                    <img src="{{ asset('/img/show-4.png') }}"
                        class="show-product rounded-3 w-100" />
                </div>
            </div>
        </section>
        <section id="show">
            <div class="row g-4 mt-2 d-flex justify-content-between px-2">
                <div class="col-lg-8 ps-0">
                    <img src="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt227316ff2598f358/6491f77a352ac626a8da498a/Summer_Editorial-_Get_up_&_go_slips_onsSecondaryA.jpg?format=jpg&auto=webp&height=438"
                        class="show-product rounded-3 w-100" />
                </div>
                <div class="col-lg-4 pe-0">
                    <img src="https://prod-spyne.s3.amazonaws.com/photos/event-planner/null/spyne/1536769630868/logo_eXl6161Xit."
                        class="show-product rounded-3 w-100" />
                </div>
            </div>
        </section>
        <section id="sign">
            <div class="trends">
                <h3 class="fw-bold">Random Products</h3>
                <div class="row g-4 mt-2 d-flex justify-content-between px-3">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="col-lg-2 rounded-3 bg-white">
                            <div class="box-part">
                                <img src="{{ asset('/storage/' . $viewData['products_rand'][$i]->getImage()) }}"
                                    class="product-img" />
                                <div class="title mt-4 ms-3">
                                    <p class="mb-1"><small class="color-small">
                                            {{ $viewData['products_rand'][$i]->category->name }}
                                        </small></p>
                                    <a href="{{ route('product.show', $viewData['products_rand'][$i]->getId()) }}"
                                        class="fs-6">
                                        <h6 class="text-dark">
                                            {{ $viewData['products_rand'][$i]->getName() }}
                                        </h6>
                                    </a>
                                    <h5 class=" fw-bold">
                                        ${{ $viewData['products_rand'][$i]->getPrice() }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
        </section>
    </div>
    {{-- Footer --}}
    <footer class="mt-5">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <h5 class="text-white">Navigation</h5>
                        <ul class="list-unstyled">
                            <li><a href="products">Products</a></li>
                            <li><a href="categories">Categories</a></li>
                            <li><a href="cart">Cart</a></li>
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

@endsection
