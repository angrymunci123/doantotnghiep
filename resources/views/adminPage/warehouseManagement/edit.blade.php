@extends('adminPage.layout')
@section('content')
    <div class="card-header" style="background-color: white">
        <div class="row">
            <h3 style="display:block; text-align:center; color:black;"> Update Warehouse: {{$warehouse->product_source}} </h3>
        </div>
    </div>
    <form action="/admin/warehouse_management/update_warehouse/{{$warehouse->warehouse_id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="col-md-12">
            <div class="form-group">
                <strong>Import Date</strong>
                <input type="date" name="import_date" id="import_date" value="{{$warehouse->import_date}}" class="form-control" required>
            </div>
            <br>
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
            <div class="form-group">
                <strong>Export Date</strong>
                <input type="date" name="export_date" id="export_date" value="{{$warehouse->export_date}}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <strong>Source</strong>
                <input type="text" name="product_source" id="product_source" value="{{$warehouse->product_source}}" class="form-control" required>
            </div>
            <br>
        </div>
        <div class="col-sm-4 col-xl-1">
            <button type="submit" class="btn btn-primary mt-2" style="width:100px">Update</button>
        </div>
    </form>
    <br>
    <div class="col-sm-4 col-xl-1">
        <form action="/admin/warehouse_management" enctype="multipart/form-data">
            <button type="submit" class="btn btn-warning">Back</button>
        </form>
    </div>
@endsection
