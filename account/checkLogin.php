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

if (isset($_POST['btn-login']) && $_POST['btn-login']) {
    $user = user_select_by_id($id_user);
    // tìm sự tồn tại của user trong data
    if ($user) {
        // kiểm tra mật khẩu
        $in = $pass;
        $check = $user['pass'];
        if (password_verify($in, $check)) { //check mật khẩu có mã hóa
            // kiểm tra xem người dùng có muốn lưu tài khoản không
            if (isset($_POST['remember'])) {
                add_cookie('id_user', $user['id_user'], 30);
                add_cookie('username', $user['name'], 30);
            } else {
                delete_cookie('id_user', '', -1);
                delete_cookie('username', '', -1);
            }
            $_SESSION['user'] = $user;
            $_SESSION['totalCart'] = 0;
            $_SESSION['cart'] = [];
            $MESSAGE = 'Đăng nhập thành công';

            echo "<meta http-equiv=\"refresh\" content=\"2;URL=$ROOT_URL\">";
        } else if ($in == $check) { //check mật khẩu không mã hóa
            // kiểm tra xem người dùng có muốn lưu tài khoản không
            if (isset($_POST['remember'])) {
                add_cookie('id_user', $user['id_user'], 30);
                add_cookie('username', $user['name'], 30);
            } else {
                delete_cookie('id_user', '', -1);
                delete_cookie('username', '', -1);
            }
            $_SESSION['user'] = $user;
            $_SESSION['totalCart'] = 0;
            $_SESSION['cart'] = [];
            $MESSAGE = 'Đăng nhập thành công';
            // echo $_SESSION['user']['role'];
            echo "<meta http-equiv=\"refresh\" content=\"2;URL=$ROOT_URL\">";
        } else {
            $MESSAGE = 'Mật khẩu không đúng';
            echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\dang-nhap.php\">";
        }
    } else {
        $MESSAGE = 'Tài khoản hiện chưa được đăng ký';
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\dang-nhap.php\">";
    }
} else if (isset($_POST['btn-check']) && $_POST['btn-check']) {
    $check = user_select_by_id($id_user);
    if (empty($check)) {

        echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL\user\quen-mk.php?check=0\">";
    } else {
        if (isset($phone) && isset($email)) {
            $login = forgot($id_user, $phone, $email);
            if (!empty($login)) {
                $passHash = password_hash(123456, PASSWORD_DEFAULT);
                user_change_password($id_user, $passHash);
                echo 'Mật khẩu mặc định của bạn là 123456';
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\dang-nhap.php\">";
            } else {
                $MESSAGE = 'Thông tin tài khoản không chính xác';
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\quen-mk.php?check=1&id_user=$id_user\">";
            }
        } else {
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL\user\quen-mk.php?check=1&id_user=$id_user\">";
        }
    }
} else {
    if (isset($_GET['btn-logoff'])) {
        session_unset();
        delete_cookie('id_user', '', -1);
        delete_cookie('username', '', -1);
        // header("location: $ROOT_URL/view/trang-chinh");
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=$ROOT_URL/view/trang-chinh\">";
        $MESSAGE = "Bạn đã đăng xuất";
    }
}

if (strlen($MESSAGE)) {
    if ($MESSAGE == "Đăng nhập thành công") {
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
