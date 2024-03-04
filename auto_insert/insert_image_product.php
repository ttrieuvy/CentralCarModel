<?php

include('variables.php');
include('select_data.php');
include('conect.php');



// Tìm tất cả id sản phẩm
$sql = 'SELECT * FROM db_product order by id_product';
$field = array('id_product', 'id_type');
$selectProduct = users($sql, $field);


// chạy vô mảng id sản phẩm để lấy từng id sản phẩm
foreach ($selectProduct['id_product'] as $k => $v) {

    $arrType = []; //biến tạm để chứa tên loại và tên ảnh
    $imageDetail = [];
    // dựa vào id sản phẩm để tìm tên ảnh và loại sản phẩm
    $sql1 = 'SELECT avatar, ty.name FROM db_product as pr inner join db_type as ty on pr.id_type = ty.id_type WHERE id_product = ' . $v . '';
    $selectAvatar = user($sql1);

    // đẩy các tên loại và avt vô cùng 1 mảng
    $arrType[$k]['typeName'] = $selectAvatar['name'];
    $arrType[$k]['avatar'] = $selectAvatar['avatar'];


    foreach ($arrType as $key => $value) {
        // echo $value['typeName'] . ' ' . $value['avatar'];
        switch ($value['typeName']) {
            case 'BMW':
                // echo $value['avatar'];
                echo '<br>';
                switch ($value['avatar']) {
                    case 'bmw-i8':
                        foreach ($imageBMWDetail['bmw-i8'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }

                        break;
                    case 'bmw-m3':
                        foreach ($imageBMWDetail['bmw-m3'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'bmw-m4-gt3':
                        foreach ($imageBMWDetail['bmw-m4-gt3'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'bmw-m6-gt3':
                        foreach ($imageBMWDetail['bmw-m6-gt3'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'bmw-m8-132-chimei-light':
                        foreach ($imageBMWDetail['bmw-m8-132-chimei-light'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                }
                break;
            case 'Mercedes':
                switch ($value['avatar']) {
                    case 'mercedes_190SL':
                        foreach ($imageMercedesDetail['mercedes_190SL'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }

                        break;
                    case 'mercedes_Maybach_S680':
                        foreach ($imageMercedesDetail['mercedes_Maybach_S680'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mercedes-benz-amg-gt-2021':
                        foreach ($imageMercedesDetail['mercedes-benz-amg-gt-2021'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mercedes-brabus-g800-2020':
                        foreach ($imageMercedesDetail['mercedes-brabus-g800-2020'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mercedes-f1':
                        foreach ($imageMercedesDetail['mercedes-f1'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mercedes_Maybach_S650_2019':
                        foreach ($imageMercedesDetail['mercedes_Maybach_S650_2019'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                }
                break;
            case 'Lamborghini':
                switch ($value['avatar']) {
                    case 'lamboghini_urus':
                        foreach ($imageLamborghiniDetail['lamboghini_urus'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }

                        break;
                    case 'lamborghini_Aventador_SVJ':
                        foreach ($imageLamborghiniDetail['lamborghini_Aventador_SVJ'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'lamborghini_Huracan Performante_Orange':
                        foreach ($imageLamborghiniDetail['lamborghini_Huracan Performante_Orange'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'lamborghini_Sian FKP_37':
                        foreach ($imageLamborghiniDetail['lamborghini_Sian FKP_37'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'lamborghini-aventador-lp750':
                        foreach ($imageLamborghiniDetail['lamborghini-aventador-lp750'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                }
                break;
            case 'Ferrari':
                switch ($value['avatar']) {
                    case 'ferrari_488_GTB':
                        foreach ($imageFerrariDetail['ferrari_488_GTB'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }

                        break;
                    case 'ferrari_599_gto':
                        foreach ($imageFerrariDetail['ferrari_599_gto'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'ferrari_FXXK_EVO':
                        foreach ($imageFerrariDetail['ferrari_FXXK_EVO'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'ferrari_LaFerrari_Aperta':
                        foreach ($imageFerrariDetail['ferrari_LaFerrari_Aperta'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'ferrari_Monza_SP1':
                        foreach ($imageFerrariDetail['ferrari_Monza_SP1'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'ferrari_SF90_Stradale':
                        foreach ($imageFerrariDetail['ferrari_SF90_Stradale'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                }
                break;
            case 'McLaren':
                switch ($value['avatar']) {
                    case 'mcLaren_720S':
                        foreach ($imageMcLarenDetail['mcLaren_720S'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }

                        break;
                    case 'mcLaren_765LT':
                        foreach ($imageMcLarenDetail['mcLaren_765LT'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mcLaren_F1':
                        foreach ($imageMcLarenDetail['mcLaren_F1'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mcLaren_GT_124_Welly':
                        foreach ($imageMcLarenDetail['mcLaren_GT_124_Welly'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mcLaren_P1':
                        foreach ($imageMcLarenDetail['mcLaren_P1'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                    case 'mcLaren_Senna':
                        foreach ($imageMcLarenDetail['mcLaren_Senna'] as $i => $j) {
                            $imageDetail[$i]['id_product'] = $v;
                            $imageDetail[$i]['image'] = $j;
                        }
                        break;
                }
                break;
        }
    }

    foreach ($imageDetail as $chia => $gtri) {
        $sql = 'INSERT INTO db_image_product (id_product, image) VALUES (?,?)';
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $id_product, $image);


        $id_product = $gtri['id_product'];
        $image = $gtri['image'];

        $stmt->execute();
    }
}


include('disconect.php');
