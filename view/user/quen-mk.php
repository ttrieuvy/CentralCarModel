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
    require '../../global.php';
    require '../../model/user.php';
    extract($_REQUEST);

    if(isset($check)){
        if($check == 0){
            $MESSAGE  = 'Tài khoản không có';
        }else{
        $check2 = 1;
    }

    }
    if (isset($_POST['btn-check']) && $_POST['btn-check']) {
        $check = user_select_by_id($id_user);
        if (empty($check)) {
    
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL\user\quen-mk.php?check=0\">";
        } else {
            if (isset($phone) && isset($email)) {
                $login = forgot($id_user, $phone, $email);
                if (!empty($login)) {
                    $passHash = password_hash(123456, PASSWORD_DEFAULT);
                    user_change_password($id_user, $passHash);
                    // echo 'Mật khẩu mặc định của bạn là 123456';
                    $MESSAGE = 'Mật khẩu mặc định của bạn là 123456';
                    if (strlen($MESSAGE)) {
                        if ($MESSAGE == "Mật khẩu mặc định của bạn là 123456") {
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
                    
                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\dang-nhap.php\">";
                } else {
                    $MESSAGE = 'Thông tin tài khoản không chính xác';
                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=$SITE_URL\user\quen-mk.php?check=1&id_user=$id_user\">";
                }
            } else {
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=$SITE_URL\user\quen-mk.php?check=1&id_user=$id_user\">";
            }
        }
    }
    require 'quen-mk-form.php';
    
?>