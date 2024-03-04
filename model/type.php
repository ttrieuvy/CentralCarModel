<?php
require_once 'pdo.php';

//Thêm loại mới
function type_insert($name, $image, $description)
{
    $sql = "INSERT INTO db_type (name, image, description) VALUES(?,?,?)";
    pdo_execute($sql, $name, $image, $description);
}

//Cập nhật tên loại
function type_update( $name, $image, $description, $id_type)
{
    $sql = "UPDATE db_type SET name=?, image =?, description = ? WHERE id_type=?";
    pdo_execute($sql,  $name, $image, $description, $id_type);
}
function type_updatee( $name, $description, $id_type)
{
    $sql = "UPDATE db_type SET name=?,  description = ? WHERE id_type=?";
    pdo_execute($sql,  $name, $description, $id_type);
}



// Xóa một hoặc nhiều loại
function loai_delete($id_type)
{
    $sql = "DELETE FROM db_type WHERE id_type=?";
    if (is_array($id_type)) {
        foreach ($id_type as $id) pdo_execute($sql, $id_type);
    } else pdo_execute($sql, $id_type);
}
// Truy vấn tất cả các loại
function type_select_all()
{
    $sql = "SELECT * FROM db_type";
    return pdo_query($sql);
}
//Truy vấn một loại theo mã
function loai_select_by_id($id_type)
{
    $sql = "SELECT * FROM db_type WHERE id_type=?";
    return pdo_query_one($sql, $id_type);
}
//Kiểm tra sự tồn tại của một loại
function loai_exist($id_type)
{
    $sql = "SELECT count(*) FROM db_type WHERE id_type=?";
    return pdo_query_value($sql, $id_type) > 0;
}
