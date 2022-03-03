<?php

// Array assosiative
// key-nya adalah string yang kita buat sendiri



$mahasiswa = [
  [
    "nama" => "Andri Adam",
    "npm" => 10118792,
    "kelas" => "3KA32",
    "jurusan" => "sistem informasi",
    "email"  => "Andriadam@gmail.com",
    "gambar" => "1.png"
  ],
  [
    "nama" => "wrerer rerer",
    "npm" => 232323232,
    "kelas" => "3KA31",
    "jurusan" => "sistem fgfgfgfg",
    "email" => "fgfgfgf@gmail.com",
    "gambar" => "2.png"
  ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array dalam kondisi nyata</title>
</head>

<body>

  <h1>Daftar mahasiswa</h1>


  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"] ?>" alt="">
      </li>
      <li>Nama :<?= $mhs["nama"]; ?></li>
      <li>NPM :<?= $mhs["npm"]; ?></li>
      <li>Kelas :<?= $mhs["kelas"]; ?></li>
      <li>Jurusan:<?= $mhs["jurusan"]; ?></li>
      <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>


</body>

</html>