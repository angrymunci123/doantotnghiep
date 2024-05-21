@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street - Contact</title>
</head>
<body>
<!-- Contact Start -->
{{--<img src="{{asset('storePage_assets/img/slider.jpg')}}">--}}
{{--<div class="centered"--}}
{{--     style="position: absolute;--}}
{{--                    top:40%;--}}
{{--                    left:35%;--}}
{{--                    transform:translate(-50%, -50%)">--}}
{{--    <h1 style="color: white">Contact</h1>--}}
{{--    <h5 style="color: white"> <a href="/storeIndex">Home Page</a> > Contact</h5>--}}
{{--</div>--}}
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home Page</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Introduce</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container bg-white overflow-hidden px-lg-0">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Contact Us</h1>
                    </div>
                    <p class="mb-4">Contact us to receive promotion notification email or for free consultation.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Address</h1>
                    </div>
                    <table style='text-align:justify'>
                        <tr>
                            <td>
                                <h2> 1. Ha Noi </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Address: 300 Kim Ma Street, Ba Dinh District, Ha Noi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email: shoesstreethn300@gmail.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Phone number: +84123456789</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2> 2. Ho Chi Minh City </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Address: 240 Phan Van Tri, 11 Ward, Binh Thanh District, Ho Chi Minh City</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email: shoesstreethcm240@gmail.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Phone number: +84246810124</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<div class="container-fluid">
    <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
    </a>
</div>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
</body>
</html>
@endsection
