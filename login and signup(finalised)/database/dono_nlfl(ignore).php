<?php
session_start();

include("connection.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            text-align:center;
        }
        
        label {
  display: inline-block;
  text-align:right;
} 
    </style>
</head>
<body>

<section>
    <h1>Donation Page</h1>

    <div class="form">

    <form action="ty.html" method="post">
     <div class="name">
     <label for="name">Enter Your Name</label>
     <input type="text" name="name" id="name">
     </div>

     <div class="contact">
     <label for="contact">Enter Phone Number</label>
     <input type="text" name="contact" id="conatct" >
     </div>

     <div class="date">
     <label for="date">Date of event</label>
     <input type="date" name="date" id="date">
     </div>
    <button>Submit</button>
    </form>

    </div>

</section>
</body>
</html>