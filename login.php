<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=db-zenius", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }

    $STH = $conn->query('SELECT email, password from user');
    # setting the fetch mode
    $STH->setFetchMode(PDO::FETCH_ASSOC);

    $email = array();
    $password = array();
    $user_data = array();

    while($row = $STH->fetch()) {
        $email = $row['email'];
        $password = $row['password'];
        // $data = array($email=>$password);

        $user_data[$email] = $password;
    }

    $user_data_encode = json_encode($user_data);
    // var_dump($user_data);
    $conn=null;
?>


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
                <input type="email" id="email">
                <label for="">Password</label>
                <input type="password" id="password">

            </div>
            <div class="forgotPass">
                <a href="#">Forgot Password</a>
            </div>
            <button id="buttonSubmit" onclick='dataChecking()'>
                Log In
                <!-- <a id="bSubmit" href="#">Log In</a> -->
            </button>
            <div class="changeOption">
                <p id="question">Don't have an Account?</p>
                <a href="signupPage.php">Create Account</a>
            </div>
        </div>
    </div>

    <script>
        // var user_data = <?php echo $user_data_encode; ?>; // Success
        // console.log(user_data);

        function dataChecking(){
            var user_data = <?php echo $user_data_encode; ?>; // Success
            var is_email_valid=true, is_password_valid=true;
            var email_input, password_input;

            email_input = document.getElementById('email').value;
            password_input = document.getElementById('password').value;
            
            if(typeof user_data[email_input]=='undefined'){
                is_email_valid=false;
                is_password_valid=false;
            }
            else{
                is_email_valid=true;
                if(password_input==user_data[email_input]){
                    is_password_valid=true;
                }else{
                    is_password_valid=false;
                }
            }
            
            if(is_email_valid && is_password_valid){
                console.log('Masuk');

                // button_div = document.getElementById('buttonSubmit');
                // newlink = document.createElement('a');
                // newlink.setAttribute('href', '/afterLogin.php');
                // button_div.appendChild(newlink);  

                // document.cookie="username = COOKIE;expires=Sun, 28 Nov 2018 13:15:00 UTC";
                document.cookie=`${email_input}-${password_input}`;
                
                var session = document.cookie;
                console.log(session);

                document.getElementById("buttonSubmit").onclick = function(){
                    location.href = "afterLogin.php";
                };

                
            } else if (is_email_valid && (is_password_valid==false)) {
                alert("SALAH PASSWORD WEEE !!!");
            } else {
                alert("SALAH PASSWORD SAMA EMAIL WEEEE TOLONGGG !!!");
            }

            // console.log(is_email_valid);
            // console.log(is_password_valid);
        }


    </script>
</body>

</html>