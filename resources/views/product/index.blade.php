@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Our Products</h2>
        <div class="row g-4 mt-5">
            @foreach ($viewData['products'] as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product product-block p-3 rounded-3">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}"
                            class="rounded-3 product-img">
                        <h3 class="product-title mt-5 mb-1 text-primary">
                            <a
                                href="{{ route('product.show', $product->getId()) }}" class="text-primary">{{ $product->getName() }}</a>
                        </h3>
                        <p class="product-text">${{ $product->getPrice() }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
