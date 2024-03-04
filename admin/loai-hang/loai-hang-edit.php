<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white; text-transform:uppercase">Thêm loại hàng</h3>
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
            <div class="form-group my-3">
                <label>Mã loại</label>
                <input name="id_type" value="<?= $id_type ?>" class="form-control" readonly>
            </div>

            <div class="form-group my-3">
                <label>Tên loại</label>
                <input name="name" value="<?= $name ?>" type="text" required class="form-control">
            </div>

            <div class="form-group my-3">
                <label for="image">Logo</label>
                <input type="file" name="image" value="<?= $image ?>" class="form-control">
            </div>
            <div class="col-sm-12 my-2">
                <label>Mô tả</label>
                <input type="text" value="<?= $description ?>" name="description" class="form-control" rows="5"></input>
            </div>
            <div class="form-group my-3">
                <button name="btn-update" class="btn btn-primary">Cập nhật</button>
                <input  type="submit" value="Thêm mới" name="btn-insert" class="btn " style="border:1px solid black">
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>