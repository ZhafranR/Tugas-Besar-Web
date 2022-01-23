<?php
require "func_signup.php";
$kelas = query("SELECT * FROM kelas");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />


  <link rel="stylesheet" href="assets/css/style_daftarkelas.css" />

  <title>Daftar Kelas</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar">
    <div class="container">
      <div class="topnav" id="myTopnav">
        <div class="navbarBaru">

          <div class="logo">
            <img src="assets/img/logo.png" alt="logo" />
          </div>
          <div>

            <ul class="navbar-nav ms-auto" style="float: right">
              <li class="nav-item">
                <a class="nav-link btn btn-primary btn-navbar" href="index.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
  </nav>

  <!-- end of navbar -->

  <!-- Perlu ada page untuk ke arah setelah button ikuti kelas -->

  <!-- content -->
  <section class="section-daftar">
    <div class="container">
      <div class="row my-5">
        <div class="col-12">
          <!-- breadcrumnb -->

          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="afterLogin.php">Home</a></li>
            <li class="breadcrumb-item"><a href="daftarKelas.php">Daftar Kelas</a></li>

          </ul>
          <!-- end breadcrumb -->
        </div>
        <div class="col-12 col-md-5">
          <p class="text-hero">
            Pilih kelas unggulan untuk tingkatkan keahlian serta belajar
            dengan mentor yang ahli dibidangnya
          </p>
        </div>
      </div>
      <div class="row responsive-card  justify-content-center">
        <?php foreach ($kelas as $row) : ?>
          <?php
          $namaKelas = $row["namaKelas"];
          $foto = $row["fotoKelas"];
          ?>
          <div class=" mx-auto mb-5">
            <div class="card custom-card" style="width: 24rem">
              <img src=<?php echo $foto; ?> class="card-img-top" id="class1" alt="" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $namaKelas; ?></h5>
                <a href="#" class="btn btn-primary custom-button my-2">Ikuti Kelas</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

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