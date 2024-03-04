<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
</body>
</html>
<?php

include_once("../global.php");
include("../model/user.php");

extract($_REQUEST);

if (isset($register)) {
    $checkRep = user_select_by_id($id_user);
    if ($checkRep == 0) {
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        user_insert($id_user, $passHash, $first_name, $last_name, $phone, $email, isset($full_address)?$full_address:'', isset($image)?$image:'new-account.jpg', isset($role)?$role:'');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/dang-nhap.php\">";
        // echo "Tài khoản được tạo thành công";
        $MESSAGE = "Tài khoản được tạo thành công";
    } else {
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/dang-ky.php\">";
        // echo '
        // Tên tài khoản <b>' . $id_user . '</b> đã tồn tại, hãy thử tên khác
        // ';
        
        $MESSAGE = 'Tên tài khoản  ' . $id_user . ' đã tồn tại, hãy thử tên khác';
    }
}

if (strlen($MESSAGE)) {
    if ($MESSAGE == "Tài khoản được tạo thành công") {
?>
        <script>
            Swal.fire({
                icon: 'success',
                text: '<?= $MESSAGE ?>',
            })
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: '<?= $MESSAGE ?>',
            })
        </script>
<?php
    }
}