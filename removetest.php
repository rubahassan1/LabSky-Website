<?php
include "connection.php";
if (isset($_GET['doctor_id']) && isset($_GET['test_id'])) {
    $doctor_id = $_GET['doctor_id'];
    $test_id = $_GET['test_id'];
    
    $remove_test_query = mysqli_query($con, "DELETE FROM doctors_tests WHERE doctor_id='$doctor_id' AND test_id='$test_id'");
    
    if (!$remove_test_query) {
        echo "Error removing test.";
    }
}
?>
