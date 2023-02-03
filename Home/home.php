<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <!-- <h1>Welcome...! Home</h1> -->

    <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CamDetail</a>
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="gallary.php">Gallary</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contacUs.php">Contact</a></li>
        <li><a href="../logout process.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">If you can see it, </div>
    <div class="sub_title">You can shoot it </div>
    <div class="btns">
      <a href="gallary.php"><button>Learn More</button></a>
      <a href="contacUs.php"><button>Contact Us</button></a>
    </div>
  </div>

    


</body>
</html>