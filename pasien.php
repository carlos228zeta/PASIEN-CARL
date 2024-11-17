<?php
include 'koneksi.php';
?>
<html>
<head>
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        h3 { font-weight: bold; color: #343a40; }
    </style>
</head>
<body>
<div class="container my-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">My App</a>
        </div>
    </nav>
    <div class="row mt-5">
        <div class="col-sm">
            <h3 class="text-center mb-4">Tabel Pasien</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a href="tambahpasien.php" class="btn btn-primary btn-sm shadow-sm">Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover table-bordered shadow-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");

                    if ($hasil === false) {
                        die("Error pada query: " . $koneksi->error);
                    }

                    if ($hasil->num_rows > 0) {
                        while ($row = $hasil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['idPasien']; ?></td>
                                <td><?= $row['nmPasien']; ?></td>
                                <td><?= $row['jk']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td>
                                    <a href="editpasien.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm shadow-sm" onclick="confirmDelete(<?= $row['idPasien']; ?>)">Hapus</button>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>Data pasien belum tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(idPasien) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `delete.php?idPasien=${idPasien}`;
            }
        });
    }
</script>
</body>
</html>
