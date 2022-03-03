<?php
require 'function.php';

$user = query("SELECT * FROM user");
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


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
</head>

<body>
  <h1>Daftar user</h1>

  <a href="tambah.php">Tambah data user</a>
  <br><br>

  <table border="1" cellpadding="10px" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>gambar</th>
      <th>nama</th>
      <th>no</th>
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
      <td><?= $row["no"] ?></td>
      <td><?= $row["jumlah"] ?></td>
      <td><?= $row["email"] ?></td>
      <td>
        <a href="">Ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?')">Hapus</a>
      </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>





  </table>
</body>

</html>