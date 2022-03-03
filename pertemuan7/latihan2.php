<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET["gambar"])||
!isset($_GET["nama"]) ||
!isset($_GET["no"]) ||
!isset($_GET["jumlah"]) ||
!isset($_GET["email"]) ||
) {
  //redirect
  header("Location: latihan1.php");
  exit;
};
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>
  <ul>
    <li>
      <img src="img/<?= $_GET["gambar"] ?>" alt="">
    </li>
    <li>Nama :<?= $_GET["nama"]; ?></li>
    <li>No.Telp :<?= $_GET["no"]; ?></li>
    <li>Jumlah :<?= $_GET["jumlah"]; ?></li>
    <li>Email :<?= $_GET["email"]; ?></li>
  </ul>

  <a href="latihan1.php">Kembali ke hal 1</a>
</body>

</html>