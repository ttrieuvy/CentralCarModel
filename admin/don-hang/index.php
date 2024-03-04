<?php
require "../../global.php";
require "../../model/bill.php";
require "../../model/bill_detail.php";
check_login();
extract($_REQUEST);
if(exist_param("btn-detail")){
    $bill_details = bill_detail_select_by_id_bill($id_bill);
    $VIEW_NAME = "don-hang/don-hang-detail.php";
}
elseif(exist_param('btn-edit')){
    try {
        bill_update($status, $id_bill);
        // unset($name, $id_type, $image, $description);
        $MESSAGE = "Cập nhật thành công!";
        $VIEW_NAME = "don-hang/don-hang-list.php";
        // header("Location: index.php");
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
        header("Refresh: 1;");
    }
    $bills = bill_select_all();
    $VIEW_NAME = "don-hang/don-hang-all.php";
} elseif (isset($cho_xac_nhan)) {
    $bills = select_all_status(0);
    $VIEW_NAME = "don-hang/cho-xac-nhan.php";
} elseif(isset($dang_van_chuyen)){
    $bills = select_all_status(1);
    $VIEW_NAME = "don-hang/cho-xac-nhan.php";
} 
elseif(isset($thanh_cong)){
    $bills = select_all_status(2);
    $VIEW_NAME = "don-hang/cho-xac-nhan.php";
} 
elseif(isset($da_huy)){
    $bills = select_all_status(3);
    $VIEW_NAME = "don-hang/cho-xac-nhan.php";
} 
elseif (isset($all)) {
    $bills = bill_select_all();
    $VIEW_NAME = "don-hang/don-hang-list.php";   

} elseif (isset($back)) {
    $VIEW_NAME = "don-hang/don-hang-all.php";   
}
else{
    $VIEW_NAME = "don-hang/don-hang-all.php";   
}

require "../layout.php";
