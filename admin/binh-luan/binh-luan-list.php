<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table {
            /* margin-top: 50px; */
            /* border-collapse: collapse; */
            /* border-spacing: 0; */
            /* width: 100%; */
            border: 1px solid #ddd;
            color: white;
            display: block;
            max-height: 500px;
            overflow-y: scroll;
            /* font-size: 20px; */
        }

        tr {
            border-bottom: 1px solid white;
        }

        table thead tr,
        table tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        th {
            max-width: 100%;
        }

        th,
        td {
            text-align: center;
            padding: 20px 0px;
        }
    </style>
</head>

<body>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">TỔNG HỢP BÌNH LUẬN</h3>
        <form action="index.php" method="post">
            <table class="table table-striped">
                <thead class="alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">
                    <tr>
                        <th>ID comment</th>
                        <th>Người bình luận</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Nội dung</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "../../model/product.php";
                    foreach ($comments as $comment) {
                        extract($comment);
                        $name_product = product_select_by_id($id_product);
                    ?>
                        <tr>
                            <td><?= $id_comment ?></td>
                            <td><?= $id_user ?></td>
                            <td><?= $name_product['name'] ?></td>
                            <td><img src="../../content/image/product/<?= $name_product['avatar'] ?>" width="100px" height="" alt=""> </td>
                            <td><?= $content ?></td>
                            <td><?= $created_at ?></td>

                            <td>
                                <a href="index.php?btn-delete&id_comment=<?= $id_comment ?>" class="btn btn-default btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </form>
    </div>
</body>

</html>