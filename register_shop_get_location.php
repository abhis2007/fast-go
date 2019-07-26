<?php
session_start();
$latitude=$_GET['latitud'];
$longitude=$_GET['longitud'];
$_SESSION['$register_shop_latitude']=$latitude;
$_SESSION['$register_shop_longitude']=$longitude;
header('location:http://localhost/fast go/mm.html');
?>