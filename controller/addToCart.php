<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
</body>
</html>
<?php
require "../global.php";
require "../model/product.php";
// require "../model/cart.php";
// require "../model/cart_detail.php";
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (!isset($_SESSION['totalCart'])) {
    $_SESSION['totalCart'] = 0;
}


extract($_REQUEST);
$name_product = product_select_by_id($id_product);

// if (isset($_SESSION['user'])) {

//     //check xem đã tạo giỏ hàng cho khách hàng chưa
//     $exist_cart = cart_exist($_SESSION['user']['id_user']);


//     if ($exist_cart) {
//         // Tìm id_cart theo id_user
//         $id_cart = cart_select_by_id($_SESSION['user']['id_user']);

//         // Tìm tất cả id_cart_detail theo id_cart
//         $count_cart_detail = count_cart_detail($id_cart['id_cart']);
//         $name_product = product_select_by_id($id_product);

//         // kiểm tra xem cart đó đã có sản phẩm nào chưa, nếu chưa có thì thêm mới
//         if ($count_cart_detail) {

//             // tìm ra các cart_detail có cùng id_cart
//             $all_cart_detail = cart_detail_select_by_id_cart($id_cart['id_cart']);

//             // kiểm tra trùng id_product
//             foreach ($all_cart_detail as $k => $v) {

//                 if ($v['id_product'] == $id_product && $v['id_cart'] == $id_cart['id_cart']) {
//                     if (isset($quantity)) {
//                         $new_quantity = $v['quantity'] + $quantity;
//                     } else {
//                         $new_quantity = $v['quantity'] + 1;
//                     }
//                     update_count_quantity($id_cart['id_cart'], (int)$id_product, $new_quantity);
//                     $MESSAGE = "Sản phẩm " . $name_product['name'] . " đã được thêm";
//                     break;
//                 } else {
//                     if (count($all_cart_detail) == $k + 1) {
//                         if (isset($quantity)) {
//                             $fake_quantity = $quantity;
//                         } else {
//                             $fake_quantity = 1;
//                         }
//                         cart_detail_insert($id_cart['id_cart'], (int)$id_product, $fake_quantity);
//                         $MESSAGE = "Sản phẩm " . $name_product['name'] . " đã được thêm";
//                     } else {
//                         continue;
//                     }
//                 }
//             }
//         } else {
//             if (isset($quantity)) {
//                 $fake_quantity = $quantity;
//             } else {
//                 $fake_quantity = 1;
//             }
//             cart_detail_insert($id_cart['id_cart'], $id_product, $fake_quantity);
//             $MESSAGE = "Sản phẩm " . $name_product['name'] . " đã được thêm";
//         }
//     } else {
//         cart_insert($_SESSION['user']['id_user']);
//     }
// } else {
//     $MESSAGE = "Chưa đăng nhập, vui lòng đăng nhập để mua hàng";
//     echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\dang-nhap.php\">";
// }




if (exist_param('shop-cart')) {
    if (count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $k => $v) {
            if ($v['id_product'] == $id_product) {
                if (isset($quantity)) {
                    $new_quantity = $v['quantity'] + $quantity;
                } else {
                    $quantity = 1;
                    $new_quantity = $v['quantity'] + $quantity;
                }
                $_SESSION['cart'][$k]['quantity'] = $new_quantity;
                $_SESSION['totalCart'] += $quantity;
                $MESSAGE = "Đã thêm " . $quantity . " " . $name_product['name'] . "  vào giỏ hàng ";
                break;
            } else {
                if (count($_SESSION['cart']) == $k + 1) {
                    if (isset($quantity)) {
                        $_SESSION['cart'][$k + 1]['id_product'] = $id_product;
                        $_SESSION['cart'][$k + 1]['quantity'] = $quantity;
                    } else {
                        $quantity = 1;
                        $_SESSION['cart'][$k + 1]['id_product'] = $id_product;
                        $_SESSION['cart'][$k + 1]['quantity'] = $quantity;
                    }

                    // $MESSAGE = "Sản phẩm " . $name_product['name'] . " đã được thêm";
                    $_SESSION['totalCart'] += $quantity;
                    $MESSAGE = "Đã thêm " . $quantity . " " . $name_product['name'] . "  vào giỏ hàng ";
                } else {
                    continue;
                }
            }
        }
    } else {
        if (isset($quantity)) {
            $_SESSION['cart'][0]['id_product'] = $id_product;
            $_SESSION['cart'][0]['quantity'] = $quantity;
        } else {
            $quantity = 1;
            $_SESSION['cart'][0]['id_product'] = $id_product;
            $_SESSION['cart'][0]['quantity'] = $quantity;
        }

        $_SESSION['totalCart'] += $quantity;
        $MESSAGE = "Đã thêm " .  $quantity . " " . $name_product['name'] . "  vào giỏ hàng ";
    }
    // print_r($_SESSION['cart']);

    if (strlen($MESSAGE)) {
        if ($MESSAGE == "Đã thêm " .  $quantity . " " . $name_product['name'] . "  vào giỏ hàng ") {
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: '<?= $MESSAGE ?>',
                })
            </script>
        <?php
        } else { ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    text: '<?= $MESSAGE ?>',
                })
            </script>
    <?php
        }
    }
    echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/product-payment.php?id_product=$id_product&endQuantity=$quantity&payNow\">";
}
