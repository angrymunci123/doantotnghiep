@extends('storePage.layout')
@section('content')
<?php
session_start();
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shoes Street - Go Faster, Go Stronger, Never Stop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('storePage_assets/img/Product/Uptempo-Olympic.jpg')}}"
                 style="height: 1000px" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                 style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Shoes Street</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Go Faster, Go Stronger, Never
                                Stop</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Since the '60s, Nike has revolutionized its
                                shoe design and construction.
                                See how this innovative sneaker has evolved over the years.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInRight">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('storePage_assets/img/Product/converse.jpg')}}" style="height: 1000px"
                 alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                 style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Shoes Street</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Go Faster, Go Stronger, Never
                                Stop</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">For over 100 years Converse has been
                                instrumental in the evolution of the sneaker market.
                                Discover the key moments from its past, right up to today.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInRight">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('storePage_assets/img/Product/adidas.jpg')}}" style="height: 1000px"
                 alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                 style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Shoes Street</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Go Faster, Go Stronger, Never
                                Stop</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Founded by sports shoe manufacturer Adi
                                Dassler in 1949,
                                the name Adidas became world-famous in 1954 following the victory of the German team in
                                the World Cup, the “miracle of Berlin”.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInRight">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<!-- Feature Start -->
<div class="container-fluid" style="background-color: #f4f4f4; height:200px">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-check fa-2x text-primary"></i>
                    </div>
                </div>
                <h5>Genuine Products</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-check fa-2x text-primary"></i>
                    </div>
                </div>
                <h5>Quality Products</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                    </div>
                </div>
                <h5>Free Consultation</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-headphones fa-2x text-primary"></i>
                    </div>
                </div>
                <h5>Customer Support</h5>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
</div>
<br>
<div class="container-fluid" style="height:600px">
    <div class="row">
        @include('storePage.product_home_1')
    </div>
</div>

<div class="container-fluid">
    <a href="https://neemans.com/collections/sneakers-collection">
        <img style="width:100%" src="{{asset("storePage_assets/img//Banner/Sneakers.webp")}}">
    </a>
</div>
<br>
<div class="container-fluid" style="height:600px">
    <div class="row">
        @include('storePage.product_home_2')
    </div>
</div>
<br><br>
<div class="container-fluid">
    <a href="https://row.satorisan.com/collections/chacrona-hombre">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/Chacrona--Men.jpg")}}">
    </a>
</div>
<br>
<!-- About Start -->
<div class="container-fluid" style="height:600px">
    <div class="row">
        @include('storePage.product_home_3')
    </div>
</div>

<div class="container-fluid">
    <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
    </a>
</div>
<br>
<div class="container-fluid" style="height:600px">
    <div class="row">
        @include('storePage.product_home_4')
    </div>
</div>

<div class="container-fluid">
    <a href="https://eu.satorisan.com/collections/heisei-mujer">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/heisei-women.jpg")}}">
    </a>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('shoestreet_asset/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('shoestreet_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
</html>
