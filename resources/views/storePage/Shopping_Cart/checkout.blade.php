@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main id="main" role="main" style="background-color: #f9f9f9">
    <br>
    <div class="container card rounded-1">
    <section id="checkout-banner">
        <div class="container py-5 text-center">
            <i class="fa fa-credit-card fa-3x text-light"></i>
            <h2 class="my-3">Checkout form</h2>
        </div>
    </section>
    <section id="checkout-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @php $total = 0 @endphp
                        @foreach(session('shopping_cart') as $product_id => $details)
                            @php $total += $details['price'] *  $details['quantity'] @endphp
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{$details['product_name']}}</h6>
                                <small class="text-muted">Quantity: {{$details['quantity']}}</small>
                                <br>
                                <small class="text-muted">Size: {{$details['size']}}</small>
                            </div>
                            <span class="text-muted">{{number_format($details['price'])}} VND</span>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total</span>
                            <strong>{{number_format($total)}} VND</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    @foreach($display_customer as $customer)
                    <form class="needs-validation" action="/storeIndex/checkout_process" method="post" enctype="multipart/form-data">
                        <h4 class="mb-3">Billing address</h4>
                        @csrf
                            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                                <div class="row" id="div">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <strong>Customer name</strong>
                                            <input type="text" class="form-control" value="{{$customer->customer_name}}" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <strong>Email address</strong>
                                            <input type="text" class="form-control" value="{{$customer->email}}" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <strong>Phone number</strong>
                                            <input type="text" class="form-control" value="{{$customer->phone_number}}" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <strong>Delivery address</strong>
                                            <input type="text" class="form-control" value="{{$customer->address}}" readonly>
                                        </div>
                                    </div>
                                </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment Options</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="payment_method" name="payment_id" type="radio" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="payment_method" name="payment_id" type="radio" class="custom-control-input" value="2" required>
                                <label class="custom-control-label" for="debit">Payment on delivery</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">
                            <i class="fa fa-credit-card"></i> Place Order</button>
                    </form>
                    @endforeach
                    <br>
                    <form action="/storeIndex/cart">
                        <button class="btn btn-warning btn-lg rounded-1">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>
</body>
<script>
    function hideShowDiv(val) {
        if (val == 1) {
            document.getElementById('div').style.display='none';
        }
        if (val == 2) {
            document.getElementById('div').style.display='block';
        }
    }
</script>
</html>
@endsection
