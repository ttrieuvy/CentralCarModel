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
            max-height: 550px;
            overflow-y: scroll;
            /* font-size: 20px; */
        }

        tr {
            border-bottom: 1px solid white;
        }

        /* table thead tr,
        table tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        } */
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
    <form action="index.php" method="post">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">QUẢN LÝ LOẠI HÀNG</h3>
        <table class="table table-striped">
            <thead class="alert-success" style="background-color: #1087b9; color:white; line-height:30px">
                <tr style="text-transform:uppercase;">
                    <th></th>
                    <th style="width: 7%;">Mã loại</th>
                    <th>Tên loại</th>
                    <th style="width: 15%;">Logo thương hiệu</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="id_type" value="<?=$id_type?>"></th>
                        <td><?= $id_type ?></td>
                        <td><?= $name ?></td>
                        <td><img src="../../content/image/img_type/<?= $image ?>" width="100px" alt=""></td>
                        <td><?= $description ?></td>
                        <td>
                            <a href="index.php?btn-edit&id_type=<?= $id_type ?>" class="btn btn-default btn-sm btn-primary my-3">Sửa</a>
                            <a href="index.php?btn-delete&id_type=<?= $id_type ?>" class="btn btn-default btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
        <tfoot>
            <tr>
                <td colspan="6">
                    <button id="check-all" type="button" style="border:1px solid black" class="btn btn-default">Chọn tất cả</button>
                    <button id="clear-all" type="button" style="border:1px solid black" class="btn btn-default">Bỏ chọn tất cả</button>
                    <button id="btn-delete" name="btn-delete" style="border:1px solid black" class="btn btn-default">Xóa các mục chọn</button>
                    <a href="index.php?act" class="btn " style="background-color: #1087b9; color:white">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </form>
</body>
</html>