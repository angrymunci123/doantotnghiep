@extends('storePage.shortLayout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container-fluid page-header">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Shopping Guide</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/storeIndex">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Shopping Guide</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-fluid" style="background-color: #f9f9f9">
    <br>
    <div class="card-group" style="margin:auto">
        <div class="container-fluid" style="background-color: white; width: 1500px; margin:auto">
            <br>
            <h3>Shoes Street - Shopping Guide</h3>
            <p><b>1. Know your foot size:</b> Before heading to the shoe store, make sure you know your accurate foot size. Feet can change in size over time, so getting a fresh measurement is essential. This will help you narrow down the available options and find shoes that fit properly.</p>
            <p><b>2. Comfort is key:</b> Look for shoes that are comfortable to wear. Consider the materials used, cushioning, and arch support. Take your time to try on different pairs and walk around the store to ensure they feel good on your feet.</p>
            <p><b>3. Consider the occasion:</b> Think about what occasion the shoes are intended for. Are you looking for athletic shoes, casual shoes, or dress shoes? Having a specific purpose in mind will help you pick the right style.</p>
            <p><b>4. Quality and durability:</b> Check the quality of the shoes. Look for well-constructed pairs that are made from durable materials. Inspect the stitching, materials, and overall craftsmanship to ensure that the shoes will last.</p>
            <p><b>5. Try before you buy:</b> Always try on shoes before purchasing them. Sizes can vary between brands, so even if you know your size, trying them on ensures a proper fit. Walk around in the shoes to ensure they don't pinch, rub, or feel uncomfortable.</p>
            <p><b>6. Consider your wardrobe:</b> Think about the clothes you already have in your wardrobe and how the shoes will fit in. Choose shoes that complement your existing style and can be easily paired with different outfits.</p>
            <p><b>7. Set a budget:</b> Determine your budget before shopping. Shoes can range in price, so having a budget in mind will help narrow down your choices and prevent overspending.</p>
            <p><b>8. Check the return policy:</b> Before finalizing your purchase, check the store's return policy. In case the shoes don't fit properly or aren't what you expected, it's important to know if you can return or exchange them.</p>
            <p><b>9. Get recommendations:</b> If possible, ask for recommendations from friends, family, or even sales associates. They may have insights on specific brands or styles that could be a good fit for you.</p>
            <p><b>10. Don't rush:</b> Take your time while shopping for shoes. It's important to find the right pair that combines comfort, style, and quality. Avoid making impulse purchases and keep searching until you find the perfect fit.</p>
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

