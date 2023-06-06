@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST"
                action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name
                                :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="text" name="name"
                                    value="{{ $viewData['product']->getName() }}"
                                    type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price
                                :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="number" class="form-control" name="price"
                                    value="{{ $viewData['product']->getPrice() }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price
                                :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label
                                class="col-lg-2 col-md-6 col-sm-12 col-form-label">Category:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select name="category_id" class="form-control">
                                    @foreach ($viewData['categories'] as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ $viewData['product']->getDescription() }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
