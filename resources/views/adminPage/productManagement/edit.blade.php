@extends('adminPage.layout')
@section('content')
    <div class="card-header" style="background-color: white" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Update Product: {{$product->product_name}} </h3>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white">
    <form action="/admin/product_management/update_product/{{$product->product_id}}" method="POST" enctype='multipart/form-data'>
        @csrf
{{--        @method('put')--}}
        <div class="col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Brand</strong>
                <select class="form-control" name='brand_id'>
                    @foreach($brand as $brd)
                        <option type="number" name='brand_id' value='{{$brd->brand_id}}'>{{$brd->brand_name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <strong>Warehouse</strong>
                <select class="form-control" name='warehouse_id'>
                    @foreach($warehouse as $wrh)
                        <option type="number" name='warehouse_id' value='{{$wrh->warehouse_id}}'>{{$wrh->product_source}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <strong>Price</strong>
                <input type="text" name="price" value="{{$product->price}}" class="form-control" required>
            </div>
        </div>
        <br>
        <div class="col-sm-4 col-xl-1">
            <button type="submit" class="btn btn-primary mt-2" style="width:100px">Update</button>
        </div>
    </form>
        <br>
        <div class="col-sm-4 col-xl-1">
            <form action="/admin/product_management" enctype="multipart/form-data">
                <button type="submit" class="btn btn-warning">Back</button>
            </form>
        </div>
    </div>
@endsection
