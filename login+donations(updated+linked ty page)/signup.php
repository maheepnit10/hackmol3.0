<?php

session_start();

 include("connection.php");
 include("functions.php");

  ?>


<html>
    <head>
        <title>signup</title>

<link rel="stylesheet" href="signupstyle.css">      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
<body>
    <div class="container">
        <div class="signup-box">
        <div class="row">
            <div class="col-md-6 box">
               <center><h2>SIGN UP</h2></center> 
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                 <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <select id="gender" name="gender">
                          <option value="0">Male</option>
                          <option value="1">Female</option>
                          <option value="2">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="usercontact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="usermail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="password1" class="form-control" required>
                    </div><br>
                   <center><button type="submit" class="btn btn-primary">Register</button></center> 
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="error-msg">
       <?php
       if(isset($msg)){echo"<div class=stausmsg>".$msg."</div>";}  
       ?>
    </div>
</body>
    </head>
</html>   
