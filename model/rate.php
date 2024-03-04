<?php
require_once 'pdo.php';

//Thêm đánh giá mới
function rate_insert($id_user, $id_product, $vote)
{
    $sql = "INSERT INTO db_rate (id_user, id_product, vote) VALUES (?,?,?)";
    pdo_execute($sql, $id_user, $id_product, $vote);
}

//Cập nhật thông tin 1 đánh giá
function rate_update($id_rate, $id_user, $id_product, $vote)
{
    $sql = "UPDATE db_rate SET id_user=?, id_product=?, vote=? WHERE id_bill_detail=?";
    pdo_execute($sql, $id_user, $id_product, $vote, $id_rate);
}

// Xóa một hoặc nhiều đánh giá
function rate_delete($id_rate)
{
    $sql = "DELETE FROM db_rate  WHERE id_rate=?";
    if (is_array($id_rate)) {
        foreach ($id_rate as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_rate);
    }
}

// Truy vấn tất cả các đánh giá
function rate_select_all()
{
    $sql = "SELECT * FROM db_rate";
    return pdo_query($sql);
}

//Truy vấn một đánh giá theo id_rate
function rate_select_by_id($id_rate)
{
    $sql = "SELECT * FROM db_rate WHERE id_rate=?";
    return pdo_query_one($sql, $id_rate);
}

//Kiểm tra sự tồn tại của một đánh giá
function rate_exist($id_rate)
{
    $sql = "SELECT count(*) FROM db_rate WHERE $id_rate=?";
    return pdo_query_value($sql, $id_rate) > 0;
}

//lấy danh sách đánh giá theo lượt vote
function rate_select_by_vote($vote){
    $sql = "SELECT * FROM db_rate where vote=?";
    return pdo_query($sql, $vote);
}


function rate_select_by_id_product($id_product){
    $sql = "SELECT * FROM `db_rate` WHERE id_product=?";
    return pdo_query($sql, $id_product);
}
//Lấy danh sách bill của từng khách hàng
// function bill_detail_select_by_user($id_user)
// {
//     $sql = "SELECT * FROM db_rate WHERE id_user=?";
//     return pdo_query($sql, $id_user);
// }
// //lấy danh sách những bill đã thanh toán hay chưa
// function bill_select_by_status($status)
// {
//     $sql = "SELECT * FROM db_rate WHERE status=?";
//     return pdo_query($sql, $status);
// }


//lấy trung bình và số lượng vote của sản phẩm theo id
function select_rate_product_by_id_product($id_product){
    $sql = "SELECT avg(vote) avg, COUNT(vote) count FROM `db_rate` WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}