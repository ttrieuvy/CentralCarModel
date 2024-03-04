<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .carousel-inner img {
        /* width: 100%; */
        height: 700px;
    }

    .content {
        padding: 50px;
        box-sizing: border-box;
    }

    .item-content {
        display: flex;
        border: 2px solid #0d3144;
        padding: 20px;
        justify-content: center;
        border-radius: 10px;
    }

    .item-content i {
        font-size: 2rem;
        padding: 10px;
        border: 3px solid #0d3144;
        border-radius: 50%;
        height: 58px;
    }

    .item-title {
        padding-left: 10px;
    }

    .title-products {
        display: flex;
        justify-content: center;
        height: 40px;
        align-items: center;
        margin: 20px;
    }

    .title-products i {
        font-size: 10px;
        padding: 0 10px;
        color: #1087b9;
    }

    .title-products h2 {
        color: #1087b9;
    }

    /* product  */
    a {
        text-decoration: none;
    }

    .product-hot {
        padding-bottom: 50px;
    }

    .product {
        border: 1px solid #0d3144;
        /* text-align: center; */
        /* width: 350px;
        margin: 50px auto; */
        height: 420px;
        position: relative;
        overflow: hidden;
    }

    .product:hover #search {
        /* display: block; */
        top: 40%;
    }

    .product:hover .btn-product-cart {
        display: block;
    }

    .product:hover .title-product {
        display: none;
    }

    .product:hover .price-product {
        display: none;
    }

    .img-product {
        position: relative;
    }

    .img-product img {
        max-width: 100%;

    }

    .sale-product {
        width: 100px;
        position: absolute;
        top: 0px;
        left: 0px;
    }

    .sale-product img {
        max-width: 100%;
    }

    .hot-product {
        width: 50px;
        position: absolute;
        top: 40px;
        left: 0px;

    }

    .hot-product img {
        max-width: 100%;
    }

    .icon-hear {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .con-like {
        --red: rgb(255, 50, 100);
        position: relative;
        width: 35px;
        height: 35px;
    }

    .con-like .like {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 20;
        cursor: pointer;
    }

    .con-like .checkmark {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .con-like .outline,
    .con-like .filled {
        fill: var(--red);
        position: absolute;
    }

    .con-like .filled {
        animation: kfr-filled 0.5s;
        display: none;
    }

    .con-like .celebrate {
        position: absolute;
        animation: kfr-celebrate 0.5s;
        animation-fill-mode: forwards;
        display: none;
    }

    .con-like .poly {
        stroke: var(--red);
        fill: var(--red);
    }

    .con-like .like:checked~.checkmark .filled {
        display: block
    }

    .con-like .like:checked~.checkmark .celebrate {
        display: block
    }

    @keyframes kfr-filled {
        0% {
            opacity: 0;
            transform: scale(0);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }
    }

    @keyframes kfr-celebrate {
        0% {
            transform: scale(0);
        }

        50% {
            opacity: 0.8;
        }

        100% {
            transform: scale(1.2);
            opacity: 0;
            display: none;
        }
    }


    .title-product {
        padding: 10px 20px 10px 20px;
        margin: 0;
    }

    .title-product a {
        color: black;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
    }

    .price-product {
        padding: 0 20px 20px 20px;
    }

    .price-product .default-price {
        font-weight: 500;
        text-decoration: line-through;
    }

    .price-product .promotional-price {
        color: red;
        font-weight: bold;
        font-size: 20px;
        padding: 0 10px;
    }

    /* .search-product-details {
    display: none;
    transition: 5s;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
} */

    #search {
        /* display: none; */
        font-size: 16px;
        border: 1px solid #1087b9;
        background-color: #1087b9;
        border-radius: 50%;
        padding: 10px;
        color: #fff;
        transition: 1s;
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #search:hover {
        background-color: #fff;
        color: #1087b9;
    }


    .btn-product-cart {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        bottom: 7%;
        display: none;
    }

    .button-cart {
        position: relative;
        overflow: hidden;
        height: 3rem;
        padding: 0 2rem;
        border-radius: 1.5rem;
        background: #fff;
        background-size: 400%;
        border: 1px solid #1087b9;
        font-weight: 700;
    }

    .button-cart:hover::before {
        transform: scaleX(1);
    }

    .button-content {
        position: relative;
        color: #1087b9;
        font-size: 14px;
        z-index: 1;
    }

    .button-cart:hover .button-content {
        color: #fff;
    }

    .button-cart::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        transform-origin: 0 50%;
        width: 100%;
        height: inherit;
        border-radius: inherit;
        background: linear-gradient(82.3deg,
                #46c0ea 10.8%,
                #1087b9 94.3%);
        transition: all 0.475s;
        color: #fff;
    }

    .banner-product-sale {
        padding-bottom: 20px;
    }

    .product-sale {
        padding-bottom: 30px;
    }

    .news {
        background-color: #EFF0F2;
        margin-bottom: 30px;
        padding-bottom: 30px;
    }

    .custom-item2 {
        background-color: white;
        padding: 10px;
    }

    .img-pic-line1 {
        border-bottom: 5px solid #46c0ea;
    }
</style>

<body>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $CONTENT_URL ?>/image/different/banner2.webp" alt="Mùa hè vui vẻ" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?= $CONTENT_URL ?>/image/different/banner1.webp" alt="Mercedes-Benz" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?= $CONTENT_URL ?>/image/different/banner-3.jpg" alt="BMW" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="item-content">
                        <i class="fa-solid fa-trophy"></i>
                        <div class="item-title">
                            <h5>UY TÍN HÀNG ĐẦU</h5>
                            <p>Cửa hàng mô hình tĩnh lớn nhất Việt Nam</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item-content">
                        <i class="fa-solid fa-recycle"></i>
                        <div class="item-title">
                            <h5>MIỄN PHÍ ĐỔI TRẢ</h5>
                            <p>Miễn phí đổi trả khi sản phẩm gặp vấn đề</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item-content">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="item-title">
                            <h5>GIAO HÀNG NHANH</h5>
                            <p>Giao hàng nhanh chóng và tiện lợi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-hot">
        <div class="container">
            <div class="row">
                <div class="title-products">
                    <i class="fa-solid fa-star"></i>
                    <h2>
                        SẢN PHẨM BÁN CHẠY
                    </h2>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="row">
                <?php
                $arrProduct = select_product_hot();
                foreach ($arrProduct as $key_hot => $producthot) {
                    $price_sale = $producthot['price'] - ($producthot['price'] * $producthot['sale']) / 100;
                    if ($key_hot < 4) {
                        echo '
                        <div class="col-sm-3">
                            <div class="product">
                                <div class="img-product">
                                    <img src="' . $CONTENT_URL . '/image/product/' . $producthot['avatar'] . '" alt="">
                                <div class="icon-hear">
                                    <div class="con-like">
                                        <input title="like" type="checkbox" class="like">
                                            <div class="checkmark">
                                                <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                    </path>
                                                </svg>
                                                <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                    </path>
                                                </svg>
                                        <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                            <polygon points="10,10 20,20" class="poly"></polygon>
                                            <polygon points="10,50 20,50" class="poly"></polygon>
                                            <polygon points="20,80 30,70" class="poly"></polygon>
                                            <polygon points="90,10 80,20" class="poly"></polygon>
                                            <polygon points="90,50 80,50" class="poly"></polygon>
                                            <polygon points="80,80 70,70" class="poly"></polygon>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-product">
                            <a href="">' . $producthot['name'] . '</a>
                        </div>
                        <div class="price-product">
                            <span class="default-price">' . number_format($producthot['price']) . '₫</span>
                            <span class="promotional-price">' . number_format($price_sale) . '₫</span>
                        </div>
                        <a href="../product/product-details.php?id_product=' . $producthot['id_product'] . '"><i id="search" class="fa-solid fa-magnifying-glass"></i></a>
                        <div class="btn-product-cart">
                            <button class="button-cart" >
                                <a class="button-content"  href="'.$CONTROLLER_URL.'/addToCart.php?id_product='.$producthot['id_product'].'&shop-cart">THÊM VÀO GIỎ</a>
                            </button>
                        </div>
                        ';
                        if ($producthot['sale'] > 0) {
                            echo '<div class="sale-product">
                            <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
                        </div>';
                        }
                        if ($producthot['hot'] > 0) {
                            echo '   <div class="hot-product">
                            <img src="' . $CONTENT_URL . '/image/different/hot.png" alt="">
                        </div>
                            ';
                        }
                        echo '</div>
                        </div>
                        ';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="product-sale">
        <div class="container">
            <div class="row">
                <div class="title-products">
                    <i class="fa-solid fa-star"></i>
                    <h2>
                        SẢN PHẨM KHUYẾN MÃI
                    </h2>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="banner-product-sale">
                    <img src="<?= $CONTENT_URL ?>/image/different/banner-sale.webp" alt="" width="100%">
                </div>
            </div>
            <div class="row">
                <?php
                $arrProduct_sale = select_product_sale();
                foreach ($arrProduct as $key_sale => $product_sale) {
                    $price_sale = $product_sale['price'] - ($product_sale['price'] * $product_sale['sale']) / 100;
                    if ($key_sale > 4 && $key_sale < 9) {
                        echo '
                        <div class="col-sm-3">
                            <div class="product">
                                <div class="img-product">
                                    <img src="' . $CONTENT_URL . '/image/product/' . $product_sale['avatar'] . '" alt="">
                                <div class="icon-hear">
                                    <div class="con-like">
                                        <input title="like" type="checkbox" class="like">
                                            <div class="checkmark">
                                                <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                    </path>
                                                </svg>
                                                <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                    </path>
                                                </svg>
                                        <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                            <polygon points="10,10 20,20" class="poly"></polygon>
                                            <polygon points="10,50 20,50" class="poly"></polygon>
                                            <polygon points="20,80 30,70" class="poly"></polygon>
                                            <polygon points="90,10 80,20" class="poly"></polygon>
                                            <polygon points="90,50 80,50" class="poly"></polygon>
                                            <polygon points="80,80 70,70" class="poly"></polygon>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-product">
                            <a href="">' . $product_sale['name'] . '</a>
                        </div>
                        <div class="price-product">
                            <span class="default-price">' . number_format($product_sale['price']) . '₫</span>
                            <span class="promotional-price">' . number_format($price_sale) . '₫</span>
                        </div>
                        <a href="../product/product-details.php?id_product=' . $product_sale['id_product'] . '"><i id="search" class="fa-solid fa-magnifying-glass"></i></a>
                        <div class="btn-product-cart">
                            <button class="button-cart">
                            <a class="button-content" href="'.$CONTROLLER_URL.'/addToCart.php?id_product='.$product_sale['id_product'].'&shop-cart">THÊM VÀO GIỎ</a>
                            </button>
                        </div>
                        ';
                        if ($producthot['sale'] > 0) {
                            echo '<div class="sale-product">
                            <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
                        </div>';
                        }
                        if ($producthot['hot'] > 0) {
                            echo '   <div class="hot-product">
                            <img src="' . $CONTENT_URL . '/image/different/hot.png" alt="">
                        </div>
                            ';
                        }
                        echo '</div>
                        </div>
                        ';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="title-products">
                    <i class="fa-solid fa-star"></i>
                    <h2>
                        TIN TỨC
                    </h2>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="container custom-item2">
                        <div class="row">
                            <img class="img-pic-line1" src="../../content/image/blog/blog-3.jpg" alt="BMW-i8">
                        </div>
                        <div class="row">
                            <div class="text-left mt-1">
                                <a class="blog-icon" href="#">BLOG</a>
                            </div>
                            <div class="text-left mt-2">
                                <a href="<?= $SITE_URL ?>/post?blog-3"><strong style="color: #000;">Siêu Xe Thể Thao Kết Hợp Hệ Truyền Động Hybrid BMW i8</strong></a>
                            </div>
                            <div class="text-left mt-2">
                                <p>BMW i8 là một mẫu xe thể thao plug-in hybrid (xe lai sạc điện) được sản xuất bởi hãng xe...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container custom-item2">
                        <div class="row">
                            <img class="img-pic-line1" src="../../content/image/blog/blog-4.jpg" alt="RR" height="220px">
                        </div>
                        <div class="row">
                            <div class="text-left mt-1">
                                <a class="blog-icon" href="#">BLOG</a>
                            </div>
                            <div class="text-left mt-2">
                                <a href="<?= $SITE_URL ?>/post?blog-4"><strong style="color: #000;">Top 3 Những Mẫu Xe Ô Tô Đắt Nhất Thế Giới</strong></a>
                            </div>
                            <div class="text-left mt-2">
                                <p>1. Rolls-Royce Boat TailRolls-Royce Boat Tail là một chiếc xe siêu sang được Rolls-Royce giới thiệu vào năm 2021. Đây...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container custom-item2">
                        <div class="row">
                            <img class="img-pic-line1" src="../../content/image/blog/blog-6.jpg" alt="" height="220px">
                        </div>
                        <div class="row">
                            <div class="text-left mt-1">
                                <a class="blog-icon" href="#">BLOG</a>
                            </div>
                            <div class="text-left mt-2">
                                <a href="<?= $SITE_URL ?>/post?blog-6"><strong style="color: #000;">Ô Tô Mercedes-Benz 300SL - Huyền Thoại Cánh Cửa Chim</strong></a>
                            </div>
                            <div class="text-left mt-2">
                                <p>Mercedes-Benz 300SL là một mẫu xe thể thao được sản xuất bởi Mercedes-Benz từ năm 1954 đến năm 1963.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>