<?php
    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM canaikudb");

    $canaikudb = [];

    while ($row = mysqli_fetch_assoc($result)){
        $canaikudb[] = $row; 
    }
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
        <div class="header-logo">CANAIKU</div>
        <div class="header-list">
            <ul>
            <li><a href="Logout.php" style="text-decoration: none;">LOGOUT</a></li>
                <li><a href="menu.php" style="text-decoration:none ;">Daftar Menu</a></li>
                <li><a href="create.php" style="text-decoration: none;">Hubungi Kami</a></li>
                <li><a href="about.php" style="text-decoration:none ;">Tentang</a></li>
                <li><a href="login.php" style="text-decoration: none;">Utama</a></li>
            </ul>
        </div>

    </div>
        <div class="datetime">
            <?php
                date_default_timezone_set("Asia/Makassar");
                echo date("h:i:sa");
            ?>
        </div>

    <div class="main"> 
        <br>
        <br>
        <br>
        <br>
        <div>
            <a href="create.php" role="button" class="button-tambah">Klik Tombol Untuk Menambahkan Data</a>
        </div>
        <br>
        <table id="table-contact">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Pesan</th>
                <th>File</th>
                <th>Action</th>
            </tr>
            <?php $id = 1; foreach($canaikudb as $cnk) :?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $cnk ["nama"]; ?></td>
                <td><?php echo $cnk ["email"]; ?></td>
                <td><?php echo $cnk ["telepon"]; ?></td>
                <td><?php echo $cnk ["jenis"]; ?></td>
                <td><?php echo $cnk ["pesan"]; ?></td>
                <td class="gambar"><img src="file/<?php echo $cnk ["nama_file"] ?>" alt="gambar-img" style="width: 120px;"></td>
                <td class="icon">
                    <a href="update.php?id=<?php echo $cnk ["id"]; ?>" role="button"><i class="fas fa-pencil-alt"></i></a>
                    <a href="delete.php?id=<?php echo $cnk ["id"]; ?>" role="button" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php $id++; endforeach; ?>
        </table>
    </div>
    <br>
    <br>
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