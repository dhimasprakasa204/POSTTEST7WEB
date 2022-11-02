<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CANAIKU</title>
    <link rel="icon" href="canaiku.png">
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/d6e78495c8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="toggle"> <!--Untuk latar belakang-->    
            <div class="circle"></div> <!--Icon lingkaran-->    
            <div class="toggle-moon"><i class="fas fa-moon"></i></div> <!--Icon bulan-->    
            <div class="toggle-sun"><i class="fas fa-sun"></i></div> <!--Icon matahari-->
        </div>
        <div class="logo-utama"><img src="canaiku.png" alt="logocanai" height="80px" width="80px"></div>
        <div class="header-logo"> DAFTAR MENU CANAIKU</div>
        <div class="header-list">
            <ul>
            <li><a href="Logout.php" style="text-decoration: none;">LOGOUT</a></li>
                <li><a href="menu.php" style="text-decoration:none ;">Daftar Menu</a></li>
                <li><a href="read.php" style="text-decoration: none;">Hubungi Kami</a></li>
                <li><a href="about.php" style="text-decoration:none ;">Tentang</a></li>
                <li><a href="login.php" style="text-decoration: none;">Utama</a></li>
            </ul>
        </div>

    </div>
    <div class="main">
        <div class="contents">
            <h3 class="section-title" style="padding-top: 40px;"> Daftar Menu</h3>
            <div class="contents-item"><img src="Burger Canai.png" width="150px" height="150px" alt="">
                <p><b>BURGER CANAI</b></p>
            </div>
            <div class="contents-item"><img src="Kare Ayam.png" width="150px" height="150px" alt="">
                <P><b>CANAI KARE AYAM</b></P>
            </div>
            <div class="contents-item"><img src="Kare Sapi.png" width="150px" height="150px" alt="">
                <p><b>CANAI KARE SAPI</b></p>
            </div>

        </div>
    </div>
    <div class="footer">
        <div class="logo-utama"><img src="canaiku.png" alt="logocanai" height="80px" width="80px" style="padding-top: 20px;"></div>
        <div class="footer-logo">CANAIKU</div>
        <div class="footer-list">
            <ul>
                <li>Tentang</li>
                <li>Karier</li>
                <li>Alamat Cabang</li>
                <li>Hubungi Kami</li>
            </ul>
        </div>
        <script src="script.js"></script>
</body>

</html>