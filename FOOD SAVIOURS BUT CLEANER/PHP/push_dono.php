<?php
session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data=check_login($con);
$user_data1=check_dono($con);
$d_id=$user_data['user_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!isset($user_data1['d_id'])){
    //something was posted.
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $location_1=$_POST['location_1'];
    $pincode=$_POST['pincode'];
    $food=$_POST['food'];
    $times=1;
    $date=$_POST['date'];
           
    $query="insert into donations (d_id,name,contact,location,location_1,pincode,food,times,date) values ('$d_id','$name','$contact','$location','$location_1','$pincode','$food','$times','$date')";
   
    mysqli_query($con,$query);
   
    header("Location:../Thankyou.html");
    die;
    }
    else{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $location_1=$_POST['location_1'];
    $pincode=$_POST['pincode'];
    $food=$_POST['food'];
    $times=$user_data1['times'];
    $date=$_POST['date'];

        $query1="UPDATE donations SET name='$name', contact=$contact, location=$location, location_1='$location_1', pincode=$pincode, food=$food, date=$date, times=$times+1 WHERE d_id=$d_id";
   
        mysqli_query($con,$query1);
   
        header("Location:../Thankyou.html");
        die;
    }
}