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
            <div class="form-group my-3">
                <label>Mã loại</label>
                <input name="" value="auto number" class="form-control" readonly>
            </div>

            <div class="form-group my-3">
                <label>Tên loại</label>
                <input name="name" type="text" required class="form-control">
            </div>

            <div class="form-group my-3">
                <label>Logo</label>
                <input type="file" name="image" value="" class="form-control">
            </div>
            <div class="col-sm-12 my-2">
                <label>Mô tả</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group my-3">
                <input type="submit" value="Thêm mới" name="btn-insert" class="btn btn-primary" style="background-color: #1087b9; color:white">
                <button type="reset" style="border:1px solid black" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn-list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>