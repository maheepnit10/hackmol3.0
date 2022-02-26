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
    <title>FOOD SAVIORS</title>
    <!-- GOOGLE FONTS -->

     <!-- BOOTSTRAP CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
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
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <!-- CSS -->
    <link rel="stylesheet" href="css/contact-us.css">
</head>

<body>
                                                 <!-- edit.. -->
    <header>
        <nav>
        
            <a href="<?= $url ?>" style="text-decoration: none;color:rgb(255,255,255);">Home</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a
            href="ourmission.php" style="text-decoration: none;color: rgb(255, 255, 255);">Our
            Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
            style="text-decoration:none; color: white;">How we
            work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <span id="contact_us" class="top"><a href="contact-us.php" style="text-decoration: none; color: white;">Contact
            us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a href="FAQ's.php"
            style="text-decoration: none; color: rgb(255, 255, 255);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</nav>
</header>                         
                          <!-- edit -->
    <br>
   

    <div class="heading">Our Team</div><br>
    <hr>
    <div class="person">
        <img class="profile" src="photos/chandan">
        <br>
        <h1>Chandan Soni &nbsp;<br><br>
            <a href="https://instagram.com/chandansonyyy?utm_medium=copy_link"><img
                    src="photos/ig-instagram.svg"></a>&nbsp;
            <a href="https://www.linkedin.com/in/chandan-soni-256190223"><img src="photos/linkedin.png"></a>
        </h1><br>
    </div>
    <div class="person">
        <img class="profile" src="photos/kavish.png">
        <h1>Kavish Soni&nbsp;<br><br>
            <a href=""></a><img src="photos/ig-instagram.svg">&nbsp;
            <a href=""></a><img src="photos/linkedin.png">
        </h1><br>
    </div>
    <div class="person">
        <img class="profile" src="photos/maheep.png">
        <h1>Maheep Nigam&nbsp;<br><br>
            <a href="https://instagram.com/maheep_1001?utm_medium=copy_link"><img
                    src="photos/ig-instagram.svg"></a>&nbsp;
            <a href="https://www.linkedin.com/in/maheep-nigam-999425232"><img src="photos/linkedin.png"></a>
        </h1><br>
    </div>
    <div class="person">
        <img class="profile" src="photos/ritesh.png">
        <h1>Ritesh Singh&nbsp;<br><br>
            <a href="https://instagram.com/ritesh_singh_27?utm_medium=copy_link"><img
                    src="photos/ig-instagram.svg"></a>&nbsp;
            <a href="https://www.linkedin.com/in/ritesh-singh-692a23227"><img src="photos/linkedin.png"></a>
        </h1><br>
    </div>

    <div class="person">
        <img class="profile" src="photos/shivramkrishna.png">
        <h1>Shivramkrishna Tiwari&nbsp;<br><br>
            <a href="https://instagram.com/srkt.1211?utm_medium=copy_link"><img src="photos/ig-instagram.svg"></a>&nbsp;
            <a
                href="https://www.linkedin.com/in/shivramkrishna-tiwari-860a49223?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BVQXU7C7rT8uNDJ0P3EOyqg%3D%3D"><img
                    src="photos/linkedin.png"></a>
        </h1><br>
    </div>

    <div class="contact">
        <img src="photos/phone-call.png">
        <emphasis>call us @</emphasis><strong>2534305182,29572029100</strong><br>
        <img src="photos/gmail.png">
        <emphasis>mail us @ </emphasis><strong>FoodSaviours@gmail.com</strong><br>
    </div>
</body>

</html>
