<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street</title>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link href="{{asset('storePage_assets/img/Logo/shoesStreet.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('storePage_assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('storePage_assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('storePage_assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('storePage_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('storePage_assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
@include('storePage.navbar')
@yield('content')
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Our Product</h1>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="our_products">
                    <div class="row">
                        <div class="col-md-4 margin_bottom1">
                            <div class="product_box">
                                <a href="/storeIndex/product/Adidas">
                                    <figure><img
                                            src="{{asset("storePage_assets/img/adidas-logo-png-transparent-6.png")}}"
                                            style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                            <div class="product_box">
                                <a href="/storeIndex/product/Balenciaga">
                                    <figure><img src="{{asset("storePage_assets/img/Balenciaga-Logo-PNG-Photos.png")}}"
                                                 style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                            <div class="product_box">
                                <a href="/storeIndex/product/Converse">
                                    <figure><img src="{{asset("storePage_assets/img/converse.png")}}"
                                                 style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product_box">
                                <a href="/storeIndex/product/Nike">
                                    <figure><img src="{{asset("storePage_assets/img/Nike-Logo-No-Background.png")}}"
                                                 style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product_box">
                                <a href="/storeIndex/product/Puma">
                                    <figure><img src="{{asset("storePage_assets/img/Puma-Logo-Download-Free-PNG.png")}}"
                                                 style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product_box">
                                <a href="/storeIndex/product/Vans">
                                    <figure><img src="{{asset("storePage_assets/img/Vans-Logo-PNG-HD-Isolated.png")}}"
                                                 style="width:300px" alt="#"/></figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Why Choose Us</h1>
                    </div>
                    <p class="mb-4 pb-2" style="text-align: justify">Shoes Street is dedicated to providing high-quality
                        shoes that combine
                        both fashion and functionality. With our knowledgeable staff and extensive selection,
                        we strive to ensure that you find the perfect pair of shoes that not only look great
                        but also provide the comfort and support you deserve. We invite you to explore our
                        collection and discover the perfect fit for your feet.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center"
                                     style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-0">Genuine Products</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center"
                                     style="width: 60px; height: 60px;">
                                    <i class="fa fa-user-check fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-0">Quality Products</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center"
                                     style="width: 60px; height: 60px;">
                                    <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-0">Free Consultation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center"
                                     style="width: 60px; height: 60px;">
                                    <i class="fa fa-headphones fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-0">Customer Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                         src="{{asset('storePage_assets/img/12SNEAKERS_SPAN-copy-superJumbo-v2.jpg')}}"
                         style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Customer Reviews</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('storePage_assets/img/Customer/tannguyenngoc.jpg')}}"
                     style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p>I've been a loyal customer at ABC Footwear for years, and they never
                        disappoint. The quality of their shoes is top-notch, and the prices
                        are reasonable. The staff is always friendly, and I appreciate their
                        expert advice when it comes to choosing the right shoes for my needs.</p>
                    <h5 class="mb-1">Tan Nguyen Ngoc</h5>
                    <span class="fst-italic">Lecturer</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('storePage_assets/img/Customer/guests.png')}}"
                     style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p>Shoes Street exceeded my expectations! Not only did I find a fantastic
                        pair of running shoes, but the store's ambiance was great, and the
                        checkout process was a breeze. The shoes are comfortable and durable
                        – exactly what I was looking for. Highly recommend!</p>
                    <h5 class="mb-1">Cong Nguyen Xuan</h5>
                    <span class="fst-italic">Student</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('storePage_assets/img/Customer/phuongdaoviet.jpg')}}"
                     style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p>
                        I recently visited Shoes Street, and I was blown away by their selection!
                        They have the trendiest styles, and the staff was incredibly helpful in
                        finding the perfect pair for me. I left feeling stylish and satisfied.
                        Can't wait to go back!</p>
                    <h5 class="mb-1">Phuong Dao Viet</h5>
                    <span class="fst-italic">Lecturers</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quote Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('storePage_assets/img/G1.png')}}"
                         style="object-fit: cover;"
                         alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Contact Now</h1>
                    </div>
                    <p class="mb-4 pb-2">Please enter your information to receive our promotion information</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name"
                                       style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email"
                                       style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                       style="height: 55px;">
                            </div>
                            {{--                            <div class="col-12">--}}
                            {{--                                <textarea class="form-control border-0" placeholder="Special Note"></textarea>--}}
                            {{--                            </div>--}}
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
@include('storePage.footer')
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('storePage_assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('storePage_assets/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('storePage_assets/js/main.js')}}"></script>

{{--//js from Admin Page--}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
