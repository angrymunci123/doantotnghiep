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
<div style="background-color: #F9F9F9">
    <div class="container-fluid page-header">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Order Detail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex/order_history">Order History</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Order Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <br>
    <div class="container-fluid pt-4 px-4" style="background-color: white">
        <div class="row g-4">
            <h2 style="text-align:center; color:black;">Order Detail</h2>
            <table class='table table-bordered' style='width:1000px; margin:auto' id='dataTable' cellspacing='0'>
                <tr style="background-color: #44C250">
                    <th style='font-size:20px; color:white'>General Information</th>
                <tr>
                <tr style='background-color:white;'>
                    <td>
                        @foreach($product_order_detail as $prd_order) @endforeach
                        <b>Order ID: </b>{{$prd_order->order_id}}
                        <br>
                        <b>Status: </b>{{$prd_order->status}}
                        <br>
                        <b>VAT Country: </b>Vietnam
                        <br>
                        <b>Language: </b> English
                        <br>
                        <b>Payment Method: </b>{{$prd_order->payment_method_name}}
                            <br><br>
                        <table class="table table-bordered" style="width: 1000px; margin:auto">
                            <tr>
                                <th>Product Name</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @php $total = 0 @endphp
                            @foreach($product_order_detail as $prd_order)
                                @php $total += $prd_order->price * $prd_order->quantity @endphp
                                <tr>
                                    <td>{{ $prd_order->product_name }}</td>
                                    <td>{{ $prd_order->size }}</td>
                                    <td>{{number_format($prd_order->price)}} VND</td>
                                    <td>{{$prd_order->quantity}}</td>
                                    <td>{{number_format($prd_order->price * $prd_order->quantity)}} VND</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <b>Total:</b> {{number_format($total)}} VND
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class='row' style='width:1025px; margin:auto'>
            <div class='column' style='margin:auto'>
                <table class='table table-bordered' style='width:400px'>
                    <tr style='background-color:#44C250; color:white; font-size:20px'>
                        <th style="color:white">Shipping Address</th>
                    </tr>
                    <tr>
                        <td>
                            <b> Shipping Unit: </b>{{$prd_order->shipping_unit_name}}
                            <br>
                            <b> Address: </b>{{$prd_order->address}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class='col-sm-1' style='margin:auto; margin-top:-130px'>
                <table class='table table-bordered' style='width:530px'>
                    <tr style='background-color:#44C250; font-size:20px'>
                        <th style="color:white">Customer Address</th>
                    </tr>
                    <tr>
                        <td>
                            <b> Customer Name: </b>{{$prd_order->customer_name}}
                            <br>
                            <b> Phone Number: </b>{{$prd_order->phone_number}}
                            <br>
                            <b> Email: </b>{{$prd_order->email}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4" style="background-color: white">
<table style="width:500px; margin:auto">
    <tr>
        <td>
            <div class="col-sm-4 col-xl-1">
                <div class="justify-content-between p-4">
                    @if($prd_order->status == "Pending")
                        <form onclick="return confirm('Are you sure you want to cancel this order?');"
                              action="/storeIndex/order_history/cancel_order/order_id={{$prd_order->order_id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-1" style="width:100px">Cancel</button>
                        </form>
                    @endif
                </div>
            </div>
        </td>
        <td>
            <div class="col-sm-4 col-xl-1">
                <div class="justify-content-between p-4">
                    <form action="/storeIndex/order_history" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-warning rounded-1">Back</button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
</table>
</div>
</body>
</html>
@endsection
