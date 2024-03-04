<?php
// hãng xe
$arrType = ['BMW', 'Mercedes', 'Lamborghini', 'Ferrari', 'McLaren'];


// tất cả các sản phẩm
$arrProduct = [
    'BMW_name' => ['Mô hình xe BMW M3 E30 1988 1:24 Bburago', 'Mô hình xe BMW M8 1:32 Chimei', 'Mô hình xe BMW M4 GT3 BMW Team RLL 2022 IMSA Daytona 24 Hrs 1:64 MiniGT', 'Mô hình xe BMW M6 GT3 1:24 Caipo', 'Mô hình xe BMW I8 1:18 Paragon'],
    'Mercedes_name' => [
        'Mô hình xe Mercedes Brabus G800 2020 1:18 Almost Real', 'Mô hình xe Mercedes Benz Maybach S650 2019 1:18 Almost Real', 'Mô hình xe Mercedes Maybach S680 W223 2021 1:18 Norev', 'Mô hình xe Mercedes Benz AMG GT Black Series 2021 1:18 Norev', 'Mô hình xe Mercedes Benz 190SL 1955 Red 1:18 Maisto', 'Mô hình xe Mercedes F1 2016 W007 Hybrid 1:18 Bburago'
    ],
    'Lamborghini_name' => [
        'Mô hình xe Lamborghini Urus 1:24 Maisto', 'Mô hình xe Lamborghini Aventador LP750-4 SV 1:36 UNI', 'Mô hình xe Lamborghini Huracan Performante Orange 1:24 Bburago', 'Mô hình xe Lamborghini Sian FKP 37 1:24 BBurago', 'Mô hình xe Lamborghini Aventador SVJ 1:32 Miniauto'
    ],
    'Ferrari_name' => [
        'Mô hình xe Ferarri SF90 Stradale 1:24 Bburago 18-26028', 'Mô hình xe Ferrari LaFerrari Aperta 1:24 Bburago', 'Mô hình xe Ferrari 488 GTB 1:24 Bburago', 'Mô hình xe Ferrari Monza SP1 1:24 Bburago 18-26027', 'Mô hình xe Ferrari 599 GTO 1:24 Bburago', 'Mô hình xe Ferrari FXXK EVO 1:18 Bburago Signature'
    ],
    'McLaren_name' => [
        'Mô hình xe McLaren P1 1:24 Rastar', 'Mô hình xe McLaren 720S 1:32 Jackiekim', 'Mô hình xe McLaren F1 1:64 LCD', 'Mô hình xe Mclaren Senna 1:64 MiniGT', 'Mô hình xe McLaren GT 1:24 Welly - 24105', 'Mô hình xe McLaren 765LT 1:64 LCD'
    ],
];


// ảnh sản phẩm
$imageProduct = [
    'BMW_img' => ['bmw-i8', 'bmw-m3', 'bmw-m4-gt3', 'bmw-m6-gt3', 'bmw-m8-132-chimei-light'],
    'Mercedes_img' => ['mercedes_190SL', 'mercedes_Maybach_S680', 'mercedes-benz-amg-gt-2021', 'mercedes-brabus-g800-2020', 'mercedes-f1', 'mercedes_Maybach_S650_2019'],
    'Lamborghini_img' => ['lamboghini_urus', 'lamborghini_Aventador_SVJ', 'lamborghini_Huracan Performante_Orange', 'lamborghini_Sian FKP_37', 'lamborghini-aventador-lp750'],
    'Ferrari_img' => ['ferrari_488_GTB', 'ferrari_599_gto', 'ferrari_FXXK_EVO', 'ferrari_LaFerrari_Aperta', 'ferrari_Monza_SP1', 'ferrari_SF90_Stradale'],
    'McLaren_img' => ['mcLaren_720S', 'mcLaren_765LT', 'mcLaren_F1', 'mcLaren_GT_124_Welly', 'mcLaren_P1', 'mcLaren_Senna'],
];

// ảnh chi tiết của sản phẩm
$imageBMWDetail = [
    'bmw-i8' => ['bmw-i8-1', 'bmw-i8-2', 'bmw-i8-3'],
    'bmw-m3' => ['bmw-m3-1', 'bmw-m3-2', 'bmw-m3-3'],
    'bmw-m4-gt3' => ['bmw-m4-gt3-1', 'bmw-m4-gt3-2', 'bmw-m4-gt3-3'],
    'bmw-m6-gt3' => ['bmw-m6-gt3-1', 'bmw-m6-gt3-2', 'bmw-m6-gt3-3'],
    'bmw-m8-132-chimei-light' => ['bmw-m8-132-chimei-light-1', 'bmw-m8-132-chimei-light-2', 'bmw-m8-132-chimei-light-3']
];
$imageMercedesDetail = [
    'mercedes_190SL' => ['mercedes_190SL-1', 'mercedes_190SL-2', 'mercedes_190SL-3'],
    'mercedes_Maybach_S680' => ['mercedes_Maybach_S680-1', 'mercedes_Maybach_S680-2', 'mercedes_Maybach_S680-3'],
    'mercedes-benz-amg-gt-2021' => ['mercedes-benz-amg-gt-2021-1', 'mercedes-benz-amg-gt-2021-2', 'mercedes-benz-amg-gt-2021-3'],
    'mercedes-brabus-g800-2020' => ['mercedes-brabus-g800-2020-1', 'mercedes-brabus-g800-2020-2', 'mercedes-brabus-g800-2020-3'],
    'mercedes-f1' => ['mercedes-f1-1', 'mercedes-f1-2', 'mercedes-f1-3'],
    'mercedes_Maybach_S650_2019' => ['mercedes_Maybach_S650_2019-1', 'mercedes_Maybach_S650_2019-2', 'mercedes_Maybach_S650_2019-3']
];
$imageLamborghiniDetail = [
    'lamboghini_urus' => ['lamboghini_urus-1', 'lamboghini_urus-2', 'lamboghini_urus-3'],
    'lamborghini_Aventador_SVJ' => ['lamborghini_Aventador_SVJ-1', 'lamborghini_Aventador_SVJ-2', 'lamborghini_Aventador_SVJ-3'],
    'lamborghini_Huracan Performante_Orange' => ['lamborghini_Huracan Performante_Orange-1', 'lamborghini_Huracan Performante_Orange-2', 'lamborghini_Huracan Performante_Orange-3'],
    'lamborghini_Sian FKP_37' => ['lamborghini_Sian FKP_37-1', 'lamborghini_Sian FKP_37-2', 'lamborghini_Sian FKP_37-3'],
    'lamborghini-aventador-lp750' => ['lamborghini-aventador-lp750-1', 'lamborghini-aventador-lp750-2', 'lamborghini-aventador-lp750-3']
];
$imageFerrariDetail = [
    'ferrari_488_GTB' => ['ferrari_488_GTB-1', 'ferrari_488_GTB-2', 'ferrari_488_GTB-3'],
    'ferrari_599_gto' => ['ferrari_599_gto-1', 'ferrari_599_gto-2', 'ferrari_599_gto-3'],
    'ferrari_FXXK_EVO' => ['ferrari_FXXK_EVO-2', 'ferrari_FXXK_EVO-1', 'ferrari_FXXK_EVO-3'],
    'ferrari_LaFerrari_Aperta' => ['ferrari_LaFerrari_Aperta-1', 'ferrari_LaFerrari_Aperta-2', 'ferrari_LaFerrari_Aperta-3'],
    'ferrari_Monza_SP1' => ['ferrari_Monza_SP1-1', 'ferrari_Monza_SP1-2', 'ferrari_Monza_SP1-3'],
    'ferrari_SF90_Stradale' => ['ferrari_SF90_Stradale-1', 'ferrari_SF90_Stradale-2', 'ferrari_SF90_Stradale-3']
];
$imageMcLarenDetail = [
    'mcLaren_720S' => ['mcLaren_720S-1', 'mcLaren_720S-2', 'mcLaren_720S-3'],
    'mcLaren_765LT' => ['mcLaren_765LT-1', 'mcLaren_765LT-2', 'mcLaren_765LT-3'],
    'mcLaren_F1' => ['mcLaren_F1-1', 'mcLaren_F1-2', 'mcLaren_F1-3'],
    'mcLaren_GT_124_Welly' => ['mcLaren_GT_124_Welly-1', 'mcLaren_GT_124_Welly-2', 'mcLaren_GT_124_Welly-3'],
    'mcLaren_P1' => ['mcLaren_P1-1', 'mcLaren_P1-2', 'mcLaren_P1-3'],
    'mcLaren_Senna' => ['mcLaren_Senna-1', 'mcLaren_Senna-2', 'mcLaren_Senna-3']
];


//mô tả
$description = 'Tỉ lệ: 1:18  
Chất liệu: Khung xe đúc bằng kim loại, lốp xe bằng cao su, chi tiết xe được mô phỏng tinh xảo và sắc nét, một số chi tiết được mạ chrome. Sản phẩm cao cấp bên trong được lót thảm.
Sơn: Lớp sơn tĩnh điện cho độ bền và bóng hoàn hảo.
Chức năng: Xe mở được 4 cửa, capo trước và cốp sau. Bánh xe đánh lái được.
Kích thước: dài 30cm, ngang 12cm, cao 8.5cm
Trọng Lượng: (đang cập nhật)
Hãng sản xuất: Norev
';


// tên khách hàng
$fullName = [
    'firstName' => [
        'Huy', 'Vỹ', 'Hưng', 'Thạch', 'Minh', 'Vy', 'Quý', 'Long', 'Hà'
    ],
    'lastName' => [
        'Trần', 'Nguyễn', 'Phạm', 'Đào', 'Lê'
    ],
    'middleName' => [
        'Triệu', 'Gia', 'Ngọc', 'Nguyên', 'Việt', ''
    ]
];
// email

$email = [
    'hideonbush', 'chimsedinang', 'fpoly', 'hochiminh'
];

// số điện thoại 
//ngẫu nhiên


// tài khoản
$IdUser = [
    'admin', 'client'
];

// mật khẩu
// $raw_password = 'abc123';

// //Sinh ra chuỗi dài 32 ngẫu nhiên, cũng cần lưu chuỗi này vào một cột trong DB
// $salt = random_bytes(32);

// //Sử dụng thêm một salt cố định
// $staticSalt = 'G4334#';


// $crypt = md5($staticSalt.$raw_password.$salt);

// image
$imageUser = [
    'user1.jpg', 'user2.jpg', 'user3.jpg', 'user4.jpg', 'user5.jpg', 'user6.jpg'
];

// role
//ngẫu nhiên


// comment
$comment = [
    'Sản phẩm đẹp lắm', 'Sản phẩm vô cùng chất lượng', 'Khi nào thì có hàng lại vậy ạ', 'Shop check inbox em với', 'Hàng ok lắm mn nhé, đầm mà chắc tay lắm ạ, sẽ ủng hộ lần tiếp theo', 'Giao hàng nhanh chất lượng sản phẩm ok, cánh cửa xe hơi lỏng lẻo', 'Giao hàng nhanh. Sản phẩm giống hình, chất lượng tốt. Nên mua', 'Xe giá này là quá ok rùi mn ạ vừa tiền mà để trang trí bày đẹp lắm ý nên mua nha', 'Xe bằng kim loại,hơi bé so với tưởng tượng.Tạm chấp nhận được.', 'Xe rất đẹp, nặng tay, âm thanh khá hay. Màu sơn đẹp, Nói chung là rất đáng đồng tiền.'
];

// status
//ngẫu nhiên

// arrayAddress

$arrDistricts = [
    'districts' => ['Trần Phú', 'Nguyễn Huệ', 'Nguyễn Tất Thành', 'Ngô Quyền', 'Lenin', 'Hùng Vương', 'Quang Trung']
];

$arrProvinces = [
    'Đắk Lắk' => ['Buôn Ma Thuột', 'Buôn Hồ', 'Ea Kar', 'Ea Tam', 'Đắk Mil', 'Buôn Đôn'],
    'Hồ Chí Minh' => ['Quận 1', 'Quận 2', 'Quận 7', 'Bình Thạnh', 'Thủ Đức', 'Quận 5'],
    'Cần Thơ' => ['Ninh Kiều', 'Cái Răng', 'Bình Thủy', 'Ô Môn', 'Phong Điền', 'Cờ Đỏ'],
    'Hà Nội' => ['Ba Đình', 'Hoàn Kiếm', 'Tây Hồ', 'Cầu Giấy', 'Đống Đa', 'Mai Dịch', 'Hoàng Mai'],
    'Đà Nẵng' => ['Hoàng Sa', 'Cẩm Lệ', 'Sơn Trà', 'Thanh Khê', 'Cẩm Lệ', 'Ngũ Hành Sơn']
];
