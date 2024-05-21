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
@yield('scripts')
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
</body>
</html>
