<?php
include 'koneksi.php'; // Pastikan Anda memiliki file koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nmDokter = $_POST['namaDokter']; // Nama sesuai atribut "name" di form
    $spesialisasi = $_POST['spesialis']; // Nama sesuai atribut "name" di form
    $noTelp = $_POST['telepon']; // Nama sesuai atribut "name" di form

    // Validasi input tidak kosong
    if (!empty($nmDokter) && !empty($spesialisasi) && !empty($noTelp)) {
        // Gunakan prepared statement untuk menghindari SQL Injection
        $stmt = $koneksi->prepare("INSERT INTO dokter (nmDokter, spesialisasi, noTelp) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nmDokter, $spesialisasi, $noTelp);

        if ($stmt->execute()) {
            header('Location: dokter.php'); // Redirect ke halaman dokter setelah berhasil
            exit();
        } else {
            die("Gagal menambah data: " . $stmt->error);
        }
    } else {
        echo "Semua kolom harus diisi!";
    }
} else {
    echo "Metode request tidak valid.";
}
