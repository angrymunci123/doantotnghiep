@extends('adminPage.layout')
@section('content')
    <div class="card-header" style="background-color: white" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Update Product Detail: {{$product->product_name}} - Size: {{$product->size}} </h3>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white">
    <form action="/admin/product_management/update_product_detail/{{$product->product_detail_id}}" method="POST" enctype='multipart/form-data'>
        @csrf
{{--        @method('put')--}}
        <div class="col-md-12">
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
            <div class="form-group">
                <strong>Product</strong>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <strong>Size</strong>
                <select name="size" id="size" class="form-control" required>
                    <option type="number" name="size">{{$product->size}}</option>
                    <option type="number" name="size">38</option>
                    <option type="number" name="size">39</option>
                    <option type="number" name="size">40</option>
                    <option type="number" name="size">41</option>
                    <option type="number" name="size">42</option>
                    <option type="number" name="size">43</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <strong>Quantity</strong>
                <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Image</strong>
                <div class="card" style="width: 300px">
                <input type="file" name="image" value="/image/{{$product->image}}" class="form-control-ls">
                </div>
                <br>
                <div class="card" style="width: 300px">
                    <img type="file" id="image" src="/image/{{$product->image}}" class="form-control-ls">
                </div>
            </div>
            <br>
            <div class="form-group">
                <strong>Description</strong>
                <textarea type="text" name="description" class="form-control" cols="30" rows="10">{{$product->description}}</textarea>
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
