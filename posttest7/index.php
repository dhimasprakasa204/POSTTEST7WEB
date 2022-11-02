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
      <h3>Login</h3>
      <form method="POST">
        <div class="input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="inputan" placeholder="Username" required>
        </div>
        <div class="input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="inputan" placeholder="Password" required>
        </div>

        <button name="user" type="submit">Login</button>
        <br>
        <br>
        <br>
        <p>Belum punya akun? <a href="regis.php">Daftar Disini!</a></p>
      </form>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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

    <?php
        include('koneksi.php');
        session_start();

        if(isset($_POST['user'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $hasil = mysqli_query($conn, "SELECT username, password FROM user WHERE username = '$username'");

            if(mysqli_num_rows($hasil) === 1) {
                $row = mysqli_fetch_assoc($hasil);
                
                if(password_verify($password, $row['password'])) {
                    $_SESSION['user'] = $row;
                    header('location: login.php');
                    exit;
                } else {
                    ?>
                        <script>
                            alert('Password anda salah!');
                        </script>
                    <?php
                }
            } else {
                ?>
                    <script>
                        alert('Akun tidak ditemukan!');
                    </script>
                <?php
            }
        } 
    ?>
</body>
</html>