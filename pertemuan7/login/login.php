<?php
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
  // cek username & pasword benar
  if ($_POST["username"] == "admin" && $_POST["pasword"] == "123") {
    //Jika benar redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else {
    //jika salah, tampilkan kesalahan
    $error = true;
  }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login admin</title>
</head>

<body>

  <?php if (isset($error)) : ?>
    <p style="color:red; ">Username/pasword salah</p>
  <?php endif; ?>
  <ul>
    <form action="" method="POST">
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="pasword">pasword</label>
        <input type="text" name="pasword" id="pasword">
      </li>
      <button type="submit" name="submit">Login</button>
    </form>

  </ul>




</body>

</html>