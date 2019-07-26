<?php
session_start();
$latitude=$_GET['latitud'];
$longitude=$_GET['longitud'];
$_SESSION['$latitude']=$latitude;
$_SESSION['$longitude']=$longitude;
header('location:http://localhost/fast go/m.html');
?>