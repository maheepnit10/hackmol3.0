<?php
session_start();  //knows if signed in or not.
include("PHP/connection.php");
include("PHP/functions.php");

if (isset($_SESSION['user_id'])){
  $url="main_l.php";
}
else{
  $url="main.php";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/article1style.css">
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
    <div id="top_quote">



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
        <span id="home" class="top"><a href="<?= $url ?>" style="text-decoration: none; color: black;">Home</a></span>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a href="ourmission.php"
                style="text-decoration: none;color: rgb(0, 0, 0);">Our
                Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a
                href="howwework.php" style="text-decoration:none; color: rgb(0, 0, 0);">How we
                work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="contact_us" class="top"><a href="contact-us.php"
                style="text-decoration: none; color: rgb(0, 0, 0);">Contact us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span
            id="FAQ" class="top"><a href="FAQ's.php"
                style="text-decoration: none; color: rgb(0, 0, 0);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="login.php"><input type="button" value="LOGIN" id="login_button"></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="quote">
            "There are people in the world so hungry,that god<br> cannot appear to them except in the form of<br> bread"
        </div>
        <br>

        <div id="quote_end"> -Mahatama Gandhi</div>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="content">
        According to FAO estimates in ‘The State of Food Security and Nutrition in the World, 2020<br> report, 189.2
        million people are undernourished in India. By this measure 14% of the<br> population is undernourished in
        India.
        Further according to the report 34.7% of the children<br> aged under five in India are stunted (too short for
        their age), while 20% suffer from wasting,<br> meaning their weight is too low for their height. Malnourished
        children have a higher risk of<br> death from common childhood illnesses such as diarrhoea, pneumonia, and
        malaria.
        “The<br> world’s hunger is getting ridiculous. There is more fruit in a rich man’s shampoo than in a<br> poor
        man’s plate”
        The Global Hunger Index 2020 ranks India at 101 out of 116.Though the<br> government has surplus of food grains,
        there is calorific deficiency because the allocation<br> and distribution is not proper. Even the yearly budget
        allocated is not fully utilised. Every<br> night, one out of seven people on the planet go to bed hungry. As the
        Covid-19 pandemic has<br> exacerbated the poverty and hunger crisis, the situation in India looks particularly
        grim.

    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="graph">
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
    <br>
    <br>
    <br>
</body>