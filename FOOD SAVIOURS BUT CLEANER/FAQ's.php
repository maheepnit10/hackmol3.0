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
  <link rel="stylesheet" href="css/faqstyle.css">
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
  <span id="home" class="top"><a href="<?= $url ?> "
      style="text-decoration: none; color: rgb(0, 0, 0);">Home</a></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span
    id="our mission" class="top"><a href="ourmission.php" style="text-decoration: none; color: black;">Our
      Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
      style="text-decoration:none; color: rgb(0, 0, 0);">How we
      work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <span id="contact_us" class="top"><a href="contact-us.php"
      style="text-decoration: none; color: rgb(0, 0, 0);">Contact us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span
    id="FAQ" class="top">FAQ</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="login.php"><input type="button" value="LOGIN" id="login_button"></a>
  <br>
  <br>
  <br>

  <div id="heading">Frequently asked questions</div>
  <br>
  <br>
  <br>
  <div id="content">
    <div>Q1 What is "FOOD SAVIOURS"?</div>
    <div>A1 "FOOD SAVIOURS" is an organisation focused on preventing food wastage and feeding the needy through various
      camps and moving vans.</div>
    <br>
    <hr>
    <br>
    <div>Q2 What do "FOOD SAVIOURS" work ?</div>
    <div>A2 It rescues surplus food from parties,commercial kitchens and homes; and then dsitribute it through its camps
      and various non-profit-organisations connected with us.</div>
    <br>
    <hr>
    <br>
    <div>Q3 What is food rescue?</div>
    <div> A3 food rescue program picks up excess prepared and perishable food from food establishments and professional
      kitchens and redistributes it to others who can use it. </div>
    <br>
    <hr>
    <br>
    <div>Q4 Where does the food go?</div>
    <div>A4 Rescued food is taken to a variety of not-for-profit agencies and our feeding camps to feed hungry people.
      Food is transported in our refrigerated vehicles to more than 250 local agencies, including:our camps, food
      pantries, daycare centers, senior centers, substance abuse and rehabilitation programs, churches and agencies
      helping support the working poor.</div>
    <br>
    <hr>
    <br>
    <div>Q5 What makes "FOOD SAVIOURS" different from a food bank?</div>
    <div>A5 "FOOD SAVIOURS" redistributes only fresh, wholesome foods, which it delivers on the day it is received. Food
      banks typically collect, warehouse and distribute canned and non-perishable foods. Unlike some food banks, "FOOD
      SAVIOURS" never charges a fee to the recipient agencies for the food it delivers.</div>
    <br>
    <hr>
    <br>
    <div>Q6 If it is good food, why isn't it consumed?</div>
    <div>A6 Overbuying, incorrect anticipation of consumer choices, manufacturing and distribution issues and weather
      conditions can create food overages.</div>
    <br>
    <hr>
    <br>
    <div>Q7 Do we or our local agencies take any kind of money while picking up food?</div>
    <div>A7 No,we do not ask for money neither any of our team does while picking the food.We do this work to serve the
      mankind.If any person asks for the money in name of organisation then do not give any money and immediately
      contact us so that such type of fraud people can be caught.</div>
    <br>
    <hr>
    <br>
    <div>Q8 What is food insecurity?</div>
    <div>A8 Limited or uncertain availability of nutritionally adequate food.</div>
    <br>
    <hr>
    <br>
    <div>Q9 Who is hungry?</div>
    <div>A9 Sadly, 14 in 100 Indians does not have enough food to eat and requires emergency food assistance. And, 1 in
      3 children is born into food insecure households.
      Women in food insecure households frequently are at the greatest risk, depriving themselves of nutritionally
      adequate foods to make those foods available to their children and husbands.</div>
    <br>
    <hr>
    <br>
    <div>Q10 Why is it more efficient to give to "FOOD SAVIOURS" rather than give food directly to a pantry?</div>
    <div>A10 Because "FOOD SAVIOURS" delivers to more than 250 agencies, which distribute the food to needy people
      immediately, so that they can have fresh food and we can halp more and more needy people .</div>
    <br>
    <hr>
    <br>
    <div>Q11 How can I donate food?</div>
    <div>A11 You can just fill our donation form with some minor enteries and donate directly or you can login to our
      site for frequent donations and receive joy of feeding other with minimum efforts.</div>
  </div>
</body>