<?php

include('conect.php');

function fakedata()
{
    include('variables.php');

    $sql = 'SELECT id_user FROM db_user ORDER BY RAND ( ) LIMIT 1';
    $sql1 = 'SELECT id_product FROM db_product ORDER BY RAND ( ) LIMIT 1';

    $fakeIdUser = user($sql);
    $fakeIdProduct = user($sql1);
    $fakeVote = rand(1, 5);

    $arrFaker = [
        'fakeIdUser' => $fakeIdUser['id_user'],
        'fakeIdProduct' => $fakeIdProduct['id_product'],
        'fakeVote' => $fakeVote
    ];
    return $arrFaker;
}


include('select_data.php');

for ($i = 1; $i <= 10; $i++) {
    $infor = fakedata();

    extract($infor);

    $sql = "INSERT INTO db_rate (id_user, id_product, vote) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $id_user, $id_product, $vote);

    $id_user = $fakeIdUser;
    $id_product = $fakeIdProduct;
    $vote = $fakeVote;

    $stmt->execute();
}

include_once('disconect.php');
