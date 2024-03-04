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
require "../../model/type.php";

check_login();

extract($_REQUEST);
$image = "";
if(exist_param("btn-insert")){
    $file_name = save_file("image", "$IMAGE_DIR/img_type/");
    $image = $file_name ? $file_name : "";
    try {
        type_insert($name, $image, $description);
        // unset($name, $id_type, $image, $description);
        header("Refresh: 1;");
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bai!";
        header("Refresh: 1;");
    }
    $VIEW_NAME = "loai-hang/loai-hang-form.php";
}
else if(exist_param("btn-list")){
    $items = type_select_all();
    $VIEW_NAME = "loai-hang/loai-hang-list.php";
} elseif(exist_param("act")){
    $VIEW_NAME = "loai-hang/loai-hang-form.php";
} else if(exist_param("btn-edit")){
    $edit = loai_select_by_id($id_type);
    extract($edit);
    $VIEW_NAME = "loai-hang/loai-hang-edit.php";
} elseif (exist_param("btn-update")){
    $file_name = save_file("image", "$IMAGE_DIR/img_type/");
    $image = $file_name ? $file_name : $image;
    if($image != ""){
        try {
            type_update( $name, $image,$description, $id_type);
            // unset($name, $id_type, $image, $description);
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "loai-hang/loai-hang-list.php";
            header("Refresh: 1;");
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bai!";
            header("Refresh: 1;");
        }
    } else{
        try {
            type_updatee( $name,$description, $id_type);
            // unset($name, $id_type, $image, $description);
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "loai-hang/loai-hang-list.php";
            header("Refresh: 1;");
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bai!";
            header("Refresh: 1;");
        }
    }
    $VIEW_NAME = "loai-hang/loai-hang-edit.php";
} elseif (exist_param('btn-delete')) {
    try {
        loai_delete($id_type);
        // $type = type_select_all();
        $MESSAGE = "Xóa thành công!";
        
        header("Location: index.php");
    } catch (Exception $exc) {
        $MESSAGE = 'Xóa thất bại!';
    }
    $VIEW_NAME = "loai-hang/loai-hang-list.php";
}

else{
     $items = type_select_all();
    $VIEW_NAME = "loai-hang/loai-hang-list.php";
}
require "../layout.php";
?>