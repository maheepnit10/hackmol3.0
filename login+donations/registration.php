
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
        die;
    }
    
    else{

     $password=$_POST['password'];
     $password1=$_POST['password1'];
     $contact=$_POST['usercontact'];
     $usermail=$_POST['usermail'];
     

     if(!empty($username) && !empty($password) && !is_numeric($username) && $password==$password1 && preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^", $usermail))
     {
    
        //Save to database
        $user_id = random_num(20);
        // $hash=md5(rand(0,1000));

        //sending email
    //     $to      = $usermail; // Send email to our user
    //     $subject = 'Signup | Verification'; // Give the email a subject 
    //     $message = '
  
    //     Thanks for signing up!
    //     Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
    //     ------------------------
    //     Username: '.$username.'
    //     Password: '.$password.'
    //     ------------------------
  
    //     Please click this link to activate your account:
    //     http://www.yourwebsite.com/verify.php/verify.php?email='.$usermail.'&hash='.$hash.'
  
    //     '; // Our message above including the link
                      
    //     $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
    //     echo mail($to, $subject, $message, $headers); // Send our email;
    //     die;
        
        $query="insert into users (user_id,username,password,password1,usercontact,usermail) values ('$user_id','$username','$password','$password1','$contact','$usermail')";

        mysqli_query($con,$query);

        header("Location:login.php");
        die;
     }



     else if($password==$password1 && is_numeric($username)){echo "Please enter valid username";
    die;}

     else if($password != $password1){
         echo "Password didn't match!";
         die;
     }

     else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^", $usermail)){
         echo "Enter a valid email address";
         die;
        }
 }
 }
?>