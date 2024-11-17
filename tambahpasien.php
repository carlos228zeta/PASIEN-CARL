<html>
    <head>
        <title>My App | Halaman Utama</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-4">
                    <h3>Tambah Data Pasien</h3>
                    <form action="pasien.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="idPasien">ID Pasien</label>
                            <input type="text" class="form-control" name="idPasien" placeholder="ID Pasien" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nmPasien">Nama Pasien</label>
                            <input type="text" class="form-control" name="nmPasien" placeholder="Nama Pasien" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan" required> Perempuan
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-laki" required> Laki-laki
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>