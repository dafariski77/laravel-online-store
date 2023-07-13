@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Explore by Category</h2>
        <div class="row mt-5 g-3 justify-content-between col px-1">
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
    </div>

@endsection
