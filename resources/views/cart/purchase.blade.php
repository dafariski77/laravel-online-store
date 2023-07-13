@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="alert alert-success mt-5" role="alert">
            Congratulations, purchase completed. Order number is
            <b>#{{ $viewData['order']->getId() }}</b>
        </div>
    </div>
@endsection
