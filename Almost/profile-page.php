<?php

session_start();  //knows if signed in or not.
include("connection.php");
include("functions.php");

$user_data=check_login($con);
$user_data1=check_dono($con);

if($user_data['gender']==0){
  $img_src="photos/man (1).png";
}
else if ($user_data['gender']==1){
  $img_src="photos/woman.png";
}
else{
  $img_src="photos/lgbt.png";
}

$msg=rand_msg();

if(!isset($del)){
$del=rand_del();
}

if(isset($user_data1['name'])){
$times=$user_data1['times'];
$people=$times*5+7;
$amount=$times*3+5;
}

$query="select * from messages where id= '$msg'"; 
$result=mysqli_query($con,$query);
$message=mysqli_fetch_assoc($result);
$m=$message['message'];

$query1="select * from delivery where del_id= '$del' limit 1"; 
$result1=mysqli_query($con,$query1);
$del_data=mysqli_fetch_assoc($result1);
$del_name=$del_data['del_name'];
$del_contact=$del_data['del_contact'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="script.js" defer></script>
  <link href="style1.css" rel="stylesheet">
  <title>Tabs</title>
</head>
<body>
    <div class="header">
        <img  id="pp" src="<?php echo"$img_src"; ?>">
       <div id="username"><?= $user_data['username']?></div> <br><br>
       
    </div>
    
  <ul class="tabs">
    <li data-tab-target="#about" class="active tab">About</li>
    <li data-tab-target="#pick-up" class="tab">Pick-up</li>
    <li data-tab-target="#history" class="tab">History</li>
    <li data-tab-target="#happy-messages" class="tab">Happy Messages</li>
  </ul>

  <div class="tab-content">
    <div id="about" data-tab-content class="active">
      <div class="about-content">
        
        <img class="stat-img" src="photos/telephone.png">
        <div class="stat-text">Mobile Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo ("$user_data1[contact]");} ?></div>
        &nbsp;&nbsp;
        <img class="stat-img" src="photos/email.png">
        <div class="stat-text">Mail id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo ("$user_data[usermail]");} ?></div>
        &nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <div class="about-content">
        <img class="stat-img" src="photos/binge-eating.png">
        <div class="stat-text">People Feeded: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!isset($user_data1['name']) || $times==0){echo ("0") ;}else{echo ("$people");} ?></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
        <img class="stat-img" src="photos/food (1).png">
        <div class="stat-text">Food Donated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!isset($user_data1['name'])|| $times==0){echo ("0") ;}else{echo ("$amount");} ?>&nbsp;kg</div>
      </div>
      <div class="about-content">
        <img class="stat-img" src="photos/donate.png">
        <div class="stat-text">Number of donations: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!isset($user_data1['name'])){echo ("0") ;}else{echo ("$times");} ?></div>
      </div>

    </div>

    <div id="pick-up" data-tab-content>
      <div class="picker">
      <img  class="picker-img" src="photos/delivery.png">
      <div class="picker-man">Name:<?= $del_name;?><br><br>Contact:<?=$del_contact ?><br><br>OTP:<?= random_num_static()?></div>
      </div> 
    </div>

    <div id="history" data-tab-content>
     <table>
       <tr>
         <td><strong>Date</strong></td>
         <td><strong>Place</strong></td>
         <td><strong>Food(in kg)</strong></td>
         <td><strong>People feeded</strong></td>
       </tr>
       <tr >
         <td><?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo ("$user_data1[date]");}?></td>
         <td><?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo ("$user_data1[location_1]");}?></td>
         <td><?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo "$amount";}?></td>
         <td><?php if(!isset($user_data1['name'])){echo ("N/A") ;}else{echo ("$people");}?></td>
       </tr>
     </table>
    </div>

    <div id="happy-messages" data-tab-content>
      <h2><?= $m;?></h2>
        
    </div>

  </div>


    </body>
</html>
