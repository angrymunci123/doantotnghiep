@if(session('user_id'))
    <div class="container-fluid p-0" style="background-color: #44C250">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <a href="/admin/order_management" class="fas fa-address-card" style="color: white">
                        <span class="d-none d-lg-inline-flex">Admin Page</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="text-primary me-2"></small>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white">
                            <span class="d-none d-lg-inline-flex">{{session('full_name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-primary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/admin/admin_info" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a class="dropdown-item" href="/admin/logoutProcess_Store" data-toggle="modal" data-target="#logoutModal"
                               onclick="return confirm('Are you sure you want to log out?');">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('customer_id'))
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>300 Kim Ma Street, Ba Dinh District, Ha Noi</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sun : 09.00 AM - 10.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-envelope text-primary me-2"></small>
                    <small>shoesstreethn300@gmail.com</small>
                </div>

                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+8412 345 6789</small>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
        <a href="/storeIndex" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{asset('storePage_assets/img/Logo/shoesStreet.png')}}" style="width: 75px">
        </a>
        <div class="input-group" style="width:300px">
            <form class="d-none d-md-flex ms-4" action="/storeIndex/search_product" method="GET">
                <input type="search" name="keywords" id="keywords" style="width:300px;" class="form-control" placeholder="Search"/>
            </form>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/storeIndex" class="nav-item nav-link active">Home</a>
                <a href="/storeIndex/introduce" class="nav-item nav-link">About Us</a>
                <div class="nav-item dropdown">
                    <a href="/storeIndex/product" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/storeIndex/product/Adidas" class="dropdown-item">Adidas</a>
                        <a href="/storeIndex/product/Balenciaga" class="dropdown-item">Balenciaga</a>
                        <a href="/storeIndex/product/Converse" class="dropdown-item">Converse</a>
                        <a href="/storeIndex/product/Nike" class="dropdown-item">Nike</a>
                        <a href="/storeIndex/product/Puma" class="dropdown-item">Puma</a>
                        <a href="/storeIndex/product/Vans" class="dropdown-item">Vans</a>
                        <a href="/storeIndex/product" class="dropdown-item">All Products</a>
                    </div>
                </div>
                <a href="/storeIndex/shopping_guide" class="nav-item nav-link">Shopping Guide</a>
                <a href="/storeIndex/contact" class="nav-item nav-link">Contact</a>
                <a href="/storeIndex/order_history" class="nav-item nav-link">Order History</a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="nav-item dropdown">
                            <a href="/storeIndex/cart" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                Shopping Cart
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-danger">{{count((array) session('shopping_cart')) }}</span>
                            </a>
                        <div class="dropdown-menu fade-up m-0">
                            @if(session('shopping_cart'))
                                @foreach(session('shopping_cart') as $product_id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-image">
                                            <img src="/image/{{$details['image']}}" style="width: 75px; padding:10px"/>
                                        </div>
                                        <div class="col-lg-8 col-sm-6 col-6 cart-detail-product">
                                            <p>{{$details['product_name']}}</p>
                                            <span class="price text-primary">{{number_format($details['price'])}} VND</span> <span class="count">Quantity: {{$details['quantity']}}</span>
                                            <p>Size: {{$details['size']}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                                    <div class="row total-header-section">
                                        @php $total = 0 @endphp
                                        @foreach((array) session('shopping_cart') as $product_id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach
                                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                            <p>Total: <span class="text-info">{{number_format($total)}} VND</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="/storeIndex/cart" class="btn btn-primary btn-ls">View All</a>
                                        </div>
                                    </div>
                            @endif
                            @if(!session('shopping_cart'))
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                        <p>There is no product in the shopping cart.</p>
                                    </div>
                                </div>
                                @endif
                        </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{session('customer_name')}}
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-primary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/storeIndex/customer_profile" class="dropdown-item">My Profile</a>
                            <a href="/storeIndex/order_history" class="dropdown-item">Order History</a>
                            <a type='submit' class="dropdown-item" href="/storeIndex/logout" data-toggle="modal" data-target="#logoutModal"
                               onclick="return confirm('Are you sure you want to log out?');">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endif
@if(!session('customer_id'))
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>300 Kim Ma Street, Ba Dinh District, Ha Noi</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sun : 09.00 AM - 10.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-envelope text-primary me-2"></small>
                    <small>shoesstreethn300@gmail.com</small>
                </div>

                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+8412 345 6789</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
            <a href="/storeIndex" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img src="{{asset('storePage_assets/img/Logo/shoesStreet.png')}}" style="width: 75px">
            </a>
            <div class="input-group" style="width:300px">
                <form class="d-none d-md-flex ms-4" action="/storeIndex/search_product" method="GET">
                    <input type="search" name="keywords" id="keywords" style="width:300px;" class="form-control" placeholder="Search"/>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/storeIndex" class="nav-item nav-link active">Home</a>
                    <a href="/storeIndex/introduce" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                        <a href="/storeIndex/product" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="/storeIndex/product/Adidas" class="dropdown-item">Adidas</a>
                            <a href="/storeIndex/product/Balenciaga" class="dropdown-item">Balenciaga</a>
                            <a href="/storeIndex/product/Converse" class="dropdown-item">Converse</a>
                            <a href="/storeIndex/product/Nike" class="dropdown-item">Nike</a>
                            <a href="/storeIndex/product/Puma" class="dropdown-item">Puma</a>
                            <a href="/storeIndex/product/Vans" class="dropdown-item">Vans</a>
                            <a href="/storeIndex/product" class="dropdown-item">All Products</a>
                        </div>
                    </div>
                    <a href="/storeIndex/shopping_guide" class="nav-item nav-link">Shopping Guide</a>
                    <a href="/storeIndex/contact" class="nav-item nav-link">Contact</a>
                    @if(session('user_id'))
                        <a href="#" class="nav-item nav-link" onclick="return confirm('Hello {{session('full_name')}} (not a customer account? Please log out and log in to your customer account)')">Login</a>
                    @endif
                    @if(!session('user_id'))
                        <a href="/storeIndex/login" class="nav-item nav-link">Login</a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
@endif
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('shoestreet_asset/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
