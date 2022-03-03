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
  $nmr = htmlspecialchars($data["nmr"]);
  $jumlah = htmlspecialchars($data["jumlah"]);
  $email = htmlspecialchars($data["email"]);

  // query insert data
  $query = "INSERT INTO user VALUES ('', '$gambar', '$nama', '$nmr', '$jumlah', '$email')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM user WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  //ambil data 
  $id = $data["id"];
  $gambar = htmlspecialchars($data["gambar"]);
  $nama = htmlspecialchars($data["nama"]);
  $nmr = htmlspecialchars($data["nmr"]);
  $jumlah = htmlspecialchars($data["jumlah"]);
  $email = htmlspecialchars($data["email"]);

  // query insert data
  $query = "UPDATE user SET
            gambar = '$gambar', 
            nama= '$nama', 
            nmr = '$nmr', 
            jumlah= $jumlah, 
            email ='$email'
            WHERE id = $id 
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM user WHERE 
            nama LIKE '%$keyword%' OR
            nmr LIKE '%$keyword%' OR
            jumlah LIKE '%$keyword%' OR
            email LIKE '%$keyword%' ";
  return query($query);
}
