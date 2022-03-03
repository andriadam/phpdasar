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
  $nama = htmlspecialchars($data["nama"]);
  $nmr = htmlspecialchars($data["nmr"]);
  $jumlah = htmlspecialchars($data["jumlah"]);
  $email = htmlspecialchars($data["email"]);

  // Upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO user VALUES ('', '$gambar', '$nama', '$nmr', '$jumlah', '$email')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namafile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_name = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang di upload
  if ($error === 4) {
    echo "<script>
          alert('Pilih gambar terlebih dahulu');
            </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ektensigambarvalid = ['jpg', 'jpeg', 'png'];
  $ekstensigambar = explode('.', $namafile);
  $ekstensigambar = strtolower(end($ekstensigambar));
  if (!in_array($ekstensigambar, $ektensigambarvalid)) {
    echo "<script>
          alert('Yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  // Cek jika ukurannya terlalu besar
  if ($ukuranfile > 1000000) {
    echo "<script>
          alert('Ukuran gambar terlalu besar, maksimal 1mb');
          </script>";
    return false;
  }

  // generate nama gambar baru
  $namafilebaru = uniqid();
  $namafilebaru .= '.';
  $namafilebaru .= $ekstensigambar;


  // Lolos pengecekan, gambar siap diUpload
  move_uploaded_file($tmp_name, 'img/' . $namafilebaru);

  return $namafilebaru;
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
  $nama = htmlspecialchars($data["nama"]);
  $nmr = htmlspecialchars($data["nmr"]);
  $jumlah = htmlspecialchars($data["jumlah"]);
  $email = htmlspecialchars($data["email"]);
  $gambarlama = htmlspecialchars($data["gambarlama"]);

  // Cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarlama;
  } else {
    $gambar = upload();
  }


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
