@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <p class="m-0">Admin / Categories / {{ $viewData['category']->getId() }}</p>
    <h3>Edit Products</h3>
    <div class="card my-4">
        <div class="card-header">
            Edit Category
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
                action="{{ route('admin.category.update', ['id' => $viewData['category']->getId()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="form-label">Name
                    :</label>
                <input type="text" name="name"
                    value="{{ $viewData['category']->getName() }}" type="text"
                    class="form-control">

                <label class="form-label mt-3">Image
                    :</label>
                <input type="file" class="form-control" name="image">

                <div class="col">
                    &nbsp;
                </div>
                <a type="button" class="btn btn-secondary" href="/admin/category">Cancel</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
