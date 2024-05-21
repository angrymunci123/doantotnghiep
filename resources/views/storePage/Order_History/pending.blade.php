@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street</title>
</head>
<div>
    <div style="background-color: #F9F9F9">
        <div class="container-fluid page-header">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Order History</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Order History</li>
                    </ol>
                </nav>
            </div>
        </div>
        <br>
        <div>
            <div class="h-100 rounded p-4" style="background-color: white">
                <table>
                    <tr>
                        <td>
                            <label>Filter:</label>
                        </td>
                        <td><br></td>
                        <td>
                            <form method="get" action="/storeIndex/order_history/pending">
                                <button name="controller=create" class="btn btn-warning rounded-1">Pending</button>
                            </form>
                        </td>
                        <td><br></td>
                        <td>
                            <form method="get" action="/storeIndex/order_history/success">
                                <button name="controller=create" class="btn btn-primary rounded-1">Success</button>
                            </form>
                        </td>
                        <td><br></td>
                        <td>
                            <form method="get" action="/storeIndex/order_history/canceled">
                                <button name="controller=create" class="btn btn-danger rounded-1">Canceled</button>
                            </form>
                        </td>
                    </tr>
                </table>
                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color:#44C250">
                        <th style="color:white">ID</th>
                        <th style="color:white">Order Date</th>
                        <th style="color:white">Product Name</th>
                        <th style="color:white">Customer Name</th>
                        <th style="color:white">Status</th>
                        <th style="color:white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order_history as $pnd)
                        <tr>
                            <td>{{$pnd->order_id}}</td>
                            <td>{{$pnd->order_date}}</td>
                            <td>{{$pnd->product_name}}</td>
                            <td>{{$pnd->consignee}}</td>
                            <td>{{$pnd->status}}</td>
                            <td style="width:100px">
                                <form action="/storeIndex/order_history/view_order/order_id={{$pnd->order_id}}" method="GET">
                                    <button type="submit" class="btn btn-warning rounded-1" style="width:100px">View</button>
                                </form>
                                <br>
                                <form onclick="return confirm('Are you sure you want cancel this order?');"
                                      action="/storeIndex/order_history/cancel_order/order_id={{$pnd->order_id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger rounded-1" style="width:100px">Cancel This Order</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $order_history->onEachSide(1)->links() }}
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <a href="https://www.freerideboardshop.com/collections/adidas">
                <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
            </a>
        </div>
    </div>
</div>
</body>
</html>
<style>
    sidebar-filter {
        padding: 30px;
    }
</style>
@endsection
