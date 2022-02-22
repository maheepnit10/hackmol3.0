<?php
session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_logout_page.css">
</head>
<body>
<div class="container">
<span> <div class="logout-button"><a href="logout.php"><button>LOGOUT</button></a></div> 
</span>
</div>
<div class="text">
<h1>Hello, <?php if(isset($_SESSION['user_id'])){echo $user_data['username'];}
    else{echo "Unregistered User";} ?></h1>
<a href="check_dono.php"><button type="submit">Donate</button></a>
</body>
</html>