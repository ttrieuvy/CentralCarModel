<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header-product {
        background: #f5f5f5;
        box-shadow: 0 0px 3px rgba(0, 0, 0, 0.2);
        min-height: 50px;
        display: flex;
        align-items: center;
        font-size: 16px;
        margin-top: 10px;
    }

    .header-product a {
        color: #000;
    }

    .header-product a:hover {
        color: #1ea8d9;
    }

    .banner-all {
        padding: 20px;
    }

    .arrange-product {
        background: #fff;
        box-shadow: 0 0px 3px rgba(0, 0, 0, 0.2);
        min-height: 40px;
        display: flex;
        align-items: center;
    }

    .arrange-product span {
        font-size: 12px;
        padding: 0 10px;
    }

    .arrange-product input {
        margin-right: 10px;
    }

    .arrange-product label {
        padding-right: 30px;
    }

    /* PRODUCT  */

    .list-product {
        padding: 30px 0px;
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
        margin-bottom: 30px;
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
</style>

<body>
    <div class="header-product">
        <div class="container">
            <div class="title-header-product">
                <span><a href="<?=$SITE_URL?>/trang-chinh">Trang chủ</a></span>
                <span>/</span>
                <span><a href="">Tất cả sản phẩm</a></span>
            </div>
        </div>
    </div>
    <div class="main-product">
        <div class="container">
            <div class="row">
                <div class="banner-all">
                    <img src="../../content/image/different/banner-all.webp" alt="" width="100%">
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="arrange-product">
                        <span><strong>SẮP XẾP THEO :</strong></span>
                        <input type="radio" value="1" checked>
                        <label for="">Mặc định</label>
                        <input type="radio" value="2">
                        <label for="">Tăng dần</label>
                        <input type="radio" value="3">
                        <label for="">Giảm dần</label>
                    </div>
                    <div class="list-product">
                        <div class="row">
                            <?php

                            if (isset($search_arr)) {
                                foreach ($search_arr as $product) {
                                    // $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                                    $price_sale = $product['price'] - ($product['price'] * $product['sale']) / 100;
                                    echo '
                                <div class="col-sm-4">
                                <div class="product">
                                    <div class="img-product">
                                        <img src="' . $CONTENT_URL . '/image/product/' . $product['avatar'] . '" alt="">
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
                                        <a href="#">' . $product['name'] . '</a>
                                    </div>
                                    <div class="price-product">
                                        <span class="default-price">' . number_format($product['price']) . '₫</span>
                                        <span class="promotional-price">' . number_format($price_sale) . '₫</span>
                                    </div>
                                    <a href="../product/product-details.php?id_product=' . $product['id_product'] . '">
                                    <i id="search" class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <div class="btn-product-cart">
                                        <button class="button-cart" >
                                            <a class="button-content" href="' . $CONTROLLER_URL . '/addToCart.php?id_product=' . $product['id_product'] . '&shop-cart">THÊM VÀO GIỎ</a>
                                        </button>
                                        </div>
                                        ';
                                    if ($product['sale'] > 0) {
                                        echo '<div class="sale-product">
                                            <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
                                        </div>';
                                    }
                                    if ($product['hot'] > 0) {
                                        echo '   <div class="hot-product">
                                            <img src="' . $CONTENT_URL . '/image/different/hot.png" alt="">
                                        </div>
                                            ';
                                    }
                                    echo '</div>
                                        </div>
                                        ';
                                }
                            } else {


                                $product_arr = product_select_all();
                                foreach ($product_arr as $product) {
                                    // $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                                    $price_sale = $product['price'] - ($product['price'] * $product['sale']) / 100;
                                    echo '
                                <div class="col-sm-4">
                                <div class="product">
                                    <div class="img-product">
                                        <img src="' . $CONTENT_URL . '/image/product/' . $product['avatar'] . '" alt="">
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
                                        <a href="#">' . $product['name'] . '</a>
                                    </div>
                                    <div class="price-product">
                                        <span class="default-price">' . number_format($product['price']) . '₫</span>
                                        <span class="promotional-price">' . number_format($price_sale) . '₫</span>
                                    </div>
                                    <a href="../product/product-details.php?id_product=' . $product['id_product'] . '">
                                    <i id="search" class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <div class="btn-product-cart">
                                        <button class="button-cart" >
                                            <a class="button-content" href="' . $CONTROLLER_URL . '/addToCart.php?id_product=' . $product['id_product'] . '&shop-cart">THÊM VÀO GIỎ</a>
                                        </button>
                                        </div>
                                        ';
                                    if ($product['sale'] > 0) {
                                        echo '<div class="sale-product">
                                            <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
                                        </div>';
                                    }
                                    if ($product['hot'] > 0) {
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
                </div>
                <div class="col-sm-3">
                    <?php require '../layout/danh-muc.php'     ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>