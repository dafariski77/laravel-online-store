@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container my-5">
        <h2 class="fw-bold text-center">{{ $viewData['title'] }}</h2>
        <div class="row g-4 mt-5 justify-content-center px-3">
            @foreach ($viewData['categories'] as $category)
                <div class="col-lg-2 rounded-3 bg-white mx-3">
                    <div class="box-part">
                        <img src="{{ asset('/storage/' . $category->getImage()) }}"
                            class="product-img" />
                        <div class="title mt-4 ms-3">
                            <p class="mb-1"><small class="color-small">
                                    {{ $category->category->name }}
                                </small></p>
                            <a href="{{ route('product.show', $category->getId()) }}"
                                class="fs-6">
                                <h6 class="text-dark">{{ $category->getName() }}
                                </h6>
                            </a>
                            <h5 class=" fw-bold">${{ $category->getPrice() }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
