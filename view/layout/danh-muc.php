<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .panel-heading {
        background-color: #1ea8d9;
        border-radius: 10px 10px 0 0;
        padding: 10px 18px;
        color: #fff;
    }

    .panel-heading i {
        padding-right: 5px;
    }

    .list-group {
        border-radius: 0;
    }

    .list-group a:hover {
        color: #1ea8d9;
    }
</style>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th-list"></span>
            <i class="fa-solid fa-list"></i>
            <strong>DANH MỤC SẢN PHẨM</strong>
        </div>
        <div class="list-group">
            <?php

            include('../../model/type.php');
            $type_arr = type_select_all();
            foreach ($type_arr as $type) {
                $href = "$SITE_URL/product/product-by-type.php?id_type=$type[id_type]";
                echo '
                <a href="'.$href.'" class="list-group-item">
                <img src="' . $CONTENT_URL . '/image/img_type/' . $type['image'] . '" alt="" width="30px" height="30px">
                ' . $type['name'] . '
                </a>
                ';
            }
            ?>
        </div>
    </div>

</body>

</html>