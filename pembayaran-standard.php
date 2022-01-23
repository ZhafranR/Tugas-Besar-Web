<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style_pembayaran.css" />
    <style>
      @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
* {
    font-family: 'Poppins', sans-serif;
  }
.container {
    width: 90%;
    margin: auto;
  }
  /* navbar */
  
.topnav {
    overflow: hidden;
  }
  
.topnav a {
    float: left;
    color: black;
  
    display: block;
    text-align: center;
    padding: 14px 0;
    text-decoration: none;
    font-size: 17px;
  }
  
.topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
.topnav a.active {
    background-color: #04aa6d;
    color: white;
  }
  
.topnav .icon {
    display: none;
  }
.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }
  
@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {
      display: none;
    }
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
.navbar a.navbar-title {
    font-weight: 700;
    font-size: 30px;
  }
  
.navbar a.btn.btn-navbar {
    background-color: #ff7048;
    border: 1px solid #ff7048;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    color: white;
    font-size: 16px;
    border-radius: 10px;
    font-weight: 700;
  }
  
.navbar a.btn.btn-navbar:hover {
    background-color: #c74927;
    border-color: #c74927;
    color: white;
  }

.card {
    
    justify-content: space-between;
    display: grid;
    grid-template-areas:
        'colborder title title'
        'colborder payment-method payment-method'
        'colborder form-left form-right'
        'colborder btn btn';
    grid-gap: 10px;
    padding: 10px;
  }
 

.colborder {
    border: 1px solid #b5daf7;
    background-color: white;
    padding: 32px 24px !important;
    border-radius: 30px;
    grid-row: 1/5;
    margin-left: 20px;
    grid-area: colborder;
  }

.title{
    grid-area: title;
    margin-right: 100px;
}
.title h1{
    text-align: center;
}
.form-right {
    margin-right: 50px;
    grid-area: form-right;
}
.form-left {
    grid-area: form-left ;

}

.parent {
    background-color: #b5daf7;
    border-radius: 20px;
    padding-top: 40px;
    padding-bottom: 30px;
  }

/* Basic subs style */

.basic-header {
  background-color: #1ec1df;
  border-radius: 10px;
  text-align: center;
  margin: 0px;
  padding: 16px 0px;
}

.basic-price {
  text-align: center;
}

.basic-border {
  background-color: rgba(29, 191, 223, 0.24);
  color: #1ec1df;
  font-size: 18px;
  line-height: 27px;
  text-align: left;
  font-weight: bold;
  border-radius: 10px;
}

.basic-text {
  text-align: center;
  padding: 32px 56px;
}

.basic-textin {
  margin: 0px 32px;
  padding-bottom: 24px;
}

.basic-profit {
  margin-bottom: 0px;
}

.basic-list {
  padding-left: 18px;
  margin-top: 0px;
}

/*payment method*/
.payment-method{
    grid-area: payment-method;
    padding : 2px;
    
}
.payment-method a {
  background-color: #b5daf7;
  border: 1px solid #233863;
  padding: 5px 30px;
  border-radius: 12px;
  color: black;
  font-weight: bold;
  text-decoration: none;
}
.payment-method a:hover {
    border-radius: 15px;
    background-color: #233863;
    border: 1px solid black;
    color: white;
  }
.button { 
    background-color: #233863;
    border: 1px solid #233863;
    padding: 5px 20px;
    border-radius: 12px;
    color: white;
    font-weight: bold; 
    grid-area: btn;
    margin-left: 250px;
    margin-right: 110px;
}

  
    </style>

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
                        <h2 class="basic-header">STANDARD</h2>
                        <h1 class="basic-price">Rp 800.000,-</h1>
                        <div class="basic-border">
                          <p class="basic-text">Masa Berlangganan<br>6 Bulan</p>
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