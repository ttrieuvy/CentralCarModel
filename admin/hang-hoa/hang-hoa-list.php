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
            max-height: 500px;
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <form action="index.php" method="post">
        <h3 class="alert alert-success" style=" background-color: #1087b9; color:white">QUẢN LÝ HÀNG HÓA</h3>
        <table class="table table-striped">
            <thead class="alert-success" style=" background-color: #1087b9; color:white; text-transform:uppercase">
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Mã loại</th>
                    <th>Giá</th>
                    <th>Tên sản phẩm</th>
                    <th>hình</th>
                    <th>Nổi bật</th>
                    <th>Mô tả</th>
                    <th>Giảm giá</th>
                    <th>Created at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php

                require "../../model/type.php";

                foreach ($items as $item) {
                    extract($item);
                    $rate = select_rate_product_by_id_product($id_product);
                    $name_type = loai_select_by_id($id_type);
                ?>
                    <tr>
                        <th><input type="checkbox" name="id_product" value="<?= $id_product ?>"></th>
                        <td><?= $id_product ?></td>
                        <td><?= $name_type['name'] ?></td>
                        <td><?= number_format($price, 0) ?> ₫</td>
                        <td><?= $name ?></td>
                        <td><img src="../../content/image/product/<?= $avatar ?>" width="100px" height="" alt=""> </td>
                        <td><?php
                            if ($hot == 0) {
                                echo 'Normal';
                            } else {
                                echo 'Hot';
                            }
                            ?></td>
                        <td><?= $description ?></td>
                        <td><?= $sale ?>%</td>
                        <td><?= $created_at ?></td>
                        <!-- <td>
                        <div class="rating">
                            <input type="radio" id="star5" name="rate" value="5">
                            <label for="star5" title="text"></label>

                            <input type="radio" id="star4" name="rate" value="4">
                            <label for="star4" title="text"></label>

                            <input checked="" type="radio" id="star3" name="rate" value="3">
                            <label for="star3" title="text"></label>

                            <input type="radio" id="star2" name="rate" value="2">
                            <label for="star2" title="text"></label>

                            <input type="radio" id="star1" name="rate" value="1">
                            <label for="star1" title="text"></label>
                        </div>
                    </td> -->
                        <td>
                            <a href="index.php?btn-edit&id_product=<?= $id_product ?>" class="btn btn-default btn-sm btn btn-primary my-3">Sửa</a>
                            <a href="index.php?btn-delete&id_product=<?= $id_product ?>" class="btn-delete btn-danger btn-sm btn">Xóa</a>
                            <!-- <button type="button" class="btn btn-sm btn-danger delete_product_btn" onclick="mouse()" value="<?= $id_product ?>">Xóa</button> -->
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
                    <button id="check-all" type="button"  style="border:1px solid black" class="btn btn-default">Chọn tất cả</button>
                    <button id="clear-all" type="button"  style="border:1px solid black" class="btn btn-default">Bỏ chọn tất cả</button>
                    <button id="btn-delete" name="btn-delete" style="border:1px solid black" class="btn btn-default">Xóa các mục chọn</button>
                    <a href="index.php?act" class="btn" style="background-color: #1087b9; color:white">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </form>

</body>

</html>