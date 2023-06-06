@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container col-xxl-12 px-4 pb-5 ">
        <section id="hero">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-lg-5">
                <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="{{ asset('/img/hero.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500">
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Let's Shop Together at Online
                        Store</h1>
                    <p class="lead">Discover a world of convenience and endless
                        possibilities at Online Store. We are dedicated to providing
                        you with an exceptional online shopping experience like no other.
                        Whether you're searching for trendy fashion, high-quality electronics,
                        home essentials, or unique gifts, we've got you covered.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button"
                            class="btn btn-primary btn-lg px-4 me-md-2 rounded-4">Primary</button>
                        <button type="button"
                            class="btn btn-outline-primary btn-lg px-4 rounded-4">Default</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="category" class="my-4 py-2">
            {{-- <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-semibold">Explore by Category</h1>
                    <h6 class="fw-bold">Show all >></h6>
            </div> --}}
            <h6>Start exploring our product by categories</h6>
            <h2 class="fw-bold">We have some Categories for you</h2>
            <div class="row mt-3 g-3 justify-content-center">
                @foreach ($viewData['categories'] as $category)
                    <div class="col-lg-3 category p-3 rounded-3 me-lg-3">
                        <div class="feature d-flex align-items-center">
                            <div class="me-3">
                                <img alt="{{ $category->getName() }}"
                                    src="{{ asset('/storage/' . $category->getImage()) }}"
                                    height="50" class="rounded" />
                            </div>
                            <div>
                                <h5><a href="{{ route('category.show', $category->getId()) }}"
                                        class="text-dark">{{ $category->getName() }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mb-5">
                <button class="btn btn-outline-primary rounded-4 mt-5 py-3 px-4 fw-bold">
                    Show More
                    Categories
                </button>
            </div>
        </section>
        <section id="trends">
            <div class="trends">
                <h2 class="fw-bold">Trends Product</h2>
                <div class="row g-4 mt-2">
                    @foreach ($viewData['products'] as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product product-block p-3 rounded-3">
                                <img src="{{ asset('/storage/' . $product->getImage()) }}"
                                    class="rounded-3 product-img">
                                <h3 class="product-title mt-5 mb-1 text-primary">
                                    {{ $product->getName() }}
                                </h3>
                                <p class="product-text">${{ $product->getPrice() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mb-5">
                    <button class="btn btn-outline-primary rounded-4 mt-5 py-3 px-4 fw-bold">
                        Explore All Products
                    </button>
                </div>
        </section>
    </div>

@endsection
