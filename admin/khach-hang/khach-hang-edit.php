<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Sửa tài khoản</h3>
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
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input name="id_user" class="form-control" required value="<?= $id_user ?>">
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input name="first_name" value="<?= $first_name ?>" required class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input name="last_name" value="<?= $last_name ?>" required class="form-control">
                    </div>
                </div>

                

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" name="phone" value="<?= $phone ?>" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="<?= $email ?>" required class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="full_address">Địa chỉ</label>
                        <input name="full_address" value="<?= $full_address ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="image">Hình</label>
                        <input name="image" value="" type="file" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12 my-2">
                    <div class="form-out-line">
                        Vai trò
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="role" id="role" <?= $role == 0 ? "checked" : "" ?>>
                        <label class="form-check-label" style="font-weight: normal;" for="role">
                            Khách hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="role" id="a" <?= $role == 1 ? "checked" : "" ?>>
                        <label class="form-check-label" style="font-weight: normal;" for="a">
                            Quản trị viên
                        </label>
                    </div>
                </div>
                <br>
            </div>

            <div class="form-group">
                <button name="btn-update" class="btn btn-primary">Cập nhật</button>
                <input type="submit" name="btn-insert" value="Thêm mới" class="btn " style="border:1px solid black">
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>