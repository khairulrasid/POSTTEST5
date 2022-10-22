<?php
session_start();
if($_SESSION['level']==""){
  header("location:./index.php?pesan=gagal");
}
require '../../koneksi.php';

if(isset($_POST['tambah'])){
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];
  $sql = "INSERT INTO produk (id, nama,kategori,harga) 
          VALUES ( '','$nama','$kategori','$harga')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo"<script>
        alert('Data Produk Berhasil Ditambahkan');
        document.location.href ='produk.php';
        </script>";
  }else{
    echo"<script>
    alert('Data Produk Gagal Ditambahkan');
    document.location.href ='add.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/crud.css">
  </head>
  <body>
    <div class="sidebar">
      <h2>KR STORE</h2>
      <ul class="nav">
        <li>
          <a href="./index.php">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="produk.php">
            <span>PRODUK</span>
          </a>
        </li>
       
      </ul>
    </div>
    <div class="main">
        <form action="" method="POST">
            <div class="container">
              <h1>Tambah Produk</h1>
              <hr>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="masukan Name" name="nama" required>
              <label for="kategori"><b>Kategori</b></label>
              <input type="text" placeholder="masukan kategori" name="kategori" required>
              <label for="harga"><b>Harga</b></label>
              <input type="text" placeholder="masukan harga" name="harga" required>
              <hr>
              <button type="submit" class="addbtn" name="tambah">Tambah Produk</button>
            </div>
          </form>          
    </div>
  </body>
</html>