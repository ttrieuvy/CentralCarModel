<?php

include('conect.php');

function fakedata()
{
    include('variables.php');


    $sql = 'SELECT id_user FROM db_user ORDER BY RAND ( ) LIMIT 1';
    $sql1 = 'SELECT id_customer FROM db_customer ORDER BY RAND ( ) LIMIT 1';


    // fake client
    $random = rand(0, 1);
    if ($random) {
        $fakeUser = user($sql);
        $fakeIdUser = $fakeUser['id_user'];
        $fakeIdCustomer = null;
    } else {
        $fakeCustomer = user($sql1);
        $fakeIdCustomer = $fakeCustomer['id_customer'];
        $fakeIdUser = null;
    }


    // fake địa chỉ
    // nếu là của user thì lấy địa chỉ trong bản user
    if ($fakeIdUser != null) {
        $fakeAddress = user_select_by_id($fakeIdUser);
    }
    // nếu là của customer thì lấy địa chỉ dựa vào id_customer
    if ($fakeIdCustomer != null) {
        $fakeAddress = customer_select_by_id($fakeIdCustomer);
    }




    // fake trạng thái đơn hàng
    $fakeStatus = rand(0, 3);


    extract($arrDistricts);


    $arrFaker = [
        'fakeIdUser' => $fakeIdUser,
        'fakeIdCustomer' => $fakeIdCustomer,
        'fakeAddress' => $fakeAddress['full_address'],
        'fakeStatus' => $fakeStatus,
    ];
    return $arrFaker;
}


include('select_data.php');

for ($i = 1; $i <= 20; $i++) {
    $infor = fakedata();

    extract($infor);

    $sql = "INSERT INTO db_bill (id_user, id_customer, status, address) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $id_user, $id_customer, $status, $address);

    $id_user = $fakeIdUser;
    $id_customer = $fakeIdCustomer;
    $address = $fakeAddress;
    $status = $fakeStatus;


    $stmt->execute();
}

include_once('disconect.php');
