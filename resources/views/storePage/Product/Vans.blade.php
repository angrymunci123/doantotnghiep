@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street - Vans</title>
</head>
<body>
<div style="background-color: #F9F9F9">
    <div class="container-fluid page-header">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Vans</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex/product">Product</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Vans</li>
                </ol>
            </nav>
        </div>
    </div>
    <br>
    <div class="row">
        @include('storePage.Product.sidebar')
        <div class="col-lg-9">
            <div class="container">
                <div class="row" style="background-color: white">
                    @foreach ($vans as $prd)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <a href="/storeIndex/product/view_product/product_id={{$prd->product_id}}/product_detail_id={{$prd->product_detail_id}}/size={{$prd->size}}" style="text-align: center;">
                                    <img src="/image/{{$prd->image}}" style="margin:auto" class="w-75">
                                </a>
                                <div class="card-body bg-light">
                                    <a href="/storeIndex/product/view_product/product_id={{$prd->product_id}}/product_detail_id={{$prd->product_detail_id}}/size={{$prd->size}}" style="text-align: justify;">{{$prd->product_name}}</a>
                                    <p>{{$prd->brand_name}}</p>
                                    <h6 style="color:red">{{number_format($prd->price)}} VND</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        {{ $vans->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <a href="https://www.freerideboardshop.com/collections/adidas">
            <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
        </a>
    </div>
</div>
</body>
</html>
<style>
    .sidebar-filter {
        padding: 30px;
    }
</style>
@endsection
