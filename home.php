<?php
session_start();

include("connection.php");
include("function.php");
$user_data=check_login($con);
$id;
$username;
$role;
if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
$username=$_SESSION['user_name'];
$role=$_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
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
          <a class="nav-link active fs-6" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="booking.php">Book Your Test</a>
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
<div class="title">
    <h1>Health Tips</h1>
</div>
<main>
            <div class="tips">
                <h2>Nutrition</h2>
                <ul>
                    <li>Stay hydrated by drinking plenty of water throughout the day.</li>
                    <li>Aim for a variety of fruits, vegetables, lean proteins, whole grains, 
                        and healthy fats in your meals.</li>
                    <li>Be mindful of portion sizes to avoid overeating, even with healthy foods.</li>
                    <li>Pay attention to hunger and fullness foodscues, and eat slowly to savor your food.</li>
                    <li>Choose healthier snack options like nuts, fruits, yogurt, or veggies with hummus.</li>
                </ul>
                </div>
            <div class="tips">
            <h2>Fitness</h2>
            <ul>
                <li>Always start with a warm-up and end with a cool-down to prepare and
                    recover your body from exercise.</li>
                <li>Set achievable fitness goals that motivate you without causing burnout or injury.</li>
                <li>Drink water before, during, and after exercise to stay hydrated and maintane
                     peak performance.</li>
                <li>Pay attention to your body's signals; rest when needed and avoid overexertion
                    to prevent injury and fatigue.</li>
                <li>Try to maintain a regular exercise routine to experience long-term 
                    health benifits.</li>
            </ul>  
        </div>
                <div class="tips">
            <h2>Mental Health</h2>
                <ul>
                    <li>Make time for activities you enjoy and that recharge you.</li>
                    <li>Exercise can boost mood and reduce stress.</li>
                    <li>Social connections are crucial; spend time with friends and family.</li>
                    <li>Practice techniques like meditation or deep breathing to reduce stress.</li>
                    <li>Don't hesitate to reach outto a proffessional if you're struggling. Your mental 
                        health matters.</li>
                </ul></div>
        </main>
        <footer>
            <p>&copy; 2024 Health Tips</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>