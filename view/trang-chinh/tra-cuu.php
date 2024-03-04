<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css">
</head>
<style>
    a {
        text-decoration: none;
    }

    .box-tra-cuu {
        background-color: #f5f5f5;
        border-radius: 15px;
        margin: 20px auto;
        padding: 20px;
        max-width: 1000px;
        overflow: hidden;
        position: relative;
        /* min-height: 390px; */
    }

    .title-box-tra-cuu h2 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
        margin-left: auto;
        padding: 0 20px;
        text-align: right;
        width: 60%;
    }

    .box-search {
        margin-left: auto;
        padding: 0 20px;
        width: 50%;
    }

    .box-search input {
        margin-bottom: 20px;
    }

    .box-search #phone {
        border: 1px solid #1087b9;
        border-radius: 5px;
        box-sizing: border-box;
        color: #222;
        font-size: 14px;
        line-height: 40px;
        padding: 0 15px;
        width: 100%;
        outline: none;
    }

    .box-search #id_bill {
        border: 1px solid #1087b9;
        border-radius: 5px;
        box-sizing: border-box;
        color: #222;
        font-size: 14px;
        line-height: 40px;
        padding: 0 15px;
        width: 100%;
        outline: none;
    }

    .box-search #test {
        background-color: #1087b9;
        border: none;
        border-radius: 8px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        width: 150px;
        height: 40px;
        text-align: center;
        margin-left: 33%;
    }

    .bg-box-tra-cuu {
        background: linear-gradient(to bottom right, #1087b9 37%, #f5f5f5 70%);
        height: 800px;
        left: -571px;
        opacity: .6;
        position: absolute;
        top: -300px;
        transform: rotate(55deg);
        width: 800px;
        z-index: 0;
    }

    .img-box-tra-cuu {
        left: 40px;
        position: absolute;
        top: 10px;
    }

    .img-box-tra-cuu img {
        max-width: 100%;
        height: 200px;
    }

    .box-search .or {
        text-align: center;
    }

    .box-search .or span {
        font-weight: bold;
        font-size: 20px;
        padding: 0 10px;
    }

    .box-search .btn-login {
        background-color: #1087b9;
        border-radius: 8px;
        color: #fff;
        display: block;
        margin: 20px auto;
        min-width: 320px;
        padding: 8px 20px;
        text-align: center;
        width: 50%;
    }

    .content-box-tra-cuu {
        margin-top: 80px;
        width: 100%;
    }

    .box-product {
        width: 100%;
        background-color: #fff;
        border-radius: 15px;
        margin-bottom: 20px;
    }

    .img-box-product img {
        max-width: 100%;
        margin-left: 15px;
    }

    .box-product .product-information {
        padding: 20px;
    }

    .box-billing-information {
        width: 100%;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
    }

    .title-box-billing-information {
        display: flex;
        height: 60px;
        align-items: center;
        margin-bottom: 10px;
        width: 100%;
    }

    .title-box-billing-information img {
        width: 40px;
        height: 40px;
        margin-right: 20px;
    }

    .box-billing-information p {
        font-size: 18px;
    }

    .box-billing-information p span {
        float: right;
    }

    .box-customer-information {
        width: 100%;
        background-color: #fff;
        padding: 20px;
    }

    .box-customer-information p {
        font-size: 18px;
    }

    .title-box-customer-information {
        display: flex;
        height: 60px;
        align-items: center;
        margin-bottom: 10px;
    }

    .title-box-customer-information img {
        width: 40px;
        height: 40px;
        margin-right: 20px;
    }

    .thong-bao {
        padding: 0;
        margin-top: -10px;
        color: red;
        font-weight: 500;
        font-size: 16px;
        margin-left: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-tra-cuu">
                    <div class="title-box-tra-cuu">
                        <h2>Kiểm tra thông tin đơn hàng
                            <span>
                                <br>
                                & tình trạng vận chuyển
                            </span>
                        </h2>
                    </div>
                    <form class="box-search" action="<?= $CONTROLLER_URL ?>/tra-cuu-sp.php" method="post">
                        <input type="text" name="phone" id="phone" placeholder="Số điện thoại ( Bắt Buộc)" value="<?php if (!empty($phone)) {
                                                                                                                        echo $phone;
                                                                                                                    } ?>" required>
                        <?php
                        if (!empty($alertphone)) {
                            echo '<p class="thong-bao">' . $alertphone . '</p>';
                        }
                        ?>
                        <input type="text" name="id_bill" id="id_bill" placeholder="Mã Đơn Hàng (Bắt buộc)" value="<?php if (!empty($id_bill)) {
                                                                                                                        echo $id_bill;
                                                                                                                    } else echo "";  ?>" required>
                        <?php
                        if (!empty($alertbill)) {
                            echo '<p class="thong-bao">' . $alertbill . '</p>';
                        }
                        ?>
                        <input type="submit" name="test" id="test" value="Kiểm Tra">
                        <div class="or">
                            -------------------------
                            <span>hoặc</span>
                            -------------------------
                        </div>
                        <a href="" class="btn-login">Đăng nhập để tra cứu thuận tiện hơn</a>
                    </form>
                    <div class="bg-box-tra-cuu"></div>
                    <div class="img-box-tra-cuu">
                        <img src="<?= $CONTENT_URL ?>/image/different/Shipper.webp" alt="">
                    </div>
                    <div class="content-box-tra-cuu">
                        <?php if (!empty($productsInformation)) { ?>
                            <div class="box-product">
                                <?php
                                foreach ($productsInformation as $key => $productInformation) { ?>

                                    <div class="row" style="border-bottom: 5px solid #f5f5f5;">
                                        <div class="col-sm-4">
                                            <div class="img-box-product">
                                                <img src="<?= $CONTENT_URL ?>/image/product/<?= $productInformation['avatar'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="product-information">
                                                <h3><?= $productInformation['name'] ?></h3>
                                                <p>Số Lượng : <?= $productInformation['quantity'] ?></p>
                                                <p>Mã đơn hàng: <?= $productInformation['id_bill'] ?></p>
                                                <p>Tình trạng : <?= $status ?> </p>
                                                <p>Ngày Mua <?= $date['created_at'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }; ?>
                            </div>

                            <div class="box-billing-information">
                                <div class="title-box-billing-information">
                                    <img src="<?= $CONTENT_URL ?>/image/different/credit-cards.png" alt="">
                                    <h3>Thông Tin Thanh Toán</h3>
                                </div>
                                <p>
                                    Tổng tiền sản phẩm:
                                    <span>
                                        <?php foreach ($productsInformation as $key => $productInformation) {
                                            $tongtien +=  ($productInformation['price']) * $productInformation['quantity'];
                                        }
                                        echo number_format($tongtien); ?>

                                        đ</span>
                                </p>
                                <p>Tổng giảm giá:
                                    <span>
                                        <?php foreach ($productsInformation as $key => $productInformation) {
                                            $giamgia +=  $productInformation['price'] * $productInformation['sale'] / 100;;
                                        }
                                        echo number_format($giamgia) ?>
                                        đ</span>
                                </p>
                                <p>Phí vận chuyển:
                                    <span><?= number_format($shipcod) ?> đ</span>
                                </p>
                                <p>Phải thanh toán:
                                    <span style="font-weight: bold;"><?= number_format($tongtien - $giamgia + $shipcod) ?> đ</span>
                                </p>
                                <p>Đã thanh toán:
                                    <span style="color: red; font-weight: bold;">
                                        <?php
                                        if ($date['status'] == 2) {
                                            echo  number_format($tongtien - $giamgia + $shipcod);
                                        } else echo 0;

                                        ?> đ
                                    </span>
                                </p>
                            </div>
                            <div class="box-customer-information">
                                <div class="title-box-customer-information">
                                    <img src="<?= $CONTENT_URL ?>/image/different/customer-service.png" alt="">
                                    <h3>Thông Tin Khách Hàng</h3>
                                </div>
                                <p>Tên Khách Hàng :
                                    <?php
                                    if (!empty($userInformation)) {
                                        echo $userInformation['last_name'] . ' ' . $userInformation['first_name'];
                                    } else {
                                        echo $customerInformation['name'];
                                    }
                                    ?>
                                </p>
                                <p>
                                    Số Điện Thoại :
                                    <span><?php
                                            if (!empty($userInformation)) {
                                                echo $userInformation['phone'];
                                            } else {
                                                echo $customerInformation['phone'];
                                            }

                                            ?></span>
                                </p>
                                <p>Địa chỉ giao hàng : <?php
                                                        if (!empty($userInformation)) {
                                                            echo $userInformation['full_address'];
                                                        } else {
                                                            echo $customerInformation['full_address'];
                                                        }
                                                        ?></p>
                                <p>Email: <?php
                                            if (!empty($userInformation)) {
                                                echo $userInformation['email'];
                                            } else {
                                                echo $customerInformation['email'];
                                            }
                                            ?></p>
                            </div>
                    </div>
                <?php }
                ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>