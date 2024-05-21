@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Add New Admin </h3>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white">
        <form action="/admin/admin_list/add_admin_process" method="POST" enctype='multipart/form-data'>
            {!! csrf_field() !!}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <br>
                <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                <div class="form-group">
                    <label>Position</label>
                    <select name="position" id="position" class="form-control" required>
                        <option>Manager</option>
                        <option>Saler</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <br>
            </div>
            <br>
            <div class="col-sm-4 col-xl-1">
                    <button type="submit" class="btn btn-primary" style="width: 75px">Save</button>
            </div>
        </form>
        <br>
        <div class="col-sm-4 col-xl-1">
                <form action="/admin/admin_list" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-danger" style="width: 75px">Back</button>
                </form>
        </div>
    </div>
@endsection


