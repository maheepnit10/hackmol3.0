<?php
session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data=check_login($con);

if(isset($_SESSION['user_id'])){
  header("Location:main_l.php");
  die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<span> <div class="login-button"><a href="login.php"><button>LOGIN</button></a></div> <div class="signup-button"><a href="signup.php"><button>SIGN UP</button></a></div> 
</span>
  <!-- <div class="logout"><a href="logout.php"><button>Logout</button></a></div> -->
</div>
<div class="text">
<h1>Hello, <?php if(isset($_SESSION['user_id'])){echo $user_data['username'];}
    else{echo "Unregistered User";} ?></h1>
</div>
<div class="dono">
<a href="dono_nl.php"><button id="dono">Donate</button></a>
</div>
</body>
</html>