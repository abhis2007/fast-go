<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$chefname=$_POST['chefname'];
$address=$_POST['address'];
$address2=$_POST['addess2'];
$image=$_FILES['image']['name'];
$pan=$_FILES['pan']['name'];
$location=$_FILES['location']['name'];
$adhar=$_FILES['adhar']['name'];
$q="create table chefupload (id int(255) not null auto_increment primary key,chefname varchar(255) not null,address varchar(255) not null,temp_address varchar not null,perm_address varchar(255),location varchar(255) not null,image varchar(255) not null,adhar varchar(255),pan varchar(255) not null)";
if(mysqli_query($con,$q)){
	echo"done";
}
else{
	echo"sorry";
}
?>