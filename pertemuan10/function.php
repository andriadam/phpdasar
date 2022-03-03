<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  global $conn;

  //ambil data 
  $gambar = htmlspecialchars($data["gambar"]);
  $nama = htmlspecialchars($data["nama"]);
  $no = htmlspecialchars($data["no"]);
  $jumlah = htmlspecialchars($data["jumlah"]);
  $email = htmlspecialchars($data["email"]);

  // query insert data
  $query = "INSERT INTO user VALUES ('', '$gambar', '$nama', '$no', '$jumlah', '$email')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM user WHERE id = $id");
  return mysqli_affected_rows($conn);
}
