@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Explore by Category</h2>
        <div class="row mt-5 g-2 justify-content-center">
            @foreach ($viewData['categories'] as $category)
                <div class="col-lg-3 category p-3 rounded-3 me-3">
                    <div class="feature d-flex align-items-center">
                        <div class="me-3">
                            <img alt="Web Studio"
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
    </div>

@endsection
