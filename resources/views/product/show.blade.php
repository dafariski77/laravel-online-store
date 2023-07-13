@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <style>
        form {
            text-align: center;
        }

        .value-button {
            display: inline-block;
            border: 1px solid #ddd;
            margin: 0px;
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            padding: 7px 0;
            background: #eee;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .value-button:hover {
            cursor: pointer;
        }

        form #decrease {
            margin-right: -4px;
            border-radius: 8px 0 0 8px;
        }

        form #increase {
            margin-left: -4px;
            border-radius: 0 8px 8px 0;
        }

        form #input-wrap {
            margin: 0px;
            padding: 0px;
        }

        input#number {
            text-align: center;
            border: none;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            width: 40px;
            height: 40px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <div class="container">
        <div class="my-5">
            <div class="row g-5">
                <div class="col-md-4">
                    <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}"
                        class="img-fluid rounded-3" />
                </div>
                <div class="col-md-5 pe-5">
                    <h5 class="fw-bold">
                        {{ $viewData['product']->getName() }}
                    </h5>
                    <h3 class="fw-bold">
                        ${{ $viewData['product']->getPrice() }}
                    </h3>
                    <h6 class="mt-5 mb-3 fw-bold">Description</h6>
                    <hr />
                    <p class="card-text">{{ $viewData['product']->getDescription() }}</p>
                </div>
                <div class="col-md-3 card border-light" style="height: 14rem">
                    <div class="card-body">
                        <div class="card-title">Set Amount</div>
                        <h5>Quantity</h5>
                        <form
                            action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}"
                            method="POST">
                            @csrf
                            <div class="value-button" id="decrease" onclick="decreaseValue()"
                                value="Decrease Value">-</div>
                            <input type="number" id="number" value="1" min="1"
                                max="10" name="quantity" />
                            <div class="value-button" id="increase" onclick="increaseValue()"
                                value="Increase Value">+</div>
                            <div class="mt-3 w-100">
                                <button class="btn bg-primary text-white w-100"
                                    type="submit">
                                    Add to cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 1 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 1 : value;
            value < 2 ? value = 2 : '';
            value--;
            document.getElementById('number').value = value;
        }
    </script>
@endsection
