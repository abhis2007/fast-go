<?php
session_start();
$Rating=$_POST['rating'];
$Query=$_POST['query'];
$Message=$_POST['message'];
$_SESSION['$Rating']=$Rating;
$_SESSION['$Query']=$Query;
$_SESSION['$Message']=$Message;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$q="INSERT INTO `feedbacktable` (`id`, `rating`, `query`, `message`) VALUES (NULL, '$Rating', '$Query', '$Message')";
if(mysqli_query($con,$q)){                                
header('Location:http://localhost/fast go/confirm.html');
}
?>