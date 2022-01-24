<?php
require "func_signup.php";
$user = query("SELECT * FROM user");

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
$STH = $conn->query('SELECT * FROM user ORDER BY iduser DESC;');
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
$email = $STH->fetch()['email'];
$password = $STH->fetch()['password'];
$user_data[$email] = $password;
$user_data_encode = json_encode($user_data);
// var_dump($user_data);
$conn=null;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/styleAfterSignUp.css" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <title>RuangZenius</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <img src="assets/img/logo.png" alt="logo" />
      </div>
      <div>
        <ul class="navigation">
          <li>
            <a id="buttonSignUp" href="index.php">Log Out</a>
          </li>
          <li>
            <a href="subs.php">Pricing</a>
          </li>
          <li>
            <a href="daftarKelas.php">Kelas</a>
          </li>
          <li>
            <a href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>

    <?php foreach ($user as $row) : ?>
      <?php $nama = $row["nama"]; ?>
    <?php endforeach; ?>

    <div class="parent">
      <div class="home">
        <div class="headerTxt">
          <h1>
            Hello, <?php echo $nama; ?>!
          </h1>
          <p>Yuk segera berlangganan! <br>
            Tingkatkan keahlian bersama dengan mentor yang ahli dibidangnya</p>
          <a href="subs.php" id="buttonSubs">BERLANGGANAN</a>
        </div>
        <div class="hero">
          <img src="assets/img/hero.png" alt="" />
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

    <br /><br />
    <hr><br /><br />

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

    <br /><br />
    <hr><br />

    <footer>
      <p>2021 Copyright RuangZenius. All Right Reserved. Made In Indonesia</p>
      <p>Indonesia, Jakarta Pusat, support@ruangzenius.com</p>
    </footer>

  </div>

  <script>
    var user_data = <?php echo $user_data_encode; ?>; // Success
    console.log(user_data);
    document.cookie=`${Object.keys(user_data)}-${Object.values(user_data)}`;
    console.log(document.cookie);

  </script>
</body>

</html>