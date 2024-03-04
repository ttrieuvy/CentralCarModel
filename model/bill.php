<?php
require_once 'pdo.php';

$arr_status = [
    'Chờ xác nhận',
    'Đang vận chuyển',
    'Vận chuyển thành công',
    'Hủy'
];

//Thêm hóa đơn mới
function bill_insert($id_user, $id_customer, $status, $address)
{
    $sql = "INSERT INTO db_bill (id_user, id_customer, status, address) VALUES (?,?,?,?)";
    pdo_execute($sql, $id_user, $id_customer, $status, $address);
}

//Cập nhật thông tin 1 hóa đơn
function bill_update($status, $id_bill)
{
    $sql = "UPDATE db_bill SET status=? WHERE id_bill=?";
    pdo_execute($sql, $status, $id_bill);
}

// Xóa một hoặc nhiều bill
function bill_delete($id_bill)
{
    $sql = "DELETE FROM db_bill  WHERE id_bill=?";
    if (is_array($id_bill)) {
        foreach ($id_bill as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_bill);
    }
}

// Truy vấn tất cả các bill
function bill_select_all()
{
    $sql = "SELECT * FROM db_bill";
    return pdo_query($sql);
}

//Truy vấn một bill theo id_bill
function bill_select_by_id($id_bill)
{
    $sql = "SELECT * FROM db_bill WHERE id_bill=?";
    return pdo_query_one($sql, $id_bill);
}

//Kiểm tra sự tồn tại của một bill
function bill_exist($id_bill)
{
    $sql = "SELECT count(*) FROM db_bill WHERE $id_bill=?";
    return pdo_query_value($sql, $id_bill) > 0;
}

//Lấy danh sách bill của từng khách hàng
function bill_select_by_user($id_user)
{
    $sql = "SELECT * FROM db_bill WHERE id_user=? order by status asc";
    return pdo_query($sql, $id_user);
}
//lấy danh sách những bill đã thanh toán hay chưa
function bill_select_by_status($status, $id_user)
{
    $sql = "SELECT * FROM db_bill WHERE status=? and id_user = ?";
    return pdo_query($sql, $status, $id_user);
}

// lấy id_bill lớn nhất theo id_user
function select_max_id_bill_by_id_user($id_user)
{
    $sql = "SELECT max(id_bill) as max_bill FROM `db_bill` WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}

// lấy id_bill lớn nhất theo id_customer
function select_max_id_bill_by_id_customer($id_customer)
{
    $sql = "SELECT max(id_bill) as max_bill FROM `db_bill` WHERE id_customer = ?";
    return pdo_query_one($sql, $id_customer);
}
function select_bill_keyword($id_bill)
{
    $sql = "SELECT * FROM db_bill WHERE `id_bill` LIKE ?";
    return pdo_query_one($sql, $id_bill);
}

function select_date_bill($id_bill)
{
    $sql = "SELECT `created_at`, `status` FROM db_bill WHERE id_bill = ?";
    return pdo_query_one($sql, $id_bill);
}

//chi tiết đơn hàng trong lịch sử

function select_history_by_id_bill($id_bill)
{
    $sql = "SELECT d.*, b.*, p.* , u.*
    FROM db_product p 
    INNER JOIN
    db_bill_detail d 
    on p.id_product = d.id_product
    INNER JOIN db_bill b 
    on d.id_bill = b.id_bill 
    INNER JOIN db_user u 
    on b.id_user = u.id_user
    WHERE b.id_bill = ?";
    return pdo_query($sql, $id_bill);
}

// đếm số đơn hàng đang chờ xác nhận
function count_status($id_status){
    $sql = "SELECT COUNT(*) FROM db_bill WHERE status = ?";
    return pdo_query_one($sql, $id_status);
}

function select_all_status($id_status){
    $sql = "SELECT * FROM db_bill WHERE status = ?";
    return pdo_query($sql, $id_status);
}