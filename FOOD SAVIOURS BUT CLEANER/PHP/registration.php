
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
        $_SESSION['Error']="Username Already Exists!";
        header("Location:../signup.php");
        die;
    }
    
    else{

     $password=$_POST['password'];
     $password1=$_POST['password1'];
     $contact=$_POST['usercontact'];
     $usermail=$_POST['usermail'];
     $gender=$_POST['gender'];
     

     if(!empty($username) && !empty($password) && !is_numeric($username) && $password==$password1 && preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^", $usermail))
     {
    
        //Save to database
        $user_id = random_num(20);
        $query="insert into users (user_id,username,password,password1,usercontact,usermail,gender) values ('$user_id','$username','$password','$password1','$contact','$usermail',$gender)";

        mysqli_query($con,$query);

        header("Location:../login.php");
        die;
     }



     else if($password==$password1 && is_numeric($username)){
        $_SESSION['Error']= "Please enter valid username!";
        header("Location: ../signup.php");
        die;
    }

     else if($password != $password1){
         $_SESSION['Error']= "Password didn't match!";
         header("Location: ../signup.php");
         die;
     }

     else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^", $usermail)){
        $_SESSION['Error']="Enter a valid email address!";
        header("Location: ../signup.php");
         die;
        }
 }
 }
?>