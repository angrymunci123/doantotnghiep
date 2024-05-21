@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
    <div class="row">
        <h2 style="display:block; text-align:center; color:black;"> Admin List </h2>
        <div class="col-md-6">
            <form method="get" action="/admin/admin_list/add_admin">
                <button name="controller=create" class="btn btn-primary">Add New Admin</button>
            </form>
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
                    <th style="color:white">Admin Name</th>
                    <th style="color:white">Email</th>
                    <th style="color:white">Address</th>
                    <th style="color:white">Position</th>
                    <th style="color:white">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admin_list as $admin)
                    <tr>
                        <td>{{$admin->user_id}}</td>
                        <td>{{$admin->full_name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->address}}</td>
                        <td>{{$admin->position}}</td>
                        @if(session('position') == "Administrator")
                            @if($admin->position == "Administrator")
                                <td style="width:100px"></td>
                            @endif

                            @if($admin->position != "Administrator")
                                <td style="width:100px">
                                    <form action="/admin/admin_list/view_admin_info/admin_id={{$admin->user_id}}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary" style="width:100px">View</button>
                                    </form>
                                    <br>
                                    <form onclick="return confirm('Are you sure you want to delete this admin?');"
                                          action="/admin/admin_list/delete_admin/admin_id={{$admin->user_id}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                                    </form>
                                </td>
                            @endif
                        @endif
                        @if(session('position') != "Administrator")
                            @if($admin->position == "Administrator")
                                <td style="width:100px"></td>
                            @endif

                            @if($admin->position != "Administrator")
                            <td style="width:100px">
                                <form action="/admin/admin_list/view_admin_info/admin_id={{$admin->user_id}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" style="width:100px">View</button>
                                </form>
                            </td>
                            @endif
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $admin_list->onEachSide(1)->links() }}
        </div>
    </div>
@endsection

