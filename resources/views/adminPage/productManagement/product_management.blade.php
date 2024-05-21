@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="card-body">
        @if(Session::has('notification'))
            <div class="alert alert-success">
                {{Session::get('notification')}}
            </div>
        @endif
    </div>
    @include('adminPage.productManagement.filter')
    <div class="row g-4">
        <div class="h-100 rounded p-4" style="background-color: white">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:#44C250">
                    <th style="color:white">ID</th>
                    <th style="color:white">Product Name</th>
                    <th style="color:white">Size</th>
                    <th style="color:white">Brand</th>
                    <th style="color:white">Warehouse</th>
                    <th style="color:white">Price</th>
                    <th style="color:white">Image</th>
                    <th style="color:white">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($inner_join as $inj)
                    <tr>
                        <td>{{$inj->product_id}}</td>
                        <td>{{$inj->product_name}}</td>
                        <td>{{$inj->size}}</td>
                        <td value="{{$inj->brand_id}}">{{$inj->brand_name}}</td>
                        <td value="{{$inj->warehouse_id}}">{{$inj->product_source}}</td>
                        <td>{{number_format($inj->price)}} VND</td>
                        <td>
                            <img src="/image/{{$inj->image}}" width="300" length="300">
                        </td>
                        <td style="width:100px">
                            <form action="/admin/product_management/view_product/product_id={{$inj->product_id}}/product_detail_id={{$inj->product_detail_id}}/size={{$inj->size}}" method="GET">
                                <button type="submit" class="btn btn-warning" style="width:100px">View</button>
                            </form>
                            <br>
                            <form action="/admin/product_management/edit_product/{{$inj->product_id}}" method="GET">
                                <button type="submit" class="btn btn-primary" style="width:100px">Update</button>
                            </form>
                            <br>
                            <form onclick="return confirm('Are you sure you want to delete this item? This action will also delete all product details that have the same product ID.');"
                                  action="/admin/product_management/delete_product/{{$inj->product_id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $inner_join->onEachSide(1)->links() }}
        </div>
    </div>
@endsection

