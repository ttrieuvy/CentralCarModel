<?php
require '../../global.php';
require '../../model/user.php';
require '../../model/product.php';
require '../../model/bill.php';
require '../../model/bill_detail.php';
extract($_REQUEST);


$arrStatus = ['Chờ xác nhận', 'Đang vận chuyển', 'Đã giao thành công', 'Hủy'];
// if (isset($_POST['detail'])) {
//     $bill_by_user =  select_history_by_id_bill($id_bill);
// }
// khi bấm submit
if (exist_param('cancel')) { //hủy đơn hàng
    echo 'Bạn đã hủy đơn hàng';
    // ai đó làm alert dùm với
    bill_update(3, $id_bill); //
    echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
} else if (exist_param('buy-again')) {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=$CONTROLLER_URL/addToCart.php?id_product=$id_product&quantity=$quantity&shop-cart\">";
} else if (exist_param('detail')) {
    $bill_by_user =  select_history_by_id_bill($id_bill);
} else {
    // form đơn hàng
    if (exist_param('cho-xac-nhan')) { // những đơn hàng đang chờ xác nhận
        $bill_by_user = bill_select_by_status(0, $_SESSION['user']['id_user']);
        empty($bill_by_user) ? $MESSAGE = 'Không có đơn hàng nào đang chờ xác nhận' : 0;
    } else if (exist_param('van-chuyen')) { //những đơn hàng đang vận chuyển
        $bill_by_user = bill_select_by_status(1, $_SESSION['user']['id_user']);
        empty($bill_by_user) ? $MESSAGE = 'Không có đơn hàng nào đang vận chuyển' : 0;
    } else if (exist_param('thanh-cong')) { // Những đơn hàng đã giao thành công
        $bill_by_user = bill_select_by_status(2, $_SESSION['user']['id_user']);
        empty($bill_by_user) ? $MESSAGE = 'Không có đơn hàng nào đã được giao' : 0;
    } else if (exist_param('huy')) { // những đơn hàng đã hủy
        $bill_by_user = bill_select_by_status(3, $_SESSION['user']['id_user']);
        empty($bill_by_user) ? $MESSAGE = 'Không có đơn hàng giao thất bại' : 0;
    } else {
        $bill_by_user = bill_select_by_user($_SESSION['user']['id_user']); //tất cả các đơn hàng đang có
        empty($bill_by_user) ? $MESSAGE = 'Bạn chưa có sản phẩm nào' : 0;
    }
}


$VIEW_NAME = 'lich-su-ui.php';
require '../layout.php';
