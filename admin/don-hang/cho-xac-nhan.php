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

        <table class="table table-striped">
            <thead class="alert-success" style="background-color: #1087b9; color:white;text-transform:uppercase">
                <tr>
                    <th>Id bill</th>
                    <th>ID user</th>
                    <th>Tên khách hàng</th>
                    <th>số điện thoại</th>
                    <!-- <th>id customer</th> -->
                    <!-- <th>Image</th> -->
                    <th>tình trạng</th>
                    <th>địa chỉ</th>
                    <th>Created at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "../../model/user.php";
                require "../../model/customer.php";
                // require "../../model/bill_detail.php";
                foreach ($bills as $bill) {
                    extract($bill);
                    $name_user = user_select_by_id($id_user);
                    $name_customer = customer_select_by_id($id_customer);
                    // $name_product = bill_detail_select_by_id_bill($id_bill);
                    // echo "<pre>";
                    // print_r($name_user);
                    // echo "</pre>";
                ?>
                    <form action="./index.php" method="post">
                        <tr>

                            <td><?= $id_bill ?></td>
                            <td><?php
                                if (!empty($id_user)) {
                                    echo $id_user;
                                } else {
                                    echo $id_customer;
                                }
                                ?></td>
                            <td><?php
                                if (!empty($name_user)) {
                                    echo $name_user['last_name'] . ' ' . $name_user['first_name'];
                                }
                                if (!empty($name_customer)) {
                                    echo $name_customer['name'];
                                }
                                ?></td>

                            <td><?php
                                if (!empty($name_user)) {
                                    echo $name_user['phone'];
                                }
                                if (!empty($name_customer)) {
                                    echo $name_customer['phone'];
                                }
                                ?></td>
                            <td>
                                <select name="status" id="" class="form-select" aria-label="Default select example">
                                    <option value="<?= $status ?>" selected><?= $arr_status[$status] ?></option>
                                    <?php
                                    foreach ($arr_status as $key => $sts) {
                                        if ($key != $status) {  ?>
                                            <option value="<?= $key ?>"><?= $sts ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <?php
                                if (empty($name_customer['full_address']) && !empty($name_user['full_address'])) {
                                    echo $name_user['full_address'];
                                } elseif (!empty($name_customer['full_address']) && empty($name_user['full_address'])) {
                                    echo $name_customer['full_address'];
                                }
                                ?>
                            </td>
                            <td><?= $created_at ?></td>
                            <td>
                                <a href="index.php?btn-detail&id_bill=<?= $id_bill ?>" class="btn btn-default btn-sm btn-primary text-light">Xem chi tiết</a>
                                <input type="hidden" name="id_bill" value="<?= $id_bill ?>">
                                <input type="submit" name="btn-edit" value="Lưu" class="btn btn-default btn-sm btn btn-danger my-3">
                            </td>
                        </tr>
                    </form>
                <?php
                }
                ?>

            </tbody>

        </table>
        <form action="index.php" method="post">
            <button type="submit" class="btn btn-sm btn-default btn-primary" name="back">Trở về</button>
        </form>

    </div>
</body>

</html>