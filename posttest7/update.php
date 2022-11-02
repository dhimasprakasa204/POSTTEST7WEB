<?php
    require 'koneksi.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM canaikudb where id = $id");

    $cnk = [];

    while ($row = mysqli_fetch_assoc($result)){
        $cnk[] = $row; 
    }

    $cnk = $cnk[0];

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $jenis = $_POST['jenis'];
        $pesan = $_POST['pesan'];
        $ekstensi_diperbolehkan	= array('png','jpg');
		$nama_file = $_FILES['nama_file']['name'];
		$x = explode('.', $nama_file);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['nama_file']['size'];
		$file_tmp = $_FILES['nama_file']['tmp_name'];

        move_uploaded_file($file_tmp, 'file/'.$nama_file);
        $sql = "INSERT INTO canaikudb (id, nama, email, telepon, jenis, pesan)
                VALUES ('', '".$nama."', '".$email."', '".$telepon."', '".$jenis."' , '".$pesan."', '".$nama_file."')";

        $result = mysqli_query($conn, $sql);

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){
                if($result){
                    ?>
                        <script>
                            alert("Data berhasil ditambahkan!");
                            window.location='create.php';
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("Data gagal ditambahkan!");
                        </script>
                    <?php
                }
            }else{
                ?>
                    <script>
                        alert("Ukuran File Terlalu Besar!");
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Ekstensi File Tidak Diperbolehkan!");
                </script>
            <?php
        }
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
    </header>

    <div class="main-contact">
        <br>
        <br>
        <br>
        <br>
        <div class="contact-form">
            <form action="create.php" name="form" method="POST" enctype="multipart/form-data">
                <h3 id="section-title">UPDATE DATA </h3>
                <p>Nama</p>
                <input type="text" name="nama" id="nama" placeholder="masukkan nama anda" value="<?php echo $cnk['nama'] ?>" required>

                <p>Email (Wajib Diisi)</p>
                <input type="email" name="email" id="email" placeholder="masukkan email anda" value="<?php echo $cnk['email'] ?>" required>

                <p>Telepon</p>
                <input type="number" name="telepon" id="telepon" value="<?php echo $cnk['telepon'] ?>" required>

                <p>Jenis Kelamin</p>
                <input type="radio" name="jenis" class="contact-radio" value="laki-laki">Laki-Laki <br>
                <input type="radio" name="jenis" class="contact-radio" value="perempuan">Perempuan <br>


                <p>Pesan (Wajib Diisi)</p>
                <textarea cols="40" rows="8" name="pesan" id="pesan" value="<?php echo $cnk['pesan'] ?>"></textarea>

                <p>Upload File (Wajib Diisi)</p>
                <input type="file" name="nama_file" value="<?php echo $cnk['nama_file'] ?>">

                <input type="checkbox"><br>
                <span class="notice">Apakah Anda Yakin???</span>

                <p>*Bidang Wajib Diisi</p>
                <input type="submit" id="submit" name="submit" value="submit">            
            </form>
        </div>
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