<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="assets/css/login_signup.css">
</head>

<body>
    <div class="container">
        
        <!-- Create Acoount Form -->
        <form action="#" method="POST" class="form" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name="uname" autofocus placeholder="Username">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="psd" autofocus placeholder="Password">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
            </div>
            <button class="form__button" type="submit" id="btn" name="sbt" default>SignUp</button>

            <p class="form__text">
                <a class="form__link" href="login.php" id="lackToLogin">Login</a>
            </p>
        </form>
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


    if (isset($_POST['sbt'])) {

        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['psd'];

        $query = "INSERT INTO login (username, email, password) values ('$username','$email','$password') ";
        $data = mysqli_query($con ,  $query);


        //insert check remove at last
        if ($data) {
            echo "Data Inserted";
        } else {
            echo "NO Data Inserted";
        }
        
    }


?>