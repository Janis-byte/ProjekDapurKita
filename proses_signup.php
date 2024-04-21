<?php
    if ($_POST) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        include "dapurkitakoneksi.php";
        $query_signup = mysqli_query($koneksi, "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')");
        
        if ($query_signup) {
            echo "<script>alert('Pendaftaran Berhasil');location.href='signin.php';</script>";
        } else {
            echo "<script>alert('Pendaftaran Gagal');location.href='signup.php';</script>";
        }
    }
?>