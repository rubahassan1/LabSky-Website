<?php
session_start();
include "connection.php";
$bid=$_REQUEST['id'];
$delete=mysqli_query($con,"DELETE from booking where bid='$bid'");
header("location:viewbookings.php");
?>