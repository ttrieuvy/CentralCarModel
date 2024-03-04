<?php

include('variables.php');
include('select_data.php');
include('conect.php');


function fakedata()
{

    $sql = 'SELECT id_product FROM db_product ORDER BY RAND ( ) LIMIT 1';


    $fakeIdProduct = user($sql);
    $fakeQuantity = rand(1, 10);

    // tìm thông tin sản phẩm dựa vào id sản phẩm
   
    $fakeInforProduct = product_select_by_id($fakeIdProduct['id_product']);

    $arrFaker = [
        'fakeIdProduct' => $fakeIdProduct['id_product'],
        'fakeQuantity' => $fakeQuantity,
        'fakeCost' => $fakeInforProduct['price'],
        'fakeSale' => $fakeInforProduct['sale']
    ];
    return $arrFaker;
}



$sql = 'SELECT id_bill FROM db_bill ORDER by id_bill';

$field = array('id_bill');
$selectIdBill = users($sql, $field);

// lấy hết tất cả id_bill trong bảng bill
foreach ($selectIdBill['id_bill'] as $k => $v) {
    $random_quantity_bill = rand(1, 2);


    // tạo số lượng bill detail ngẫu nhiên
    for ($i = 1; $i <= $random_quantity_bill; $i++) {

        $infor = fakedata();

        extract($infor);
        $sql = 'INSERT INTO db_bill_detail (id_bill, id_product, quantity, cost, sale) VALUES (?,?,?,?,?)';
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sssss", $id_bill, $id_product, $quantity, $cost, $sale);

        $id_bill = $v;
        $id_product = $fakeIdProduct;
        $quantity = $fakeQuantity;
        $cost = $fakeCost;
        $sale = $fakeSale;
        $stmt->execute();
    }
}

include('disconect.php');
