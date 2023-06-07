@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Our Products</h2>
        <div class="row g-4 mt-5">
            @foreach ($viewData['categories'] as $category)
                <div class="col-lg-2 shadow-sm rounded-3 bg-white" data-aos="zoom-out"
                    data-aos-duration="500">
                    <div class="box-part">
                        <img src="{{ asset('/storage/' . $category->getImage()) }}"
                            class="product-img" />
                        <div class="title mt-4 ms-3">
                            <h5 class="text-primary">{{ $category->getName() }}</h5>
                            <h6 class=" fw-bold">${{ $category->getPrice() }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
