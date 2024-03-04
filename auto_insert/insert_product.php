<?php

include('conect.php');

function fakedata()
{
    include('variables.php');

    extract($arrProduct);
    extract($imageProduct);


    $fakeType = $arrType[array_rand($arrType)];
    switch ($fakeType) {
        case 'Mercedes':

            $fakeName = $Mercedes_name[array_rand($Mercedes_name)];
            $fakeAvatar = $Mercedes_img[array_rand($Mercedes_img)];
            foreach ($arrType as $key => $value) {
                if ($value == 'Mercedes') {
                    $fakeIDType = $key + 1;
                    break;
                } else {
                    continue;
                }
            }
            break;

        case 'Lamborghini':
            $fakeName = $Lamborghini_name[array_rand($Lamborghini_name)];
            $fakeAvatar = $Lamborghini_img[array_rand($Lamborghini_img)];
            foreach ($arrType as $key => $value) {
                if ($value == 'Lamborghini') {
                    $fakeIDType = $key + 1;
                    break;
                } else {
                    continue;
                }
            }
            break;

        case 'Ferrari':
            $fakeName = $Ferrari_name[array_rand($Ferrari_name)];
            $fakeAvatar = $Ferrari_img[array_rand($Ferrari_img)];
            foreach ($arrType as $key => $value) {
                if ($value == 'Ferrari') {
                    $fakeIDType = $key + 1;
                    break;
                } else {
                    continue;
                }
            }
            break;

        case 'BMW':
            $fakeName = $BMW_name[array_rand($BMW_name)];
            $fakeAvatar = $BMW_img[array_rand($BMW_img)];
            foreach ($arrType as $key => $value) {
                if ($value == 'BMW') {
                    $fakeIDType = $key + 1;
                    break;
                } else {
                    continue;
                }
            }
            break;

        case 'McLaren':
            $fakeName = $McLaren_name[array_rand($McLaren_name)];
            $fakeAvatar = $McLaren_img[array_rand($McLaren_img)];
            foreach ($arrType as $key => $value) {
                if ($value == 'McLaren') {
                    $fakeIDType = $key + 1;
                    break;
                } else {
                    continue;
                }
            }
            break;
    }

    // fake giá
    $fakePrice = rand(100, 2999) * 1000;

    // fake giá
    $fakeHot = rand(0, 1);

    // fake mô tả
    $fakeDescription = $description;

    // fake giảm giá
    $fakeSale = rand(0, 20);


    $arrFaker = [
        'fakeIDType' => $fakeIDType,
        'fakeType' => $fakeType,
        'fakePrice' => $fakePrice,
        'fakeName' => $fakeName,
        'fakeAvatar' => $fakeAvatar,
        'fakeHot' => $fakeHot,
        'fakeDescription' => $fakeDescription,
        'fakeSale' => $fakeSale
    ];
    return $arrFaker;
}



for ($i = 1; $i <= 50; $i++) {
    $infor = fakedata();

    extract($infor);

    $sql = "INSERT INTO db_product (id_type, price, name, avatar, hot, description, sale) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssss", $id_type, $price, $name, $avatar, $hot, $description, $sale);

    $id_type = $fakeIDType;
    $price = $fakePrice;
    $name = $fakeName;
    $avatar = $fakeAvatar;
    $hot = $fakeHot;

    $description = $fakeDescription;
    $sale = $fakeSale;

    $stmt->execute();
}

include_once('disconect.php');
