<?php
require "../global.php";
require "../model/product.php";
extract($_REQUEST);
// print_r($_SESSION['cart']);
if (exist_param('delete')) {
    $cart = []; //mảng chứa những sản phẩm sau sản phẩm muốn xóa
    $thisIndex = -1; //vị trí sản phẩm muốn xóa
    foreach ($_SESSION['cart'] as $k => $product) {
        if ($thisIndex != -1) { //nếu giá trị của biến $thisIndex thay đổi sẽ add vô mảng $cart
            $cart[] = $_SESSION['cart'][$k];
        }
        if ($product['id_product'] == $id_product) {
            $thisIndex = $k; //nếu tìm được id sản phẩm muốn xóa sẽ gán index đó cho biến $thisIndex
            $_SESSION['totalCart'] -= $product['quantity']; //tổng số sản phẩm có trong cart
        }
    }
    array_splice($_SESSION['cart'], $thisIndex, count($_SESSION['cart']), $cart); //thay đổi mảng $_session['cart']
    unset($cart);
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/shop-cart.php\">";
} else {
    if (exist_param('remove-quantity')) {
        foreach ($_SESSION['cart'] as $k => $product) {
            if ($product['id_product'] == $id_product) {
                if ($product['quantity'] > 1) {
                    $_SESSION['cart'][$k]['quantity'] = $_SESSION['cart'][$k]['quantity'] - 1;
                    $_SESSION['totalCart'] > 1 ? $_SESSION['totalCart'] -= 1 : $_SESSION['totalCart'];
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/shop-cart.php\">";
                }
            }
        }
    }
    if (exist_param('add-quantity')) {
        foreach ($_SESSION['cart'] as $k => $product) {
            if ($product['id_product'] == $id_product) {
                $_SESSION['cart'][$k]['quantity'] = $_SESSION['cart'][$k]['quantity'] + 1;
                $_SESSION['totalCart'] += 1;
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/shop-cart.php\">";
            }
        }
    }
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/shop-cart.php\">";
}
