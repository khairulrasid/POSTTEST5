<?php
if ( isset($_SESSION["user"])) {
    header("Location:user.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khairul.id</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <input type="checkbox" id="check">
    <nav>
        <div class="icon"><b style="color:rgb(245, 131, 1)">KR STORE</b></div>
        <div class="search_box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" class="input" placeholder="Search...">
        </div>
        <ol>
            <li><a href="Home.php">Home</a></li>
            <li><a href="./admin/index.php">Pembelian</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ol>
    </nav>
    <main>
        <div class="gambar">
            <img src="logo.jpg" alt="ini gambar">
        </div>
        <div class="headercontent">
            <h3>Product</h3>
        </div>
        <div class="content">
            <div class="card">
                <div class="img">
                    <img src="iphone11promax.jpg" alt="11" width="253px">
                    <p>Apple iPhone 11 Pro</p>
                    <h5>Rp 28.999.000</h5>
                </div>
            </div>
    
            <div class="card">
                <div class="img">
                    <img src="12-pro-max.jpg" alt="12" width="250px">
                    <p>Apple iPhone 12 Pro Max</p>
                    <h5>Rp 27.268.900</h5>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="earphone.jpg" alt="earphone" width="200px">
                    <p>Apple iPhone 13 Pro Max</p>
                    <h5>Rp 35.650.000</h5>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="macbok.jpg" alt="MacBook" width="200px">
                    <p>MacBook Pro M2</p>
                    <h5>Rp 41.050.000</h5>
                </div>
            </div>
        </div>
    </main> 
    <footer>
        <p><br>
        <a>ENJOY</a></p>
    </footer>
    <form action="login.php" method="post">
</body>
</html>