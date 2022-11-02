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

    </div>

    <div class="contact-form">
        <h3>Registrasi</h3>
        <br>
        <br>
        <form method="POST">
            <div class="input">
                <label for="nama">Nama <br></label>
                <input type="text" name="nama" id="nama" class="inputan" placeholder="Nama" required>
            </div>
            <div class="input">
                <label for="email">Email <br></label>
                <input type="text" name="email" id="email" class="inputan" placeholder="Email" required>
            </div>
            <div class="input">
                <label for="username">Username <br></label>
                <input type="text" name="username" id="username" class="inputan" placeholder="Username" required>
            </div>
            <div class="input">
                <label for="password">Password <br></label>
                <input type="password" name="password" id="password" class="inputan" placeholder="Password" required>
            </div>
            <div class="input">
                <label for="confirm-password">Konfirmasi Password <br></label>
                <input type="password" name="confirm-password" id="confirm-password" class="inputan" placeholder="Konfirmasi Password" required>
            </div>

            <button name="register" type="submit">Daftar</button>
        <br>
        <br>
        <br>
            <p>Sudah punya akun? <a href="index.php">Login Disini</a></p>
        </form>
        <br>
        <br>
        <br>
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

    <?php
    require('koneksi.php');
    
    if(isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cPassword = $_POST['confirm-password'];

        if($password === $cPassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $hasil = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
            if(mysqli_fetch_assoc($hasil)) {
                echo '<script>
                    alert("Username sudah digunakan!");
                    document.location.href = "regis.php";
                </script>';
            } else {
                $push_data = mysqli_query($conn, "INSERT INTO user (nama, email, username, password) VALUES ('$nama', '$email', '$username', '$password');");
                
                if(mysqli_affected_rows($conn) > 0) {
                    echo '<script>
                        alert("Registrasi berhasil");
                        document.location.href = "login.php";
                    </script>';
                } else {
                    echo '<script>
                        alert("Registrasi gagal");
                    </script>';
                    $result = mysqli_query($conn, $push_data) or trigger_error("Query Failed! SQL: $push_data - Error: ".mysqli_error($conn), E_USER_ERROR);
                    echo $result;
                }
            }
        } else {
            echo '<script>
                alert("Konfirmasi password anda beda");
                document.location.href = "regis.php";
            </script>';
        }
    } ?>
</body>
</html>