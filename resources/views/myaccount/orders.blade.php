@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container pt-5">
        @forelse ($viewData['orders'] as $order)
            <div class="col-lg-12 mb-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">Order #{{ $order->getId() }}</h4>
                        <p>{{ $order->getCreatedAt() }}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 class="fw-bold">Total ${{ $order->getTotal() }}</h5>
                    </div>
                </div>
                @foreach ($order->getItems() as $item)
                    <div class="d-flex bg-white p-3 rounded-3">
                        <img src="{{ asset('/storage/' . $item->getProduct()->getImage()) }}"
                            alt="product-cart" class="rounded me-3" width="80"
                            height="80" style="object-fit: contain" />
                        <div class="col">
                            <p class="fs-5 m-0">{{ $item->getProduct()->getName() }}</p>
                            </p>
                            <p class="m-0 text-primary" style="font-size: 14px">
                                Quantity :
                                {{ $item->getQuantity() }}
                            </p>
                        </div>
                        <div class="d-flex align-items-center me-3">
                            <p class="fw-bold m-0">${{ $item->getPrice() }}
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <div class="alert alert-danger" role="alert">
                Seems to be that you have not purchased anything in our store :'
            </div>
        @endforelse
    </div>
@endsection
