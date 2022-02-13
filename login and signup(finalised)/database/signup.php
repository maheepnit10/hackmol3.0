<?php
session_start();

 include("connection.php");
 include("functions.php");

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
     //something was posted.
     $username=$_POST['username'];
     $sel=mysqli_query($con,"select * from users where username='$username'");
    if(mysqli_num_rows($sel)>0){
        echo "Username already exists!";
        ?>
    <a href="main.php"><button>Go Back to main page</button></a>
    <?php
        // header("Location:main.php");
        die;
    }else{

     $password=$_POST['password'];

     if(!empty($username) && !empty($password) && !is_numeric($username))
     {
        //Save to database
        $user_id = random_num(20);
        $query="insert into users (user_id,username,password) values ('$user_id','$username','$password')";

        mysqli_query($con,$query);

        header("Location:login.php");
        die;
     }
     else{echo "Please enter valid username";}
 }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_s.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="header"><h1>SIGNUP</h1></div>
<hr>
<div class="form">
<form action="" method="post" >
    <div class="user_n">
    <label for="username">Username:</label>
    <input type="text" name="username" required id="username" background-color="#b23a48">
    </div>
    <div class="pass">
    <label for="password">Password: </label>
    <input type="password" name="password"  required id="password">
    </div>
    <div class="sumbit">
    <input type="submit" id="button" value="Signup">
    </div>
</div>
    <div class="signup_query">Already have an account? <a href="login.php">Login</a> </div>
</form>
</div>
</body>
</html>