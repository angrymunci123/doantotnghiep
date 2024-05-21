<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street - Admin</title>
    <!-- Favicon -->
    <link href="{{asset('shoestreet_asset/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('shoestreet_asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('shoestreet_asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
          rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('shoestreet_asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('shoestreet_asset/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <img src="{{asset('shoestreet_asset/img/shoesStreet-removebg.png')}}" style="width: 200px; margin:auto">
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('shoestreet_asset/img/people-icon.png')}}" alt=""
                         style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{session('full_name')}}</h6>
                    <b style="color:black">Admin</b>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="/admin/statistics" class="nav-item nav-link">
                    <i class="fa fa-chart-bar me-2"></i>
                    <b>Statistics</b>
                </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-laptop me-2"></i><b>Management</b></a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/admin/product_management" class="dropdown-item">Product Management</a>
                        <a href="/admin/order_management" class="dropdown-item">Order Management</a>
                        <a href="/admin/brand_management" class="dropdown-item">Brand Management</a>
                        <a href="/admin/warehouse_management" class="dropdown-item">Warehouse Management</a>
                    </div>
                </div>
                <a href="/admin/admin_list" class="nav-item nav-link"><i class="fa fa-th me-2"></i><b>Admin List</b></a>
                {{--                <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>--}}
                <a href="/storeIndex" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Go To Store Page</a>
                <a href="/admin/user_statistics" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>User Statistics</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand sticky-top px-4 py-0" style="background-color: white">
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="input-group">
                <div class="form-outline">
                    <form class="d-none d-md-flex ms-4" action="/admin/product_management/search_product" method="GET">
                        <input type="search" name="keywords" id="keywords" style="width:450px;" class="form-control"
                               placeholder="Search"/>
                    </form>
                </div>
            </div>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notification</span>
                    </a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{asset('shoestreet_asset/img/people-icon.png')}}"
                             alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{session('full_name')}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="/admin/admin_info" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a class="dropdown-item" href="/admin/logoutProcess" data-toggle="modal" data-target="#logoutModal"
                           onclick="return confirm('Are you sure you want to log out?');">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="h-100 rounded p-4" style="background-color: white" >
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="{{asset('js/Chart.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('shoestreet_asset/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('shoestreet_asset/js/main.js')}}"></script>

</body>
</html>

