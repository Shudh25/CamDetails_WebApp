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
        <!-- Login Form -->
        <form action="login process.php" method="POST" class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <!-- Input -->
                <input type="text" class="form__input" id="user" name="username" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <!-- password -->
                <input type="password" class="form__input" id="pass" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit" id="btn" name="login" default>Login</button>
            <!-- EXTRA -->
            <p class="form__text">
                <a href="#" class="form__link">^_^</a>
            </p>


            <p class="form__text">
                <a class="form__link" href="signup.php" id="linkCreateAccount">Don't have an account? Sign Up</a>
            </p>

        </form>
    </div>

</body>

</html>
