<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

// Pagination
// konfigurasi
// $jumlahDataPerHalaman = 3;
// $jumlahData = count(query("SELECT * FROM user"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


// $user = query("SELECT * FROM user LIMIT $awalData, $jumlahDataPerHalaman");



// // ambil data dari tabel user/query data user
// $result = mysqli_query($conn, "SELECT * FROM user");
// // var_dump($result);

// //ambil data(fetch) user dari object result
// // mysqli_fetch_row() = mengembalikan array numerik
// // mysqli_fetch_assoc() = mengembalikan array associative
// // mysqli_fetch_array() = mengembalikan keduannya
// // mysqli_fetch_object()

// // while ($u = mysqli_fetch_assoc($result)) {
// //   var_dump($u);
// // }

// tombol cari di tekan
if (isset($_POST["cari"])) {
  $user = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
</head>

<body>
  <a href="logout.php">Logout</a>

  <h1>Daftar user</h1>

  <a href="tambah.php">Tambah data user</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="masukkan pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>

  <br>
  <table border="1" cellpadding="10px" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>gambar</th>
      <th>nama</th>
      <th>nmr</th>
      <th>jumlah</th>
      <th>email</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($user as $row) : ?>
      <td><?= $i ?></td>
      <td>
        <img src="img/<?= $row["gambar"] ?>" width="50" alt="">
      </td>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["nmr"] ?></td>
      <td><?= $row["jumlah"] ?></td>
      <td><?= $row["email"] ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?')">Hapus</a>
      </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>

  </table>

  <!-- Navigasi -->
  <?php if ($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
  <?php endif; ?>

  <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if ($i == $halamanAktif) : ?>
      <a href="?halaman=<?= $i ?>" style="font-weight: bold; color:red"> <?= $i ?> </a>
    <?php else : ?>
      <a href="?halaman=<?= $i ?>"> <?= $i ?> </a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if ($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
  <?php endif; ?>

</body>

</html>