<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="adminhome.css">
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="#">Labsky</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-6" aria-current="page" href="adminhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="mailto:labskyservices@gmail.com">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="container1 mt-4">
    <div class="row">
        <div class="col-md-4">
            <h4>Doctors</h4>
            <ul class="list-group" id="doctor-list">
                <?php
                $doctors = mysqli_query($con, "SELECT * FROM doctors");
                while ($doctor = mysqli_fetch_assoc($doctors)) {
                    echo "<li class='list-group-item'><a href='#' class='doctor-link' onclick='getDoctorInfo(".$doctor['Doctor_ID'].")'>".$doctor['Name']."</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="col-md-8">
            <div id="doctor-info" class="mt-4">
                <h4>Select a doctor to view details</h4>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function getDoctorInfo(doctor_id){

  var doctorID = doctor_id;
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
            document.getElementById("doctor-info").innerHTML = ajaxRequest.responseText;
        }
    };
    ajaxRequest.open("GET", "getdoctorinfo.php?doctor_id=" + doctorID, true);
    ajaxRequest.send();
  }

  function addTest(doctor_id) {
    var test_id = document.getElementById("available_test_id").value;
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
            getDoctorInfo(doctor_id);
        }
    };
    ajaxRequest.open("GET", "addtest.php?doctor_id=" + doctor_id + "&test_id=" + test_id, true);
    ajaxRequest.send();
}

function removeTest(doctor_id) {
    var test_id = document.getElementById("provided_test_id").value;
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
            getDoctorInfo(doctor_id);
        }
    };
    ajaxRequest.open("GET", "removetest.php?doctor_id=" + doctor_id + "&test_id=" + test_id, true);
    ajaxRequest.send();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>