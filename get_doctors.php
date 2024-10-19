<?php
include "connection.php";
session_start();
$test=$_REQUEST['test_type'];
$selectdoctorsID=mysqli_query($con,"SELECT * from doctors_tests where test_id='$test'");
while($doctor=mysqli_fetch_array($selectdoctorsID)){
    $doctorId=$doctor['doctor_id'];
    $selectName=mysqli_query($con,"SELECT * from doctors where Doctor_ID='$doctorId'");
    $name=mysqli_fetch_array($selectName)['Name'];
    echo "<option value='".$doctorId."'>".$name."</option>";
}
?>