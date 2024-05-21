@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street - Customer Profile</title>
</head>
<body>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Change Profile</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">My Profile</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Change Profile</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-fluid" style="background-color: #f9f9f9">
    <br>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-group">
                            <div class="container-fluid" style="width: 1500px; background-color: white">
                                <div class="card-body table-responsive pt-3">
                                    <form action="/storeIndex/customer_profile/change_profile/change_profile_process/{{$obj->customer_id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Full Name</label>
                                            <input type="text" name="customer_name" class="form-control"  id="" placeholder="Name" value="{{$obj->customer_name}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email</label>
                                            <input type="text" name="email" class="form-control" id="" placeholder="Email" value="{{$obj->email}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control" id="" placeholder="Phone Number" value="{{$obj->phone_number}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Address</label>
                                            <input type="text" name="address" class="form-control" id="" placeholder="Address" value="{{$obj->address}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">New Password</label>
                                            <input type="password" name="password" class="form-control" id="" placeholder="New Password" >
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Confirm Password</label>
                                            <input type="password" name="" class="form-control" id="" placeholder="Confirm Password" >
                                        </div>
                                        <br>
                                        <div>
                                            <button type="submit" class="btn btn-primary mr-2" id="edit">Save</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container-fluid">
    <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
    </a>
</div>
</div>
</body>
</html>
@endsection

