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
    <link rel="stylesheet" href="css/article3style.css">
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
        <span id="home" class="top"><a href="<?= $url?>" style="text-decoration: none; color: black;">Home</a></span>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a href="ourmission.php"
                style="text-decoration: none;color: rgb(0, 0, 0);">Our
                Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a
                href="howwework.php" style="text-decoration:none; color: rgb(0, 0, 0);">How we
                work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="contact_us" class="top"><a href="contact-us.php"
            style="text-decoration: none; color: rgb(0, 0, 0);">Contact us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a
                href="FAQ's.php"
                style="text-decoration: none; color: rgb(0, 0, 0);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="login.php"><input type="button" value="LOGIN" id="login_button"></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="quote">
            "There are genuinely sufficient resources in the<br> world to ensure that no one, nowhere, at no time,<br>
            should go hungry."
        </div>
        <br>

        <div id="quote_end"> -Ed Asner</div>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="content">
        <form id="content_bracket">

            India is one of the world’s largest producers of milk & pulses and ranks as the second-largest<br> producer
            of rice, wheat, sugarcane, groundnut, vegetables, fruits, and cotton, as per the Food<br> and Agriculture
            Organization of the United Nations (FAO). Despite the status, 14 percent of<br> India’s population is
            undernourished, according to ‘The State of Food Security and Nutrition in<br> the World, 2020.
            The report states 189.2 million people are undernourished in India 34.7<br> percent of the children aged
            under five in India are stunted. 20 percent of India’s children<br> under the age of 5 suffer from wasting,
            meaning their weight is too low for their height.<br><br>

            ‘‘It is unacceptable that hunger is on the rise at a time when the world wastes more than 1<br> billion
            tonnes of food every year. It is time to change how we produce and consume,<br> including to reduce
            greenhouse emissions. Transforming food systems is crucial for<br> delivering all the Sustainable
            Development Goals. As a human family, a world free of hunger<br> is our imperative.’’- Secretary-General
            António Guterres.<br><br>
            Despite adequate food production, the UN Food and Agriculture Organisation has reported<br> that about 190
            million Indians remain undernourished. Moreover, it states that every third<br> malnourished child is
            Indian.
            Ironically, the same report highlights that around 40% of the<br> food produced in India is either lost or
            wasted. It is further estimated that the value of food<br> wastage in India is around ₹92,000 crores per
            annum.
            This food wastage, however, isn’t<br> limited to one level alone but perforates through every stage; from
            harvesting, processing,<br> packaging, and transporting to the end stage of consumption. Though food wastage
            is
            a<br> global problem, India stands a chance to convert this into an opportunity, if it can address it<br>
            properly.


        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>