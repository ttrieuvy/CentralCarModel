<style>
    .main{
        padding: 30px;
    }
    a {
        text-decoration: none;
    }

    .box-tra-cuu {
        background-color: #86d5f3;
        border-radius: 15px;
        margin: 20px auto;
        padding: 0 20px;
        max-width: 1000px;
        overflow: hidden;
        position: relative;
        /* min-height: 390px; */
        display: flex;
        flex-direction: column;
    }

    .main-collection {
        background-color: #f5f5f5;
        border-radius: 15px;
        margin: 20px auto;
        padding: 0 20px;
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

    .box-search #id_bill_detail {
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
    }

    .box-product {
        width: 100%;
        background-color: #fff;
        margin: 10px 0px;
        border-radius: 15px;
    }

    .box-product img {
        max-width: 100%;
        border-radius: 15px;

    }

    .box-product .product-information {
        padding: 20px;
        height: 100%;
    }


    .box-tra-cuu .box-product:last-child {
        margin-bottom: 20px;
    }

    .box-billing-information {
        width: 100%;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 15px;
    }

    .title-box-billing-information {
        display: flex;
        height: 60px;
        align-items: center;
        margin-bottom: 10px;
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
        margin-bottom: 20px;
        border-radius: 15px;
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

    body {
        width: 100vw;
    }

    .main {
        width: 100%;
    }

    .container {
        min-width: 1400px;
    }

    .panel-heading {
        background-color: #1ea8d9;
        border-radius: 10px 10px 0 0;
        padding: 10px 18px;
        color: #fff;
    }

    .panel-heading i {
        padding-right: 5px;
    }

    .list-group {
        border-radius: 0;
    }

    .list-group:last-child {
        border-radius: 0 0 10px 10px;

    }

    .list-group a:hover {
        color: #1ea8d9;
    }

    .col-sm-3,
    .col-sm-9 {
        margin-top: 20px;

    }

    .collection {
        height: 120px;
        margin: 30px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .submit {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 20px 20px 10px 20px;
    }

    .submit strong {
        width: max-content;
    }

    .submit-right {
        display: flex;
        flex-direction: row;
        justify-content: right;
        align-items: center;
    }

    .price-total {
        display: flex;
        justify-content: right;
        align-items: center;
        padding-right: 10px;
        height: 40px;
    }

    .buy-again {
        float: right;
        padding: 0 20px 0 0;
    }

    .buy-again button {
        width: 200px;
        height: 40px;
    }

    .shop-cart {
        width: 100%;
        height: 50px;
        border-radius: 5px;
        background: #fff;
        border: 2px solid #1087b9;
        font-weight: 700;
        color: #1087b9;
        transition: 1s;
        margin-bottom: 20px;
    }

    .shop-cart:hover {
        background-color: #1087b9;
        color: #fff;
    }

    .detail {
        width: 100%;
        height: 50px;
        border-radius: 5px;
        background: #0f6c95;
        border: 2px solid #0f6c95;
        font-weight: 700;
        color: #fff;
        transition: 1s;
        margin-bottom: 20px;
    }

    .detail:hover {
        background-color: #105b7c;
        color: #fff;
    }

    .cancel {
        width: 200px;
        height: 40px;
        margin-left: 20px;
        border-radius: 5px;
        background: #fff;
        border: 2px solid red;
        font-weight: 700;
        color: red;
        transition: 1s;
        /* margin-bottom: 20px; */
    }

    .cancel:hover {
        background-color: red;
        color: #fff;
    }

    .date {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .col-sm-5 input {
        border: 0px;
        font-size: 18px;
        width: fit-content;
    }

    .product .row {
        padding-left: 12px;
    }

    .product p {
        padding: 0;
        width: fit-content;
    }

    .date strong {
        color: #134c67;
    }

    .DM1xQK {
        margin: 20px 0;
        height: 5px;
        width: 100%;
        background-position-x: -1.875rem;
        background-size: 7.25rem 0.1875rem;
        background-image: repeating-linear-gradient(45deg, #6fa6d6, #6fa6d6 33px, transparent 0, transparent 41px, #f18d9b 0, #f18d9b 74px, transparent 0, transparent 82px);
    }
</style>

<body>


    <?php
    // echo '<pre>';
    // print_r($bill_by_user);
    // foreach($bill_by_user as $bill){
    //     echo $bill['id_bill'];

    // }
    ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-th-list"></span>
                            <i class="fa-solid fa-list"></i>
                            <strong>ĐƠN HÀNG</strong>
                        </div>
                        <div class="list-group">
                            <a href="index.php?all" class="list-group-item">Tất cả</a>
                            <a href="index.php?cho-xac-nhan" class="list-group-item">Chờ xác nhận</a>
                            <a href="index.php?van-chuyen" class="list-group-item">Đang vận chuyển</a>
                            <a href="index.php?thanh-cong" class="list-group-item">Thành công</a>
                            <a href="index.php?huy" class="list-group-item">Hủy</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="main-collection">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="collection" style="border-right: solid black 1px">
                                    <p>Tổng số đơn hàng</p>
                                    <?php
                                    if (bill_select_by_user($_SESSION['user']['id_user'])) {

                                        echo '<h2>' . count(bill_select_by_user($_SESSION['user']['id_user'])) . '</h2>';
                                    } else {
                                        echo '<h2>0</h2>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="collection">
                                    <p>Tổng số tiền tích lũy</p>
                                    <h2><?= isset($_SESSION['totalDamage']) ? number_format($_SESSION['totalDamage']) : 0 ?>₫</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['detail'])) {
                    ?>
                        <div class="box-tra-cuu">
                            <div class="row submit">
                                <div class="col-sm-6 date">
                                    <strong>Ngày đặt hàng: <?= $bill_by_user[0]['created_at'] ?></strong>
                                    <strong>ID bill: <?= $bill_by_user[0]['id_bill'] ?></strong>
                                </div>
                                <div class="col-sm-6 submit-right">
                                    <?php
                                    if ($bill_by_user[0]['status'] == 3) {
                                        echo '<strong style="color: red;">' . $arrStatus[$bill_by_user[0]['status']] . '</strong>';
                                    } else {
                                        echo '<strong style="color: green;">' . $arrStatus[$bill_by_user[0]['status']] . '</strong>';
                                    }
                                    ?>
                                </div>

                            </div>

                            <?php
                            $totalCost = 0;
                            $totalSale = 0;
                            foreach ($bill_by_user as $bill => $v) {
                                $totalCost += ($v['cost'] * $v['quantity']);
                                $totalSale += (($v['cost'] / 100 * $v['sale']) * $v['quantity']);
                                $shipcod = 40000;
                            ?>
                                <div class="box-product">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="img-box-product">
                                                <img src="<?= $CONTENT_URL ?>/image/product/<?= $v['avatar'] ?>" alt="ảnh sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="product-information">
                                                <form action="" method="post">
                                                    <h5><?= $v['name'] ?></h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-5 product">
                                                            <div class="row">
                                                                <p style="color: grey; text-decoration:line-through"><?= number_format($v['cost']) ?>₫</p>
                                                                <p style="color: red; font-weight: bold;"><?= number_format($v['cost'] - ($v['cost'] / 100 * $v['sale'])) ?>₫</p>
                                                            </div>
                                                            <p style="font-size: 25px;">x<?= $v['quantity'] ?></p>
                                                        </div>
                                                        <div class="col-sm-7" style="display: flex;justify-content: end;align-items: center;">
                                                            <div class=" price-total">
                                                                <p style="width: max-content;margin-bottom: 2px;margin-right:5px;">Tạm tính</p>
                                                                <h4 style="text-align: center;"><?= number_format(($v['cost'] - ($v['cost'] / 100 * $v['sale'])) * $v['quantity']) ?>₫</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row buy-again">
                                                        <input type="hidden" name="id_product" value="7">
                                                        <input type="hidden" name="quantity" value="4">
                                                        <input type="hidden" name="id_bill" value="40">
                                                    </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="DM1xQK"></div>
                            <div class="box-billing-information">
                                <div class="title-box-billing-information">
                                    <img src="<?= $CONTENT_URL ?>/image/different/credit-cards.png" alt="">
                                    <h3>Thông Tin Thanh Toán</h3>
                                </div>
                                <p>
                                    Tổng tiền sản phẩm:
                                    <span><?= number_format($totalCost) ?>
                                        đ</span>
                                </p>
                                <p>Tổng giảm giá:
                                    <span>-
                                        <?= number_format($totalSale) ?>
                                        đ</span>
                                </p>
                                <p>Phí vận chuyển:
                                    <span><?= number_format($shipcod) ?> đ</span>
                                </p>
                                <p>Phải thanh toán:
                                    <span style="font-weight: bold;"><?= number_format($totalCost - $totalSale + $shipcod) ?> đ</span>
                                </p>
                                <p>Đã thanh toán:
                                    <span style="color: red; font-weight: bold;">
                                        <?=
                                        $v['status'] == 2 ? number_format($totalCost - $totalSale + $shipcod) : 0;
                                        ?>
                                        đ
                                    </span>
                                </p>
                            </div>
                            <div class="box-customer-information">
                                <div class="title-box-customer-information">
                                    <img src="<?= $CONTENT_URL ?>/image/different/customer-service.png" alt="">
                                    <h3>Thông Tin Khách Hàng</h3>
                                </div>
                                <p>Tên Khách Hàng : <?= $v['last_name'] . ' ' . $v['first_name'] ?>
                                </p>
                                <p>
                                    Số Điện Thoại :
                                    <span><?= $v['phone'] ?></span>
                                </p>
                                <p>Địa chỉ giao hàng : <?= $v['address'] ?></p>
                                <p>Email: <?= $v['email'] ?></p>
                            </div>
                        </div>
                        <?php

                    } else if (!empty($bill_by_user)) {
                        $_SESSION['totalDamage'] = 0;
                        foreach ($bill_by_user as $bill => $v) {

                        ?>
                            <div class="box-tra-cuu">
                                <div class="row submit">
                                    <div class="col-sm-6 date">
                                        <strong>Ngày đặt hàng: <?= $v['created_at'] ?></strong>
                                        <strong>ID bill: <?= $v['id_bill'] ?></strong>
                                    </div>
                                    <div class="col-sm-6 submit-right">
                                        <?php
                                        if ($v['status'] == 3) {
                                            echo '<strong style="color: red;">' . $arrStatus[$v["status"]] . '</strong>';
                                        } else {
                                            echo '<strong style="color: green;">' . $arrStatus[$v["status"]] . '</strong>';
                                        }
                                        if ($v['status'] == 0) {
                                            echo '
                                            <form action="" method="post">
                                            <input type="hidden" name="id_bill" value="' . $v['id_bill'] . '">
                                            <button class="cancel" name="cancel">Hủy</button>
                                            </form>
                                        ';
                                        }
                                        ?>

                                    </div>

                                </div>

                                <?php
                                // tìm tất cả các bill detail theo id_bill
                                $bill_detail_by_bill = bill_detail_select_by_id_bill($v['id_bill']);
                                $totalBill = 0;
                                foreach ($bill_detail_by_bill as $bill_detail => $detail) {
                                    $totalBill += ($detail['cost'] - ($detail['cost'] / 100 * $detail['sale'])) * $detail['quantity'];
                                    $product = product_select_by_id($detail['id_product']);
                                    if ($v["status"] == 2) {
                                        $_SESSION['totalDamage'] += (int)(($detail['cost'] - ($detail['cost'] / 100 * $detail['sale'])) * $detail['quantity']);
                                    }
                                    echo '
                                <div class="box-product">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="img-box-product">
                                        <img src="' . $CONTENT_URL . '/image/product/' . $product['avatar'] . '" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="product-information">
                                        <form action="" method="post">
                                            <h5>' . $product['name'] . '</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-5 product">
                                                    <div class="row">';
                                    if ($detail['sale'] != 0) {
                                        echo '<p style="color: grey; text-decoration:line-through">' . number_format($detail['cost']), '₫</p>';
                                    }

                                    echo '
                                                        <p style="color: red; font-weight: bold;">' . number_format($detail['cost'] - ($detail['cost'] / 100 * $detail['sale'])) . '₫</p>
                                                    </div>
                                                    <p style="font-size: 25px;">x' . $detail['quantity'] . '</p>
                                                </div>
                                                <div class="col-sm-7" style="display: flex;justify-content: end;align-items: center;">
                                                    <div class=" price-total">
                                                        <p style="width: max-content;margin-bottom: 2px;margin-right:5px;">Tạm tính</p>
                                                        <h4 style="text-align: center;">' . number_format(($detail['cost'] - ($detail['cost'] / 100 * $detail['sale'])) * $detail['quantity']) . '₫</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row buy-again">
                                                <input type="hidden" name="id_product" value="' . $product['id_product'] . '">
                                                <input type="hidden" name="quantity" value="' . $detail['quantity'] . '">
                                                <input type="hidden" name="id_bill" value="' . $v['id_bill'] . '">
                                                ';

                                    echo '
                                                <button class="shop-cart" name="buy-again">Mua lại</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                                ';
                                }
                                ?>
                                <div class="row">
                                    <div class="col-sm-12 submit-right">
                                        <div class="price-total" style="
        border-right: 1px solid;">
                                            <p style="width: max-content;margin-bottom: 2px;margin-right:5px;">Thành tiền</p>
                                            <h4 style="text-align: center;"><?= number_format($totalBill) ?>₫</h4>
                                        </div>
                                        <form action="index.php?detail" method="post" style="padding: 0  10px;">
                                            <input type="hidden" name="id_bill" value="<?= $v['id_bill'] ?>">
                                            <!-- <button class="detail" name="detail" style="width:230px; height: 50px;margin-bottom:10px"></button> -->
                                            <input type="submit" class="detail" name="detail" value="Xem chi tiết" style="width:230px; height: 50px;margin-bottom:10px">
                                        </form>
                                    </div>



                                </div>
                            </div>
                    <?php


                        }
                    } else {
                        echo $MESSAGE;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</body>


</html>