<?php
include "connection.php";
if (isset($_GET['doctor_id'])) {
    $doctor_id = $_GET['doctor_id'];
    
    $doctor_query = mysqli_query($con, "SELECT * FROM doctors WHERE Doctor_ID='$doctor_id'");
    $doctor = mysqli_fetch_assoc($doctor_query);

    $provided_tests_query = mysqli_query($con, "SELECT tests.Id, tests.Name FROM tests JOIN doctors_tests ON tests.Id = doctors_tests.test_id WHERE doctors_tests.doctor_id='$doctor_id'");
    $provided_tests = [];
    while ($test = mysqli_fetch_assoc($provided_tests_query)) {
        $provided_tests[] = $test;
    }
    
    $all_tests_query = mysqli_query($con, "SELECT * FROM tests");
    $all_tests = [];
    while ($test = mysqli_fetch_assoc($all_tests_query)) {
        $all_tests[] = $test;
    }
    
    $available_tests = array_filter($all_tests, function($test) use ($provided_tests) {
        foreach ($provided_tests as $provided_test) {
            if ($provided_test['Id'] == $test['Id']) {
                return false;
            }
        }
        return true;
    });

    echo "<div class='card'>
            <div class='card-body'>
                <h4 class='card-title'>Dr. ".$doctor['Name']."</h4>
                <p class='card-text'>Email: ".$doctor['Email']."</p>
                <h5>Tests Provided:</h5>
                <ul>";
    foreach ($provided_tests as $test) {
        echo "<li>".$test['Name']."</li>";
    }
    echo "  </ul>
                    <div class='mb-3'>
                    <label for='available_test_id' class='form-label'>Add Test</label>
                    <select name='test_id' id='available_test_id' class='form-select'>";
    foreach ($available_tests as $test) {
        echo "<option value='".$test['Id']."'>".$test['Name']."</option>";
    }
    echo "          </select>
                </div>
                <button onclick='addTest(".$doctor_id.")' class='btn btn-primary'>Add Test</button>
                
                    <div class='mb-3'>
                        <label for='provided_test_id' class='form-label'>Remove Test</label>
                        <select name='test_id' id='provided_test_id' class='form-select'>";
    foreach ($provided_tests as $test) {
        echo "<option value='".$test['Id']."'>".$test['Name']."</option>";
    }
    echo "          </select>
                    </div>
                    <button onclick='removeTest(".$doctor_id.")' class='btn btn-danger'>Remove Test</button>
            </div>
          </div>";
}
?>
