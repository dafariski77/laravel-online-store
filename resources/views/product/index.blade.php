@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container my-5">
        <h2 class="fw-bold text-center">Our Products</h2>
        <div class="row g-4 mt-5 justify-content-center px-3">
            @foreach ($viewData['products'] as $product)
                <div class="col-lg-2 rounded-3 bg-white mx-3">
                    <div class="box-part">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}"
                            class="product-img" />
                        <div class="title mt-4 ms-3">
                            <p class="mb-1"><small class="color-small">
                                    {{ $product->category->name }}
                                </small></p>
                            <a href="{{ route('product.show', $product->getId()) }}"
                                class="fs-6">
                                <h6 class="text-dark">{{ $product->getName() }}
                                </h6>
                            </a>
                            <h5 class=" fw-bold">${{ $product->getPrice() }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
