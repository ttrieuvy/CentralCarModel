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
require "../../model/product.php";
require "../../model/rate.php";
// require "../../model/type.php";
check_login();
extract($_REQUEST);
$items['description'] = "";
$items['name'] = "";
$avatar = "";
if (exist_param("btn-insert")) {
    $file_name = save_file("avatar", "$IMAGE_DIR/product/");
    $avatar = $file_name ? $file_name : "";
    try {
        product_insert($id_type, $price, $name, $avatar, $hot, $description, $sale);
        $MESSAGE = "Thêm mới thành công!";
        header("Refresh:1");
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
        header("Refresh:1");
    }
    $VIEW_NAME = "hang-hoa/hang-hoa-form.php";
} elseif (exist_param("btn-list")) {
    $items = product_select_all();
    $VIEW_NAME = "hang-hoa/hang-hoa-list.php";
} elseif (exist_param("act")) {
    $VIEW_NAME = "hang-hoa/hang-hoa-form.php";
} elseif (exist_param("btn-edit")) {
    $items = product_select_by_id($id_product);
    extract($items);
    $VIEW_NAME = "hang-hoa/hang-hoa-edit.php";
} elseif (exist_param("btn-update")) {
    $file_name = save_file("avatar", "$IMAGE_DIR/product/");
    $avatar = $file_name ? $file_name : $avatar;
    if ($avatar != "") {
        try {
            $update =  product_update( $id_type, $price, $name,  $avatar, $hot, $description, $sale, $id_product);
            // unset($name, $id_type, $image, $description);
            header("Refresh: 1;");
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "hang-hoa/hang-hoa-list.php";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    } else{
        try {
            $update =  product_updatee( $id_type, $price, $name, $hot, $description, $sale, $id_product);
            // unset($name, $id_type, $image, $description);
            header("Refresh: 1;");
            $MESSAGE = "Cập nhật thành công!";
            $VIEW_NAME = "hang-hoa/hang-hoa-list.php";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    }
    $VIEW_NAME = "hang-hoa/hang-hoa-edit.php";
} 
elseif (exist_param('btn-delete')) {
   
        try {
            product_delete($id_product);
            $MESSAGE = "Xóa thành công!";
            header("Location: index.php");
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        $VIEW_NAME = "loai-hang/loai-hang-list.php";
    }

 else {
    $items = product_select_all();
    $VIEW_NAME = "hang-hoa/hang-hoa-list.php";
}

require "../layout.php";
?>

<!-- <script>
        $('.btn-delete').on('click', function(e){
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
        })
    </script> -->