@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="row">
        <h2 style="display:block; text-align:center; color:black;">Order Management </h2>
    </div>
    <div class="card-body">
        @if(Session::has('notification'))
            <div class="alert alert-success">
                {{Session::get('notification')}}
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <table>
            <tr>
                <td>
                    <label>Filter:</label>
                </td>
                <td><br></td>
                <td>
                    <form method="get" action="/admin/order_management/pending">
                        <button name="controller=create" class="btn btn-warning">Pending</button>
                    </form>
                </td>
                <td><br></td>
                <td>
                    <form method="get" action="/admin/order_management/confirmed">
                        <button name="controller=create" class="btn btn-primary">Confirmed</button>
                    </form>
                </td>
                <td><br></td>
                <td>
                    <form method="get" action="/admin/order_management/shipping">
                        <button name="controller=create" class="btn btn-primary">Shipping</button>
                    </form>
                </td>
                <td><br></td>
                <td>
                    <form method="get" action="/admin/order_management/success">
                        <button name="controller=create" class="btn btn-primary">Success</button>
                    </form>
                </td>
                <td><br></td>
                <td>
                    <form method="get" action="/admin/order_management/canceled">
                        <button name="controller=create" class="btn btn-danger">Canceled</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <div class="row g-4">
        <div class="h-100 rounded p-4" style="background-color: white">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:#44C250">
                    <th style="color:white">ID</th>
                    <th style="color:white">Order Date</th>
                    <th style="color:white">Customer Name</th>
                    <th style="color:white">Status</th>
                    <th style="color:white">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($product_order as $prd_order)
                    <tr>
                        <td>{{$prd_order->order_id}}</td>
                        <td>{{$prd_order->order_date}}</td>
                        <td>{{$prd_order->customer_name}}</td>
                        <td>{{$prd_order->status}}</td>
                        <td style="width:100px">
                            @if($prd_order->status == "Pending")
                                <form action="/admin/order_management/view_pending_order/order_id={{$prd_order->order_id}}" method="GET">
                                    <button type="submit" class="btn btn-warning" style="width:100px">View</button>
                                </form>
                                <br>
                                <form onclick="return confirm('Are you sure you want to cancel this order?');"
                                      action="/admin/order_management/cancel_order/order_id={{$prd_order->order_id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="width:100px">Cancel</button>
                                </form>
                            @endif

                            @if($prd_order->status != "Pending" && $prd_order->status != "Canceled")
                            <form action="/admin/order_management/view_order/order_id={{$prd_order->order_id}}" method="GET">
                                <button type="submit" class="btn btn-warning" style="width:100px">View</button>
                            </form>
                            @endif

                                @if($prd_order->status == "Canceled")
                                    <form action="/admin/order_management/view_canceled_order/order_id={{$prd_order->order_id}}" method="GET">
                                        <button type="submit" class="btn btn-warning" style="width:100px">View</button>
                                    </form>
                                @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $product_order->onEachSide(1)->links() }}
        </div>
    </div>
@endsection

