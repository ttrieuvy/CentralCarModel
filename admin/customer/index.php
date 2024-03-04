<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../content/js/jquery-3.7.0.min.js"></script>
    <script src="../../content/js/central_car_model.js"></script>
</head>
<body>
    
</body>
</html>
<?php
require "../../global.php";
require "../../model/customer.php";
check_login();
extract($_REQUEST);
if(exist_param("btn-insert")){
    try {
        customer_insert($name, $phone, $full_address, $email);
        $MESSAGE = "Thêm mới thành công!";
        header("Refresh:1");
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "customer/customer-form.php";
} elseif(exist_param("btn-list")){
    $customers = customer_select_all();
    $VIEW_NAME = "customer/customer-list.php";
} elseif (exist_param("act")) {
    $VIEW_NAME = "customer/customer-form.php";
} 
elseif (exist_param("btn-edit")) {
    $edit =  customer_select_by_id($id_customer);
    extract($edit);
    $VIEW_NAME = "customer/customer-edit.php";
} elseif (exist_param("btn-update")) {
    try {
        customer_update($name, $phone, $full_address, $email, $id_customer);
        // unset($name, $id_type, $image, $description);
        $MESSAGE = "Cập nhật thành công!";
        $VIEW_NAME = "customer/customer-list.php";
        header("Refresh:1");
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "customer/customer-edit.php";
} elseif (exist_param('btn-delete')) {
    try {
        customer_delete($id_customer);
        $MESSAGE = "Xóa thành công!";
        header("Location: index.php");
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "customer/customer-list.php";
}
else{
    $customers = customer_select_all();
    $VIEW_NAME = "customer/customer-list.php";
}

require "../layout.php";
