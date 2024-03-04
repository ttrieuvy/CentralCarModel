<?php

include('conect.php');

function fakedata()
{
    include('variables.php');
   
    $sql = 'SELECT id_product FROM db_product ORDER BY RAND ( ) LIMIT 1';

    // fake id product
    $fakeIdProduct = user($sql);

    //fake id branch
    $fakeIdBranch = rand(1,2);

    //fake quantity
    $fakeQuantity = rand(0, 100);

    $arrFaker = [
        'fakeIdProduct' => $fakeIdProduct['id_product'],
        'fakeIdBranch' => $fakeIdBranch,
        'fakeQuantity' => $fakeQuantity
    ];
    return $arrFaker;
}


include('select_data.php');

for ($i = 1; $i <= 10; $i++) {
    $infor = fakedata();

    extract($infor);

    $sql = "INSERT INTO db_product_branch (id_product, id_branch, quantity) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $id_product, $id_branch, $quantity);

    $id_product = $fakeIdProduct;
    $id_branch = $fakeIdBranch;
    $quantity = $fakeQuantity;

    $stmt->execute();
}

include_once('disconect.php');
