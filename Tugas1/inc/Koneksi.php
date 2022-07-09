<?php
$host     = "localhost";
$user     = "root";
$pass     = "";
$db       = "mahasiswa";

$koneksi  = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal Connect");
}
