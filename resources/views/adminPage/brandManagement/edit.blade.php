@extends('adminPage.layout')
@section('content')
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Update Brand: {{$brand->brand_name}} </h3>
        </div>
    </div>
    <form action="/admin/brand_management/update_brand/{{$brand->brand_id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="col-md-12">
            <div class="form-group">
                <strong>Brand Name</strong>
                <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control" required>
            </div>
            <br>
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
            <div class="form-group">
                <strong>Date Founded</strong>
                <input class="form-control" type="date" name="date_founded" value="{{$brand->date_founded}}" placeholder="Date Founded" onfocus="(this.type='date')" onblur="(this.type='text')" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Country</strong>
                <input type="text" name="country" value="{{$brand->country}}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Phone Number</strong>
                <input type="text" name="phone_number" id="phone_number" value="{{$brand->phone_number}}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" value="{{$brand->email}}" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-4 col-xl-1">
            <button type="submit" class="btn btn-primary mt-2" style="width:100px">Update</button>
        </div>
    </form>
    <br>
    <div class="col-sm-4 col-xl-1">
        <form action="/admin/brand_management" enctype="multipart/form-data">
            <button type="submit" class="btn btn-warning">Back</button>
        </form>
    </div>
    </div>
@endsection
