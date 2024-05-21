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
            <table class='table table-bordered' style='width:1000px; margin: auto'>
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
                    <th>Position</th>
                    <td>{{$admin->position}}</td>
                </tr>
            </table>
            <hr>
            <table style="width:500px; margin:auto">
                <tr>
                    @if(session('user_id') == $admin->user_id || session('position') == 'Administrator')
                    <td>
                        <div style="background-color: white">
                            <form action=/admin/admin_list/edit_profile/admin_id={{$admin->user_id}}" method="GET">
                                <button type="submit" class="btn btn-primary btn-ls">Update Profile</button>
                            </form>
                        </div>
                    </td>
                        @if(session('position') == 'Administrator')
                            <td>
                                <form onclick="return confirm('Are you sure you want to delete this admin?');"
                                      action="/admin/admin_list/delete_admin/admin_id={{$admin->user_id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                                </form>
                            </td>
                        @endif
                    @endif
                    <td style="margin:auto">
                        <div style="background-color: white">
                            <form action="/admin/admin_list" enctype="multipart/form-data">
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
</html>
@endsection
