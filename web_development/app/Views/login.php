<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style_login_signup.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login Account</title>
</head>
<body>
    <div class="header">
        <img src="assets/img/logo.png" alt="">
    </div>
    <div class="main">
        <div class="leftside">
            <h2>Welcome Back !</h2>
            <img src="assets/img/ilustrasiDua.png" alt="">
        </div>
        <div class="form">
            <h2>Login to Your Account</h2>
            <button id="button">
                <img src="assets/img/google.png" alt="" style="width: 20px; height: 20px; margin-right: 10px;">
                Login with Google
            </button>
            <p>-OR-</p>
            <div class="formPage">
                <label for="">Email</label>
                <input type="text" id="email">
                <label for="">Password</label>
                <input type="password" id="password">
                
            </div>
            <div class="forgotPass">
                <a href="#">Forgot Password</a>
            </div>
            <button id="buttonSubmit">Log In</button>
            <div class="changeOption">
                <p id="question">Don't have an Account?</p>
                <a href="signupPage.html">Create Account</a>
            </div>
        </div>
    </div>
</body>
</html>