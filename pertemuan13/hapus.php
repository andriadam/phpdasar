<?php
require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "
  <script>
  alert('Data berhasil diHapus !')
  document.location.href='index.php'
  </script>";
} else {
  echo "
  <script>
  alert('Data Gagal diHapus !')
  document.location.href='index.php'
  </script>";
}
