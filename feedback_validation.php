<?php
session_start();
=$Rating;
=$Query;
=$Message;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uploaddocuments');
$q="INSERT INTO `feedbacktable` (`id`, `rating`, `query`, `message`) VALUES (NULL, '$_SESSION['$Rating']', '$_SESSION['$Query']', '$_SESSION['$Message']')";
if(mysqli_query($con,$q)){
header("Location:http://localhost/feedback.html");
}
?>