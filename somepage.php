<?php
session_start();
if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$problem=$_POST['issue'];
$_SESSION['$problem']=$problem;
$latitude=$_GET['latitud'];;
echo"$latitude";
echo"<br>";
$longitude=$_GET['longitud'];
echo"$longitude";
echo"<br>";
$contact_no=$_POST['contact_no'];
$q="insert into vehicle_form (problem,latitude,longitude,contact_no) values (
'$problem','$latitude','$longitude',$contact_no)";

if(mysqli_query($con,$q)){
$_SESSION['$latitude']=$latitude;
$_SESSION['$longitude']=$longitude;
header('location:http://localhost/fast go/calculate.php');
}
else{
	header('location:http://localhost/fast go/vehicle_form.php');
}
}
?>
?>