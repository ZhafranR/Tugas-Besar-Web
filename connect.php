<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db-zenius", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$STH = $conn->query('SELECT idJenisLangganan, jenis, harga from jenislangganan');
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
 
while($row = $STH->fetch()) {
    echo $row['idJenisLangganan'] . "\n";
    echo $row['jenis'] . "\n";
    echo $row['harga'] . "\n";
}
$conn=null;
?>