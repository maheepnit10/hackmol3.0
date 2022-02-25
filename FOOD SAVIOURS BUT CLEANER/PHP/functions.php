<?php

function check_login($con)
{

if(isset($_SESSION['user_id']))
{
$id=$_SESSION['user_id'];
$query="select * from users where user_id='$id' limit 1";

$result=mysqli_query($con,$query);
if($result and mysqli_num_rows($result)>0)
{
  $user_data= mysqli_fetch_assoc($result);
  return $user_data;
}

//redirect to login page.
else{
header("Location: ../login.php");
die;
}
die;

}
}


function random_num($length)
{
    $text="";

    if ($length < 5)
    {
        $length=5;
    }

$len=rand(4,$length);

for($i=0; $i<$len; $i++){
    $text .= rand(0,9);
}

return $text;
}

function check_dono($con){
if(isset($_SESSION['user_id']))
{
$id=$_SESSION['user_id'];
$query="select * from donations where d_id='$id' limit 1";

$result=mysqli_query($con,$query);
if($result and mysqli_num_rows($result)>0)
{
  $user_data= mysqli_fetch_assoc($result);
  return $user_data;
}

//redirect to login page.
else{
return 0;
die;
}
die;

}
}

function rand_msg(){
  return rand(1,7);
}

function rand_del(){
  return rand(1,6);
}

function random_num_static()
{
return mt_rand(100000,999999);
}

