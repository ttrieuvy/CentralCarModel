<?php
require_once 'pdo.php';

//Thêm người dùng mới
function user_insert($id_user, $pass, $first_name, $last_name, $phone, $email, $full_address, $image, $role)
{
    $sql = "INSERT INTO db_user (id_user, pass, first_name,last_name, phone, email,full_address,image, role) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_user, $pass, $first_name, $last_name, $phone, $email, $full_address, $image, $role);
}

//Cập nhật thông tin 1 khách hàng
// function user_update($id_user, $last_name, $first_name, $phone, $email, $full_address, $province, $district, $wards, $image, $role)
// {
//     $sql = "UPDATE db_user SET last_name=?, first_name=?, phone=?, email=?, full_address=?, province=?, district=?, wards=?, image=?, role=? WHERE id_user=?";
//     pdo_execute($sql, $last_name, $first_name, $phone, $email, $full_address, $province, $district, $wards, $image, $role, $id_user);
// }

function user_update($last_name, $first_name, $phone, $email, $full_address, $image, $role, $id_user)
{
    $sql = "UPDATE db_user SET last_name=?, first_name=?, phone=?, email=?, full_address=?, image=?, role=? WHERE id_user=?";
    pdo_execute($sql, $last_name, $first_name, $phone, $email, $full_address,  $image, $role, $id_user);
}

// cập nhật không điền hình ảnh
function user_updatee($last_name, $first_name, $phone, $email, $full_address, $role, $id_user)
{
    $sql = "UPDATE db_user SET last_name=?, first_name=?, phone=?, email=?, full_address=?, role=? WHERE id_user=?";
    pdo_execute($sql, $last_name, $first_name, $phone, $email, $full_address, $role, $id_user);
}
// Xóa một hoặc nhiều khách hàng
function user_delete($id_user)
{
    $sql = "DELETE FROM db_user  WHERE id_user=?";
    if (is_array($id_user)) {
        foreach ($id_user as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_user);
    }
}

// Truy vấn tất cả các khách hàng
function user_select_all()
{
    $sql = "SELECT * FROM db_user ORDER BY created_at asc ";
    return pdo_query($sql);
}

//Truy vấn một kháh hàng theo id_user
function user_select_by_id($id_user)
{
    $sql = "SELECT * FROM db_user WHERE id_user=?";
    return pdo_query_one($sql, $id_user);
}

//Kiểm tra sự tồn tại của một khách hang3
function user_exist($id_user)
{
    $sql = "SELECT count(*) FROM db_user WHERE $id_user=?";
    return pdo_query_value($sql, $id_user) > 0;
}

//Lấy danh sách kh theo vai trò
function user_select_by_role($role)
{
    $sql = "SELECT * FROM db_user WHERE role=?";
    return pdo_query($sql, $role);
}
//Cập nhật mật khẩu của 1 khách hàng
function user_change_password($id_user, $new_password)
{
    $sql = "UPDATE db_user SET pass=? WHERE id_user=?";
    pdo_execute($sql, $new_password, $id_user);
}
//Cập nhật mật khẩu của 1 khách hàng
function user_change_image($id_user, $new_image)
{
    $sql = "UPDATE db_user SET image=? WHERE id_user=?";
    pdo_execute($sql, $new_image, $id_user);
}
// Tra cứu số điện thoại theo từ khóa
function select_user_keyword($phone)
{
    $sql = "SELECT * FROM db_user WHERE `phone` LIKE ?";
    $phone_user = $phone;
    return pdo_query_one($sql, $phone_user);
}

function forgot($id_user, $phone, $email)
{
    $sql = "SELECT * FROM db_user WHERE id_user=? and phone = ? and email = ?";
    return pdo_query_one($sql, $id_user, $phone, $email);
    $phone_user = "%{$phone}%";
    return pdo_query_one($sql,$phone_user);
}

function select_user_rate($id_user){
    $sql = "SELECT b.* FROM  db_user a JOIN  db_rate b ON a.id_user = b.id_user WHERE a.id_user = ?";
    return pdo_query_one($sql, $id_user);
}

