<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //something was posted.
    $username=$_POST['username'];
    $password=$_POST['password'];

  if(!empty($username) && !empty($password) && !is_numeric($username))
{

    // Read from the database.
    $query="select * from users where username='$username' limit 1";
    $result=mysqli_query($con,$query);

     if ($result && mysqli_num_rows($result)>0)
     {
        $user_data=mysqli_fetch_assoc($result);

       if($user_data['password'] === $password)
       {

        $_SESSION['user_id']=$user_data['user_id'];
        header("Location:main.php");
        die;
      }
    }
  }else
  {
     echo "Please enter valid information!";
  }
  echo "Wrong username or password!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_l.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="header"><h1>LOGIN</h1></div>
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
    <input type="submit" id="button" value="Login">
    </div>
</div>
    <div class="signup_query">Don't have an account? <a href="signup.php">Signup</a> </div>
</form>
</div>
</body>
</html>