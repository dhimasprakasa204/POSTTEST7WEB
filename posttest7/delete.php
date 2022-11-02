<?php
    require 'koneksi.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM canaikudb WHERE id = $id");

    if($result){
        ?>
            <script>
                alert("Data berhasil dihapus!");
                window.location='read.php';
            </script>
        <?php
    }else {
        ?>
            <script>
                alert("Data gagal dihapus!");
                window.location='read.php';
            </script>
        <?php
    }      
?>