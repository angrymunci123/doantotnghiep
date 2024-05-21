@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Add New Product Detail</h3>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white">
            <form action="/admin/product_management/save_product_detail" method="POST" enctype='multipart/form-data'>
                {!! csrf_field() !!}
                <div class="col-md-12">
                    <br>
                    <div class="form-group">
                        <strong>Product</strong>
                        <select name="product_id" id="product_id" class="form-control">
                            @foreach($product as $prd_id)
                            <option value="{{$prd_id->product_id}}">{{$prd_id->product_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                    <div class="form-group">
                        <strong>Size</strong>
                        <select name="size" id="size" class="form-control" required>
                            <option type="number" name="size"></option>
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
                        <input type="text" name="quantity" id="quantity" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="file" name="image" id="image" class="form-control-ls">
                    </div>
                    <br>
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <br>
                <div class="col-sm-4 col-xl-1">
                    <button type="submit" class="btn btn-primary mt-2" style="width:200px">Save Product Detail</button>
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


