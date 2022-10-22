<?php
	
require '../../koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM produk");
$produk = [];
while($row = mysqli_fetch_assoc($result)){
  $produk[] =$row;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>KR STORE</h2>
      <ul class="nav">
        <li>
          <a href="../index.php">
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
      <a href="add.php" >
        <span class="add">Tambah Produk</span>
      </a>
        <table class="table">
            <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Action</th>
            <tbody>
              <?php $i = 1; foreach($produk as $prk) :?>
            </tr>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $prk["nama"];?></td>
              <td><?php echo $prk["kategori"];?></td>
              <td>RP.<?php echo $prk["harga"];?></td>
              <td>
                <a class="edit-button" href="edit.php?id=<?php echo $prk["id"];?>">edit</a>
                <a class ="hapus-button" href="delete.php?id=<?php echo $prk["id"];?>">hapus</a>
              </td>
            </tr>
            <?php $i++; endforeach;?>
            </tbody>
        </table>
    </div>
  </body>
</html>