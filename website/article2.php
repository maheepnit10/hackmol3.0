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

     <!-- BOOTSTRAP CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/article2style.css">
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
        
        <a href=<?= $url ?>><span id="home" class="top">Home</span></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a
            href="ourmission.php" style="text-decoration: none;color: rgb(255, 255, 255);">Our
            Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
            style="text-decoration:none; color: white;">How we
            work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <span id="contact_us" class="top"><a href="contact-us.php" style="text-decoration: none; color: white;">Contact
            us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a href="FAQ's.php"
            style="text-decoration: none; color: rgb(255, 255, 255);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <!-- <a href="login.php"><button type="button" class="btn btn-danger">Login</button></a>&nbsp -->
</nav>
</header>



<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 top_quote">
                <div class="form-group">
                <img src="photos/article2.jpg" width="600" height="400">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group quote_right">
                    <br><br><br><br>
                    <h4>"We know that a peaceful world cannot long exist,<br>one-third rich and two-third hungry"</h2>
                </div>
            </div>
        </div>
    </div>
 </header>
                                                   
                                                   <!-- edit2 ends -->


       
    <br>
    <br>
    <br>
    <br>
    <div id="content">
        <form id="content_bracket"><em>
            India was home to the largest number of undernourished people in the world even before the Covid-19
            pandemic. The pandemic and failure on the part of state to combat its effects, has led to a significant
            increase in the prevalence of hunger and food insecurity in the country. According to the data presented in
            the report. In absolute terms, the number of persons facing moderate to severe food insecurity has increased
            by about 9.7 crore since the outbreak of Covid. The irony is that this happened when the government had an
            unprecedented 100 million tonnes of food grains in its godowns — larger than the food stocks of any country.
            The country with the largest stock of grain in the world — 120 million tonnes as of July 1, 2021 — accounts
            for a quarter of the world’s food-insecure population. South Asia alone accounts for 36 per cent of global
            food insecurity. Despite being self-sufficient in the production of major food commodities, problems of
            hunger and food insecurity are grave in India because of widespread economic distress, high unemployment and
            high levels of inequality.
        </form></em>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>