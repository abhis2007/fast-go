<?php
if(isset($_POST['submit'])){
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$email_id=$_POST['email'];
	$user_name=$_POST['username'];
	$pass_word=$_POST['password'];
	$cnfpass_word=$_POST['cnfpassword'];
	$phone_number=$_POST['phonenumber'];
	$con=mysqli_connect('localhost','root');
	if($con){
		echo" connected";
	}
	else{
		echo" not connected";
	}
	if(mysqli_select_db($con,'uploaddocuments')){
		echo" databases selected";

	}
	$q="insert into signupdata (firstname,lastname,email,username,password,cnfpassword,phonenumber) values
		('$first_name','$last_name','$email_id','$user_name','$pass_word','$cnfpass_word',$phone_number)";
	
	echo"<br />";
	echo $q;
	if(mysqli_query($con,$q)){
		
	echo" query passed";
	}
	else{
		echo" query not passed";
	}
	mysqli_close($con);
}
?>