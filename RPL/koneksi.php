<?php 
    $host = "localhost";
    $user = "root";
    $password = null;
    $database = "gudang";

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if($koneksi->connect_error){
        die("koneksi gagal");
    }


?>