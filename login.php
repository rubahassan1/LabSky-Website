<?php
session_start();
include("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    //SOMETHING WAS POSTED
   $user_name= $_POST['user_name'];
   $password= $_POST['password'];
   if(!empty($user_name) && !empty($password) && !is_numeric($user_name) ){
//read  from db


$query="select * from users where user_name='$user_name' limit 1";
$result = mysqli_query($con,$query);
if($result){
    if($result && mysqli_num_rows($result)>0){
        $user_data= mysqli_fetch_assoc($result);
        if($user_data['password']==$password){
            $_SESSION['user_id']= $user_data['user_id'];
            $_SESSION['user_name']=$user_data['user_name'];
            if($user_data['user_id']!=1212){
                $_SESSION['role']="Client";
                header("Location: home.php");
            }
            else{
                $_SESSION['role']="Admin";
                header("Location:adminhome.php");
            }
            die;
        }
    }
    else{
        $checkifdoctor=mysqli_query($con,"SELECT * from doctors where Username='$user_name' limit 1");
        if(mysqli_num_rows($checkifdoctor)>0){
            $user_data= mysqli_fetch_assoc($checkifdoctor);
            if($user_data['Password']==$password){
                $_SESSION['user_id']= $user_data['Doctor_ID'];
                $_SESSION['user_name']=$user_data['Username'];
                $_SESSION['role']="Doctor";
                header("Location: doctorhome.php");
                die;
            }
        }
        else
            echo "wrong username or password! ";
    }
 }
 
   else{
    
    echo "please enter some valid information! ";
   }
}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type="text/css">
          body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
            background-color:#0a58ca;
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




    </style>
     <div class="container">
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="username" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button">Login</button>
            <a href="signup.php" class="link">Don't have an account? Sign Up</a>
        </form>
        <div class="link">
            <a href="index.php">Back to home page</a>
        </div>
    </div>
</body>
</html>