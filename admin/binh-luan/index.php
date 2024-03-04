<?php
require "../../global.php";
require "../../model/comment.php";
check_login();
extract($_REQUEST);

$comments = comment_select_all();
$VIEW_NAME = "binh-luan/binh-luan-list.php";
if(exist_param('btn-delete')){
    try {
        comment_delete($id_comment);
        $MESSAGE = "Xóa thành công!";
        header("Location: index.php");
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "binh-luan/binh-luan-list.php";
}
require "../layout.php";
?>