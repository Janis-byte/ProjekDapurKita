<?php
    //atur koneksi ke database
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "dapurkita";

    $conn = mysqli_connect($serverName, $userName, $password, $database);

    // if(!$conn){
    //     die("Koneksi Error". mysqli_connect_error());
    // } else{
    //     echo"Koneksi Sukses";
    // }
?>