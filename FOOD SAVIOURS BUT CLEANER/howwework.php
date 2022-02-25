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
  <link rel="stylesheet" href="css/howweworkstyle.css">
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
  <span id="home" class="top"><a href="<?= $url ?>"
      style="text-decoration: none; color: rgb(0, 0, 0);">Home</a></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span
    id="our mission" class="top"><a href="ourmission.php" style="text-decoration: none; color: black;">Our
      Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top">How we
    work</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <span id="contact_us" class="top"><a href="contact-us.php"
      style="text-decoration: none; color: rgb(0, 0, 0);">Contact us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span
    id="FAQ" class="top"><a href="FAQ's.php"
      style="text-decoration: none; color: black;">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="button" value="LOGIN" id="login_button">
  <br>
  <br>
  <br>
  <br>
  <form id="heading">
    HOW WE WORK
  </form>
  <br>
  <br>
  <br>
  <div>
    <div>
      <form id="content">We at <span id="highlight">FOOD SAVIOURS</span> believe that food is the basic right for
        everyone whether it is human or animal.
        It protects the right of all human beings to live in dignity, free from hunger,food insecurity and malnutrition.
        The right to food is not about charity, but about ensuring that all people have the capacity to feed themselves
        in dignity.
        India although being self-sufficient in terms of food supply has a huge disparity in food distribution.
        Around 60% of food in large scale events and 40% of food in small scale events goes to waste.
        This food if distributed properly can feed multiple underprivilliged families for more than a week.
        Our organisation strives to fill this gap in the rising food insecurity that is prevalent in our country today.
      </form>
    </div>
    <br><br><br><br>

    <form id="heading2">We take the following steps to fullfill our mission:</form>
    <br>


    <form id="points">1. We gather information through our website where the extra food is available,we also collect
      data such as the amount and date of event to ensure that the food is enough and fit for consumption.<br><br>

      2. Our team reaches at the place and collects the food.<br><br>

      3. We put up a small langar of the collected food and also distribute it with the help of moving vans.<br><br>

      4. We also contact the NGOs and local agencies, which work to feed the people,to help distribute the collected
      food.<br><br>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <form id="endline">Through our website we want and encourage you,the user, to come forward and lend your hands
      towards our mission, for individually we are one drop, but together we are an ocean.</form>


  </div>
</body>