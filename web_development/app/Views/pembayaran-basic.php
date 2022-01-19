<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style_pembayaran.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Pembayaran</title>
</head>
<body>
     <!-- navbar -->
     <nav class="navbar">
        <div class="container">
          <div class="topnav" id="myTopnav">
            <a class="navbar-title" href="index.html"> RuangZenius </a>
            <ul class="navbar-nav ms-auto" style="float: right">
              <li class="nav-item">
                <a class="nav-link btn btn-primary btn-navbar" href="index.html">Logout</a>
              </li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>
      </nav>
      <!-- end of navbar -->

      <!--content-->
      <div class="container mt-4">
        <div class="row" style="align-content: space-between; gap: 48px;">
            <div class="parent">
                <div class="card">
                    <div id="basic" class="col colborder">
                        <h2 class="basic-header">BASIC</h2>
                        <h1 class="basic-price">Rp 500.000,-</h1>
                        <div class="basic-border">
                          <p class="basic-text">Masa Berlangganan<br>3 Bulan</p>
                          <div class="basic-textin" >
                            <p class="basic-profit" >Keuntungan : </p>
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
                      </div>
                      <!--Judul-->
                      <div class="title">
                        <h1>RINCIAN PEMBAYARAN</h1>
                      </div>
                      <div class="payment-method">
                        <a class="pm-button" href="Pembayaran/pembayaran-credit-card.html">Virtual Account</a>
                        <a class="pm-button" href="Pembayaran/pembayaran-ovo.html">OVO</a></li>
                        <a class="pm-button" href="Pembayaran/pembayaran-minimarket.html">Minimarket</a>
                      </div> 
                      <div class="form-left">
                        <h3 class="form-text">Email Pengguna</h3>
                        <p class="f-email" name="email">email@email.com</p>
                        <h3 class="form-text">Nama Paket</h3>
                        <p class="f-paket" >Paket Basic</p>
                        <h3 class="form-text">Harga Paket</h3>
                        <p class="f-harga">Rp 500.000,-</p>
                        
                      </div>
                      <div class="form-right">
                        <h3 class="form-text">Tanggal Mulai</h3>
                        <p class="f-datemulai" name="datestart">05/01/2022</p>
                        <h3 class="form-text">Tanggal Selesai</h3>
                        <p class="f-dateakhir" name="dateend">05/04/2022</p>
                      </div>
                        <button class="button">Bayar</button>
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