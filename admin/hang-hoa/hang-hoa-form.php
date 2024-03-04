<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>

<body>
<?php
        if (strlen($MESSAGE)) {
            if ($MESSAGE == "Thêm mới thành công!") {
        ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        text: '<?= $MESSAGE ?>',
                    })
                </script>
            <?php
            } else { ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        text: '<?= $MESSAGE ?>',
                    })
                </script>
        <?php
            }
        }
        ?>
  
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="wrapper-product">

            <div class="container my-3">
                <?php

                require "../../model/type.php";
                $types = type_select_all();
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Thêm hàng hóa</h3>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="id_product">Mã sản phẩm</label>
                            <input name="id_product" value="auto number" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="id_type">Loại</label>
                            <select name="id_type" id="" class="form-control" style="width:100%;height:30px">
                                <?php
                                foreach ($types as $type) {
                                    extract($type);
                                ?>;
                                <option value="<?= $id_type ?>"><?= $name ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="price">Giá tiền</label>
                            <input type="number" class="form-control" name="price" min="0" required id="">
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" required name="name" id="">
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="avatar">Hình ảnh</label>
                            <input type="file" name="avatar" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            Đặc biệt
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="hot" id="binhthuong" checked>
                            <label class="form-check-label" style="font-weight: normal;" for="binhthuong">
                                Bình thường
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="hot" id="hot">
                            <label class="form-check-label" style="font-weight: normal;" for="hot">
                                Đặc biệt
                            </label>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="">
                        </div>
                    </div> -->

                    <div class="col-sm-12 my-2">
                        <label for="description">Mô tả</label>
                        <textarea name="description" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="sale">Giảm giá</label>
                            <input type="number" name="sale" class="form-control" min="0" required max="100">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-out-line">
                            <button name="btn-insert" class="btn" style="background-color: #1087b9; color:white">Thêm mới</button>
                            <button type="reset" style="border:1px solid black" class="btn ">Nhập lại</button>
                            <a href="index.php?btn-list" class="btn" style="border:1px solid black">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>