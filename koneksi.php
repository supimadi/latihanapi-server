<?php

// inisialisasi mysql

$server = "localhost";
$user = "root";
$password = "root";
$nama_database = "lapi";

// inisialisasi mysql
$db = mysqli_connect($server, $user, $password, $nama_database);

// pengecekan apakah database tersambung atau tidak
if(!$db){
    // jika tidak tersambung
    die("Gagal terhubung ke database! ". mysqli_connect_error());
}

?>
