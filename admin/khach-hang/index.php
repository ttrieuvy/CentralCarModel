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
include "../../model/user.php";
check_login();
extract($_REQUEST);
$image = "";
if(exist_param("btn-insert")){
    $file_name = save_file("image", "$IMAGE_DIR/user/");
    $image = $file_name ? $file_name : "";
    try {
        user_insert($id_user, $pass, $first_name, $last_name, $phone, $email, $full_address, $image, $role);
        $MESSAGE = "Thêm mới thành công!";
        header("Refresh:1");
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
        header("Refresh:1");
    }
    $VIEW_NAME = "khach-hang/khach-hang-form.php";
} elseif(exist_param("btn-list")){
    $users = user_select_all();
    $VIEW_NAME = "khach-hang/khach-hang-list.php";
} elseif (exist_param("act")) {
    $VIEW_NAME = "khach-hang/khach-hang-form.php";
} 
elseif (exist_param("btn-edit")) {
    $edit = user_select_by_id($id_user);
    extract($edit);
    $VIEW_NAME = "khach-hang/khach-hang-edit.php";
} elseif (exist_param("btn-update")) {
    $file_name = save_file("image", "$IMAGE_DIR/user/");
    $image = $file_name ? $file_name : $image;
    if($image != ""){
        try {
            user_update( $last_name, $first_name, $phone, $email, $full_address, $image, $role, $id_user);
            // unset($name, $id_type, $image, $description);
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "khach-hang/khach-hang-list.php";
            header("Refresh:1");
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
            header("Refresh:1");
        }
    } else{
        try {
            user_updatee( $last_name, $first_name, $phone, $email, $full_address, $role, $id_user);
            // unset($name, $id_type, $image, $description);
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "khach-hang/khach-hang-list.php";
            header("Refresh:1");
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
            header("Refresh:1");
        }
    }
    $VIEW_NAME = "khach-hang/khach-hang-edit.php";
} elseif (exist_param('btn-delete')) {
    try {
        user_delete($id_user);
        $MESSAGE = "Xóa thành công!";
        header("Location: index.php");
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        header("Location: index.php");
    }
    $VIEW_NAME = "khach-hang/khach-hang-list.php";
}
else{
    $users = user_select_all();
    $VIEW_NAME = "khach-hang/khach-hang-list.php";
}

require "../layout.php";
