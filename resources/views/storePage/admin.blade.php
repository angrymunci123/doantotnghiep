@extends('adminAuth.loginLayout')
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
{{--<style>--}}
{{--    body {--}}
{{--        background-image: url("{{ url("admin_assets/img/G1.png") }}");--}}
{{--    }--}}
{{--</style>--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-xl-10 col-lg-12 col-md-9">--}}
{{--            <div class="card o-hidden border-0 shadow-lg my-5">--}}
{{--                <div class="card-body p-0">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="p-5">--}}
{{--                                <div class="text-center">--}}
{{--                                    <img src="{{asset("shoestreet_asset/img/shoesStreet.png")}}" style="width:200px">--}}
{{--                                </div>--}}
{{--                                <div class="text-center">--}}
{{--                                    <h1 class="h4 text-gray-900 mb-4">Login as Administrators</h1>--}}
{{--                                </div>--}}
{{--                                <form class="user" method="POST" action="{{route('loginProcess')}}">--}}
{{--                                    @if(Session::has('success'))--}}
{{--                                        <div class="alert alert-success">{{Session::get('success')}}</div>--}}
{{--                                    @endif--}}
{{--                                    @if(Session::has('fail'))--}}
{{--                                        <div class="alert alert-danger">{{Session::get('fail')}}</div>--}}
{{--                                    @endif--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" name="email" class="form-control form-control-lg"--}}
{{--                                               id="exampleInputEmail" aria-describedby="emailHelp"--}}
{{--                                               value="{{old('email')}}"--}}
{{--                                               placeholder="Enter Email Address" required>--}}
{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="password" name="password" class="form-control form-control-lg"--}}
{{--                                               id="exampleInputPassword" placeholder="Password" required>--}}
{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button name="submit" class="btn btn-success btn-lg" type="submit">--}}
{{--                                            Login--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{asset('shoestreet_asset/img/shoesStreet.png')}}" alt="logo">
                        </div>
                        <h4>Shoes Street</h4>
                        <h6 class="font-weight-light">Login as Administrator.</h6>
                        <form class="user" method="POST" action="{{route('loginProcess')}}">
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
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="register.html" class="text-primary">Create</a>
                            </div>
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
