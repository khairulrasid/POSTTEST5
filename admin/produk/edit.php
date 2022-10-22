<?php

require '../../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM produk WHERE id = $id");
$prk =[];

while($row = mysqli_fetch_assoc($result)){
  $prk[] = $row;
}

$usr = $usr[0];

if(isset($_POST['ubah'])){
  $id =$_POST['id'];
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];

  $sql = "UPDATE produk set nama ='$nama', kategori='$kategori', harga ='$harga', where id = $id";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo"<script>
        alert('Data Produk Berhasil Diubah');
        document.location.href ='produk.php';
        </script>";
  }else{
    echo"<script>
    alert('Data Produk Gagal Diubah');
    document.location.href ='edit.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Produk</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/crud.css"/>
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
            <span>Produk</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
        <form action="" method="POST">
            <div class="container">
              <h1>Ubah Produk</h1>
              <hr>
              <input type="hidden" name="id" value="<?php echo $prk['id']?>">
              <label for="nama"><b>Name</b></label>
              <input type="text" placeholder="Masukan Nama" name="nama" value="<?php echo $prk['nama']?>"required>
              <label for="kategori"><b>Kategori</b></label>
              <input type="text" placeholder="Masukan harga" name="kategori" value="<?php echo $prk['kategori']?>" required>
              <label for="harga"><b>harga</b></label>
              <input type="text" placeholder="Masukan harga" name="harga" value="<?php echo $prk['harga']?>"required>
              <hr>
              <button type="submit" class="addbtn" name="ubah" >Ubah Produk</button>
            </div>
          </form>          
    </div>
  </body>
</html>