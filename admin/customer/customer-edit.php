<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Sửa khách hàng</h3>
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
        <div class="form-group">
                <label for="id_customer">id_customer</label>
                <input name="id_customer" value="<?= $id_customer ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" class="form-control" required value="<?= $name ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" required value="<?= $phone ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="full_address">Full address</label>
                <input name="full_address" value="<?= $full_address ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" value="<?= $email ?>" required class="form-control">
            </div>
            
            <div class="form-group">
                <button name="btn-update" class="btn btn-primary">Cập nhật</button>
                <!-- <input type="submit" name="btn-insert" value="Cập nhật" class="btn btn-primary" style="background-color: #1087b9; color:white"> -->
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>
</html>