<?php
session_start();  //knows if signed in or not.
include("PHP/connection.php");
include("PHP/functions.php");

$user_data=check_login($con);

if(isset($_SESSION['user_id'])){
  header("Location:main_l.php");
  die;
}

?>

<!DOCTYPE html>
<html>

<head>

    <!-- BOOTSTRAP CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




 <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/mainpagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>FOOD SAVIOURS</title>

</head>

<body>



   

    

                                                    <!-- edit2 -->
    <header>
        <nav>
        
        <span id="home" class="top">Home</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a
            href="ourmission.php" style="text-decoration: none;color: rgb(255, 255, 255);">Our
            Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
            style="text-decoration:none; color: white;">How we
            work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
    <span id="contact_us" class="top"><a href="contact-us.php" style="text-decoration: none; color: white;">Contact
            us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a href="FAQ's.php"
            style="text-decoration: none; color: rgb(255, 255, 255);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="login.php"><button type="button" class="btn btn-danger">Login</button></a>&nbsp
</nav>
</header>
                                                   <!-- edit2 ends -->
    <br>
    <br>
    <div id="logo">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
    <br>
    <br>
    <!-- edit4 -->
    <header><nav><span id="heading1">ANNADATA SUKHIBHAVA</span></nav></header>
    <br>
    <br>
    <br>

    <!-- edit5 -->
    <header><nav><div id="heading2">HELP THE POORS</div></nav></header>
    <br>
    <br>
    

    <div id="donatediv">
        <strong><a href="dono_nl.php"><button type="button" class="btn btn-danger">Donate</button></a></strong>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <span>

                                                    <!-- edit3 start -->


        <div class="container">
            <div class="row">
                <div class="col-sm article_1">
                    <div class="form-group ">
                        <h2 class="heading">Food Wastage In India</h2>
                        <h6> Despite excess food production,the UN Food and
                            Agriculture Organisation has reported that about 190
                            million Indians remain undernourished. Moreover, it states
                            that every third malnourished child is Indian</h4>
                        <br>
                        <center><a href="article4.php"> <button type="submit" class="btn btn-success" >Explore</button></a></center>
                    </div>
                </div>
                    <div class="col-sm article_2">
                        <div class="form-group ">
                            <h2 class="heading">Food Insecurity</h2>
             <h6>India was home to the largest number of undernourished people
                    in the world even before the Covid-19 pandemic. The pandemic
                    and failure on the part of state to combat its effects, has
                    led to a significant</h4>
                <br>
                <center><a href="article2.php"> <button type="submit" class="btn btn-success">Explore</button></a></center>

                        
                    </div>
                </div>
                
                <div class="col-sm article_3">
                    <div class="form-group">
                        <h2 class="heading">Hunger In India</h2>


            <h6>According to FAO estimates in ‘The State of Food Security and Nutrition in
                the World, 2020 report, 189.2 million people are undernourished in India.
                By this measure 14% of the population is undernourished in
                India</h4>
            <br>
            <center><a href="article1.php"> <button type="submit" class="btn btn-success">Explore</button></a></center>

                    </div>
                </div> 

                <div class="col-sm article_4">
                    <div class="form-group">
                        <h2 class="heading">Malnutrition in india</h2>


            <h6>India is one of the world’s largest producers of milk & pulses and ranks
                as the second-largest producer of rice, wheat, sugarcane, groundnut, vegetables,
                fruits,green vegetables and cotton as per the FAO. </h4>
            <br>
            <center><a href="article3.php"> <button type="submit" class="btn btn-success">Explore</button></a></center>
            </div>
        </div>
    </div>
</div>

                                       <!-- edit3 end -->


    </span>
    <br>
    <br>
    <br>
    <br>
    <div id="social_links">
        Social Links
        <br>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>

    </div>
    <br>
    <br>
    <br>


</body>
</body>
</body>