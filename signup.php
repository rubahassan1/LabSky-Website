<?php
session_start();
include("connection.php");
include("function.php");
$error = "";
$error2="";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // SOMETHING WAS POSTED
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Save to db
        $checkEmail = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'");
        if (mysqli_num_rows($checkEmail) == 0) {
            $query = "INSERT INTO users (user_name, Email, password, Role) VALUES ('$user_name', '$email', '$password', 'Client')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        } else {
            $error = "Email is already taken!";
        }
    } else {
        $error2 = "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-image: linear-gradient(180deg, #c4b6fd, #93acfc);
            background-size: cover;
            flex-direction:column;
        }
        .container {
            background: rgba(255, 255, 255, 0.5);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 1rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-group input:focus {
            outline: none;
            border-color: #4facfe;
        }
        .button {
            width: 100%;
            padding: 0.75rem;
            background: #0a58ca;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }
        .button:hover {
            background: #257dfd;
        }
        .link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #0a58ca;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        .error{
            color: red;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>
    <div class="container">
        <h2>Sign Up</h2>
        <form method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error"><?php echo $error; ?></div> <!-- Display error message here -->
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button">Submit</button>
            <a href="login.php" class="link">You have an account? Login</a>
            <div class="error"><?php echo $error2; ?></div>
        </form>
        <div class="link">
        <a href="index.php">Back to home page</a>
        </div>
    </div>
</body>
</html>
