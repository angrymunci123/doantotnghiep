@extends('storePage.shortLayout')
@section('content')
    <div class="container-fluid" style="background-color: #f9f9f9">
        <br>
    <div class="container-fluid" style="border-radius:10px; width:1600px; background-color: white">
        <br>
        <h2 style="text-align: center; margin:auto">Shopping Cart</h2>
        <div class="row d-flex justify-content-center align-items-center h-100" style="width: 1500px; margin: auto">
            <div class="col-12" style="width: 1500px; margin: auto">
                @if(Session::has('success'))
                    <div class="alert alert-success" style="width: 1500px; margin: auto">{{Session::get('success')}}</div>
                @endif
                <br>
                    @if(session()->exists('shopping_cart'))
                        @php $total = 0 @endphp
                <div class="card card-registration card-registration-2" style="border-radius:10px; width: 1500px; background-color: white">
                    <div class="card-body p-0">
                        <table id="shopping_cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:10%">Image</th>
                                    <th style="width:10%">Size</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th style="width:22%" class="text-center">Subtotal</th>
                                    <th style="width:10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(session('shopping_cart') as $product_id => $details)
                                    @php $total += $details['price'] *  $details['quantity'] @endphp
                                    <tr data-id="{{$product_id}}">
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h5 class="nomargin">{{$details['product_name']}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Image">
                                            <img src="/image/{{$details['image']}}" style="width: 200px;"></td>
                                        <td data-th="Size">{{$details['size']}}</td>
                                        <td data-th="Price">{{number_format($details['price'])}} VND</td>
                                        <td data-th="Quantity">
                                            <input type="number" value="{{$details['quantity']}}" class="form-control quantity cart_update" min="1">
                                        </td>
                                        <td data-th="Subtotal" class="text-center">{{number_format($details['price'] * $details['quantity'])}} VND</td>
                                        <td class="actions" data-th="">
                                            <form action="/storeIndex/cart/remove_from_cart/{{$product_id}}" method="POST" enctype='multipart/form-data'>
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-ls rounded-1 cart_remove"><i class="fa fa-trash-o"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" style="text-align: right"> <h3>Total: {{number_format($total)}} VND</h3></td>
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: right">
                                    <form style="text-align: right" action="/storeIndex/checkout" method="GET" enctype="multipart/form-data">
                                        <button type="submit" class="btn btn-primary rounded-1 btn-ls"><i class="fa fa-trash-o"></i>Checkout</button>
                                    </form>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
{{--                        https://www.youtube.com/watch?v=rQV9aI3LLnk--}}
                    </div>
                </div>
                    @endif
                    @if (session()->missing('shopping_cart'))
                        <p style="color:black; text-align: center">There is no product in the shopping cart.</p>
                    @endif
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid" style="background-color: #f9f9f9; height:50px"></div>
    <div class="container-fluid" style="background-color: #f9f9f9">
        <a href="https://www.freerideboardshop.com/collections/adidas">
            <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
        </a>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">

        $(".cart_update").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '/storeIndex/cart/update_cart',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Do you want to delete this product from the shopping cart??")) {
                $.ajax({
                    url: '/storeIndex/cart/remove_from_cart/{product_id}',
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        product_id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                })
            }
        });
    </script>
@endsection
