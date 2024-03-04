<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">CHI TIẾT BÌNH LUẬN</h3>
        <form action="index.php" method="post">
            <table class="table">
                <thead class="alert-success" style="background-color: #1087b9; color:white">
                    <tr>
                        <th></th>
                        <th>NỘI DUNG BÌNH LUẬN</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>NGƯỜI BÌNH LUẬN</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th><input type="checkbox" name="" value=""></th>
                        <td>Tuyệt vời!</td>
                        <td>29/6/2023</td>
                        <td>Huy123</td>
                        <td>Admin</td>
                        <td>
                            <a href="" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>


                    <tr>
                        <th><input type="checkbox" name="" value=""></th>
                        <td>Cuti quó ò >.<</td>
                        <td>30/6/2023</td>
                        <td>Gay</td>
                        <td>Khách hàng</td>
                        <td>
                            <a href="" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button id="check-all" type="button" style="border:1px solid black" class="btn btn-default">Chọn tất cả</button>
                            <button id="clear-all" type="button" style="border:1px solid black" class="btn btn-default">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" style="border:1px solid black" class="btn btn-default">Xóa các mục chọn</button>
                            <a href="index.php?btn_list" style="border:1px solid black" class="btn btn-default">Danh sách</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>

</html>