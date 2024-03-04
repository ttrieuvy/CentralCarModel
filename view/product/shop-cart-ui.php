<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .shop-cart {
        /* text-align: center; */
        position: relative;
        padding: 30px;
        margin-bottom: 50px;
    }

    .shop-cart h3 {
        text-align: center;
    }

    .shop-cart p {
        text-align: center;
    }

    .line {
        width: 50px;
        height: 6px;
        background-color: #000;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 105px;
    }

    table {
        margin-top: 20px;
        width: 100%;
        /* text-align: center; */
    }

    .table-striped>tbody>tr:nth-of-type(odd)>* {
        color: #1ea8d9;
    }

    .payment-price {
        text-align: right;
        padding: 20px;
    }

    .btn-shop-cart {
        text-align: right;
    }

    /* .btn-shop-cart button{
        width: 200px;
        height: 60px;
    } */
    .btn-shop-cart {
        position: absolute;
        left: 34.5%;
        transform: translate(-50%);
        bottom: -3%;
        /* display: none; */
    }

    .button-cart {
        position: relative;
        overflow: hidden;
        height: 3rem;
        /* width: 200px; */
        padding: 0 2rem;
        /* border-radius: 1.5rem; */
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
</style>

<body>
    <section class="shop-cart">
        <div class="container">
            <div class="row">
                <h3>GIỎ HÀNG CỦA BẠN</h3>
                <?php
                // echo "<meta http-equiv=\"refresh\" content=\"0\">";


                if (isset($_SESSION['totalCart'])) {
                    echo '<p>Có ' . $_SESSION['totalCart'] . ' sản phẩm trong giỏ hàng</p>';
                } else {
                    echo '<p>Giỏ hàng trống</p>';
                }

                ?>

                <span class="line"></span>
                <div class="product-cart">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr>

                            <?php
                            if (isset($_SESSION['cart'])) {


                                // $_SESSION['total_quantity'] = 0;

                                // tìm tất cả những đơn hàng chi tiết dựa vào id_cart
                                //     $id_cart_detail_s = cart_detail_select_by_id_cart($id_cart['id_cart']);

                                //     foreach ($id_cart_detail_s as $k => $v) {
                                //         // echo $v['id_product'];

                                //         // lấy ra tất cả những sản phẩm trong từng đơn hàng chi tiết
                                //         $products = select_product_by_id_product($v['id_product']);

                                //         foreach ($products as $product) {
                                //             // echo  $product['name'];
                                //             $_SESSION['total_quantity'] += $v['quantity'];
                                //             $quantity_x_price = (int)($v['quantity']) * (int)($product['price']);
                                //             $total += $quantity_x_price;
                                //             echo '
                                //         <tr>
                                //         <td>' . $k + (1) . '</td>
                                //         <td>
                                //             <img src="' . $CONTENT_URL . '/image/product/' . $product['image'] . '.webp" alt="" width="120px">
                                //         </td>
                                //         <td>' . $product['name'] . '</td>
                                //         <td>' . number_format($product['price'])  . '₫</td>
                                //         <td>
                                //             <input type="submit" id="edit-quantity" name="remove-quantity" value="-">
                                //             <input type="text" id="quantity" name="quantity" value="' . $v['quantity'] . '" readonly style= "width: 30px; text-align: center;">
                                //             <input type="submit" id="edit-quantity" name="add-quantity" value="+">
                                //         </td>
                                //         <td>' . number_format($quantity_x_price) . '₫</td>
                                //     </tr>
                                // ';
                                //         }
                                //     }
                                $total = 0;
                                $_SESSION['total_quantity'] = 0;
                                // $_SESSION['totalCart'] = 0;
                                $stt = 0;
                                foreach ($_SESSION['cart'] as $k => $v) {
                                    $stt++;
                                    // $_SESSION['totalCart'] += $v['quantity'];
                                    $product = product_select_by_id($v['id_product']);
                                    // echo  $product['name'];
                                    $_SESSION['total_quantity'] += $v['quantity'];
                                    $quantity_x_price = (int)($v['quantity']) * (int)($product['price']);
                                    $total += $quantity_x_price;
                                    echo '
                                    <tr>
                                    <form action="'.$CONTROLLER_URL .'/plusMinusCart.php" method="post">
                                        <td>' . $stt . '</td>
                                        <td>
                                            <img src="' . $CONTENT_URL . '/image/product/' . $product['avatar'] . '" alt="" width="120px">
                                        </td>
                                        <td>' . $product['name'] . '</td>
                                        <td>' . number_format($product['price'])  . '₫</td>
                                        <td>
                                            <input type="submit" id="edit-quantity" name="remove-quantity" value="-">
                                            <input type="text" id="quantity" name="quantity" value="' . $v['quantity'] . '" readonly style= "width: 30px; text-align: center;">
                                            <input type="submit" id="edit-quantity" name="add-quantity" value="+">
                                        </td>
                                        <td>' . number_format($quantity_x_price) . '₫</td>
                                        <td>
                                            <input type="hidden" name="id_product" value="'.$product['id_product'].'">
                                            <input type="submit" name="delete" value="Xóa">
                                        </td>
                                        </form>
                                    </tr>
                                ';
                                }
                            }


                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="payment-price">
                    <span>
                        Tổng tiền :
                        <strong style="color:red; font-size: 20px;">
                            <?php
                            if (isset($total)) {
                                echo number_format($total) . '₫';
                            } else {
                                echo '0₫';
                            }
                            ?>
                        </strong>
                    </span>
                </div>
                <div class="btn-shop-cart">
                    <button class="button-cart">
                        <a href="<?= $SITE_URL . '/trang-chinh/?san-pham' ?>" class="button-content">
                            TIẾP TỤC MUA HÀNG
                        </a>
                    </button>
                    <button class="button-cart">
                        <a href="<?=$SITE_URL?>/product/product-payment.php" class="button-content">
                            THANH TOÁN
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </section>
</body>

</html>