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

    .title {
      grid-area: title;
      margin-right: 100px;
    }

    .title h1 {
      text-align: center;
    }

    .form-right {
      margin-right: 50px;
      grid-area: form-right;
    }

    .form-left {
      grid-area: form-left;

    }

    .parent {
      background-color: #b5daf7;
      border-radius: 20px;
      padding-top: 40px;
      padding-bottom: 30px;
    }

    /* Basic subs style */

    .basic-header {
      background-color: #5dce31;
      border-radius: 10px;
      text-align: center;
      margin: 0px;
      padding: 16px 0px;
    }

    .basic-price {
      text-align: center;
    }

    .basic-border {
      background-color: rgba(93, 206, 49, 0.24);
      color: #5dce31;
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
    .payment-method {
      grid-area: payment-method;
      padding: 2px;

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

    /*the container must be positioned relative:*/
    .custom-select {
      position: relative;
      font-family: 'Poppins', sans-serif;
    }

    .custom-select select {
      display: none;
      /*hide original SELECT element:*/
    }

    .select-selected {
      background-color: #233863;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
      position: absolute;
      content: "";
      top: 14px;
      right: 10px;
      width: 0;
      height: 0;
      border: 6px solid transparent;
      border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
      border-color: transparent transparent #fff transparent;
      top: 7px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,
    .select-selected {
      color: #ffffff;
      padding: 8px 16px;
      border: 1px solid transparent;
      border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
      cursor: pointer;
      user-select: none;
    }

    /*style items (options):*/
    .select-items {
      position: absolute;
      background-color: DodgerBlue;
      top: 100%;
      left: 0;
      right: 0;
      z-index: 99;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
      display: none;
    }

    .select-items div:hover,
    .same-as-selected {
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>

  <title>Pembayaran</title>
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
          </div>
          <!--Judul-->
          <div class="title">
            <h1>RINCIAN PEMBAYARAN</h1>
          </div>
          <div class="payment-method">

            <h2>Metode Pembayaran</h2>

            <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
            <div class="custom-select" style="width:200px;">
              <select>
                <option value="0">Pilih:</option>
                <option value="1">Virtual Account</option>
                <option value="2">Ovo</option>
                <option value="3">Minimarket</option>
              </select>
            </div>

            <script>
              var x, i, j, l, ll, selElmnt, a, b, c;
              /*look for any elements with the class "custom-select":*/
              x = document.getElementsByClassName("custom-select");
              l = x.length;
              for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /*for each element, create a new DIV that will act as the selected item:*/
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /*for each element, create a new DIV that will contain the option list:*/
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < ll; j++) {
                  /*for each option in the original select element,
                  create a new DIV that will act as an option item:*/
                  c = document.createElement("DIV");
                  c.innerHTML = selElmnt.options[j].innerHTML;
                  c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                      if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                          y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                      }
                    }
                    h.click();
                  });
                  b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function(e) {
                  /*when the select box is clicked, close any other select boxes,
                  and open/close the current select box:*/
                  e.stopPropagation();
                  closeAllSelect(this);
                  this.nextSibling.classList.toggle("select-hide");
                  this.classList.toggle("select-arrow-active");
                });
              }

              function closeAllSelect(elmnt) {
                /*a function that will close all select boxes in the document,
                except the current select box:*/
                var x, y, i, xl, yl, arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                xl = x.length;
                yl = y.length;
                for (i = 0; i < yl; i++) {
                  if (elmnt == y[i]) {
                    arrNo.push(i)
                  } else {
                    y[i].classList.remove("select-arrow-active");
                  }
                }
                for (i = 0; i < xl; i++) {
                  if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                  }
                }
              }
              /*if the user clicks anywhere outside the select box,
              then close all select boxes:*/
              document.addEventListener("click", closeAllSelect);
            </script>

          </div>
          <div class="form-left">
            <h3 class="form-text">Email Pengguna</h3>
            <p class="f-email" name="email">email@email.com</p>
            <h3 class="form-text">Nama Paket</h3>
            <p class="f-paket">Paket Basic</p>
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
          <a href="redirect"></a>
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

    // var x = document.getElementByClass("pm-button");
    // console.log(x)
  </script>
</body>

</html>