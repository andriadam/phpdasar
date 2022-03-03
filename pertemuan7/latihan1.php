<?php

// Array assosiative
// key-nya adalah string yang kita buat sendiri



$user = [
  [
    "gambar" => "1.png",
    "nama" => "Andri Adam",
    "no" => "089602748611",
    "jumlah" => 1,
    "email"  => "Andriadam@gmail.com"
  ],
  [
    "gambar" => "2.png",
    "nama" => "Andri Adam2",
    "no" => "089602748612",
    "jumlah" => 2,
    "email"  => "Andriadam2@gmail.com"
  ],
  [
    "gambar" => "3.png",
    "nama" => "Andri Adam3",
    "no" => "089602748613",
    "jumlah" => 3,
    "email"  => "Andriadam3@gmail.com"
  ],
  [
    "gambar" => "4.png",
    "nama" => "Andri Adam4",
    "no" => "089602748614",
    "jumlah" => 4,
    "email"  => "Andriadam4@gmail.com"
  ],
  [
    "gambar" => "5.png",
    "nama" => "Andri Adam5",
    "no" => "089602748615",
    "jumlah" => 5,
    "email"  => "Andriadam5@gmail.com"
  ],
  [
    "gambar" => "6.png",
    "nama" => "Andri Adam6",
    "no" => "089602748616",
    "jumlah" => 6,
    "email"  => "Andriadam6@gmail.com"
  ],
  [
    "gambar" => "7.png",
    "nama" => "Andri Adam7",
    "no" => "089602748617",
    "jumlah" => 7,
    "email"  => "Andriadam7@gmail.com"
  ],
  [
    "gambar" => "8.png",
    "nama" => "Andri Adam8",
    "no" => "089602748618",
    "jumlah" => 8,
    "email"  => "Andriadam8@gmail.com"
  ],
  [
    "gambar" => "9.png",
    "nama" => "Andri Adam9",
    "no" => "089602748619",
    "jumlah" => 9,
    "email"  => "Andriadam9@gmail.com"
  ],
  [
    "gambar" => "10.png",
    "nama" => "Andri Adam10",
    "no" => "089602748620",
    "jumlah" => 10,
    "email"  => "Andriadam10@gmail.com"
  ],
]


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


  <?php foreach ($user as $u) : ?>
    <ul>
      <a href="latihan2.php?gambar=<?= $u["gambar"]; ?>&nama=<?= $u["nama"]; ?>&no=<?= $u["no"]; ?>&jumlah=<?= $u["jumlah"]; ?>&email=<?= $u["email"]; ?>">
        <li>
          <img src="img/<?= $u["gambar"] ?>" alt="">
        </li>
        <li>Nama :<?= $u["nama"]; ?></li>
      </a>
    </ul>
  <?php endforeach; ?>


</body>

</html>