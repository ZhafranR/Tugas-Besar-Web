<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <!-- <link rel="stylesheet" href='/public/css/style.css' type="css" /> -->
    <!-- <link href="<?= base_url(); ?>/public/css/style.css" rel="stylesheet" type="text/css"> -->
    <style>
      * {
    font-family: 'Poppins', sans-serif;
  }
  
  
  .container {
    width: 90%;
    margin: auto;
  }
  
  .logo {
    margin-top: 10px;
  }
  
  .header {
    display: flex;
  }
  
  .logo img {
    width: 204px;
    height: 45px;
  }
  
  .header .navigation {
    float: right;
    margin-left: 390px;
    margin-top: 20px;
  }
  
  .header .navigation li {
    float: right;
    margin-left: 27px;
    font-size: 18px;
    display: block;
  }
  
  .header .navigation li a {
    color: black;
    text-decoration: none;
    font-weight: 700;
  }
  
  .header .navigation li a:hover {
    color: #b6b6b6;
  }
  
  #buttonSignUp{
    background-color: #ff7048;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
  }
  
  #buttonSignUp:hover{
    background-color: #fd9f85;
    color: rgb(255, 85, 85);
  }
  
  .home {
    display: flex;
  }
  
  .hero img {
    float: right;
    margin-left: 100px;
  }
  
  .headerTxt {
    margin-left: 60px;
  }
  
  .headerTxt h1 {
    font-size: 5ch;
    font-weight: bold;
  }
  
  .parent {
    background-color: #b5daf7;
    border-radius: 20px;
    padding-top: 40px;
    padding-bottom: 30px;
  }
  
  #buttonSubs {
    background-color: #233863;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight: 600;
    font-size: 16px;
    border-radius: 10px;
  }
  
  #buttonSubs:hover{
    background-color: #6d8dcc;
    color: #22365e;
  }
  
  .rekomendasi p {
    margin: auto;
    text-align: center;
  }
  
  .rekomendasi h3 {
    margin: auto;
    text-align: center;
  }
  
  .rekomendasiKelas {
    display: flex;
  }
  
  .kelas {
    border-radius: 10px;
    border: solid 1px #b5daf7;
    margin: auto;
  }
  
  .kelas img {
    width: 300px;
    margin: 10px;
    border-radius: 10px;
  }
  
  .kelas p {
    text-align: start;
    padding-left: 10px;
    font-weight: 500;
  }
  
  .kelas button {
    margin: 10px;
    background-color: #b5daf6;
    border-radius: 5px;
    color: #040405;
    border: none;
    padding: 5px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }
  
  .reviewKelas {
    display: flex;
  }
  
  .reviewText h3{
    margin: auto;
    text-align: center;
  }
  
  .reviewText p{
    margin: auto;
    text-align: center;
  }
  
  .reviewKelas body {
    text-align: center;
    padding: 30px;
    background: #f8f4f2;
    font-family: Arial;
  }
  
  .a-box {
    display: inline-block;
    width: 240px;
    text-align: center;
    margin: auto;
  }
  
  .img-container {
      height: 230px;
      width: 200px;
      overflow: hidden;
      border-radius: 0px 0px 20px 20px;
      display: inline-block;
  }
  
  .img-container img {
      transform: skew(0deg, -13deg);
      height: 250px;
      margin: -35px 0px 0px -70px;
  }
  
  .inner-skew {
      display: inline-block;
      border-radius: 20px;
      overflow: hidden;
      padding: 0px;
      transform: skew(0deg, 13deg);
      font-size: 0px;
      margin: 30px 0px 0px 0px;
      background: #c8c2c2;
      height: 300px;
      width: 265px;
  }
  
  .text-container {
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
    padding: 120px 20px 20px 20px;
    border-radius: 20px;
    background: #fff;
    margin: -120px 0px 0px 0px;
    line-height: 19px;
    font-size: 14px;
  }
  
  .text-container h3 {
    margin: 20px 0px 10px 0px;
    color: #04bcff;
    font-size: 18px;
  }
  .text-container h4 {
    margin: 20px 0px 10px 0px;
    color: #04bcff;
    font-size: 14px;
  }
  
  .container-review {
    display: flex;                  /* establish flex container */
    flex-direction: row;            /* default value; can be omitted */
    flex-wrap: nowrap;              /* default value; can be omitted */
    justify-content: space-between; /* switched from default (flex-start, see below) */
    background-color: lightyellow;
  }
  .container-review > div {
    width: 100px;
    height: 100px;
    border: 2px dashed red;
  }
  
  .container-bottom {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    grid-template-areas:
      "Grid-1 Grid-2 Grid-3";
    margin-left: 175px;
  }
  
  .Grid-1 {
    grid-area: Grid-1;
  }
  
  .Grid-2 {
    grid-area: Grid-2;
  }
  
  .Grid-3 {
    grid-area: Grid-3;
  }
  
  .move-right{
    display: flex;
    right: 300px;
  }
  
  * {
    box-sizing: border-radius;
  }
  .container-bottom-inside {
    border: 1px solid black;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    display: grid;
    place-items: center;
    background-color: #128cfc;
  }
  .items {
    width: 300px;
    background: #fffffe;
    /* box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    border-top: 10px solid #0b5aa2; */
  }
  .items-head p {
    padding: 5px 20px;
    margin: 10px;
    color: #000000;
    font-weight: bold;
    font-size: 20px;
  }
  .items-head hr {
    width: 20%;
    margin: 0px 30px;
    border: 1px solid #04bcff;
  }
  .items-body {
    padding: 10px;
    margin: 10px;
    display: grid;
    grid-gap: 10px;
  }
  .items-body-content {
    padding: 10px;
    padding-right: 0px;
    display: grid;
    grid-template-columns: 10fr 1fr;
    font-size: 13px;
    grid-gap: 10px;
    border: 1px solid transparent;
    cursor: pointer;
  }
  .items-body-content:hover {
    border-radius: 15px;
    border: 1px solid #04bcff;
  }
  .items-body-content i {
    align-self: center;
    font-size: 15px;
    color: #04bcff;
    font-weight: bold;
    animation: icon 1.5s infinite forwards;
  }
  @keyframes icon {
    0%, 100% {
      transform: translate(0px);
   }
    50% {
      transform: translate(3px);
   }
  }
  
  footer {
    text-align: center;
    padding: 3px;
  }
    </style>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <title>RuangZenius</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div class="logo">
          <!-- <img src="assets/img/logo.png" alt="logo" /> -->
          <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""/>
        </div>
        <div>
          <ul class="navigation">
            <li>
              <a id="buttonSignUp" href="signupPage.html">Sign Up</a>
            </li>
            <li>
              <a href="login.html">Log In</a>
            </li>
            <li>
              <a href="subs.html">Pricing</a>
            </li>
            <li>
              <a href="daftarKelas.html">Kelas</a>
            </li>
            <li>
              <a href="index.html">Home</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="parent">
        <div class="home">
          <div class="headerTxt">
            <h1>
              Study With <br />
              Us, Cheaply
            </h1>
            <p>Learning more easier with just one click.</p>
            <a href="subs.html" id="buttonSubs">SUBSCRIPTION</a>
          </div>
          <div class="hero">
            <img src="assets/img/hero.png" alt="menanam" />
          </div>
        </div>
      </div>

      <br /><br /><br /><br />

      <div class="rekomendasi">
        <h3>Rekomendasi Kelas</h3>
        <p>
          Pilih kelas unggulan untuk tingkatkan keahlian serta <br />
          belajar dengan mentor yang ahli dibidangnya
        </p>
        <br />
        <div class="rekomendasiKelas">
          <div class="kelas">
            <img src="assets/img/UIDesign.jpg" alt="UIDesign" />
            <p>UI/UX Design</p>
            <button>Ikuti Kelas</button>
          </div>
          <div class="kelas">
            <img src="assets/img/HTML5Dasar.jpg" alt="HTML5Dasar" />
            <p>HTML5 Dasar</p>
            <button>Ikuti Kelas</button>
          </div>
          <div class="kelas">
            <img src="assets/img/CodeIgniterPHP.jpg" alt="CodeIgniterPHP" />
            <p>CodeIgniter PHP</p>
            <button>Ikuti Kelas</button>
          </div>
        </div>
      </div>

      <br /><br /><br /><br />

      <div class='reviewText'>
        <h3>Review</h3>
        <p>
          Cerita dari beberapa teman - teman yang <br />
          sudah bergabung bersama kami
        </p>
        <br />
      </div>
      
      <div class='reviewKelas'>    
        <div class="a-box">
          <div class="img-container">
            <div class="img-inner">
              <div class="inner-skew">
                <img src="assets/review stock photos/foto-2.jpg" alt="">
              </div>
            </div>
          </div>

          <div class="text-container">
            <h3>Kelas Web Dasar </h3>
            <h4>ZhafranR</h4>
            <div>
              Mentornya keren cara menyampaikan
              setiap materinya juga detail 
              dan mudah di pahami
            </div>
          </div>
        </div>

        <div class="a-box">
          <div class="img-container">
            <div class="img-inner">
              <div class="inner-skew">
                <img src="assets/review stock photos/foto-2.jpg" alt="">
              </div>
            </div>
          </div>
          
          <div class="text-container">
            <h3>Kelas PHP Dasar</h3>
            <h4>ZhafranR</h4>
            <div>
              Kelas paling recommended
              pokoknya buat investasi ilmu
              di era revolusi industri 4.0
            </div>
          </div>
        </div>

        <div class="a-box">
          <div class="img-container">
            <div class="img-inner">
              <div class="inner-skew">
                <img src="assets/review stock photos/foto-2.jpg" alt="">
              </div>
            </div>
          </div>
          
          <div class="text-container">
            <h3>Kelas UI/UX Dasar</h3>
            <h4>ZhafranR</h4>
            <div>
              Kelas yang sangat bermanfaat
              dan ilmu up-to-date dan yang
              paling penting biayanya terjangkau
            </div>
          </div>
        </div>
        
      </div>

      <br /><br /><hr><br /><br />

      <div class="container-bottom">
        <div class="Grid-1">
            <div class="items">
              <div class="items-head">
                <p>Account</p>
                <hr>
              </div>
              
              <div class="items-body">
                <div class="items-body-content">
                  <span>Refund</span>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="items-body-content">
                  <span>Security</span>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="items-body-content">
                  <span>Rewards</span>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
        </div>
        <div class="Grid-2">
          <div class="items">
            <div class="items-head">
              <p>Features</p>
              <hr>
            </div>
            
            <div class="items-body">
              <div class="items-body-content">
                <span>Reviews</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Community</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Social Media Kit</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Affiliate</span>
                <i class="fa fa-angle-right"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="Grid-3">
          <div class="items">
            <div class="items-head">
              <p>Company</p>
              <hr>
            </div>
            
            <div class="items-body">
              <div class="items-body-content">
                <span>Career</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Frequently Ask Question</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Call Center</span>
                <i class="fa fa-angle-right"></i>
              </div>
              <div class="items-body-content">
                <span>Media</span>
                <i class="fa fa-angle-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br /><br /><hr><br />

      <footer>
        <p>2021 Copyright RuangZenius. All Right Reserved. Made In Indonesia</p>
        <p>Indonesia, Jakarta Pusat, support@ruangzenius.com</p>
      </footer>

    </div>
  </body>
</html>
