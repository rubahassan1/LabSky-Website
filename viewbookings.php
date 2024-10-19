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
    <link rel="stylesheet" href="viewbookings.css">
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
          <a class="nav-link fs-6" aria-current="page" href="doctorhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-6" href="viewbookings.php">View Bookings</a>
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
<div class="bookings mt-5">
        <h2 style="color:#0a58ca;">Requested Bookings</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Booking Name</th>
                    <th scope="col">Test</th>
                    <th scope="col">Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selectbookings=mysqli_query($con,"SELECT * from booking where doctor='$uid'");
                while($booking=mysqli_fetch_array($selectbookings)){
                    $bname=$booking['name'];
                    $tid=$booking['test'];
                    $selecttest=mysqli_query($con,"SELECT * from tests where Id='$tid'");
                    $tname=mysqli_fetch_array($selecttest)['Name'];
                    $clientEmail=$booking['email'];
                    $clientphone=$booking['phone'];
                    $Preffereddate=$booking['date'];
                    echo "<tr>
                            <th scope='row'>".$bname."</th>
                            <td>".$tname."</td>
                            <td>".$Preffereddate."</td>
                            <td>".$clientphone."</td>
                            <td><a href='mailto:".$clientEmail."'><button>Contact Client</button></a></td>
                            <td>
                                <a href='accept_booking.php?id=".$booking['bid']."' class='btn btn-success btn-sm'>Accept</a>
                                <a href='deny_booking.php?id=".$booking['bid']."' class='btn btn-danger btn-sm'>Deny</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="bookings mt-5">
        <h2 style="color:#0a58ca;">Accepted Bookings</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Booking Name</th>
                    <th scope="col">Test</th>
                    <th scope="col">Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact</th>
                    <th scope="col">View Info</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selectbookings=mysqli_query($con,"SELECT * from accepted_booking where doctor='$uid'");
                while($booking=mysqli_fetch_array($selectbookings)){
                    $bname=$booking['name'];
                    $tid=$booking['test'];
                    $selecttest=mysqli_query($con,"SELECT * from tests where Id='$tid'");
                    $tname=mysqli_fetch_array($selecttest)['Name'];
                    $clientEmail=$booking['email'];
                    $clientphone=$booking['phone'];
                    $Preffereddate=$booking['date'];
                    echo "<tr>
                            <th scope='row'>".$bname."</th>
                            <td>".$tname."</td>
                            <td>".$Preffereddate."</td>
                            <td>".$clientphone."</td>
                            <td><a href='mailto:".$clientEmail."'><button>Contact Client</button></a></td>
                            <td>
                                <a href='booking_info.php?id=".$booking['bid']."' class='btn  btn-sm'>View</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>