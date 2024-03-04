<?php

include('conect.php');

function fakedata()
{
    include('variables.php');

    $sql = 'SELECT id_user FROM db_user ORDER BY RAND ( ) LIMIT 1';
    $sql1 = 'SELECT id_product FROM db_product ORDER BY RAND ( ) LIMIT 1';

    $fakeIdUser = user($sql);
    $fakeIdProduct = user($sql1);
    $fakeComment = $comment[array_rand($comment)];

    $arrFaker = [
        'fakeIdUser' => $fakeIdUser['id_user'],
        'fakeIdProduct' => $fakeIdProduct['id_product'],
        'fakeComment' => $fakeComment
    ];
    return $arrFaker;
}


include('select_data.php');

for ($i = 1; $i <= 1000; $i++) {
    $infor = fakedata();

    extract($infor);

    $sql = "INSERT INTO db_comment (id_user, id_product, content) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $id_user, $id_product, $comment );

    $id_user = $fakeIdUser;
    $id_product = $fakeIdProduct;
    $comment = $fakeComment;

    $stmt->execute();
}

include_once('disconect.php');
