<html>
    <head>
        <title>Tambah Data Dokter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <h3>Tambah Data Dokter</h3>
            <form action="simpan_dokter.php" method="POST">
                <div class="mb-3">
                    <label for="namaDokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="namaDokter" name="namaDokter" required>
                </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Spesialis</label>
                    <input type="text" class="form-control" id="spesialis" name="spesialis" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </body>
</html>
<div class="row mb-3">
    <div class="col">
        <a href="tambahpasien.php" class="btn btn-primary btn-sm shadow-sm">Tambah Data Pasien</a>
    </div>
    <div class="col">
        <a href="tambahdokter.php" class="btn btn-success btn-sm shadow-sm">Tambah Data Dokter</a>
    </div>
</div>


