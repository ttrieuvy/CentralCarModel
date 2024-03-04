<?php
require_once 'pdo.php';

//Thêm chi tiết hóa đơn mới
function cart_detail_insert($id_cart, $id_product, $quantity)
{
    $sql = "INSERT INTO db_cart_detail (id_cart, id_product, quantity) VALUES (?,?,?)";
    pdo_execute($sql, $id_cart, $id_product, $quantity);
}

//Cập nhật thông tin 1 hóa đơn chi tiết
function cart_detail_update($id_cart_detail, $id_cart, $id_product, $quantity)
{
    $sql = "UPDATE db_cart_detail SET id_cart=?, id_product=?, quantity=? WHERE id_cart_detail=?";
    pdo_execute($sql, $id_cart, $id_product, $quantity, $id_cart_detail);
}

//Cập nhật số lượng sản phẩm trong giỏ hàng
function update_count_quantity($id_cart, $id_product, $quantity)
{
    $sql = "UPDATE db_cart_detail SET quantity=? WHERE id_cart=? AND id_product=?";
    pdo_execute($sql, $quantity, $id_cart, $id_product);
}

// Xóa một hoặc nhiều hóa đơn chi tiết
function cart_detail_delete($id_cart_detail)
{
    $sql = "DELETE FROM db_cart_detail  WHERE id_cart_detail=?";
    if (is_array($id_cart_detail)) {
        foreach ($id_cart_detail as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_cart_detail);
    }
}

// Truy vấn tất cả các hóa đơn chi tiết
function cart_detail_select_all()
{
    $sql = "SELECT * FROM db_cart_detail";
    return pdo_query($sql);
}

//Truy vấn tất cả đơn hàng chi tiết theo id_cart
function cart_detail_select_by_id_cart($id_cart)
{
    $sql = "SELECT * FROM db_cart_detail WHERE id_cart=?";
    return pdo_query($sql, $id_cart);
}

//đếm cart_detail theo id_cart
function count_cart_detail($id_cart)
{
    $sql = "SELECT count(id_cart_detail) FROM db_cart_detail WHERE id_cart=?";
    return pdo_query_value($sql, $id_cart);
}

//Kiểm tra sự tồn tại của một hóa đơn chi tiết
function cart_detail_exist($id_cart)
{
    $sql = "SELECT count(*) FROM db_cart_detail WHERE id_cart=?";
    return pdo_query_one($sql, $id_cart) > 0;
}

function select_product_by_id_product($id_product)
{
    $sql = "SELECT db_product.* 
    FROM db_product
    INNER JOIN db_cart_detail
    ON db_cart_detail.id_product = db_product.id_product
    WHERE db_product.id_product=? limit 1";
    return pdo_query($sql, $id_product);
}
