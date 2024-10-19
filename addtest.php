<?php
include "connection.php";
if (isset($_GET['doctor_id']) && isset($_GET['test_id'])) {
    $doctor_id = $_GET['doctor_id'];
    $test_id = $_GET['test_id'];
    
    $add_test_query = mysqli_query($con, "INSERT INTO doctors_tests (doctor_id, test_id) VALUES ('$doctor_id', '$test_id')");
    
    if (!$add_test_query) {
        echo "Error adding test.";
    }
}
?>
