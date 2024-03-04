<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Thêm khách hàng</h3>
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
            <div class="form-group">
                <label for="id_customer">Id customer</label>
                <input name="id_customer" value="auto number" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="name">Tên</label>
                <input name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="number" name="phone" required value="" class="form-control">
            </div>

            <div class="form-group">
                <label for="full_address">Địa chỉ</label>
                <input name="full_address" value="" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" value="" required class="form-control">
            </div>

            <div class="form-group my-3">
                <input type="submit" name="btn-insert" value="Thêm mới" class="btn btn-primary" style="background-color: #1087b9; color:white">
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>