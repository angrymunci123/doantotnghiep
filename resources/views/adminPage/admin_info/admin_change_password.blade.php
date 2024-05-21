@extends('adminPage.layout')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h2 style="text-align: center; color:black">Change Password</h2>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                            <div class="container" style="width: 1500px; background-color: white">
                                <br>
                                <div class="card-body">
                                    @if(Session::has('notification'))
                                        <div class="alert alert-danger">
                                            {{Session::get('notification')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body table-responsive pt-3">
                                    <form action="/admin/admin_info/change_password_process" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                                        <input type="hidden" name="user_id" value="{{$admin_pass->user_id}}"/>
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
                                        <button type="submit" class="btn btn-primary mr-2 rounded-1" style="width: 170px" id="edit">Change Password</button>
                                    </form>
                                    <br>
                                    <form action="/admin/admin_info">
                                        <div>
                                            <button class="btn btn-warning rounded-1">Back</button>
                                        </div>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
