<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_berhasil_daftarKelas.css" />
    <title>Pendaftaran Kelas Berhasil</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="topnav" id="myTopnav">
                <a class="navbar-title" href="index.php"> RuangZenius </a>
                <ul class="navbar-nav ms-auto" style="float: right">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary btn-navbar" href="index.php">Logout</a>
                    </li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <div class="container mt-4">

        <div class="parent">
            <div class="home">
                <div class="row" style="align-content: space-between; gap: 48px;">
                    <div class="headerTxt">
                        <h1>PENDAFTARAN KELAS BERHASIL</h1>
                    </div>
                </div>
                <div class="row" style="align-content: space-between; gap: 48px;">
                    <div class="img-loading">
                        <center><img src="assets/img/kelasberhasil.png" alt="success-class" /></center>
                    </div>
                </div>
                <div class="desc">
                    <center>
                        <p>Selamat! Kamu berhasil terdaftar ke dalam kelas di RuangZenius. <br>
                            Nikmati layanannya dan tingkatkan keahlianmu.</p>
                    </center>

                </div>
                <button class="button-back">
                    <a href="afterLogin.php">Kembali</a>
                </button>
            </div>
        </div>
    </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>