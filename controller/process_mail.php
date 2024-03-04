<?php

    /* Import library trong mục package từ thư mục root: Duan1 -> package ->  phpmail -> src
       File library chạy bằng giao thức tls nên mọi người đừng nhét nó vô content nghen
       để vào thư mục càng xâu thì timing bị delay càng lâu                                   */
    require '../package/phpmail/src/Exception.php';
    require '../package/phpmail/src/PHPMailer.php';
    require '../package/phpmail/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form trong thư mục lien-he.php.
        $name = $_POST["name"];
        $email = $_POST["email"];
        $content = $_POST["content"];
    
        // Khởi tạo đối tượng PHPMailer từ library
        // True để hiển thị lỗi nếu có
        $mail = new PHPMailer(true); 
    
    
        // Cấu hình Email và Giao thức kết nối
        try {
            // Cấu hình thông tin SMTP của elastic
            // Đồng Nghĩa Mail không bật xác thực 2 bước sẽ dễ cấu hình hơn vì không chứa OTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.elasticemail.com';
            $mail->SMTPAuth   = true;
            // Tên tài khoản Gmail
            // Trong trường hợp này em thạch sử dụng gmail Nhận là: thachseth123@gmail.com
            // Lưu ý hạn chế sử dụng mail có xác thực 2 bước
            $mail->Username   = 'thachseth123@gmail.com'; 
            // Tiếp theo là gán mật khẩu vào biến Password
            $mail->Password   = '51AD18792936CB3C752BCE187B226411F44F';
            // Giao thức kết nối mặc định của library là tls 
            // mọi người có thể thay thế bằng giao thức cũ hơn là ssl (ssl protocol)
            $mail->SMTPSecure = 'tls';
            // Để chèn vào phần đầu header TCP
            // Nếu là ssl sẽ là port  465.
            $mail->Port       = 2525;
    
            // Thiết lập thông tin người gửi và người nhận
            //setFrom mail dùng để set ở phía sever để gửi về gmail chính
            $mail->setFrom('thachseth123@gmail.com', 'Nguyễn Thạch'); 
            //addAddress mail dùng để tiếp nhận thông tin từ form mà mail client gửi về
            $mail->addAddress('kimchivskucai10@gmail.com', 'Nguyễn Ngọc Thạch'); 

            // Thiết lập tiêu đề và nội dung email của form từ lien-he.php
            // .= nối tiếp chuỗi trong biến $mail
            $mail->Subject = 'REQUEST GUY';
            $mail->Body    = "Tên khách hàng: $name\n";
            $mail->Body   .= "Email: $email\n";
            $mail->Body   .= "Nội dung:\n$content";
    
            // Gửi email
            $mail->send();
    
            echo "Email đã được gửi thành công!";
            

        } catch (Exception $e) {
            echo "Có lỗi xảy ra khi gửi email. Chi tiết lỗi: {$mail->ErrorInfo}";
        }
    }
    require 'autoback.php';
 ?>


