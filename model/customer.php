<?php
require_once 'pdo.php';

// thêm người dùng không đăng ký mới
function customer_insert($name, $phone, $full_address, $email)
{
    $sql = "INSERT INTO db_customer (name, phone, full_address, email) VALUES (?,?,?,?)";
    pdo_execute($sql, $name, $phone, $full_address, $email);
}



function customer_select_by_id($id_customer)
{
    $sql = "SELECT * FROM db_customer WHERE id_customer=?";
    return pdo_query_one($sql, $id_customer);
}



function customer_select_all()
{
    $sql = "SELECT * FROM db_customer";
    return pdo_query($sql);
}


function customer_update($name, $phone, $full_address, $email, $id_customer)
{
    $sql = "UPDATE db_customer SET name=?, phone=?, full_address=?, email=? WHERE id_customer=?";
    pdo_execute($sql, $name, $phone, $full_address, $email, $id_customer);
}


function customer_delete($id_customer)
{
    $sql = "DELETE FROM db_customer  WHERE id_customer=?";
    if (is_array($id_customer)) {
        foreach ($id_customer as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_customer);
    }
}

// lấy id_bill lớn nhất theo id_user
function select_max_id_customer_by_address($address)
{
    $sql = "SELECT max(id_customer) as id_customer FROM `db_customer` WHERE full_address LIKE ?";

    $endAdress = "%{$address}%";
    return pdo_query_one($sql, $endAdress);
}

// Tra cứu số điện thoại theo từ khóa
function select_customer_keyword($phone){
    $sql = "SELECT * FROM db_customer WHERE `phone` LIKE ?";
    $phone_customer = "%{$phone}%";
    return pdo_query_one($sql,$phone_customer);
}