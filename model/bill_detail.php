<?php
require_once 'pdo.php';

//Thêm chi tiết hóa đơn mới
function bill_detail_insert($id_bill, $id_product, $quantity, $cost, $sale)
{
    $sql = "INSERT INTO db_bill_detail (id_bill, id_product, quantity, cost, sale) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $id_bill, $id_product, $quantity, $cost, $sale);
}

//Cập nhật thông tin 1 hóa đơn chi tiết
function bill_detail_update($id_bill_detail, $id_bill, $id_product, $quantity)
{
    $sql = "UPDATE db_bill_detail SET id_bill=?, id_product=?, quantity=? WHERE id_bill_detail=?";
    pdo_execute($sql, $id_bill, $id_product, $quantity, $id_bill_detail);
}

// Xóa một hoặc nhiều hóa đơn chi tiết
function bill_detail_delete($id_bill_detail)
{
    $sql = "DELETE FROM db_bill_detail  WHERE id_bill_detail=?";
    if (is_array($id_bill_detail)) {
        foreach ($id_bill_detail as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_bill_detail);
    }
}

// Truy vấn tất cả các hóa đơn chi tiết
function bill_detail_select_all()
{
    $sql = "SELECT * FROM db_bill_detail";
    return pdo_query($sql);
}

//Truy vấn một hóa đơn chi tiết theo id_bill_detail
function bill_detail_select_by_id($id_bill_detail)
{
    $sql = "SELECT * FROM db_bill_detail WHERE id_bill_detail=?";
    return pdo_query_one($sql, $id_bill_detail);
}

//Kiểm tra sự tồn tại của một hóa đơn chi tiết
function bill_detail_exist($id_bill_detail)
{
    $sql = "SELECT count(*) FROM db_bill_detail WHERE $id_bill_detail=?";
    return pdo_query_value($sql, $id_bill_detail) > 0;
}

function bill_detail_select_by_id_bill($id_bill)
{
    $sql = "SELECT * FROM db_bill_detail WHERE id_bill=?";
    return pdo_query($sql, $id_bill);
}

//Lấy danh sách bill của từng khách hàng
// function bill_detail_select_by_user($id_user)
// {
//     $sql = "SELECT * FROM db_bill_detail WHERE id_user=?";
//     return pdo_query($sql, $id_user);
// }
// //lấy danh sách những bill đã thanh toán hay chưa
// function bill_select_by_status($status)
// {
//     $sql = "SELECT * FROM db_bill_detail WHERE status=?";
//     return pdo_query($sql, $status);
// }

// lấy id_product ở trong bill detail
function select_id_product_bill_detail($id_bill){
    $sql = "SELECT a.quantity, a.id_bill , b.* FROM db_bill_detail a INNER JOIN db_product b ON a.id_product = b.id_product WHERE a.id_bill = ?";
    return pdo_query($sql,$id_bill);
}