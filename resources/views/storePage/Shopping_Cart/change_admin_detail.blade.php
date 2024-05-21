@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h2 style="display:block; text-align:center; color:black;"> Change User Detail </h2>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <form action="" method="POST" enctype='multipart/form-data'>
                {!! csrf_field() !!}
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" id="password" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea type="text" name="address" id="address" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Save</button>
            </form>
        </div>
        <div class="column">
            <form action="" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-danger mt-2">Back</button>
            </form>
        </div>
    </div>
@endsection
