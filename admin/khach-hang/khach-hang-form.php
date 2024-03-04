<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Thêm tài khoản</h3>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_user">Tên đăng nhập</label>
                        <input name="id_user" class="form-control" required value="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pass">Mật khẩu</label>
                        <input type="password" name="pass" required value="" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="first_name">Tên</label>
                        <input name="first_name" value="" required class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="last_name">Họ</label>
                        <input name="last_name" value="" required class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" name="phone" value="" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="" required class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="full_address">Địa chỉ</label>
                        <input name="full_address" value="" type="text" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="image">Hình</label>
                        <input name="image" value="" type="file" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label style="margin-top:5px">Vai trò</label>
                </div>
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" value="0" checked name="role" id="khachhang">
                    <label class="form-check-label" style="font-weight: normal;" for="khachhang">
                        Khách hàng
                    </label>
                </div>
                <div class="form-check my-1 mx-2">
                    <input class="form-check-input" type="radio" value="1" name="role" id="nhanvien">
                    <label class="form-check-label" style="font-weight: normal;" for="nhanvien">
                        Nhân viên
                    </label>
                </div>
                <br>
            </div>

            <div class="form-group">
                <input type="submit" name="btn-insert" value="Thêm mới" class="btn btn-primary" style="background-color: #1087b9; color:white">
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>