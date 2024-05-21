<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>398 Nguyen Van Cu Street, Ngoc Lam Ward, Long Bien District, Hanoi</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Sun : 09.00 AM - 10.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+8412 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/storeIndex" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('storePage_assets/img/Logo/shoesStreet.png')}}" style="width: 75px">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="input-group rounded" style="width: 300px">
        <form action="/storeIndex/search_product" method="GET">
            <input type="search" name="keywords" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
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
            <a href="service.html" class="nav-item nav-link">Shopping Guide</a>
            <a href="/storeIndex/contact" class="nav-item nav-link">Contact</a>
            <a href="/storeIndex/contact" class="nav-item nav-link">Order History</a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item">
                    <a href="/storeIndex/cart" class="nav-link dropdown-toggle">
                        <i class="fa fa-shopping-cart me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex"></span>
                    </a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{asset('shoestreet_asset/img/people-icon.png')}}"
                             alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{session('full_name')}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a class="dropdown-item" href="/login" data-toggle="modal" data-target="#logoutModal"
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
