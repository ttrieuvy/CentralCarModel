<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .product-details {
        padding: 30px;
    }

    .product-details p {
        margin: 0;
    }

    .product-details h5 {
        color: red;
        font-weight: 700;
        padding: 20px 0;
    }

    .edit-quantity {
        width: 30px;
        height: 30px;
        border: 2px solid #0d3144;
        background-color: #fff;
        text-align: center;
        cursor: pointer;
    }

    .quantity {
        width: 100px;
        background-color: #fff;
        color: #0d3144;
        border: 2px solid #0d3144;
    }

    #shop-cart {
        width: 100%;
        height: 50px;
        /* padding: 0 2rem; */
        padding: 0.5rem 2rem;
        border-radius: 5px;
        background: #fff;
        border: 2px solid #1087b9;
        font-weight: 700;
        color: #1087b9;
        transition: 1s;
        margin-bottom: 20px;
    }

    #shop-cart:hover {
        background-color: #1087b9;
        color: #fff;
    }

    #pay-now {
        width: 100%;
        height: 50px;
        /* padding: 0 2rem; */
        padding: 0.5rem 2rem;
        border-radius: 5px;
        background: #f92424;
        border: 2px solid #f92424;
        font-weight: 700;
        color: #fff;
        transition: .5s;
        margin-bottom: 20px;
        text-align: center;
    }

    #pay-now:hover {
        background-color: #ff6969;
        color: #fff;
        border: #ff6969;
    }

    .special-offer {
        position: relative;
        border: 1.5px solid red;
        padding: 20px;
        margin-top: 35px;
    }

    .content-special {
        margin-top: 20px;
    }

    .content-special p {
        color: red;
        font-weight: 500;
    }

    .img-special {
        position: absolute;
        top: -20px;
        left: 10px;
    }

    .text-special {
        position: absolute;
        top: -8px;
        left: 70px;
        font-size: 12px;
        font-weight: 700;
        color: #fff;
    }

    .title-product-details {
        display: flex;
        justify-content: center;
        background-color: #1087b9;
        border-radius: 5px 5px 0px 0px;
    }

    .title-product-details i {
        font-size: 24px;
        padding: 4px 10px;
        color: goldenrod;
    }

    .title-product-details h3 {
        margin: 0;
        color: #fff;
        font-size: 24px;
    }

    .list-special table {
        width: 100%;
        border-spacing: 0;
    }

    .list-special tr {
        border: 0.5px solid #0d3144;
        width: 50%;
    }

    .product-describe {
        padding: 20px 0;
    }

    /* Đánh giá */
    .rating {
        float: left;
    }

    .rating:not(:checked)>input {
        position: absolute;
        appearance: none;
    }

    .rating:not(:checked)>label {
        float: right;
        cursor: pointer;
        font-size: 50px;
        color: #666;
    }

    .rating:not(:checked)>label:before {
        content: '★';
    }

    .rating>input:checked+label:hover,
    .rating>input:checked+label:hover~label,
    .rating>input:checked~label:hover,
    .rating>input:checked~label:hover~label,
    .rating>label:hover~input:checked~label {
        color: #e58e09;
    }

    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #ff9e0b;
    }

    .rating>input:checked~label {
        color: #ffa723;
    }

    #comment {
        width: 100%;
        min-height: 70px;
    }

    #sb-comment {
        margin: 20px 0;
        background-color: #fff;
        border: 1px soild #0d3144;
        border-radius: 5px;
        font-weight: 700;
        padding: 5px;
        transition: 1s;
    }

    #sb-comment:hover {
        color: #fff;
        background-color: #1087b9;
    }

    a {
        text-decoration: none;
    }

    .product-hot {
        padding-bottom: 50px;
    }

    .product {
        /* border: 1px solid #0d3144; */
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

    .related-products {
        background-color: #1087b9;
        /* margin-bottom: 20px; */
        padding: 5px;
        border-radius: 5px 5px 0 0;
        display: flex;
        height: 50px;
        align-items: center;
    }

    .related-products h4 {
        margin: 0;
        padding: 5px;
        color: #fff;
        margin-left: 5px;
    }

    .policy-product {
        display: flex;
        height: 100px;
        align-items: center;
        margin: 20px 0;
    }

    .policy-product img {
        width: 70px;
    }

    .content-policy-product {
        padding: 0 20px;
    }

    .content-policy-product h6 {
        font-weight: 700px;
    }


    .card-wrapper img {
        /* width: 100%; */
        display: block;
    }

    .card-wrapper .img-display {
        border-bottom: 0.1rem dashed #0d3144;
        overflow: hidden;
    }

    .card-wrapper .img-showcase {
        display: flex;
        width: 100%;
        transition: all 0.5s ease;
    }

    .card-wrapper .img-showcase img {
        min-width: 100%;
    }

    .card-wrapper .img-select {
        display: flex;
    }

    .card-wrapper .img-item {
        margin: 0.3rem;
    }

    .card-wrapper .img-item:nth-child(1),
    .card-wrapper .img-item:nth-child(2),
    .card-wrapper .img-item:nth-child(3) {
        margin-right: 0;
    }

    .card-wrapper .img-item:hover {
        opacity: 0.8;
    }


    /* show cmt */
    .link-muted {
        color: #aaa;
    }

    .link-muted:hover {
        color: #1266f1;
    }
</style>

<body>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-wrapper">
                        <div class="card">
                            <!-- card left -->
                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase">
                                        <img src="<?= $CONTENT_URL ?>/image/product/<?= $avatar ?>" alt="shoe image" width="100%">
                                        <?php
                                        foreach ($detailImg as $k => $v) {
                                            echo '
                                        <img src="' . $CONTENT_URL . '/image/product/' . $v['image'] . '" alt="shoe image" width="100%">
                                        ';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="#" data-id="1">
                                            <img src="<?= $CONTENT_URL ?>/image/product/<?= $avatar ?>" alt="shoe image" width="200px">
                                        </a>
                                    </div>
                                    <?php
                                    foreach ($detailImg as $k => $v) {
                                        echo '
                                        <div class="img-item">
                                        <a href="#" data-id="'.$k+ (int)(2).'">
                                            <img src="' . $CONTENT_URL . '/image/product/' . $v['image']  . '" alt="shoe image" width="200px">
                                        </a>
                                    </div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-product-details">
                        <i class="fa-solid fa-gift"></i>
                        <h3>QUÀ KHUYẾN MÃI TRONG HÈ</h3>
                    </div>
                    <div class="list-special">
                        <table>
                            <tbody style="display: flex;justify-content: space-around;">
                                <tr>
                                    <td>
                                        <img src="<?= $CONTENT_URL ?>/image/different/special-1.webp" alt="" width="100px">
                                    </td>
                                    <td>
                                        <p style="margin-bottom:0px;">Tặng
                                            <span style="color:#f00;font-size:17px;font-weight:bold;">1</span>
                                            <span>Cọ cao cấp</span>.
                                            Khi mua
                                            <span style="color:#f00;font-size:17px;font-weight:bold;">1</span>
                                            <span> Mô hình xe Mercedes Benz Maybach S650 2019 1:18 Almost Real</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= $CONTENT_URL ?>/image/different/special-2.webp" alt="" width="100px">
                                    </td>
                                    <td>
                                        <p style="margin-bottom:0px;">Tặng
                                            <span style="color:#f00;font-size:17px;font-weight:bold;">1</span>
                                            <span>Khăn da vệ sinh chống bụi và dấu vân tay</span>
                                            . Khi mua
                                            <span style="color:#f00;font-size:17px;font-weight:bold;">1</span>
                                            <span> Mô hình xe Mercedes Benz Maybach S650 2019 1:18 Almost Real</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="product-describe">
                            <h4>MÔ TẢ SẢN PHẨM</h4>
                            <p><?= $description ?></p>
                        </div>
                        <div class="product-reviews">
                            <h4>ĐÁNH GIÁ SẢN PHẨM</h4>
                            <form action="" method="post">
                                <!-- <div class="rating">
                                    <?php
                                    include '../../model/rate.php';
                                    $avg_vote = select_rate_product_by_id_product($id_product);
                                    extract($avg_vote);
                                    if ($user_rate['vote']  == 1) {
                                        echo '
                                        <input type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" title="text"></label>
                                        
                                        <input type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" title="text"></label>

                                        <input type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" title="text"></label>

                                        <input type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" title="text"></label>

                                        <input checked type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" title="text"></label>
                                        ';
                                    } else if ($user_rate['vote']  == 2) {
                                        echo '
                                        <input type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" title="text"></label>

                                        <input type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" title="text"></label>

                                        <input type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" title="text"></label>

                                        <input checked type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" title="text"></label>

                                        <input  type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" title="text"></label>
                                        ';
                                    } else if ($user_rate['vote']  == 3) {
                                        echo '
                                        <input type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" title="text"></label>

                                        <input type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" title="text"></label>

                                        <input checked type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" title="text"></label>

                                        <input type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" title="text"></label>

                                        <input  type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" title="text"></label>
                                        ';
                                    } else if ($user_rate['vote']  == 4) {
                                        echo '
                                        <input type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" title="text"></label>

                                        <input checked type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" title="text"></label>

                                        <input type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" title="text"></label>

                                        <input type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" title="text"></label>

                                        <input type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" title="text"></label>
                                        ';
                                    } else if ($user_rate['vote'] == 5) {
                                        echo '
                                        <input checked type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" title="text"></label>

                                        <input type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" title="text"></label>

                                        <input type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" title="text"></label>

                                        <input type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" title="text"></label>

                                        <input type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" title="text"></label>
                                        ';
                                    }
                                    ?>

                                </div> -->
                                <div class="cmt">
                                    <div class="all-cmt">
                                        <?php

                                        $cmts = comment_select_by_product($_GET['id_product']);

                                        foreach ($cmts as $cmt) {
                                            extract($cmt);
                                            $users = user_select_by_id($id_user);
                                            $user_rate = select_user_rate($id_user);

                                            // echo "<pre>";
                                            // print_r($a);
                                            // echo "</pre>";

                                        ?>
                                            <section>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex flex-start">
                                                                    <img class="rounded-circle  me-3" src="../../content/image/user/<?= $users['image'] ?>" alt="image" width="60" height="60" />
                                                                    <div>
                                                                        <h6 class=""><?= $id_user ?></h6>
                                                                        <div class="d-flex align-items-center mb-3">
                                                                            <p class="">
                                                                                <?= $created_at ?>
                                                                            </p>
                                                                            <p>
                                                                            <div class="rating">

                                                                                <?php
                                                                                // var_dump($user_rate);
                                                                                if (!empty($user_rate) && $id_user == $user_rate['id_user'] && $id_product == $user_rate['id_product']) {
                                                                                    if ($user_rate['vote']  == 1) {
                                                                                        echo '
                                                                                        <input type="radio" id="star5" name="rate" value="5">
                                                                                        <label for="star5" title="text"></label>
                                                                                        
                                                                                        <input type="radio" id="star4" name="rate" value="4">
                                                                                        <label for="star4" title="text"></label>
                                                
                                                                                        <input type="radio" id="star3" name="rate" value="3">
                                                                                        <label for="star3" title="text"></label>
                                                
                                                                                        <input type="radio" id="star2" name="rate" value="2">
                                                                                        <label for="star2" title="text"></label>
                                                
                                                                                        <input checked type="radio" id="star1" name="rate" value="1">
                                                                                        <label for="star1" title="text"></label>
                                                                                        ';
                                                                                    } else if ($user_rate['vote']  == 2) {
                                                                                        echo '
                                                                                        <input type="radio" id="star5e" name="ratee" value="5">
                                                                                        <label for="star5e" title="text"></label>

                                                                                        <input type="radio" id="star4e" name="ratee" value="4">
                                                                                        <label for="star4e" title="text"></label>

                                                                                        <input type="radio" id="star3e" name="ratee" value="3">
                                                                                        <label for="star3e" title="text"></label>

                                                                                        <input checked type="radio" id="star2e" name="ratee" value="2">
                                                                                        <label for="star2e" title="text"></label>

                                                                                        <input  type="radio" id="star1e" name="ratee" value="1">
                                                                                        <label for="star1e" title="text"></label>
                                                                                        ';
                                                                                    } else if ($user_rate['vote']  == 3) {
                                                                                        echo '
                                                                                        <input type="radio" id="star5a" name="ratea" value="5">
                                                                                        <label for="star5a" title="text"></label>

                                                                                        <input type="radio" id="star4a" name="ratea" value="4">
                                                                                        <label for="star4a" title="text"></label>

                                                                                        <input checked type="radio" id="star3a" name="ratea" value="3">
                                                                                        <label for="star3a" title="text"></label>

                                                                                        <input type="radio" id="star2a" name="ratea" value="2">
                                                                                        <label for="star2a" title="text"></label>

                                                                                        <input  type="radio" id="star1a" name="ratea" value="1">
                                                                                        <label for="star1a" title="text"></label>
                                                                                        ';
                                                                                    } else if ($user_rate['vote']  == 4) {
                                                                                        echo '
                                                                                        <input type="radio" id="star5c" name="rate" value="5">
                                                                                        <label for="star5c" title="text"></label>

                                                                                        <input checked type="radio" id="star4c" name="rate" value="4">
                                                                                        <label for="star4c" title="text"></label>

                                                                                        <input type="radio" id="star3c" name="rate" value="3">
                                                                                        <label for="star3c" title="text"></label>

                                                                                        <input type="radio" id="star2c" name="rate" value="2">
                                                                                        <label for="star2c" title="text"></label>

                                                                                        <input type="radio" id="star1c" name="rate" value="1">
                                                                                        <label for="star1c" title="text"></label>
                                                                                        ';
                                                                                    } else if ($user_rate['vote']  == 5) {
                                                                                        echo '
                                                                                        <input checked type="radio" id="star5v" name="rate" value="5">
                                                                                        <label for="star5v" title="text"></label>

                                                                                        <input type="radio" id="star4v" name="rate" value="4">
                                                                                        <label for="star4v" title="text"></label>

                                                                                        <input type="radio" id="star3v" name="rate" value="3">
                                                                                        <label for="star3v" title="text"></label>

                                                                                        <input type="radio" id="star2v" name="rate" value="2">
                                                                                        <label for="star2v" title="text"></label>

                                                                                        <input type="radio" id="star1v" name="rate" value="1">
                                                                                        <label for="star1v" title="text"></label>
                                                                                        ';
                                                                                    }
                                                                                } else {
                                                                                    echo '';
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            </p>
                                                                        </div>
                                                                        <p class="">
                                                                            <?= $content ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="my-0" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                        <?php
                                        }

                                        ?>
                                    </div>
                                </div>

                                <!-- <input type="text" id="comment" name="comment" placeholder="Viết bình luận">
                                <input type="submit" id="sb-comment" name="id-comment" value="Gửi đánh giá"> -->
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-describe">
                        <h3><?= $name ?></h3>
                        <span>Mã Sản phẩm: <?= $id_product ?></span>
                        <hr>
                        <p>Giảm giá:
                            <span style="color: red; font-weight: 700;"><?= $sale ?>%</span>
                        </p>
                        <p style="text-decoration: line-through;">Giá gốc: <?= number_format($price) ?>₫</p>
                        <h5><?= number_format($price_sale) ?>₫</h5>

                        <!-- <input type="submit" class="edit-quantity" name="remove-quantity" value="-"> -->
                        <form action="<?= $CONTROLLER_URL . '/addToCart.php?id_product=' . $id_product ?>" method="post">


                            <input type="text" class="edit-quantity" id="minus" onclick="editQuantity('-')" value="-" readonly>


                            <input type="text" name="quantity" class="quantity" id="quantity" value="1" min="1" style="text-align: center;">

                            <input type="text" class="edit-quantity" id="plus" onclick="editQuantity('+')" value="+" readonly>
                            <hr>
                            <input type="submit" value="Thêm vào giỏ hàng" name="shop-cart" id="shop-cart">
                            <input type="submit" value="Mua ngay" name="payNow" id="pay-now">
                        </form>
                        <!-- <input type="submit" name="shop-cart" id="shop-cart" value="Thêm vào giỏ hàng"> -->
                        <!-- <a href="<?= $CONTROLLER_URL . '/addToCart.php?id_product=' . $id_product . '?quantity=' ?>" name="shop-cart" id="shop-cart">Thêm vào giỏ hàng</a> -->
                        <hr>

                        <div class="special-offer">
                            <div class="img-special">
                                <img src="<?= $CONTENT_URL ?>/image/different/bg_ttkm.webp" alt="">
                            </div>
                            <span class="text-special">KHUYẾN MÃI ĐẶC BIỆT</span>
                            <div class="content-special">
                                <p>+ Ưu đãi hấp dẫn dành cho khách hàng thân thiết</p>
                                <p>+ Trả góp với đơn hàng trị giá 3,000,000đ trở lên</p>
                                <p>+ Tích lũy điểm thưởng vào ví</p>
                                <span>*** Các chương trình khuyến mãi được áp dụng cùng nhau.</span>
                            </div>
                        </div>
                    </div>
                    <div class="policy-product">
                        <img src="<?= $CONTENT_URL ?>/image/different/credit-cards.png" alt="">
                        <div class="content-policy-product">
                            <h6>THANH TOÁN TIỆN LỢI</h6>
                            <span>(Chấp nhận thanh toán VNPay, Momo, Visa, MasterCard và các thẻ nội địa khác)</span>
                        </div>
                    </div>
                    <div class="policy-product">
                        <img src="<?= $CONTENT_URL ?>/image/different/shipped.png" alt="">
                        <div class="content-policy-product">
                            <h6>GIAO HÀNG TOÀN QUỐC</h6>
                            <span>Giao hàng nhanh chóng và tiện lợi</span>
                        </div>
                    </div>
                    <div class="policy-product">
                        <img src="<?= $CONTENT_URL ?>/image/different/replacement.png" alt="">
                        <div class="content-policy-product">
                            <h6>HỖ TRỢ ĐỔI TRẢ NHANH CHÓNG</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="contact">
                        <span style="color:red;font-weight: 700;">Hotline: 09.9999.999</span>
                        <p>Giờ mở cửa : 7h30 am - 6h00 pm ( mỗi ngày )</p>
                    </div>
                </div>
            </div>
            <?php
            require './product-related.php';
            ?>
        </div>
    </section>

</body>
<script src="<?= $CONTENT_URL ?>/js/product-details.js"></script>

</html>