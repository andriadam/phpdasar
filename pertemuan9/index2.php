<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel user/query data user
$result = mysqli_query($conn, "SELECT * FROM user");
// var_dump($result);

//ambil data(fetch) user dari object result
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array associative
// mysqli_fetch_array() = mengembalikan keduannya
// mysqli_fetch_object()

// while ($u = mysqli_fetch_assoc($result)) {
//   var_dump($u);
// }
mys

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
</head>

<body>

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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
        <a href="">Hapus</a>
      </td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
    <tr>





  </table>
</body>

</html>