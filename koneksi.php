<?php
$host = 'localhost'; // Nama host database
$user = 'root'; // Username database
$pass = ''; // Password database
$db   = 'carlos_xipplg1'; // Nama database

// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
