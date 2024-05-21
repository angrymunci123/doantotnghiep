@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    if (isset($_POST['logout'])) {
        header("Location:adminAuth.admin");
    }
    ?>
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Brand Management </h3>
            <div class="col-md-6">
                <form method="get" action="/admin/brand_management/add_brand">
                    <button name="controller=create" class="btn btn-primary">Add New Brand</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(Session::has('notification'))
            <div class="alert alert-success">
                {{Session::get('notification')}}
            </div>
        @endif
    </div>
    <div class="row g-4">
        <div class="h-100 rounded p-4" style="background-color: white">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:#44C250">
                    <th style="color:white">ID</th>
                    <th style="color:white">Brand Name</th>
                    <th style="color:white">Date Founded</th>
                    <th style="color:white">Country</th>
                    <th style="color:white">Phone Number</th>
                    <th style="color:white">Email</th>
                    <th style="color:white">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brand as $brd)
                    <tr>
                        <td>{{$brd->brand_id}}</td>
                        <td>{{$brd->brand_name}}</td>
                        <td>{{$brd->date_founded}}</td>
                        <td>{{$brd->country}}</td>
                        <td>{{$brd->phone_number}}</td>
                        <td>{{$brd->email}}</td>
                        <td style="width:100px">
                            <form action="/admin/brand_management/edit_brand/{{$brd->brand_id}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary" style="width:100px">Update</button>
                            </form>
                            <br>
                            <form onclick="return confirm('Are you sure you want to delete this brand?');"
                                  action="/admin/brand_management/delete_brand/{{$brd->brand_id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $brand->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
