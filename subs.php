<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />


  <link rel="stylesheet" href="assets/css/style_subs.css" />

  <title>Subscription</title>
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

  <!-- content -->
  <div class="container mt-4">
    <div class="row" style="align-content: space-between; gap: 48px;">
      <!-- BASIC SUBSCRIPTION -->
      <div id="basic" class="col colborder">
        <h2 class="basic-header">BASIC</h2>
        <h1 class="basic-price">Rp 500.000,-</h1>
        <div class="basic-border">
          <p class="basic-text">Masa Berlangganan<br>3 Bulan</p>
          <div class="basic-textin">
            <p class="basic-profit">Keuntungan : </p>
            <ol class="basic-list">
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
            </ol>
          </div>
        </div>
        <button class="btn-beli" href="#">
          <a id="buttonBeli" href="pembayaran-basic.php" style="text-decoration: none; color:white">BELI</a>
        </button>
      </div>
      <!-- STANDARD SUBSCRIPTION -->
      <div id="standard" class="col colborder">
        <h2 class="standard-header">STANDARD</h2>
        <h1 class="standard-price">Rp 800.000,-</h1>
        <div class="standard-border">
          <p class="standard-text">Masa Berlangganan<br>6 Bulan</p>
          <div class="standard-textin">
            <p class="standard-profit">Keuntungan : </p>
            <ol class="standard-list">
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
            </ol>
          </div>
        </div>
        <button class="btn-beli" href="#">
          <a id="buttonBeli" href="pembayaran-standard.php" style="text-decoration: none; color:white">BELI</a>
        </button>
      </div>
      <!-- PREMIUM SUBSCRIPTION -->
      <div id="premium" class="col colborder">
        <h2 class="premium-header">PREMIUM</h2>
        <h1 class="premium-price">Rp 1.000.000,-</h1>
        <div class="premium-border">
          <p class="premium-text">Masa Berlangganan<br>12 Bulan</p>
          <div class="premium-textin">
            <p class="premium-profit">Keuntungan : </p>
            <ol class="premium-list">
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
              <li>
                Lorem ipsum dolor sit amet.
              </li>
            </ol>
          </div>
        </div>
        <button class="btn-beli">
          <a id="buttonBeli" href="pembayaran-premium.php" style="text-decoration: none; color:white">BELI</a>
        </button>
      </div>
    </div>
  </div>

  <!-- end of content -->

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