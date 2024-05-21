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
{{--                        <form class="user" method="POST" action="{{route('login_customerProcess')}}">--}}
{{--                            @if(Session::has('success'))--}}
{{--                                <div class="alert alert-success">{{Session::get('success')}}</div>--}}
{{--                            @endif--}}
{{--                            @if(Session::has('fail'))--}}
{{--                                <div class="alert alert-danger">{{Session::get('fail')}}</div>--}}
{{--                            @endif--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" name="email" class="form-control form-control-lg"--}}
{{--                                       id="exampleInputEmail" aria-describedby="emailHelp"--}}
{{--                                       value="{{old('email')}}"--}}
{{--                                       placeholder="Email" required>--}}
{{--                            </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="customer_name" class="form-control form-control-lg" placeholder="Customer Name" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="phone_number" class="form-control form-control-lg" placeholder="Phone Number" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" required>--}}
{{--                                </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="password" name="password" class="form-control form-control-lg"--}}
{{--                                       id="exampleInputPassword1" placeholder="Password" required>--}}
{{--                            </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="password" name="confirm_password" class="form-control form-control-lg"--}}
{{--                                           id="exampleInputPassword1" placeholder="Confirm Password" required>--}}
{{--                                </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="btn btn-success">Register</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                        <form class="user" method="POST" action="{{route('register_customer_process')}}">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="customer_name" class="form-control form-control-lg" id="exampleFirstName"
                                           placeholder="Full name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="email" class="form-control form-control-lg" id="exampleLastName"
                                           placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="phone_number" class="form-control form-control-lg" id="exampleFirstName"
                                           placeholder="Phone Number" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="address" class="form-control form-control-lg" id="exampleAddress"
                                           placeholder="Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="customer_password" class="form-control form-control-lg"
                                           id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="customer_confirm_password" class="form-control form-control-lg"
                                           id="exampleRepeatPassword" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <button name="register" class="btn btn-success" type="submit">Register</button>
                        </form>
                        <hr>
                        <h6 class="font-weight-light">Already have an account? Login now</h6>
                        <form class="user" method="GET" action="/storeIndex/register">
                            <button type="submit" class="btn btn-danger">Login</button>
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
