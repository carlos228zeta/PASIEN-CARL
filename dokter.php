<?php
include 'koneksi.php'; // File koneksi ke database

// Ambil data dari tabel dokter
$result = $koneksi->query("SELECT * FROM dokter");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dokter</title>
    <a href="tambahdokter.php" class="btn btn-success btn-sm shadow-sm">Tambah Data Dokter</a>
</head>
<body>
    <div class="container my-5">
        <h3>Daftar Dokter</h3>
        <a href="tambahdokter.php" class="btn btn-primary mb-3">Tambah Dokter</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nmDokter']}</td>
                        <td>{$row['spesialisasi']}</td>
                        <td>{$row['noTelp']}</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
