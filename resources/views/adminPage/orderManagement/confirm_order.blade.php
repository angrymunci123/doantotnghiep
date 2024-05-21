@extends('adminPage.layout')
@section('content')
    <div class="card-header" style="background-color: white" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;">Confirm Order</h3>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white">
        <form action="/admin/order_management/confirm_order_process/order_id={{$confirm_order->order_id}}" method="POST" enctype='multipart/form-data'/>
            @csrf
            <div class="col-md-12">
                <div hidden class="form-group">
                    @foreach($admin as $ad)
                        <input hidden type="number" name="user_id" value='{{session('user_id')}}'/>
                        <strong>Admin Confirming This Order: </strong>{{$ad->full_name}}
                    @endforeach
                </div>
                <br>
                <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                <div class="form-group">
                    @foreach($admin as $ad)
                        <input hidden type="number" name="customer_id" value='{{$confirm_order->customer_id}}'/>
                        <strong>Customer: </strong>{{$confirm_order->customer_name}}
                    @endforeach
                </div>
                <br>
                <div class="form-group">
                    <input hidden type="number" name="payment_id" value='{{$confirm_order->payment_id}}'/>
                    <strong>Payment Method: </strong>{{$confirm_order->payment_method_name}}
                </div>
                <br>
                <div class="form-group">
                    <strong>Order Status</strong>
                    <select class="form-control" name='status'>
                        <option type="text">Confirmed</option>
                        <option type="text">Shipping</option>
                        <option type="text">Success</option>
                        <option type="text">Canceled</option>
                    </select>
                </div>
                </div>
                <br>
                <div class="form-group">
                    <strong>Shipping Unit</strong>
                    <select class="form-control" name='shipping_id'>
                        @foreach($shipping_unit as $shipping)
                        <option type="number" value="{{$shipping->shipping_id}}">{{$shipping->shipping_unit_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="col-sm-4 col-xl-1">
                <button type="submit" class="btn btn-primary mt-2" style="width:150px">Confirm Order</button>
            </div>
        </form>
        <br>
        <div class="col-sm-4 col-xl-1">
            <form action="/admin/order_management" enctype="multipart/form-data">
                <button type="submit" class="btn btn-warning">Back</button>
            </form>
        </div>
    </div>
    </div>
@endsection
