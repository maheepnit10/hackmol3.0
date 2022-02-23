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


<html>
    <head>
        <title>user login</title>

<link rel="stylesheet" href="style.css">      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body><br>
    <div class="container">
      <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
              <center>  <h2>Login Portal</h2> </center>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                         </div><br>
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" class="form-control" required>
                        </div><br>
                            <center>  <button type="submit" class="btn btn-primary">login</button> </center><br>
                              <em>don't have an account yet?<a href="signup.php">sign up</a>here</em>
                     </form>
                </div>
           </div>
     </div>
 </div>

</body>
</head>
</html>