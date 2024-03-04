<?php

include('conect.php');
include('variables.php');


$count = count($arrType);

foreach ($arrType as $type) {
    $fakeType = $type;
    extract($imageProduct);
    switch ($fakeType) {
        case 'Mercedes':
            $fakeImage = $Mercedes_img[array_rand($Mercedes_img)];
            break;

        case 'Lamborghini':
            $fakeImage = $Lamborghini_img[array_rand($Lamborghini_img)];
            break;

        case 'Ferrari':
            $fakeImage = $Ferrari_img[array_rand($Ferrari_img)];
            break;

        case 'BMW':
            $fakeImage = $BMW_img[array_rand($BMW_img)];
            break;

        case 'McLaren':
            $fakeImage = $McLaren_img[array_rand($McLaren_img)];
            break;
            
    }
    $fakeDescription = $description;
    $sql = "INSERT INTO db_type (name, image, description) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $name, $image, $description);


    $name = $fakeType;
    $image = $fakeImage;
    $description = $fakeDescription;


    $stmt->execute();
    $msg = "Thêm thông tin thành công";
}


include_once('disconect.php');
