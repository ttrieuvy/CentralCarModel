<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="../hang-hoa/index.php" method="post" enctype="multipart/form-data">
        <div class="wrapper-product">

            <div class="container my-3">
                
                <?php
                if (strlen($MESSAGE)) {
                    if ($MESSAGE == "Cập nhật thành công!") {
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
                
                include "../../model/type.php";
                $types = type_select_all();
                
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Sửa hàng hóa</h3>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="id_product">Mã sản phẩm</label>
                            <input name="id_product" value="<?= $id_product ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="id_type">Loại</label>
                            <select name="id_type" id="" class="form-control" style="width:100%;height:30px">

                                <?php foreach ($types as $type) {
                                    extract($type);
                                    if ($items['id_type'] == $id_type) { ?>
                                        <option value="<?= $items['id_type'] ?>"><?= $name ?></option>
                                <?php }
                                }; ?>
                                <?php foreach ($types as $type) {
                                    extract($type);
                                    if ($items['id_type'] != $id_type) { ?>
                                        <option value="<?= $id_type ?>"><?= $name ?></option>
                                <?php }
                                }; ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="price">Giá sản phẩm</label>
                            <input type="number" class="form-control" value="<?= $price ?>" name="price" min="0" required id="">
                        </div>
                    </div>

                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" value="<?= $items['name'] ?>" name="name" required id="">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="avatar">Hình ảnh</label>
                            <input type="file" name="avatar" value="<?= $avatar ?>" class="form-control" id="">
                        </div>
                    </div>

                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            Đặc biệt
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="hot" id="hot" <?= $hot == 0 ? "checked" : "" ?>>
                            <label class="form-check-label" style="font-weight: normal;" for="hot">
                                Bình thường
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="hot" id="hott" <?= $hot == 1 ? "checked" : "" ?>>
                            <label class="form-check-label" style="font-weight: normal;" for="hott">
                                Đặc biệt
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-12 my-2">
                        <label for="description">Mô tả</label>
                        <input type="text" value="<?= $items['description'] ?>" style="height: 70px; word-wrap: break-word" name="description" class="form-control" >
                    </div>
                    <div class="col-sm-12 my-2">
                        <div class="form-out-line">
                            <label for="sale">Giảm giá</label>
                            <input type="number" name="sale" value="<?= $sale ?>" class="form-control" min="0" required max="100">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-out-line">
                            <button name="btn-update" class="btn btn-primary">Cập nhật</button>
                            <button name="btn-insert" class="btn" style="border:1px solid black">Thêm mới</button>
                            <button type="reset" style="border:1px solid black" class="btn ">Nhập lại</button>
                            <a href="index.php?btn-list" class="btn" style="border:1px solid black">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>