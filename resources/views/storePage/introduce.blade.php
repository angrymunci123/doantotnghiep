@extends('storePage.shortLayout')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Street - About Us</title>
</head>
<body>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Introduce</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Introduce</li>
                </ol>
            </nav>
    </div>
</div>
<div class="container-fluid" style="background-color: #f9f9f9">
    <br>
    <div class="card-group">
        <div class="container-fluid" style="width: 1500px; background-color: white">
            <div class="card-body">
            <h2 class="card-title">ABOUT US - SHOES STREET</h2>
            <p style="font-size: larger; text-align: justify">
                Welcome to our exclusive online shoe store! At our store, we pride ourselves on offering a diverse selection of high-quality shoes for all your footwear needs. Whether you're searching for stylish sneakers, elegant heels, comfortable flats, or durable boots, we have something to suit your unique style and preferences.

                Our knowledgeable team carefully curates our collection to ensure that every pair of shoes we offer is not only fashionable but also built to last. We partner with renowned brands and designers to bring you the latest trends and timeless classics. From casual everyday footwear to statement pieces for special occasions, we have it all.

                Shopping on our user-friendly website is a breeze. You can conveniently browse through our extensive catalog, filter your search by size, color, brand, or occasion, and find the perfect pair that matches your needs. We provide detailed product descriptions and high-resolution images to help you make informed choices.

                Customer satisfaction is our top priority, and we strive to provide an enjoyable shopping experience from start to finish. Our team of dedicated professionals is always ready to assist you with any queries or concerns you may have. We offer secure payment options and provide fast and reliable shipping services to ensure your shoes reach you in no time.

                We also understand that finding the right fit is crucial when it comes to shoes. That's why we provide comprehensive size guides and offer hassle-free returns if your shoes don't fit as expected. Your happiness and comfort are what drive us to deliver the best footwear options.

                So, why wait? Explore our fantastic range of shoes and elevate your style with our exquisite collection. Revamp your shoe wardrobe and step out confidently in shoes that are not only fashionable but also built to last. Start your shoe shopping journey with us today!
            </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #f9f9f9; height:50px"></div>
<div class="container-fluid" style="background-color: #f9f9f9">
    <a href="http://admissions.vnu.edu.vn/index.php/Home/viewnews/336">
        <img style="width:100%" src="{{asset("storePage_assets/img/Banner/adidas_banner_12997392-2f42-45df-8cb3-25bcbcf06254.webp")}}">
    </a>
</div>
</body>
</html>
@endsection

