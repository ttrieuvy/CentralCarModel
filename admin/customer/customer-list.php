<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table th,
        table td {
            padding: 1.25rem .75rem;
        }

        .rating {
            float: left;
        }

        .rating:not(:checked)>input {
            position: absolute;
            appearance: none;
        }

        .rating:not(:checked)>label {
            float: right;
            cursor: pointer;
            font-size: 20px;
            color: #666;
        }

        .rating:not(:checked)>label:before {
            content: '★';
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        .rating>label:hover~input:checked~label {
            color: #e58e09;
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #ff9e0b;
        }

        .rating>input:checked~label {
            color: #ffa723;
        }

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
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">QUẢN LÝ KHÁCH HÀNG</h3>
        <form action="index.php" method="post">
            <table class="table table-striped">
                <thead class="alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">
                    <tr>
                        <th></th>
                        <th>ID Customer</th>
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>full address</th>
                        <th>email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($customers as $customer) {
                        extract($customer);
                    ?>
                        <tr>
                            <th><input type="checkbox" name="id_customer" value="<?$id_cutomer?>"></th>
                            <td><?= $id_customer ?></td>
                            <td><?= $name ?></td>
                            <td><?= $phone ?></td>
                            <td><?= $full_address ?></td>
                            <td><?= $email ?></td>
                            <td>
                                <a href="index.php?btn-edit&id_customer=<?= $id_customer ?>" class="btn btn-default btn-sm btn-primary ">Sửa</a>
                                <a href="index.php?btn-delete&id_customer=<?= $id_customer ?>" class="btn btn-default btn-sm btn-danger">Xóa</a>
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
                        <a href="index.php?act" class="btn btn-primary" style="background-color: #1087b9; color:white">Nhập thêm</a>
                    </td>
                </tr>
            </tfoot>
        </form>
    </div>
</body>

</html>