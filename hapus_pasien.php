<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi database

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];

    // Query DELETE
    $result = $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");

    if ($result) {
        header('Location: pasien.php'); // Redirect jika berhasil
        exit();
    } else {
        die("Gagal menghapus data: " . $koneksi->error);
    }
} else {
    echo "ID Pasien tidak ditemukan.";
}
