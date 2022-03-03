<?php
sleep(1);

require '../function.php';

$keyword = $_GET["keyword"];


$query = "SELECT * FROM user WHERE 
        nama LIKE '%$keyword%' OR
        nmr LIKE '%$keyword%' OR
        jumlah LIKE '%$keyword%' OR
        email LIKE '%$keyword%' ";
$user = query($query);
?>

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