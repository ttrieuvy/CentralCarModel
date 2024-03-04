<?php
require_once 'pdo.php';

function image_select_by_id_product($id_product)
{
    $sql = "SELECT * FROM db_image_product WHERE id_product = ?";
    return pdo_query($sql, $id_product);
}