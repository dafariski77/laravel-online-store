@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold text-center">Let's Checkout</h2>
        <div class="mt-120">
            <div
                class="d-flex flex-row justify-content-between col-lg-8 align-items-center mb-2">
                <h5 class="fw-bold">
                    Products in Cart
                </h5>
                <a href="{{ route('cart.delete') }}"
                    class="btn btn-danger mb-2 {{ count($viewData['products']) > 0 ? '' : 'disabled btn-outline-primary text-dark' }}">Remove
                    all</a>
            </div>
            <div class="row g-2">
                <div class="col-lg-8">
                    <div class="d-flex bg-white p-3 rounded-3">
                        @if (count($viewData['products']) > 0)
                            @foreach ($viewData['products'] as $product)
                                <img src="{{ asset('/storage/' . $product->getImage()) }}"
                                    alt="product-cart" class="rounded me-3" height="80">
                                <div class="col">
                                    <p class="fs-5 m-0">{{ $product->getName() }}</p>
                                    <p class="fw-bold m-0">${{ $product->getPrice() }}</p>
                                    <p class="m-0 text-primary" style="font-size: 14px">
                                        Quantity :
                                        {{ session('products')[$product->getId()] }}
                                    </p>
                                    @php
                                        $count = session('products')[$product->getId()];
                                    @endphp
                                </div>
                                <div class="d-flex align-items-center me-lg-4">
                                    <a href="" class="fs-5 text-danger">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex justify-content-center p-3 rounded-3 bg-white">
                                <h4 class="my-4">Your cart is empty. Let's shop!</h4>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex bg-white p-3 rounded-3 flex-column">
                        <h5 class="fw-bold">Shopping Summary</h5>
                        <div class="d-flex justify-content-between mt-2">
                            <p>Total bill {{ count($viewData['products']) > 0 ? $count : 0 }}
                                products</p>
                            <p>${{ $viewData['total'] }}</p>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="fw-bold">Total Bill</h5>
                            <h5 class="fw-bold">${{ $viewData['total'] }}</h5>
                        </div>
                        <a href="{{ route('cart.purchase') }}"
                            class="btn bg-primary text-white my-4 rounded-4 fs-5 fw-bold py-3">Purchase</a>
                    </div>
                </div>
            </div>

            {{-- <br><br>
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['products'] as $product)
                            <tr>
                                <td>{{ $product->getId() }}</td>
                                <td>{{ $product->getName() }}</td>
                                <td>${{ $product->getPrice() }}</td>
                                <td>{{ session('products')[$product->getId()] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="text-end">
                        <a class="btn btn-outline-secondary mb-2"><b>Total to pay :
                            </b>${{ $viewData['total'] }}</a>
                        @if (count($viewData['products']) > 0)
                            <a href="{{ route('cart.purchase') }}"
                                class="btn bg-primary text-white mb-2">Purchase</a>
                            <a href="{{ route('cart.delete') }}">
                                <button class="btn btn-danger mb-2">
                                    Remove all products from Cart
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
            </div> --}}
        </div>
    @endsection
