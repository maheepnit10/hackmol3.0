<?php
session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data1=check_dono($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for donating</h1>
    <form action="save-db" method="post">

     <div class="name">
     <label for="name">Name:</label>
     <input type="text" name="name" id="name">
    </div>

    <div class="contact">
        <label for="contact">Contact No.</label>
        <input type="text" name="contact" id="contact" placeholder="<?php echo "$contact" ?>">
    </div>

    <div class="location">
        <label for="address" name="address" id="address">Location</label>
        <input type="textarea">
    </div>
<?php
echo "$username $active";
?>
    </form>
</body>
</html>