<?php
session_start();
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
	if(empty($username)){
		$ms="please enter username!!";
		$msg=$_SESSION['$ms'];
	}
	else if(empty($password)){
		$ms="please enter username!!";
		$msg=$_SESSION['$ms'];
	}
	else{
		$ms="login successfully!!";
		$msg=$_SESSION['$ms'];
	}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$q="select * from login where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
$_SESSION['$username']=$username;
header('location:http://localhost/fast go/index.php');
}
else{
header('location:http://localhost/fast go/login.php');
}
}
else{
header('location:http://localhost/fast go/login.php');
}
?>
