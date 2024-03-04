<?php
require '../../global.php';
require '../../model/product.php';

extract($_REQUEST);
// Truy vấn mặt hàng theo mã
if(exist_param("id_type")){
    $products = product_select_by_type($id_type);
    switch ($id_type) {
        case '1':
            $name_type = 'Mô hình xe BMW';
            $banner = 'bmw';
            break;
        case '2':
            $name_type = 'Mô hình xe Mercedes';
            $banner = 'mes';
            break;
        case '3':
            $name_type = 'Mô hình xe Lamborghini';
            $banner = 'lamborghini';
            break;
        case '4':
            $name_type = 'Mô hình xe Ferrari';
            $banner = 'ferrari';
            break;
        case '5':
            $name_type = 'Mô hình xe McLaren';
            $banner = 'mclaren';
            break;
    }
}
else if(exist_param("search")){
    $products = product_select_keyword($search);
    $name_search = $search;
    $banner = '';
}
else{
    $products = product_select_all();
}


//name type





$VIEW_NAME = "product/product-by-type-ui.php";

require '../layout.php';

?>