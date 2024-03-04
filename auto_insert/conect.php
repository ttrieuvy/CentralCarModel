<?php

$dbserver = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'central_car_model';

$conn = new mysqli($dbserver, $user, $pass, $dbname);
mysqli_set_charset($conn, "utf8");

if( $conn -> connect_error){
    die ('conect fail: '. $conn -> connect_error);
}