@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Our Products</h2>
        <div class="row g-4 mt-5">
            @foreach ($viewData['categories'] as $category)
                <div class="col-md-3 col-sm-6">
                    <div class="product product-block p-3 rounded-3">
                        <img src="{{ asset('/storage/' . $category->getImage()) }}"
                            class="rounded-3 product-img">
                        <h3 class="product-title mt-5 mb-1 text-primary">
                            {{ $category->getName() }}
                        </h3>
                        <p class="product-text">${{ $category->getPrice() }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
