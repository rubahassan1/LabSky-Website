<?php
session_start();
include "connection.php";

$bid=$_REQUEST['id'];
$selectbooking=mysqli_query($con,"SELECT * from booking where bid='$bid'");
$bookinginfo=mysqli_fetch_array($selectbooking);
$name=$bookinginfo['name'];
$test=$bookinginfo['test'];
$email=$bookinginfo['email'];
$phone=$bookinginfo['phone'];
$date=$bookinginfo['date'];
$doctor=$bookinginfo['doctor'];
$description=$bookinginfo['description'];
$insert=mysqli_query($con,"INSERT into accepted_booking VALUES('$bid','$name','$test','$email','$phone','$date','$doctor','$description')");
$delete=mysqli_query($con,"DELETE from booking where bid='$bid'");
header("location:viewbookings.php");
?>