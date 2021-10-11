<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Ürünler</title>

    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /* E-commerce */
        .product-box {
            padding: 0;
            border: 1px solid #e7eaec;
        }

        .product-box:hover,
        .product-box.active {
            border: 1px solid transparent;
            -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
            -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
            box-shadow: 0 3px 7px 0 #a8a8a8;
        }

        .product-imitation {
            text-align: center;
            /*padding: 90px 0;*/
            background-color: #f8f8f9;
            color: #bebec3;
            font-weight: 600;
        }

        .cart-product-imitation {
            text-align: center;
            padding-top: 30px;
            height: 80px;
            width: 80px;
            background-color: #f8f8f9;
        }

        .product-imitation.xl {
            padding: 120px 0;
        }

        .product-desc {
            padding: 20px;
            position: relative;
        }

        .ecommerce .tag-list {
            padding: 0;
        }

        .ecommerce .fa-star {
            color: #d1dade;
        }

        .ecommerce .fa-star.active {
            color: #f8ac59;
        }

        .ecommerce .note-editor {
            border: 1px solid #e7eaec;
        }

        table.shoping-cart-table {
            margin-bottom: 0;
        }

        table.shoping-cart-table tr td {
            border: none;
            text-align: right;
        }

        table.shoping-cart-table tr td.desc,
        table.shoping-cart-table tr td:first-child {
            text-align: left;
        }

        table.shoping-cart-table tr td:last-child {
            width: 80px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 600;
            color: #676a6c;
            display: block;
            margin: 2px 0 5px 0;
        }

        .product-name:hover,
        .product-name:focus {
            color: #1ab394;
        }

        .product-price {
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
            background-color: #1ab394;
            padding: 6px 12px;
            position: absolute;
            top: -32px;
            right: 0;
        }

        .product-detail .ibox-content {
            padding: 30px 30px 50px 30px;
        }

        .image-imitation {
            background-color: #f8f8f9;
            text-align: center;
            padding: 200px 0;
        }

        .product-main-price small {
            font-size: 10px;
        }

        .product-images {
            margin: 0 20px;
        }

        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }

        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark mb-3 sticky-top" style="background-color: #232323;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('front.products')}}">TestProject</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori Seç
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($categories as $category)
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{route('front.kategori', $category->id)}}">
                                            {{ $category->categoryName }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </div>


    <h1>Ürünler</h1>
    <div class="row">

        @foreach($products as $product)
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div class="product-imitation">
                            <img src="{{$product->productImageUrl}}" class="card-img-top"
                                 alt="{{$product->productImageUrl}}">
                        </div>
                        <div class="product-desc">
                    <span class="product-price">
                        {{$product->productPrice}} ₺
                    </span>
                            <small class="text-muted">{{$product->getCategory->categoryName}}</small>
                            <a href="{{route('front.productDetail', $product->id)}}" class="product-name">
                                {{$product->productName}}
                            </a>

                            <div class="small m-t-xs"
                                 style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; height: 3rem;">
                                {{$product->productDetail}}
                            </div>
                            <div class="m-t text-righ">

                                <a href="{{route('front.productDetail', $product->id)}}"
                                   class="btn btn-xs btn-outline btn-primary">Detay Gör <i
                                        class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="mb-5">

        {{ $products->links() }}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"
        integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u"
        crossorigin="anonymous"></script>
</body>
</html>
