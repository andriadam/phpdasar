<?php
require 'function.php';

// Mengecek apakah tombol submit udah ditekan atau belum
if (isset($_POST["submit"])) {



  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
          <script>
          alert('Data berhasil ditambahkan !')
          document.location.href='index.php'
          </script>";
  } else {
    echo "
          <script>
          alert('Data Gagal ditambahkan !')
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
  <h1>Tambah data user</h1>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="gambar">gambar : </label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="nmr">nmr : </label>
        <input type="text" name="nmr" id="nmr" required>
      </li>
      <li>
        <label for="jumlah">jumlah : </label>
        <input type="number" name="jumlah" id="jumlah" required>
      </li>
      <li>
        <label for="email">email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah data</button>
      </li>
    </ul>


  </form>


</body>

</html>