@extends('adminPage.layout')
@section('content')
    <div class="container-fluid" style="background-color: white; border-radius: 10px">
        <div class="card-header" style="background-color: white">
            <div class="row">
                <h2 style="display:block; text-align:center; color:black;"> Product Information</h2>
            </div>
        </div>
        @foreach($product_detail as $prd)
            <br>
            <div class="" style="background-color: white">
                <div class="row">
                    <h4 style="display:block; text-align:center; color:black;">{{$prd->product_name}} - Size: {{$prd->size}}</h4>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-8 col-xl-6">
                        <div class="d-flex align-items-center justify-content-between p-4">
                            <table class="table table-bordered" style="background-color:#ECECEC; width:700px; margin:auto" id="dataTable">
                                <tr>
                                    <th>Brand</th>
                                    <td value="{{$prd->brand_id}}">{{$prd->brand_name}}</td>
                                </tr>
                                <tr style="background-color:white">
                                    <th>Product Source</th>
                                    <td value="{{$prd->warehouse_id}}">{{$prd->product_source}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$prd->product_name}}</td>
                                </tr>
                                <tr style="background-color:white">
                                    <th>Size</th>
                                    <td>{{$prd->size}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{number_format($prd->price)}} VND</td>
                                </tr>
                                <tr style="background-color:white">
                                    <th>Quantity</th>
                                    <td>{{$prd->quantity}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td style="text-align: justify">{{$prd->description}}</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="col-sm-4 col-xl-1">
                            <div class="justify-content-between p-4" style="background-color: white">
                                <strong>Size</strong>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="size" id="size" style="width: 150px" onchange="location = this.value;">
                                                <option selected></option>
                                                @foreach($product_size as $prd_size)
                                                    <option value="/admin/product_management/view_product_detail/product_id={{$prd_size->product_id}}/product_detail_id={{$prd_size->product_detail_id}}/size={{$prd_size->size}}">{{$prd_size->size}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table style="width: 400px">
                                    <tr>
                                        <td>
                                            <strong>Action</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form action="/admin/product_management/edit_product_detail/{{$prd->product_detail_id}}" method="GET">
                                                <button type="submit" class="btn btn-primary" style="width:200px">Update Product Detail</button>
                                            </form>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <form onclick="return confirm('Are you sure you want to delete this product?');"
                                                  action="/admin/product_management/delete_product_detail/product_detail_id={{$prd->product_detail_id}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" style="width:250px">Delete This Product Detail</button>
                                            </form>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <form action="/admin/product_management" enctype="multipart/form-data">
                                                <button type="submit" class="btn btn-warning">Back</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-6">
                        <div class="rounded d-flex align-items-center justify-content-between p-4">
                            <table class="table table-bordered" style="background-color:#ECECEC; width:500px; margin:auto" id="dataTable">
                                <tr style='background-color:#ECECEC'>
                                    <th>Image</th>
                                </tr>
                                <tr style='background-color:white'>
                                    <td style="margin:auto">
                                        <img src="/image/{{$prd->image}}" style="width:400px; margin:auto"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach


@endsection
