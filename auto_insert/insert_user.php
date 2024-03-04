<?php

include('conect.php');

function fakedata($i)
{
    include('variables.php');

    extract($fullName);


    //fake username
    $fakeIdUser = $IdUser[array_rand($IdUser)] . $i;

    //fake name
    $fakeFirstName = $firstName[array_rand($firstName)];
    $fakeMiddleName = $middleName[array_rand($middleName)];
    $fakeLastName = $lastName[array_rand($lastName)];


    //fake pass
    $raw_password = 'abc123';


    $fakePass = password_hash($raw_password, PASSWORD_DEFAULT);

    //fake phone
    $fakePhone = '0' . rand(100000000, 999999999);

    //fake role
    $fakeRole = rand(0, 1);

    //fake email
    $fakeEmail = $email[array_rand($email)] . rand(0, 31) . '@gmail.com';

    //fake image
    $fakeImage = $imageUser[array_rand($imageUser)];

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
        'fakeIdUser' => $fakeIdUser,
        'fakePass' => $fakePass,
        'fakeFirstName' => $fakeMiddleName . ' ' . $fakeFirstName,
        'fakeLastName' => $fakeLastName,
        'fakePhone' => $fakePhone,
        'fakeEmail' => $fakeEmail,
        'fakeAddress' => $fakeAddress,
        'fakeImage' => $fakeImage,
        'fakeRole' => $fakeRole,

    ];
    return $arrFaker;
}



for ($i = 1; $i <= 10; $i++) {
    $infor = fakedata($i);

    extract($infor);

    $sql = "INSERT INTO db_user (id_user, pass, first_name, last_name, phone, email, full_address, image, role) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssss", $id_user, $pass, $first_name, $last_name, $phone, $email, $full_address, $image, $role);

    $id_user = $fakeIdUser;
    $pass = $fakePass;
    $first_name = $fakeFirstName;
    $last_name = $fakeLastName;
    $phone = $fakePhone;
    $email = $fakeEmail;
    $full_address = $fakeAddress;
    $image = $fakeImage;
    $role = $fakeRole;

    $stmt->execute();
}

include_once('disconect.php');
