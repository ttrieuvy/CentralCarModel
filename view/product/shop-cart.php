<?php
require '../../global.php';
include '../../model/product.php';

// include '../../model/cart.php';
// include '../../model/cart_detail.php';


// if (isset($_SESSION['user'])) {

//   $id_cart = select_all_id_cart_by_id_user($_SESSION['user']['id_user']);
// }


$VIEW_NAME = "product/shop-cart-ui.php";



// if (!isset($_SESSION['count_cart'])) {
//   echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL/product/shop-cart.php\">";
//   $_SESSION['count_cart'] = true;
// }

require '../layout.php';
