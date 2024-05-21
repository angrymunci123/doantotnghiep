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
        <h1 class="display-3 text-white mb-3 animated slideInDown">Change Password</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">My Profile</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Change Password</a></li>
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
                            <div class="container" style="width: 1500px; background-color: white">
                                <br>
                                <h2 style="text-align: center">Change Password</h2>
                                <div class="card-body">
                                    @if(Session::has('notification'))
                                        <div class="alert alert-danger">
                                            {{Session::get('notification')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body table-responsive pt-3">
                                    <form action="/storeIndex/customer_profile/change_password/process/{{$obj->customer_id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Current Password</label>
                                            <input type="password" name="password" class="form-control" id="" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">New Password</label>
                                            <input type="password" name="new_password" class="form-control" id="" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Confirm Password</label>
                                            <input type="password" name="confirm_new_password" class="form-control" id="" required>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary mr-2 rounded-1" id="edit">Save</button>
                                    </form>
                                    <br>
                                    <form action="/storeIndex/customer_profile/">
                                        <div>
                                            <button class="btn btn-danger rounded-1">Cancel</button>
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
    <div class="container-fluid" style="background-color: #f9f9f9; height:50px"></div>
    <div class="container-fluid" style="background-color: #f9f9f9">
        <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
            <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
        </a>
    </div>
</div>
</body>
</html>
@endsection

