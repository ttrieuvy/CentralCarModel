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
require '../global.php';
require '../model/customer.php';
require '../model/bill.php';
require '../model/bill_detail.php';
require '../model/product.php';

extract($_REQUEST);


if (exist_param("payment")) {

    // khách hàng có tài khoản
    if (isset($_SESSION['user'])) {

        // add bill, mỗi lần bấn thanh toán chỉ thêm 1 hóa đơn chi tiết
        if (!isset($payNow)) {
            try {
                // thêm bill
                bill_insert($_SESSION['user']['id_user'], null, isset($status) ? $status : 0, $address);

                // tìm cái bill cuối cùng vừa thêm của user(là bill mới thêm ở dòng 18)
                $max_bill = select_max_id_bill_by_id_user($_SESSION['user']['id_user']);

                // thêm bill detail
                foreach ($_SESSION['cart'] as $k => $v) {
                    //tìm thông tin hiện tại của sản phẩm
                    $product = product_select_by_id($v['id_product']);

                    // thêm bill detail
                    bill_detail_insert($max_bill['max_bill'], $v['id_product'], $v['quantity'], $product['price'], $product['sale']);
                }

                $_SESSION['cart'] = [];
                $_SESSION['totalCart'] = 0;
                $MESSAGE = "Thanh toán thành công!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            } catch (Exception $exc) {
                $MESSAGE = "Thanh toán thất bại!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            }
        } else { // người dùng đăng ký tài khoản mua ngay
            try {
                // thêm bill
                bill_insert($_SESSION['user']['id_user'], null, isset($status) ? $status : 0, $address);

                // tìm cái bill cuối cùng vừa thêm của user(là bill mới thêm ở dòng 18)
                $max_bill = select_max_id_bill_by_id_user($_SESSION['user']['id_user']);

                // thêm bill detail

                //tìm thông tin hiện tại của sản phẩm
                $product = product_select_by_id($id_product);

                // thêm bill detail
                bill_detail_insert($max_bill['max_bill'], $id_product, $quantity, $product['price'], $product['sale']);

                $MESSAGE = "Thanh toán thành công!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            } catch (Exception $exc) {
                $MESSAGE = "Thanh toán thất bại!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            }
        }
    } else {  //khách hàng không có tài khoản

        // add bill, mỗi lần bấn thanh toán chỉ thêm 1 hóa đơn chi tiết
        if (!isset($payNow)) {
            try {

                // thêm người dùng không đăng ký tài khoản
                customer_insert($name, $phone, $address, $email);

                // tìm id người dùng mới nhất theo address
                $id_customer = select_max_id_customer_by_address($address);

                // thêm bill
                bill_insert(null, $id_customer['id_customer'], isset($status) ? $status : 0, $address);

                // tìm cái bill cuối cùng vừa thêm của user(là bill mới thêm ở dòng 53)
                $max_bill = select_max_id_bill_by_id_customer($id_customer['id_customer']);

                // thêm bill detail
                foreach ($_SESSION['cart'] as $k => $v) {
                    //tìm thông tin hiện tại của sản phẩm
                    $product = product_select_by_id($v['id_product']);

                    // thêm bill detail
                    bill_detail_insert($max_bill['max_bill'], $v['id_product'], $v['quantity'], $product['price'], $product['sale']);
                }

                $_SESSION['cart'] = [];
                $_SESSION['totalCart'] = 0;
                $MESSAGE = "Thanh toán thành công!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            } catch (Exception $exc) {
                $MESSAGE = "Thanh toán thất bại!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            }
        } else { // thanh toán ngay
            // add bill, mỗi lần bấn thanh toán chỉ thêm 1 hóa đơn chi tiết

            try {

                // thêm người dùng không đăng ký tài khoản
                customer_insert($name, $phone, $address, $email);

                // tìm id người dùng mới nhất theo address
                $id_customer = select_max_id_customer_by_address($address);

                // thêm bill
                bill_insert(null, $id_customer['id_customer'], isset($status) ? $status : 0, $address);

                // tìm cái bill cuối cùng vừa thêm của user(là bill mới thêm ở dòng 53)
                $max_bill = select_max_id_bill_by_id_customer($id_customer['id_customer']);

                // thêm bill detail

                //tìm thông tin hiện tại của sản phẩm
                $product = product_select_by_id($id_product);

                // thêm bill detail
                bill_detail_insert($max_bill['max_bill'], $id_product, $quantity, $product['price'], $product['sale']);

                $MESSAGE = "Thanh toán thành công!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            } catch (Exception $exc) {
                $MESSAGE = "Thanh toán thất bại!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/trang-chinh\">";

            }
        }
    }
    if (strlen($MESSAGE)) {
        if ($MESSAGE == "Thanh toán thành công!") {
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
}
