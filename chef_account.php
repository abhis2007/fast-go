<?php
if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$chefname=$_POST['chefname'];
$tmp_address=$_POST['tmp_address'];
$perm_address=$_POST['perm_address'];
$location=$_FILES['location']['name'];
$image=$_FILES['image']['name'];
$adhar=$_FILES['adhar']['name'];
$pan=$_FILES['pan']['name'];
$q="insert into chefupload (chefname,temp_address,perm_address,location,image,adhar,pan) values(
'$chefname','$tmp_address','$perm_address','$location','$image','$adhar','$pan')";
if(mysqli_query($con,$q)){
header('location:http://localhost/fast go/chef_regestration.php');
}
else{
	echo"sorry";
}
}
else{
	echo"something went wrong";
}
?>