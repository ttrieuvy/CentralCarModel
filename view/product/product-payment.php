<?php 
require '../../global.php';
require '../../model/product.php';
extract($_REQUEST);
// check_payment();
if(exist_param("id_product")){
    $quantity = $endQuantity;
    $productone = product_select_by_id($id_product);
    $price_shipcod = 40000;
} else {
    $product = $_SESSION['cart'];
    $price_shipcod = 40000;
};

$VIEW_NAME = "product/product-payment-ui.php";
require '../layout.php';
?>