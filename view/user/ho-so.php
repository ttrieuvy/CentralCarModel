<?php
require '../../global.php';
include("../../model/user.php");
$user = user_select_by_id($_SESSION['user']['id_user']);
$VIEW_NAME = 'ho-so-form.php';

if (exist_param('edit-password')) {
    $VIEW_EDIT  = 'edit/edit-password.php';
}else{
    $VIEW_EDIT  = 'edit/edit-infor.php';

}
require "../layout.php";
