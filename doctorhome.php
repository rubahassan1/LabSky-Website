<?php
session_start();
include "connection.php";
$uid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="doctorhome.css">
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
          <a class="nav-link active fs-6" aria-current="page" href="doctorhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="viewbookings.php">View Bookings</a>
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
<div class="welcome">
    <h4>
        Welcome, <?php echo $_SESSION['user_name']."!";?>
    </h4><br>
    <h6>Below are some information about you, feel free to request changes.</h6>
</div>
<div class="info-container">
        <div class="doctor-info">
            <?php
                $selectdoctor=mysqli_query($con,"SELECT * from doctors where Doctor_ID='$uid'");
                $doctor=mysqli_fetch_array($selectdoctor);
            ?>
            <div class="details">
                <h1 class="name">Dr. <?php echo $doctor['Name'];?></h1>
                <p class="email">Email: <?php echo $doctor['Email'];?></p>
                <div class="tests">
                    <h2>Tests Provided:</h2>
                    <ul>
                        <?php
                        $selecttests=mysqli_query($con,"SELECT * from doctors_tests where doctor_id='$uid'");
                        while($result=mysqli_fetch_array($selecttests)){
                            $tid=$result['test_id'];
                            $testname=mysqli_query($con,"SELECT * from tests where Id='$tid'");
                            $tname=mysqli_fetch_array($testname)['Name'];
                            echo "<li>".$tname."</li>";
                        }
                        ?>
                    </ul>
                </div>
                <a href="mailto:labskyservices@gmail.com"><button class="btn btn-primary px-3 py-2 d-inline-block">Request Changes</button></a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>