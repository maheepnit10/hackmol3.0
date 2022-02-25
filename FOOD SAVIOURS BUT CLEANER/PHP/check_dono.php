<?php
session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data=check_login($con);
$active=$user_data['active'];
$user_id=$user_data['user_id'];

if ($active==0) {
$query="UPDATE users set active=1 where user_id=$user_id";
// $query1="INSERT INTO donations (d_id) values ($user_id)";
     
    $result=mysqli_query($con,$query);
    // $result1=mysqli_query($con,$query1);
    header("Location:../dono_s.php");
    echo "Didnt redirect huh";
}
 else{
    header("Location:../dono_s.php");
}