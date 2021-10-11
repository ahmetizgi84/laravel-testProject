<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <title>Ürün Detay</title>

    <style>
        body{margin-top:20px;
            background:#eee;
        }

        /*panel*/
        .panel {
            border: none;
            box-shadow: none;
        }

        /*product list*/

        .prod-cat li a{
            border-bottom: 1px dashed #d9d9d9;
        }

        .prod-cat li a {
            color: #3b3b3b;
        }

        .prod-cat li ul {
            margin-left: 30px;
        }

        .prod-cat li ul li a{
            border-bottom:none;
        }
        .prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
            background: none;
            color: #ff7261;
        }

        .product-list img{
            width: 100%;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
        }

        .product-list .pro-img-box {
            position: relative;
        }

        .adtocart i{
            color: #fff;
            font-size: 25px;
            line-height: 42px;
        }

        .product-list .price {
            color:#fc5959 ;
            font-size: 15px;
        }

        .pro-img-details {
            margin-left: -15px;
        }

        .pro-img-details img {
            width: 100%;
        }

        .pro-d-title {
            font-size: 16px;
            margin-top: 0;
        }

        .product_meta {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 10px 0;
            margin: 15px 0;
        }

        .product_meta span {
            display: block;
            margin-bottom: 10px;
        }
        .product_meta a, .pro-price{
            color:#fc5959 ;
        }

        .pro-price, .amount-old {
            font-size: 18px;
            padding: 0 10px;
        }

        .amount-old {
            text-decoration: line-through;
        }

        .quantity {
            width: 120px;
        }

        .pro-img-list {
            margin: 10px 0 0 -15px;
            width: 100%;
            display: inline-block;
        }

        .pro-img-list a {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
        }

    </style>

</head>
<body>

        <div class="container">
            <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark mb-3 sticky-top" style="background-color: #232323;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('front.products')}}">Anasayfa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body">

                        <div class="col-md-6">
                            <div class="pro-img-details">
                                <img src="{{$product->productImageUrl}}" alt="{{$product->productImageUrl}}">
                            </div>
                            <div class="pro-img-list">
                                <a href="#">
                                    <img src="https://via.placeholder.com/115x100/87CEFA/000000" alt="">
                                </a>
                                <a href="#">
                                    <img src="https://via.placeholder.com/115x100/FF7F50/000000" alt="">
                                </a>
                                <a href="#">
                                    <img src="https://via.placeholder.com/115x100/20B2AA/000000" alt="">
                                </a>
                                <a href="#">
                                    <img src="https://via.placeholder.com/120x100/20B2AA/000000" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 class="pro-d-title">
                                <a href="#" class="">
                                    {{$product->productName}}
                                </a>
                            </h4>
                            <p>
                                {{$product->productDetail}}
                            </p>
                            <div class="product_meta">
                                <span class="posted_in"> <strong>Kategori:</strong> <a rel="tag" href="#">{{$product->getCategory->categoryName}}</a></span>
                            </div>
                            <div class="m-bot15"> <strong>Fiyat : </strong> <span class="amount-old">{{$product->productPrice + 47}} ₺</span>  <span class="pro-price"> {{$product->productPrice}} ₺</span></div>
                            <div class="form-group">
                                <label>Miktar</label>
                                <input type="quantiy" placeholder="1" class="form-control quantity">
                            </div>
                            <p>
                                <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>
</html>
