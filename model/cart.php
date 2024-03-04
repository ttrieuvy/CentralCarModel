<?php
require_once 'pdo.php';

//Thêm hóa đơn mới
function cart_insert($id_user)
{
    $sql = "INSERT INTO db_cart (id_user) VALUES (?)";
    pdo_execute($sql, $id_user);
}

//Cập nhật thông tin 1 hóa đơn
function cart_update($id_cart, $id_user, $total)
{
    $sql = "UPDATE db_cart SET id_user=?, total=? WHERE db_cart=?";
    pdo_execute($sql, $id_user, $total, $id_cart);
}

// Xóa một hoặc nhiều bill
function cart_delete($id_cart)
{
    $sql = "DELETE FROM db_cart  WHERE id_cart=?";
    if (is_array($id_cart)) {
        foreach ($id_cart as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_cart);
    }
}

// Truy vấn tất cả các bill
function cart_select_all()
{
    $sql = "SELECT * FROM db_cart";
    return pdo_query($sql);
}

//Truy vấn một bill theo id_user
function cart_select_by_id($id_user)
{
    $sql = "SELECT * FROM db_cart WHERE id_user=?";
    return pdo_query_one($sql, $id_user);
}

//Kiểm tra sự tồn tại của một bill
function cart_exist($id_user)
{
    $sql = "SELECT count(*) FROM db_cart WHERE id_user=?";
    return pdo_query_value($sql, $id_user) > 0;
}



// Truy vấn tất cả các bill
function select_all_id_cart_by_id_user($id_user)
{
    $sql = "SELECT * FROM db_cart WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}
