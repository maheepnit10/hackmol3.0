<?php

session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data1=check_dono($con);
?>





<html>
    <head>
        <title>logged in donation</title>
        <link rel="stylesheet" href="donate.css">
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="donate-box">
        <div class="row">
            <div class="col-md-6 donate-left">
            <h2>About our "Logged in Donation" facility....</h2>
            <p><em>The One Time Donation facility allows people across the nation to donate any time anywhere without signing up to an account.
                This feature allows users who dont donate very frequently and want to experience a fast donation.
                </em> </p>
            </div>

            <div class="col-md-6 donate-right">
                <h2>Logged-in Donation</h2>
                <form action="push_dono.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="<?php if(isset($user_data1['name'])){echo"$user_data1[name]";} else{echo "Name";} ?>" required>                        
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="<?php if(isset($user_data1['contact'])){echo"$user_data1[contact]";} else{echo "Contact No.";} ?>" required>                        
                    </div>
                    <div class="form-group">
                        <label>Street no/house no</label>
                        <input type="number" name="location" class="form-control" placeholder="<?php if(isset($user_data1['location'])){echo"$user_data1[location]";} else{echo "Street/House No.";} ?>" required>                        
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location_1" class="form-control" placeholder="<?php if(isset($user_data1['location_1'])){echo"$user_data1[location_1]";} else{echo "Location";} ?>" required>                        
                    </div>
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" name="pincode" class="form-control" minlength="6" maxlength="6" placeholder="<?php if(isset($user_data1['pincode'])){echo"$user_data1[pincode]";} else{echo "Pincode";}?>" required>                        
                    </div>
                    <div class="form-group">
                        <label>Quantity of food(approx)</label>
                        <select id="quantity" name="food" class="form-control" required>
                            <option value="1">1 person</option>
                            <option value="2">2 people</option>
                            <option value="3">Small Family(4 people)</option>
                            <option value="4">More than that</option>
                          </select><br>
                          <center>  <button type="submit" class="btn btn-danger">Donate</button> </center><br>
                                                
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
   


</head>
</html>