<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Penggajihan</title>
</head>

<body>
    <div class="container form-container">
        <form action="gaji.php" method="POST">
            <div class="text-center form-header">
                <img src="asset/images.png" alt="" class="mb-3" width="170">
                <h3>PENGGAJIHAN</h3>
                <h5>GURU/KARYAWAN YAYASAN ASSALAAM</h5>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="bi bi-clipboard-data"></i>
                    Data Penggajihan
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="no" class="form-label">No</label>
                        <input type="number" class="form-control" name="no" placeholder="No">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="unitPendidikan" class="form-label">Unit Pendidikan</label>
                        <select class="form-select" name="unitPendidikan" aria-label="Default select example">
                            <option selected>Pilih Unit Pendidikan</option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalGaji" class="form-label">Tanggal Gaji</label>
                        <input type="date" class="form-control" name="tanggalGaji">
                    </div>

                    <div class="row">
                        <div class="col-md-6 py-3">
                            <div class="section-title">
                                <h5 class="text-center">
                                    <i class="bi bi-cash-stack"></i>
                                    Gaji
                                </h5>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan">
                                    <option selected>Pilih Jabatan</option>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Wakasek">Wakasek</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="lamaKerja" class="form-label">Lama Kerja</label>
                                <input type="number" class="form-control" name="lamaKerja" placeholder="Lama Kerja">
                            </div>
                            <div class="mb-3">
                                <label for="statusKerja" class="form-label">Status Kerja</label>
                                <select class="form-select" name="statusKerja">
                                    <option selected>Pilih Status Kerja</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontrak">Kontrak</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 py-3">
                            <div class="section-title">
                                <h5 class="text-center">
                                    <i class="bi bi-scissors"></i>
                                    Potongan
                                </h5>
                            </div>
                            <div class="mb-3">
                                <label for="bpjs" class="form-label">BPJS</label>
                                <input type="number" class="form-control" name="bpjs" placeholder="BPJS">
                            </div>
                            <div class="mb-3">
                                <label for="pinjaman" class="form-label">Pinjaman</label>
                                <input type="number" class="form-control" name="pinjaman" placeholder="Pinjaman">
                            </div>
                            <div class="mb-3">
                                <label for="cicilan" class="form-label">Cicilan</label>
                                <input type="number" class="form-control" name="cicilan" placeholder="Cicilan">
                            </div>
                            <div class="mb-3">
                                <label for="infaq" class="form-label">Infaq</label>
                                <input type="number" class="form-control" name="infaq" placeholder="Infaq">
                            </div>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>