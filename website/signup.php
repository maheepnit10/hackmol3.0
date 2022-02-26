<?php

session_start();

 include("PHP/connection.php");
 include("PHP/functions.php");

 $msg="" ; 

 if(isset($_SESSION['Error'])){
     $msg=$_SESSION['Error'];
     unset($_SESSION['Error']);
 }

?>


<html>
    <head>
        <title>signup</title>

<link rel="stylesheet" href="css/signupstyle.css">      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
<body>
    <div class="container">
        <div class="signup-box">
        <div class="row">
            <div class="col-md-6 box">
               <center><h2>SIGN UP</h2></center> 
                <form action="PHP/registration.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                 <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <select id="gender" name="gender">
                          <option value="0">Male</option>
                          <option value="1">Female</option>
                          <option value="2">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="usercontact" class="form-control" min="1000000000" max="9999999999"required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="usermail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" id="password1" name="password1" class="form-control" required>
                    </div><br>
                   <center><button type="submit" class="btn btn-primary">Register</button></center> 
                   <div class="error-msg"> <?= $msg ?></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- <script src="scripts/authentication.js"> console.log("Loaded Authentication.")</script> -->
</body>
    </head>
</html>  