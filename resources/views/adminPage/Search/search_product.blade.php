@extends('adminPage.layout')
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
@include('adminPage.productManagement.filter')
<div class="row g-4">
    <div class="h-100 rounded p-4" style="background-color: white">
        <table class="table table-bordered">
            <thead>
            <tr style="background-color:#44C250">
                <th style="color:white">ID</th>
                <th style="color:white">Product Name</th>
                <th style="color:white">Brand</th>
                <th style="color:white">Warehouse</th>
                <th style="color:white">Price</th>
                <th style="color:white">Image</th>
                <th style="color:white">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($search_product as $prd)
                <tr>
                    <td>{{$prd->product_id}}</td>
                    <td>{{$prd->product_name}}</td>
                    <td value="{{$prd->brand_id}}">{{$prd->brand_name}}</td>
                    <td value="{{$prd->warehouse_id}}">{{$prd->product_source}}</td>
                    <td>{{number_format($prd->price)}} VND</td>
                    <td>
                        <img src="/image/{{$prd->image}}" width="300" length="300">
                    </td>
                    <td>
                        <form action="/admin/product_management/view_product/{{$prd->product_id}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-warning" style="width:100px">View</button>
                        </form>
                        <br>
                        <form action="/admin/product_management/edit_product/{{$prd->product_id}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-primary" style="width:100px">Update</button>
                        </form>
                        <br>
                        <form onclick="return confirm('Are you sure you want to delete this product?');"
                              action="/admin/product_management/delete_product/{{$prd->product_id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $search_product->onEachSide(1)->withQueryString()->links() }}
    </div>
</div>
</body>
</html>
@endsection
