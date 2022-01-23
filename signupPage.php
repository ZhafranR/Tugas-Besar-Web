<?php
require 'func_signup.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    if (signup($_POST) > 0) {
        echo "
        <script>
            alert('Kamu berhasil membuat akun!');
            document.location.href = 'afterSignup.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Kamu gagal membuat akun!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
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
    <title>Create Account</title>
</head>

<body>
    <div class="header">
        <img src="assets/img/logo.png" alt="">
    </div>
    <div class="main">
        <div class="leftside">
            <h2>
                Prepare yourself to <br />
                Join Our Super Class <br />
                and Get Special Offer !

            </h2>
            <img src="assets/img/ilustrasiDua.png" alt="">
        </div>
        <div class="form">
            <h2>Create Your Account</h2>
            <button id="button">
                <img src="assets/img/google.png" alt="" style="width: 20px; height: 20px; margin-right: 10px;">
                Connect with Google
            </button>
            <p>-OR-</p>
            <div class="formPage">
                <form action="" method="post">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email-signup">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password-signup">
                    <div class="check">
                        <input type="checkbox" id="checkbox" name="checkbox">
                        <label for="checkbox">
                            By creating an account, you’re <br />
                            agreed to the Terms & Conditions <br />
                            and Privacy Policies <br />
                        </label>
                    </div>
                    <button id="buttonSubmit" type="submit" name="submit">
                        Create Account
                    </button>
                </form>
            </div>

            <div class="changeOption">
                <p id="question">Already have an Account?</p>
                <a href="login.php">Log In</a>
            </div>
        </div>
    </div>

    <script>
        // // var session = document.cookie;
        // // console.log(session);
    </script>
</body>

</html>