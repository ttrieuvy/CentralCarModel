<?php
require "../../global.php";
include('../../model/product.php');

extract($_REQUEST);
// chèn giao diện vô trang chính
if (exist_param("san-pham")) {
    $VIEW_NAME = "trang-chinh/san-pham.php";
} else if (exist_param("tra-cuu")) {
    $VIEW_NAME = "trang-chinh/tra-cuu.php";
} else if (exist_param("lien-he")) {
    $VIEW_NAME = "trang-chinh/lien-he.php";
} else if (exist_param("tin-tuc")) {
    $VIEW_NAME = "trang-chinh/tin-tuc.php";
} else {
    // require_once '../../dao/hang-hoa.php';
    // $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trangchu.php";
}

require "../layout.php";
