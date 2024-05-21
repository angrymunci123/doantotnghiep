@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container-fluid page-header">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Customer Profile</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Customer Profile</li>
            </ol>
        </nav>
    </div>
</div>
<br>

<h2 class="text-center" style="color:black">Customer Profile</h2>
<div class="card-body" style='width:1250px; margin: auto'>
    @if(Session::has('notification'))
        <div class="alert alert-success">
            {{Session::get('notification')}}
        </div>
    @endif
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        @foreach($customer_info as $customer)
            <table class='table table-bordered' style='width:1250px; margin: auto'>
                <tr style='background-color:#edeef2'>
                    <th><i class="fas fa-user"></i> Customer Name</th>
                    <td>{{$customer->customer_name}}</td>
                </tr>
                <tr>
                    <th><i class="fas fa-phone"></i> Phone Number</th>
                    <td>{{$customer->phone_number}}</td>
                </tr>
                <tr style='background-color:#edeef2'>
                    <th><i class="fas fa-mail-bulk"></i> Email Address</th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th><i class="fas fa-location-arrow"></i> Address</th>
                    <td>{{$customer->address}}</td>
                </tr>
                <tr style='background-color:#edeef2'>
                    <th><i class="fas fa-laptop"></i> Password</th>
                    <td><input type='password' value='{{$customer->password}}' id='myInput' readonly='readonly'>
                        <br>
                        <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
                    </td>
                </tr>
                <tr>
                    <th>Action</th>
                    <td>
                        <div class="col-sm-4 col-xl-1" style="background-color: white">
                            <form action="/storeIndex/customer_profile/edit_customer_profile/{{$customer->customer_id}}" method="GET">
                                <button type="submit" class="btn btn-primary rounded-1 btn-ls" style="width: 150px">Update Profile</button>
                            </form>
                        </div>
                        <br>
                        <div class="col-sm-4 col-xl-1" style="background-color: white">
                            <form action="/storeIndex/customer_profile/change_password/{{$customer->customer_id}}" method="GET">
                                <button type="submit" class="btn btn-primary rounded-1 btn-ls" style="width: 175px">Change Password</button>
                            </form>
                        </div>
                        <br>
                        <div class="col-sm-4 col-xl-1" style="background-color: white">
                            <form action="/storeIndex" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-warning rounded-1 btn-ls">Back</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
        @endforeach
    </div>
</div>
<div class="container-fluid"></div>
<div class="container-fluid">
    <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
    </a>
</div>
</div>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</html>
@endsection
