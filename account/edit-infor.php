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

if (isset($_POST['btn-edit-infor'])) {
    user_update( $last_name, $first_name, $phone, $email, $full_address, isset($image) ? $image : 'new-account.jpg', isset($role) ? $role : 0, $_SESSION['user']['id_user']);
    $MESSAGE = "Thông tin được thay đổi thành công";
    echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/ho-so.php\">";
}
if (isset($_POST['edit-password'])) {
    $user = user_select_by_id($_SESSION['user']['id_user']);
    if (password_verify($old_password, $user['pass'])) {
        if (strlen($new_password) < 5) {
            $MESSAGE = "Mật khẩu không đủ mạnh";
            echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/ho-so.php?edit-password\">";
        } else {
            if ($new_password === $pass) {
                $endPass = password_hash($pass, PASSWORD_DEFAULT);
                user_change_password($_SESSION['user']['id_user'], $endPass);
                $MESSAGE = "Mật khẩu được thay đổi thành công";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/ho-so.php?edit-password\">";
            } else {
                $MESSAGE = "Nhập lại mật khẩu không chính xác";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/ho-so.php?edit-password\">";
            }
        }
    } else {
        $MESSAGE = "Mật khẩu cũ không chính xác";
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL/user/ho-so.php?edit-password\">";
    }
}

if (strlen($MESSAGE)) {
    if ($MESSAGE == "Thông tin được thay đổi thành công") {
?>
        <script>
            Swal.fire({
                icon: 'success',
                text: '<?= $MESSAGE ?>',
            })
        </script>
    <?php
    } elseif($MESSAGE == "Mật khẩu được thay đổi thành công") { ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: '<?= $MESSAGE ?>',
            })
        </script>
<?php
    }
    elseif($MESSAGE = "Mật khẩu không đủ mạnh"){ ?>
        <script>
            Swal.fire({
                icon: 'warning',
                text: '<?= $MESSAGE ?>',
            })
        </script>
<?php
    }
    else{ ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: '<?= $MESSAGE ?>',
            })
        </script>
<?php
    }
}
