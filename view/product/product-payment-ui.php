<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">

</head>
<style>
    a {
        text-decoration: none;
    }

    .url-product-pay a {
        text-decoration: none;
    }

    .title-product-pay h2 {
        margin: 20px 0;
    }

    .user-product-pay {
        margin: 20px 0;
    }

    .user-product-pay a {
        color: #1ea8d9;
        text-decoration: none;
    }

    #name {
        width: 100%;
        height: 40px;
        padding: 0 15px;
        margin: 10px 0;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
    }

    #email {
        width: 49%;
        height: 40px;
        padding: 0 15px;
        margin: 10px 0;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
        /* margin-right: 10px; */
    }

    #phone {
        width: 49%;
        height: 40px;
        padding: 0 15px;
        margin: 10px 0;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
        float: right;
    }

    .delivery-address {
        border: 1px solid #d9d9d9;
    }

    .radio-content {
        height: 50px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #d9d9d9;
    }

    .radio-content input {
        margin: 0px 10px;
    }

    .radio-content label {
        font-weight: 500;
    }

    .form-address {
        background-color: #fafafa;
        padding: 30px 20px;
    }

    #address {
        width: 100%;
        height: 40px;
        padding: 0 15px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
        margin-bottom: 17px;
    }

    .select-address {
        display: flex;
        justify-content: space-between;
    }

    #city {
        width: 32%;
        height: 40px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
    }

    #district {
        width: 32%;
        height: 40px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
    }

    #ward {
        width: 32%;
        height: 40px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
    }

    #city-check {
        width: 100%;
        height: 40px;
        padding: 0 15px;
        /* margin: 10px 0; */
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
        /* margin-left: 17px; */
    }

    #postal-code {
        width: 32%;
        height: 40px;
        padding: 0 15px;
        /* margin: 10px 0; */
        border-radius: 5px;
        outline: none;
        border: 1px solid #d9d9d9;
        float: right;
        /* margin-right: 17px; */
    }

    .shipping-method {
        margin: 20px 0;
    }

    .shipping-method label {
        border: 1px solid #d9d9d9;
        width: 100%;
        height: 50px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 17px;
    }

    .radio-shipping-method input {
        margin-right: 10px;
    }

    .payment-methods {
        margin: 20px 0;
    }

    .box-payment-methods {
        border: 1px solid #d9d9d9;
    }

    .box-payment-methods label {
        display: flex;
        align-items: center;
        width: 100%;
        height: 60px;
        padding: 0 17px;
        border-bottom: 1px solid #d9d9d9;
    }

    .box-payment-methods input {
        margin-right: 10px;
    }

    .box-payment-methods img {
        margin-right: 10px;
    }

    .payment-method-notes {
        padding: 17px;
        background-color: #fafafa;
    }

    #pay {
        width: 200px;
        height: 50px;
        float: right;
        background-color: #176887;
        border: #176887;
        color: #fff;
        font-weight: 700;
        border-radius: 5px;
        transition: .5s;
    }

    #pay:hover {
        background-color: #1c566e;
    }

    .product-oder {
        border-bottom: 1px solid #d9d9d9;
        padding-bottom: 20px;

    }

    .product-oder img {
        max-width: 100%;
        padding: 10px;
    }

    .price-product-oder {
        padding: 20px;
    }

    .price-product-oder table {
        width: 100%;
    }

    .quantity {
        background-color: #176887;
        color: #fff;
        font-weight: 700;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: absolute;
        text-align: center;
        top: 0;
        right: 0;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="padding: 40px;">
                <div class="url-product-pay">
                    <a href="<?= $SITE_URL ?>/product/shop-cart.php">Giỏ hàng</a>
                    <span>></span>
                    <span>Thông tin giao hàng</span>
                </div>
                <div class="title-product-pay">
                    <h2>Thông tin giao hàng</h2>
                </div>
                <?php
                if (!isset($_SESSION['user'])) {
                    echo '
                        <div class="user-product-pay">
                            <span>Bạn đã có tài khoản đăng nhập?</span>
                            <a href="<?= $SITE_URL ?>/user/dang-nhap.php">Đăng nhập</a>
                        </div>
                        ';
                }
                ?>

                <form action="<?= $CONTROLLER_URL ?>/addCustomer.php<?php 
                if(!empty($id_product) && !empty($quantity)){
                    echo '?id_product='.$id_product.'&quantity='.$quantity;
                }
                ?>" method="post">
                    <input type="text" id="name" name="name" required placeholder="Họ và tên" value="<?= isset($_SESSION['user']['last_name'], $_SESSION['user']['first_name']) ? $_SESSION['user']['last_name'] . ' ' . $_SESSION['user']['first_name'] : "" ?>">
                    <input type="text" id="email" name="email" placeholder="Email" required value="<?= isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : "" ?>">
                    <input type="text" id="phone" name="phone" required placeholder="Số điện thoại" value="<?= isset($_SESSION['user']['phone']) ? $_SESSION['user']['phone'] : "" ?>">
                    <div class="delivery-address">
                        <div class="radio-content">
                            <input type="radio" checked>
                            <label for="">Giao hàng tận nơi</label>
                        </div>

                        <div class="form-address">

                            <input type="text" id="city-check" name="address" placeholder="Địa chỉ" required value="<?php if(isset($_SESSION['user']['full_address'])) { $_SESSION['user']['full_address'];} ?>">
                        </div>
                    </div>
                    <div class="shipping-method">
                        <h2>Phương thức vận chuyển</h2>
                        <label for="">
                            <div class="radio-shipping-method">
                                <input type="radio" checked>
                                <span>Giao hàng tận nơi</span>
                            </div>
                            <div class="price-shipping-method">
                                <span><?= number_format($price_shipcod) ?></span>
                            </div>
                        </label>
                    </div>
                    <div class="payment-methods">
                        <h2>Phương thức thanh toán</h2>
                        <div class="box-payment-methods">
                            <label for="" class="form-payment-methods">
                                <div class="raido-payment-methods">
                                    <input type="radio" name="payment-methods" checked>
                                </div>
                                <div class="content-payment-methods">
                                    <img src="../../content/image/different/cod.svg" alt="">
                                    <span>Thanh toán khi giao hàng (COD)</span>
                                </div>
                            </label>
                            <div class="payment-method-notes">
                                <span>Quý khách có thể thanh toán khi đã nhận được sản phẩm mình đã đặt.</span>
                            </div>
                        </div>
                        <div class="box-payment-methods">
                            <label for="" class="form-payment-methods">
                                <div class="raido-payment-methods">
                                    <input type="radio" name="payment-methods">
                                </div>
                                <div class="content-payment-methods">
                                    <img src="../../content/image/different/other.svg" alt="">
                                    <span>Chuyển khoản qua ngân hàng</span>
                                </div>
                            </label>
                            <div class="payment-method-notes">
                                <span>Quý khách vui lòng ghi nội dung chuyển khoản như sau: Họ và tên + Mã số đơn hàng.<br>
                                    + MB BANK.<br>
                                    Tên chủ TK: LÊ CÔNG HƯNG<br>
                                    STK: 0052035787979<br>
                                    CN: ĐẮK LẮK.
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(isset($_GET['payNow'])){
                            echo '<input type="hidden" name="payNow">';
                        }
                    ?>
                    <input type="submit" id="pay" name="payment" value="Hoàn tất đơn hàng">
                </form>
            </div>
            <div class="col-sm-6" style="background-color: #fafafa;padding: 30px;">
                <div class="product-oder">

                    <table>
                        <?php
                        if (isset($productone)) {
                            echo '
                            <tbody>
                                <tr>
                                    <td style="width: 20%;position: relative;">
                                        <img src="' . $CONTENT_URL . '/image/product/' . $productone['avatar'] . '" alt="">
                                        <div class="quantity">
                                             ' . $quantity . '
                                        </div>
                                    </td>
                                    <td style="width: 50%;">' . $productone['name'] . '</td>
                                    <td style="text-align: right;">' . number_format($productone['price'] * $quantity) . ' đ</td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                <div class="price-product-oder">
                    <table>
                        <tbody>
                            <tr>
                                <td style="font-weight: 500;width: 50%;">Tạm tính</td>
                                <td style="text-align: right;width: 50%;font-weight: 700;">' . number_format($productone['price'] * $quantity) . ' đ</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 500;width: 50%;">Phí vận chuyển</td>
                                <td style="text-align: right;width: 50%;font-weight: 700;">' . number_format($price_shipcod) . '</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="font-weight: 700;width: 50%;">Tổng cộng</td>
                                <td style="font-weight:700;text-align: right;width: 50%;color:red">' . number_format($productone['price'] * $quantity + $price_shipcod) . ' đ</td>
                            </tr>
                        </tfoot>
                    </table>
                            ';
                        } else {
                            $quantityTotal = 0;
                            $total = 0;
                            foreach ($product as $k => $v) {
                                $products[] = product_select_by_id($v['id_product']);
                        ?>
                                <tbody>
                                    <tr>
                                        <td style="width: 20%;position: relative;">
                                            <img src="<?= $CONTENT_URL ?>/image/product/<?= $products[$k]['avatar'] ?>" alt="">
                                            <div class="quantity">
                                                <?= $v['quantity'] ?>
                                            </div>
                                        </td>
                                        <td style="width: 50%;"><?= $products[$k]['name'] ?></td>
                                        <td style="text-align: right;"><?= number_format($products[$k]['price'] * $v['quantity']) ?> đ</td>
                                    </tr>
                                </tbody>
                            <?php
                                $total +=  $products[$k]['price'] * $v['quantity'];
                            } ?>
                    </table>
                </div>
                <div class="price-product-oder">
                    <table>
                        <tbody>
                            <tr>
                                <td style="font-weight: 500;width: 50%;">Tạm tính</td>
                                <td style="text-align: right;width: 50%;font-weight: 700;"><?= number_format($total) ?> đ</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 500;width: 50%;">Phí vận chuyển</td>
                                <td style="text-align: right;width: 50%;font-weight: 700;"><?= number_format($price_shipcod) ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="font-weight: 700;width: 50%;">Tổng cộng</td>
                                <td style="font-weight:700;text-align: right;width: 50%;color:red"><?= number_format($total + $price_shipcod) ?> đ</td>
                            </tr>
                        </tfoot>
                    </table>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="../../content/js/adress.js"></script>

</html>