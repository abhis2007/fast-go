<?php
session_start();
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'uploaddocuments');
		$first_name=$_POST['firstname'];
		$last_name=$_POST['lastname'];
		$email_id=$_POST['emaill'];
		$shop_name=$_POST['shop'];
		$owner_name=$_POST['owner'];
		$state_name=$_POST['state'];
		$city_name=$_POST['city'];
		$phone_number=$_POST['pphonenumber'];
		$longitudes=$_SESSION['$register_shop_longitude'];
		echo$longitudes;echo"<br />";
		$latitudes=$_SESSION['$register_shop_latitude'];
		$q="INSERT INTO `registeredshoptable` (`id`, `first_name`, `last_name`, `email_id`, `phone_no`, `shop_name`, `owner_name`, `state`, `city`, `latitude`, `longitude`) VALUES (NULL, '$first_name', '$last_name', '$email_id', '$phone_number', '$shop_name', '$owner_name', '$state_name', '$city_name', '$latitudes', '$longitudes')";
		
		if(mysqli_query($con,$q)){
		header('Location:http://localhost/fast go/message.html');
		}
		else{	
		echo"quqery not passed";
		}
		mysqli_close($con);		
	
?>