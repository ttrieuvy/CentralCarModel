<?php
    require "../../global.php";


    // chèn giao diện vô trang chính
    if(exist_param("blog-1")){
        $VIEW_NAME = "post/blog-01.php";
    }
    else if(exist_param("blog-2")){
        $VIEW_NAME = "post/blog-02.php";
     }
     else if(exist_param("blog-3")){
        $VIEW_NAME = "post/blog-03.php";
     }
     else if(exist_param("blog-4")){
        $VIEW_NAME = "post/blog-04.php";
     }
     else if(exist_param("blog-5")){
        $VIEW_NAME = "post/blog-05.php";
     }
     else if(exist_param("blog-6")){
        $VIEW_NAME = "post/blog-06.php";
     }
     else if(exist_param("blog-7")){
        $VIEW_NAME = "post/blog-07.php";
     }
     else if(exist_param("blog-8")){
        $VIEW_NAME = "post/blog-08.php";
     }

    require "../layout.php";
?>