<?php
require '../../global.php';
require '../../model/product.php';
require '../../model/image_product.php';
require "../../model/comment.php";
require "../../model/user.php";
// require "../../model/rate.php";
extract($_REQUEST);
$product = product_select_by_id($id_product);
extract($product);
$detailImg = image_select_by_id_product($id_product);
$price_sale = $product['price'] - ($product['price'] * ($product['sale'] / 100));
//   hang_hoa_tang_so_luot_xem($ma_hh);

$VIEW_NAME = "product/product-details-ui.php";
// if(exist_param('id-comment')){
//     if(isset($_SESSION['user'])){
//         if($_POST['comment']){
//             require '../../model/comment.php';
//             $id_user = $_SESSION['user']['id_user'];
//             comment_insert($id_user, $id_product, $_POST['comment']);
//         } else{
//             echo 'Vui lòng nhập thông tin';
//         }
//     }else{
//         $MESSAGE = 'cc' ;
//         echo 'cút';
//     }
// }
require '../layout.php';
