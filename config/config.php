<?php

$server = "localhost";
$user = "root";

$password = "2wsx1qaz";

$nama_db = "rekapitulasi_nilai";

$sambung = mysqli_connect($server, $user, $password, $nama_db);

if(!$sambung){
    die(
        "Ada masalah koneksi ke database". mysqli_connect_error()
    );
}

// function base_path($path = '') {
//     return __DIR__ . '/../' . $path;  // Mengembalikan path relatif dari root aplikasi
// }