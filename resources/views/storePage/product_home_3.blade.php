<h1 style="text-align: center">Adidas</h1>
@forelse($product_store_3->chunk(5) as $prd_store)
    <div class="col-lg-auto">
        <div class="container-fluid">
            <div class="row">
                @foreach ($prd_store as $prd)
                    <div class="col-md-2 mb-4" style="margin: auto">
                        <div class="card">
                            <a href="/storeIndex/product/view_product/product_id={{$prd->product_id}}/product_detail_id={{$prd->product_detail_id}}/size={{$prd->size}}" style="text-align: center;">
                                <img src="/image/{{$prd->image}}" style="margin:auto" class="w-100">
                            </a>
                            <div class="card-body bg-light">
                                <a href="/storeIndex/product/view_product/product_id={{$prd->product_id}}/product_detail_id={{$prd->product_detail_id}}/size={{$prd->size}}" style="text-align: justify;">
                                    {{$prd->product_name}}
                                </a>
                                <p>{{$prd->brand_name}}</p>
                                <h6 style="color:red">{{number_format($prd->price)}} VND</h6>
                                {{--                                    @if(session()->exists('customer_id'))--}}
                                {{--                                        <p class="btn-holder"><a href="{{route('add_to_cart', $prd->product_id)}}" class="btn btn-primary btn-ls text-center">Add To Cart</a></p>--}}
                                {{--                                    @endif--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        <form action="/storeIndex/product/Adidas">
            <button class="btn btn-primary btn-lg">See More</button>
        </form>
    </div>
@empty
@endforelse

