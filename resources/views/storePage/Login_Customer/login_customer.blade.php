@extends('storePage.Login_Customer.loginLayout')
@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper" style="background-image:url({{url("shoestreet_asset/img/wallpaperflare.com_wallpaper.jpg")}})">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="border-radius: 20px">
                        <div class="brand-logo">
                            <img src="{{asset('shoestreet_asset/img/shoesStreet.png')}}" alt="logo">
                        </div>
                        <h4>Shoes Street</h4>
                        <h6 class="font-weight-light">Welcome To Shoes Street</h6>
                        <form class="customer" method="POST" action="{{route('login_customerProcess')}}">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       value="{{old('email')}}"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                       id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">LOGIN</button>
                            </div>
                        </form>
                        <hr>
                        <h6 class="font-weight-light">Don't have an account? Register now</h6>
                        <form class="user" method="GET" action="/storeIndex/register">
                            <button type="submit" class="btn btn-danger">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
</body>

</html>
