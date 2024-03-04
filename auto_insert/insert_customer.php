<?php

include('conect.php');

function fakedata($i)
{
    include('variables.php');

    extract($fullName);



    //fake name
    $fakeFirstName = $firstName[array_rand($firstName)];
    $fakeMiddleName = $middleName[array_rand($middleName)];
    $fakeLastName = $lastName[array_rand($lastName)];
    $fakeName =  $fakeLastName . ' ' . $fakeMiddleName . ' ' . $fakeFirstName;


    //fake phone
    $fakePhone = '0' . rand(100000000, 999999999);


    //fake email
    $fakeEmail = $email[array_rand($email)] . rand(0, 31) . '@gmail.com';


    //fake address
    extract($arrDistricts);
    //tên đường
    $fakeDistrict = $districts[array_rand($districts)];
    // tên tỉnh
    $fakeProvince = array_rand($arrProvinces);
    // tên thành phố
    foreach ($arrProvinces as $key => $value) {
        if ($key == $fakeProvince) {
            $count = count($value);
        }
    }
    $fakeCity = $arrProvinces[$fakeProvince][rand(0, $count - 1)];
    $fakeAddress = rand(1, 100) . ' ' . $fakeDistrict . ', ' . $fakeCity . ', ' . $fakeProvince;

    $arrFaker = [
        'fakeName' => $fakeName,
        'fakePhone' => $fakePhone,
        'fakeAddress' => $fakeAddress,
        'fakeEmail' => $fakeEmail,
    ];
    return $arrFaker;
}



for ($i = 1; $i <= 20; $i++) {
    $infor = fakedata($i);

    extract($infor);

    $sql = "INSERT INTO db_customer (name, phone, full_address, email) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $name, $phone, $full_address, $email);

    
    $name = $fakeName;
    $phone = $fakePhone;
    $full_address = $fakeAddress;
    $email = $fakeEmail;

    $stmt->execute();
}

include_once('disconect.php');
