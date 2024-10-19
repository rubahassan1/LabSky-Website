<?php
include "connection.php";
session_start();
$uid;
$uname;
$uemail;
if(isset($_SESSION['user_id'])){
    $uid=$_SESSION['user_id'];
    $uname=$_SESSION['user_name'];
    $select_user=mysqli_query($con,"SELECT * from users where user_id='$uid'");
    $uemail=mysqli_fetch_assoc($select_user)['Email'];
}
?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<head>
    <title>Book a Test</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

header{
    background-image: linear-gradient(180deg, #c4b6fd, #93acfc);
}

.navbar-brand, .text-primary{
    color: #0a58ca !important;
}

.nav-link{
    font-weight: 500;
}

.btn-primary{
    background-color: #0a58ca;
    border: none;
}

.btn-primary:hover {
    background-color: #257dfd !important;
  }

.nav-link:hover{
    color: #0a58ca;
}

        .container1 {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #0a58ca;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="email"], input[type="date"], select, #description {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0a58ca;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #257dfd;
        }
        .confirmation {
            text-align: center;
            background-color: #257dfd;
            color: #ffff;
            padding: 20px;
            border-radius: 4px;
        }
        .home-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #fff;
            border: none;
            border-radius: 4px;
            color: #257dfd;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
        }
        .home-button:hover {
            background-color: #ece8e8;
        }
    </style>
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
          <a class="nav-link fs-6" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-6" href="booking.php">Book Your Test</a>
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
    <div class="container1">
        <h1>Book a Test</h1>
        <?php
        include "connection.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $testType = htmlspecialchars($_POST['test_type']);
            $email = $uemail;
            $phone = htmlspecialchars($_POST['phone']);
            $date = htmlspecialchars($_POST['date']);
            $doctor = htmlspecialchars($_POST['doctor']);
            $desc= htmlspecialchars($_POST['description']);

            $insertbooking=mysqli_query($con,"INSERT into booking(name,test,email,phone,date,doctor,description) values('$name','$testType','$email','$phone','$date','$doctor','$desc')");

            echo "<div class='confirmation'>";
            echo "<h2>Booking Confirmed</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Phone: " . $phone . "<br>";
            echo "Preferred Date: " . $date . "<br>";
            $tname=mysqli_query($con,"SELECT * from tests where Id='$testType'");
            echo "Test Type: " . mysqli_fetch_array($tname)['Name'] . "<br>";
            $dname=mysqli_query($con,"SELECT * from doctors where Doctor_ID='$doctor'");
            echo "Doctor: " . mysqli_fetch_array($dname)['Name'] . "<br>";
            echo "<a href='home.php' class='home-button'>Return to Home Page</a>";
            echo "</div>";
        } else {
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="test_type">Test Type:</label>
            <select id="test_type" name="test_type" required onchange="displayDoctors()">
            <option value="">Select a Test</option>
                <?php
                    $select_tests=mysqli_query($con,"SELECT * from Tests");
                    while($row=mysqli_fetch_array($select_tests)){
                        echo "<option value='".$row['Id']."'>".$row['Name']."</option>";
                    }
                ?>
            </select>
            <label for="doctors">Doctor:</label>
            <select id="doctors" name="doctor" required>
                <option value="">Select a Doctor</option>
            </select>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
            <input type="submit" value="Book Now">
        </form>
        <?php
        }
        ?>
    </div>

    <script>
        function displayDoctors(){
            var val = document.getElementById("test_type").value;
            var ajaxRequest = new XMLHttpRequest();
            ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4) {
                document.getElementById('doctors').innerHTML = ajaxRequest.responseText;
            }
    }
    ajaxRequest.open("GET", "get_doctors.php?test_type=" + val, true);
    ajaxRequest.send();
        }
    </script>
</body>
</html>