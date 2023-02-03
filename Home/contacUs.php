<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../assets/css/contactUs.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .btn{
      color: #fff;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #3e2093;
      cursor: pointer;
      transition: all 0.3s ease;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Sector 32,Chandigarh</div>
          <div class="text-two">160101</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 998-XXX-5689</div>
          <div class="text-two">+91 899-XXX-1234</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">sdcollege@gmail.com</div>
          <div class="text-two">info.shudh25@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
          here. It's my pleasure to help you.</p>
        <form action="#" method="POST">
          <div class="input-box">
            <input type="text" placeholder="Enter your name" name="cuname">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email" name="cemail">
          </div>
          <div class="input-box message-box">
            <textarea placeholder="Enter your message" name="cmsg" require></textarea>
          </div>
          <div class="button">
            <input class="btn" type="submit" value="Send Now" name="sendmsg">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>

<?php

// $con = mysqli_connect("localhost","root","","login_db");
$con = mysqli_connect("sql302.epizy.com","epiz_33513646","ajZu49CM5fpwEiL","epiz_33513646_login_db");


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


    if (isset($_POST['sendmsg'])) {

        $name = $_POST['cuname'];
        $email = $_POST['cemail'];
        $message = $_POST['cmsg'];

        $query = "INSERT INTO contactus (name, email, message) values ('$name','$email','$message') ";
        $data = mysqli_query($con ,  $query);


        //insert check remove at last
        if ($data) {
            echo "Data Inserted";
        } else {
            echo "NO Data Inserted";
        }
        
    }


?>