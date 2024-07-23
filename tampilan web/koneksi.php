<?php
$host_name = "localhost:3307";
$username_koneksi = "root";
$password_koneksi = "";
$database_koneksi = "soal";

$koneksi = mysqli_connect(
    $host_name,
    $username_koneksi,
    $password_koneksi,
    $database_koneksi
);

if (!$koneksi) {
    die("conection failed" . mysqli_connect_error());
}
