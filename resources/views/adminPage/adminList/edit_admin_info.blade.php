@extends('adminPage.layout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street</title>
</head>
<body>
<h3 style="color:black; text-align: center">Edit Admin Profile</h3>
<div class="container-fluid">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="container-fluid" style="width: 1500px; background-color: white">
                        <div class="card-body">
                            @if(Session::has('notification'))
                                <div class="alert alert-danger">
                                    {{Session::get('notification')}}
                                </div>
                            @endif
                        </div>
                        @if(!session('position') == 'Administrator')
                        <form action="/admin/admin_list/update_profile/admin_id={{$admin_info->user_id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                            <div class="form-group">
                                <label for="exampleInputName1">Full Name</label>
                                <input type="text" name="full_name" class="form-control" id="" value="{{$admin_info->full_name}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="text" name="email" class="form-control" id="" value="{{$admin_info->email}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="" value="{{$admin_info->phone_number}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Address</label>
                                <input type="text" name="address" class="form-control" id="" value="{{$admin_info->address}}">
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-primary mr-2" id="edit">Update</button>
                            </div>
                        </form>
                        <br>
                        <form action="/admin/admin_list">
                            <button class="btn btn-danger">Cancel</button>
                        </form>
                        @endif
                        @if(session('position') == 'Administrator')
                            <form action="/admin/admin_list/update_profile/admin_id={{$admin_info->user_id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                                <div class="form-group">
                                    <label for="exampleInputName1">Full Name</label>
                                    <input type="text" name="full_name" class="form-control" id="" value="{{$admin_info->full_name}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email</label>
                                    <input type="text" name="email" class="form-control" id="" value="{{$admin_info->email}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" id="" value="{{$admin_info->phone_number}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Address</label>
                                    <input type="text" name="address" class="form-control" id="" value="{{$admin_info->address}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Position</label>
                                    <select name="position" id="position" class="form-control" required>
                                        <option selected>{{$admin_info->position}}</option>
                                        <option>Manager</option>
                                        <option>Saler</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-primary mr-2" id="edit">Update</button>
                                </div>
                            </form>
                            <br>
                            <form action="/admin/admin_list">
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

