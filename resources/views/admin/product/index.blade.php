@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <p class="m-0">Admin / Products</p>
    <h3>Manage Products</h3>
    <div class="card my-4">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                Add Products
            </button>
            <table class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form
                                    action="{{ route('admin.product.delete', $product->getId()) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Products</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            @if ($errors->any())
                                <ul class="alert alert-danger list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>- {{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form method="POST" action="{{ route('admin.product.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <label class="form-label">Name:</label>
                                <input type="text" name="name"
                                    value="{{ old('name') }}" class="form-control">
                                <label class="form-label mt-3">Price:</label>
                                <input type="number" class="form-control"
                                    value="{{ old('price') }}" name="price">
                                <label class="form-label mt-3">Image</label>
                                <input type="file" class="form-control" name="image">
                                <label class="form-label mt-3">Category:</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($viewData['categories'] as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
