@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="text-align:center; color:black;"> Add New Brand </h3>
        </div>
    </div>
    <div class="row" style="background-color: white">
        <div class="column">
            <form action="/admin/brand_management/save_brand" method="POST" enctype='multipart/form-data'>
                {!! csrf_field() !!}
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Brand Name</strong>
                        <input type="text" name="brand_name" id="product_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <strong>Date Founded</strong>
                        <input class="form-control" type="date" name="date_founded" placeholder="Date Founded" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                    <div class="form-group">
                        <strong>Country</strong>
                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <strong>Phone Number</strong>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <br>
                </div>
                <div class="col-sm-4 col-xl-1">
                    <button type="submit" class="btn btn-primary mt-2" style="width:100px">Save</button>
                </div>
            </form>
            <br>
            <div class="col-sm-4 col-xl-1">
                <form action="/admin/brand_management" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-warning">Back</button>
                </form>
            </div>
        </div>
    </div>
@endsection


