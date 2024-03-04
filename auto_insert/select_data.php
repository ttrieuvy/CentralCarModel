<?php

// include('conect.php');

// $result = $conn -> query($sql);
// if($result->num_rows > 0){
//     $fakeIdUser = $result ->fetch_assoc();
// }
// $conn->close();


function user($sql)
{
    include('conect.php');

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $fakeContent = $result->fetch_assoc();
    }
    $conn->close();
    return $fakeContent;
}

function users($sql, $para)
{
    include('conect.php');

    $result = $conn->query($sql);
    $fakeContent = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            foreach($para as $v){
                $fakeContent[$v][] = $row[$v];
            }
        }
    }
    $conn->close();
    return $fakeContent;
}

function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=central_car_model;charset=utf8";
    $username = 'root';
    $password = '';
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

// lấy thông tin sản phẩm theo id_product
function product_select_by_id($id_product)
{
    $sql = "SELECT * FROM db_product WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}

// lấy thông tin user theo id_user
function user_select_by_id($id_user)
{
    $sql = "SELECT * FROM db_user WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}

// lấy thông tin customer theo id_customer
function customer_select_by_id($id_customer)

{
    $sql = "SELECT * FROM db_customer WHERE id_customer = ?";
    return pdo_query_one($sql, $id_customer);
}