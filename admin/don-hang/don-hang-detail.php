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
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">TỔNG HỢP ĐƠN HÀNG</h3>
        <form action="" method="post">
            <table class="table table-striped">
                <thead class="alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">
                    <tr>
                        <th>Id bill</th>
                        <!-- <th>Id bill detail</th> -->
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Tổng tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "../../model/product.php";
                    $total = 0;
                    $salee = 0;
                    foreach ($bill_details as $bill_detail) {
                        extract($bill_detail);
                        $total += $cost * $quantity;
                        $salee += ($cost - ($cost / 100 * $sale) * $quantity);
                        $name_product = product_select_by_id($id_product);
                    ?>
                        <tr>
                            <td><?= $id_bill ?></td>
                            <!-- <td><?= $id_bill_detail ?></td> -->
                            <td><?= $name_product['name'] ?></td>
                            <td><?= $id_product ?></td>
                            <td><img src="../../content/image/product/<?= $name_product['avatar'] ?>" width="100px" height="" alt=""> </td>
                            <td><?= $quantity ?></td>
                            <td><?= number_format($cost, 0) ?></td>
                            <td><?= $sale ?> %</td>
                            <td><?= number_format(($cost - ($cost / 100 * $sale)) * $quantity) ?></td>
                            <td></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
            <!-- number_format($cost * ((100 - $sale)/100) * $quantity , 0)  -->

            <tfoot>
                <tr>
                    <td colspan="2" class="d-flex" >
                        <div style="display:flex; justify-content: space-between;">
                            <a href="index.php?list" class="btn " style="background-color: #1087b9; color:white">Danh sách</a>
                            <span style="background-color: #1087b9; padding:10px; color:white; font-weight:bold">Tổng tiền: <?= number_format($total - $salee) ?> ₫</span>
                        </div>
                    </td>
                </tr>
            </tfoot>

        </form>
    </div>
</body>

</html>