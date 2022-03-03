<?php

$mahasiswa = [
  ["Andri Adam", 10118792, "3KA32", "sistem informasi", "Andriadam@gmail.com"],
  ["wrerer rerer", 232323232, "3KA31", "sistem fgfgfgfg", "fgfgfgf@gmail.com"]
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
      <li>Nama :<?= $mhs[0]; ?></li>
      <li>NPM :<?= $mhs[1]; ?></li>
      <li>Kelas :<?= $mhs[2]; ?></li>
      <li>Jurusan:<?= $mhs[3]; ?></li>
      <li>Email :<?= $mhs[4]; ?></li>
    </ul>
  <?php endforeach; ?>


</body>

</html>