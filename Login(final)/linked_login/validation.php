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

       if($user_data['password'] === $password /* && $user_data['active']==1---->This is for email verification)*/)
       {

        $_SESSION['user_id']=$user_data['user_id'];
        header("Location:main.php");
        die;
    //   }else{
    //       echo "You need to verify your email address!";
    //       die;
    //   }
    }
  }else
  {
     echo "Please enter valid information!";
  }
  echo "Wrong username or password!";
}
}