<?php
include "connection.php";
session_start();
$bid=$_REQUEST['id'];
$booking_info=mysqli_query($con,"SELECT * from accepted_booking where bid='$bid'");
$booking=mysqli_fetch_array($booking_info);
$tid=$booking['test'];
$selecttest=mysqli_query($con,"SELECT * from tests where Id='$tid'");
$testName=mysqli_fetch_array($selecttest)['Name'];
$did=$booking['doctor'];
$selectdoctor=mysqli_query($con,"SELECT * from doctors where Doctor_ID='$did'");
$doctorName=mysqli_fetch_array($selectdoctor)['Name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="booking_info.css">
</head>
<body>
<div class="container mt-5">
    <div class="booking-info">
        <h1>Booking Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $booking['name']; ?> Booking</h5>
                <p class="card-text"><strong>Test Type:</strong> <?php echo $testName; ?></p>
                <p class="card-text"><strong>Client Email:</strong> <?php echo $booking['email']; ?></p>
                <p class="card-text"><strong>Client Phone:</strong> <?php echo $booking['phone']; ?></p>
                <p class="card-text"><strong>Date:</strong> <?php echo $booking['date']; ?></p>
                <p class="card-text"><strong>Doctor:</strong> Dr. <?php echo $doctorName; ?></p>
                <p class="card-text"><strong>Description:</strong> <?php echo $booking['description']; ?></p>
            </div>
        </div>
        <a href="viewbookings.php" class="btn btn-primary mt-3">Back to Bookings</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>