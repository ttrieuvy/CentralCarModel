<?php
require_once 'pdo.php';
//hiện thị tất cả sản phẩm theo loại
function product_select_by_type($id_type)
{
    $sql = "SELECT * FROM db_product WHERE id_type = ?";
    return pdo_query($sql, $id_type);
}


// hiển thị tất cả các sản phẩm đặc biệt
function select_product_hot()
{
    $sql = "SELECT * FROM db_product WHERE hot = 1";
    return pdo_query($sql);
}
// hiển thi tất cả các sản phẩm sale
function select_product_sale()
{
    $sql = "SELECT * FROM db_product WHERE sale >0";
    return pdo_query($sql);
}
// kiểm tra sự tồn tại của hàng hóa
// function product_select_keyword($keywords)
// {
//     $sql = "SELECT count(*) FROM db_product WHERE name = ?";
//     return pdo_query_value($sql, $keywords) > 0;
// }

// hiển thị tất cả sản phẩm
function product_select_all()
{
    $sql = "SELECT * FROM db_product";
    return pdo_query($sql);
}



// Tìm kiếm sản phẩm theo từ khóa
function product_select_keyword($search){
    $sql = "SELECT * FROM db_product WHERE `name` LIKE ?";
    $searchs = "%{$search}%";
    return pdo_query($sql,$searchs);
}

// truy vấn hàng hóa theo mã
function product_select_by_id($id_product)
{
    $sql = "SELECT * FROM db_product WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}

// tăng số lượt xem thêm 1
// function db_product_tang_so_luot_xem($id_product)
// {
//     $viewer = "SELECT so_luot_xem FROM db_product WHERE id_product = ?";
//     $update = pdo_query_one($viewer, $id_product) + 1;
//     $sql = "UPDATE db_product SET so_luot_xem = ? WHERE id_product = ?";
//     pdo_execute($sql, $update, $id_product);
// }


//select top 10
// function db_product_select_top10()
// {
//     $sql = "SELECT * FROM db_product limit 10";
//     return pdo_query($sql);
// }


// thêm hàng hóa mới
function product_insert($id_type, $price, $name, $avatar, $hot, $description, $sale)
{
    $sql = "INSERT INTO db_product (id_type, price, name, avatar, hot, description, sale) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_type, $price, $name, $avatar, $hot, $description, $sale);
}
// function product_insert($id_type, $price, $name, $hot, $quantity, $description, $sale)
// {
//     $sql = "INSERT INTO db_product (id_type, price, name, hot, quantity, description, sale) VALUES (?,?,?,?,?,?,?)";
//     pdo_execute($sql, $id_type, $price, $name, $hot, $quantity, $description, $sale);
// }

// cập nhật hàng hóa
function product_update( $id_type, $price, $name,  $avatar, $hot, $description, $sale, $id_product)
{
    $sql = "UPDATE db_product SET  id_type=?, price=?, name=?,  avatar=?, hot=?, description=?, sale=? WHERE id_product= ?";
    pdo_execute($sql, $id_type, $price, $name,  $avatar, $hot, $description, $sale, $id_product);
}

// cập nhật không có hình ảnh
function product_updatee( $id_type, $price, $name, $hot, $description, $sale, $id_product)
{
    $sql = "UPDATE db_product SET  id_type=?, price=?, name=?, hot=?, description=?, sale=? WHERE id_product= ?";
    pdo_execute($sql, $id_type, $price, $name, $hot, $description, $sale, $id_product);
}

// xóa hàng hóa

function product_delete($id_product)
{

    $sql = "DELETE FROM db_product WHERE id_product = ?";
    if (is_array($id_product)) {
        foreach ($id_product as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_product);
    }
}
