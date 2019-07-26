<?php
$value=0;
session_start();
$con=mysqli_connect('localhost','root');
if(mysqli_select_db($con,'uploaddocuments')){
}
else{
echo"database not selected";
echo"<br>";
}
$q="select * from registeredshoptable";
if($result=mysqli_query($con,$q)){
	echo("lattttitude is: ");
echo($latitudes);
}
else{
echo"nope query was not passed";
}
while($r=mysqli_fetch_array($result)){
$latitud[]=$r[9];									
$longitud[]=$r[10];
$shop_name[]=$r[5];
$shop_owner_name[]=$r[6];
$contact_no[]=$r[4];
}
for($j=0;$j<sizeof($latitud);$j++){
$latitudeto=$latitud[$j];
$longitudeto=$longitud[$j];

$earthradius=6371;
$latfrom=deg2rad($_SESSION['$latitude']);
$lonfrom=deg2rad($_SESSION['$longitude']);
if ($latfrom==""){
header('location:http://localhost/fast go/vehicle_form.php');				
}
$latto=deg2rad($latitudeto);
$lonto=deg2rad($longitudeto);

$latdelta=$latto-$latfrom;
$londelta=$lonto-$lonfrom;

$angle=2*asin(sqrt(pow(sin($latdelta/2),2)+cos($latfrom)*cos($latto)*pow(sin($londelta/2),2)));
$distance=$angle*$earthradius;
//echo"dist:";
//echo"$distance";
if($distance<=3.5){
$nearshoplatitude[]=$latitudeto;
$nearshoplongitude[]=$longitudeto;
$value=$value+1;
}
}
if($value>0){
$_SESSION['$nearshoplatitude']=$nearshoplatitude;
$_SESSION['$nearshoplongitude']=$nearshoplongitude;
$_SESSION['$shop_name']=$shop_name;
$_SESSION['$shop_owner_name']=$shop_owner_name;
header('location:http://localhost/fast go/display.php');
}
else{
header('location:http://localhost/fast go/shop_not_found.php');
}

?>