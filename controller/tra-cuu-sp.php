<?php
require '../global.php';
require '../model/user.php';
require '../model/customer.php';
require '../model/bill.php';
require '../model/bill_detail.php';
require '../model/product.php';
extract($_REQUEST);
$userInformation = select_user_keyword($phone);
$customerInformation = select_customer_keyword($phone);
$billInformation = select_bill_keyword($id_bill);

if (exist_param("test")) {
    if (empty($userInformation) && empty($customerInformation)) {
        $alertphone = "Số điện thoại không đúng";
    } else {
        if (empty($billInformation)) {
            $alertbill = "Mã đơn hàng không tồn tại";
        } else if ($userInformation && $billInformation['id_user'] != $userInformation['id_user'] && $billInformation['id_customer'] != $customerInformation['id_customer']) {
            $alertbill = "Mã đơn hàng không tồn tại";
        } else {
            $tongtien = 0;
            $giamgia = 0;
            $shipcod = 40000;
            $date = select_date_bill($id_bill);
            $productsInformation = select_id_product_bill_detail($id_bill);
            if ($date['status'] == 0) {
                $status = "Đang chờ xác nhận";
            } else if ($date['status'] == 1) {
                $status = "Đang được vận chuyển";
            } else if ($date['status'] == 2) {
                $status = "Đơn hàng hoàn tất";
            } else if ($date['status'] == 3) {
                $status = "Đã hủy";
            }
        }
    }
}
$VIEW_NAME = "trang-chinh/tra-cuu.php";
require '../view/layout.php';
