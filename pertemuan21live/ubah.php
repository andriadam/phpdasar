<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

// ambil data dari url
$id = $_GET["id"];

// query data user berdasarkan id
$u = query("SELECT * FROM user WHERE id = $id")[0];



// Mengecek apakah tombol submit udah ditekan atau belum
if (isset($_POST["submit"])) {



  // cek apakah data berhasil diUbah atau tidak
  if (ubah($_POST) > 0) {
    echo "
          <script>
          alert('Data berhasil diubah !')
          document.location.href='index.php'
          </script>";
  } else {
    echo "
          <script>
          alert('Data gagal diubah !')
          document.location.href='index.php'
          </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data user</title>
</head>

<body>
  <h1>Ubah data user</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $u["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $u["gambar"]; ?>">
    <ul>
      <li>
        <label for="gambar">gambar : </label> <br>
        <img src="img/<?= $u["gambar"]; ?>" alt="" width="50"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $u["nama"]; ?>" required>
      </li>
      <li>
        <label for="nmr">nmr : </label>
        <input type="text" name="nmr" id="nmr" value="<?= $u["nmr"]; ?>" required>
      </li>
      <li>
        <label for="jumlah">jumlah : </label>
        <input type="number" name="jumlah" id="jumlah" value="<?= $u["jumlah"]; ?>" required>
      </li>
      <li>
        <label for="email">email : </label>
        <input type="text" name="email" id="email" value="<?= $u["email"]; ?>" required>
      </li>
      <li>
        <button type="submit" name="submit">Ubah data</button>
      </li>
    </ul>


  </form>


</body>

</html>