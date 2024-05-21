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
            <h3 style="display:block; text-align:center; color:black;"> Warehouse Management </h3>
            <div class="col-md-6">
                <form method="get" action="/admin/warehouse_management/add_warehouse">
                    <button name="controller=create" class="btn btn-primary">Add New Warehouse</button>
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
                    <th style="color:white">Import Date</th>
                    <th style="color:white">Export Date</th>
                    <th style="color:white">Product Source</th>
                    <th style="color:white">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($warehouse as $wrh)
                    <tr>
                        <td>{{$wrh->warehouse_id}}</td>
                        <td>{{$wrh->import_date}}</td>
                        <td>{{$wrh->export_date}} VND</td>
                        <td>{{$wrh->product_source}}</td>
                        <td style="width:100px">
                            <form action="/admin/warehouse_management/edit_warehouse/{{$wrh->warehouse_id}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary" style="width:100px">Update</button>
                            </form>
                            <br>
                            <form onclick="return confirm('Are you sure you want to delete this warehouse?');"
                                  action="/admin/warehouse_management/delete_warehouse/{{$wrh->warehouse_id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width:100px">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $warehouse->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
