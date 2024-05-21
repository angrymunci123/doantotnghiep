@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($product_detail as $prd)
    <div class="container-fluid page-header">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex/product">Product</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/storeIndex/product/{{$prd->brand_name}}">{{$prd->brand_name}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{$prd->product_name}}</li>
                </ol>
            </nav>
        </div>
    </div>
<div style="background-color:#f9f9f9">
    <br>
    @if(Session::has('success'))
        <div class="alert alert-success" style="width: 1500px; margin: auto">{{Session::get('success')}}</div>
    @endif
    <br>
    <table align="center" style="width:1500px; background-color:white">
        <tr>
            <td>
                <div class="rowdy">
                    <div class="border">
                        <img style="width:400px; margin-top:75px" src="/image/{{$prd->image}}">
                    </div>
                </div>
            </td>
            <td valign="top" style="width:1920px; ">
                <br><br>
                <p style="font-size: 20px">{{$prd->brand_name}}<p>
                <h1 style="color:black" name="product_name">{{$prd->product_name}}</h1>
                <br>
                <h3 style="color: red">{{number_format($prd->price)}} VND</h3>
                @if($prd->quantity > 0)
                    <label class="badge bg-success">In Stock</label>
                    @else
                        <label class="badge bg-danger">Out Of Stock</label>
                        <br>
                @endif
                <hr>
                <p><i class="fa fa-shipping-fast"></i>&nbsp; Free delivery for orders from 699,000 VND.</p>
                <p><i class="fa fa-archive"></i>&nbsp; Free returns within 30 days.</p>
                <p><i class="fa fa-handshake"></i>&nbsp; 0% interest installments from 3,000,000 VND</p>
                <p><i class="fa fa-desktop"></i>&nbsp; Pay online quickly and securely.</p>
                <p><i class="fa fa-check-circle"></i>&nbsp; 100% genuine product.</p>
                <hr>
                @if(session()->exists('customer_id'))

                <form action="/storeIndex/add_to_cart" method="get" enctype="multipart/form-data">
                    @csrf
                    <input hidden type="text" name="product_detail_id" value="{{$prd->product_detail_id}}"/>
                    <input hidden type="text" name="product_id" value="{{$prd->product_id}}"/>
                    <label>Quantity</label>
                    <br>
                    <input class="form-control" style="width: 150px;" type="number" name="quantity" value="1" min="1" max="100"/>
                    <br>
                    <label>Product Size</label>
                        <select name="size" class="form-control" style="width: 150px;">
                            @foreach($product_size as $display_size)
                                <option value="{{$display_size->size}}">{{$display_size->size}}</option>
                            @endforeach
                        </select>
                    <br>
                    <button type="submit" class="btn btn-primary rounded-1 btn-ls text-center">Add To Cart</button>
                </form>
                @endif
                @if(!session('customer_id') && session('user_id'))
                    <form action="#" method="get" enctype="multipart/form-data">
                        <button type="submit" onclick="return confirm('You must log in to your customer account to buy products)')" class="btn btn-primary rounded-1 btn-ls text-center">Buy Now</button>
                    </form>
                @endif
            </td>
        </tr>
    </table>
    <br>
    <table align="center" style="width:1500px; background-color:white;">
        <tr>
            <td>
                <h1>Description</h1>
                <p>{{$prd->description}}</p>
            </td>
        </tr>
    </table>
    <br>
    <table align="center" style="width:1500px; background-color:white;">
        <tr>
            <td>
                <h1>Customer Review</h1>
            </td>
        </tr>
        <tr>
            <td style="width:1920px; padding:50px">
                <p style='font-size:20px; text-align:justify'>Nguyen Xuan Cong</p>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span>Reasonable price, good configuration, also beautiful appearance, worth the money to buy</span>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td style="width:1920px; padding:50px">
                <p style='font-size:20px; text-align:justify'>Nguyen Xuan Cong</p>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span>Reasonable price, good configuration, also beautiful appearance, worth the money to buy</span>
            </td>
        </tr>
    </table>
    <br>
    <div class="container-fluid">
        <a href="https://www.freerideboardshop.com/collections/adidas">
            <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
        </a>
    </div>
</div>
@endforeach
</body>
</html>
<style>
    .rowdy {
        border:2px solid green;
        width:500px;
        float:left;
        margin:50px 100px 500px 100px;
        height:600px;
        background-color: white;
        text-align: center;
    }
    .border {
        height: 600px;
        text-align: center;
        margin:auto;
    }
</style>
<script>

</script>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.increment-btn').click(function (e) {
                e.preventDefault();

                var increment_value = $('.quantity-input').val();
                var value = parseInt(increment_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $('.quantity').val(value);
                }
            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();

                var decrement_value = $('.quantity-input').val();
                var value = parseInt(decrement_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $('.quantity').val(value);
                }
            });
        });
    </script>
@endsection
