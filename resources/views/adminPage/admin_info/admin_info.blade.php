@extends('adminPage.layout')
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
<h2 class="text-center" style="color:black">Admin Profile</h2>
<div class="card-body">
    @if(Session::has('notification'))
        <div class="alert alert-success">
            {{Session::get('notification')}}
        </div>
    @endif
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        @foreach($admin_info as $admin)
                <table class='table table-bordered' style='width:1000px;margin:auto'>
                    <tr style='background-color:#edeef2'>
                        <th><i class="fas fa-user"></i> Customer Name</th>
                        <td>{{$admin->full_name}}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-phone"></i> Phone Number</th>
                        <td>{{$admin->phone_number}}</td>
                    </tr>
                    <tr style='background-color:#edeef2'>
                        <th><i class="fas fa-mail-bulk"></i> Email Address</th>
                        <td>{{$admin->email}}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-location-arrow"></i> Address</th>
                        <td>{{$admin->address}}</td>
                    </tr>
                    <tr style='background-color:#edeef2'>
                        <th><i class="fas fa-user"></i> Position</th>
                        <td>{{$admin->position}}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-laptop"></i> Password</th>
                        <td><input type='password' value='{{$admin->password}}' id='myInput' readonly='readonly' style="width: 500px">
                            <br>
                            <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
                        </td>
                    </tr>
                   </table>
        <hr>
            <table style="width:500px; margin:auto">
                <tr>
                    <td>
                        <div style="background-color: white">
                            <form action="/admin/admin_info/edit_profile/admin_id={{$admin->user_id}}" method="GET">
                                <button type="submit" class="btn btn-primary btn-ls">Update Profile</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div style="background-color: white">
                            <form action="/admin/admin_info/change_password" method="GET">
                                <button type="submit" class="btn btn-primary btn-ls">Change Password</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div style="background-color: white">
                            <form action="/admin/order_management" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-warning btn-ls">Back</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        @endforeach
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
