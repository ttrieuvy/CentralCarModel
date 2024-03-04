<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .col-sm-6 button{
            margin-top: 20px;
            width: 250px;
            height: 50px;
            background-color: #1087b9;
            color: white;
            border: 1px solid #1087b9;
            
        }
        .col-sm-6{
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="alert alert-success" style="background-color: #1087b9; color:white">TỔNG HỢP ĐƠN HÀNG</h3>
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" name="cho_xac_nhan">Đơn hàng chờ xác nhận: <?php $cho_xac_nhan = count_status(0);
                    $a = implode('', $cho_xac_nhan);
                    echo $a;
                    ?></button>
                </div>
                <div class="col-sm-6">
                <button type="submit" name="dang_van_chuyen">Đơn hàng đang vận chuyển: <?php $cho_xac_nhan = count_status(1);
                    $a = implode('', $cho_xac_nhan);
                    echo $a;
                    ?></button>

                </div>
                <div class="col-sm-6">
                <button type="submit" name="thanh_cong">Đơn hàng vận chuyển thành công: <?php $cho_xac_nhan = count_status(2);
                    $a = implode('', $cho_xac_nhan);
                    echo $a;
                    ?></button>

                </div>
                <div class="col-sm-6">
                <button type="submit" name="da_huy">Đơn hàng đã hủy: <?php $cho_xac_nhan = count_status(3);
                    $a = implode('', $cho_xac_nhan);
                    echo $a;
                    ?></button>

                </div>
                <div class="col-sm-6" >
                <button type="submit" name="all">Xem tất cả đơn hàng</button>
                </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>