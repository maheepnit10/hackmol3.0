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




    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <span id="home" class="top">Home</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a
            href="ourmission.php" style="text-decoration: none;color: rgb(255, 255, 255);">Our
            Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
            style="text-decoration:none; color: white;">How we
            work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
    <span id="contact_us" class="top"><a href="contact-us.php" style="text-decoration: none; color: white;">Contact
            us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a href="FAQ's.php"
            style="text-decoration: none; color: rgb(255, 255, 255);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="login.php"><input type="button" value="LOGIN" id="login_button"></a>
    <a href="signup.php"><input type="button" value="SIGNUP" id="login_button"></a>
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
    
    <span id="heading1">ANNADATA SUKHIBHAVA</span>
    <br>
    <br>
    <br>


    <div id="heading2">HELP THE POORS</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="donatediv">
        <a href="dono_nl.php"><input type="button" value="DONATE" id="donate_button"></a>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <span>

        <form class="article1" id="firstarticle">
            <h2 class="heading">Food Wastage In India</h2>
            <h4>Despite adequate food production, the UN Food and
                Agriculture Organisation has reported that about 190
                million Indians remain undernourished. Moreover, it states
                that every third malnourished child is Indian</h4>
            <br>
            <a href="article4.php"> <input type="button" value="Explore More &#8594 " class="readmore1" "></a>
        </form>


        <form class=" article1" id="secondarticle">
                <h2 class="heading">Food Insecurity</h2>
                <h4>India was home to the largest number of undernourished people
                    in the world even before the Covid-19 pandemic. The pandemic
                    and failure on the part of state to combat its effects, has
                    led to a significant</h4>
                <br>
                <a href="article2.php"> <input type="button" value="Explore More &#8594 " class="readmore1"></a>
        </form>

        <form class="article1" id="thirdarticle">
            <h2 class="heading">Hunger In India</h2>


            <h4>According to FAO estimates in ‘The State of Food Security and Nutrition in
                the World, 2020 report, 189.2 million people are undernourished in India.
                By this measure 14% of the population is undernourished in
                India</h4>
            <br>
            <a href="article1.php"> <input type="button" value="Explore More &#8594 " class="readmore1"></a>
        </form>

        <form class="article1" id="fourtharticle">
            <h2 class="heading">Malnutrition in india</h2>
            <h4>India is one of the world’s largest producers of milk & pulses and ranks
                as the second-largest producer of rice, wheat, sugarcane, groundnut, vegetables,
                fruits, and cotton as per the FAO.Despite the status, 14 percent of India’s </h4>
            <br>
            <a href="article3.php"><input type="button" value="Explore More &#8594 " class="readmore1"></a>
        </form>


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