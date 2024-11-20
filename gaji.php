<?php
require "oop/penggajihan.php";
if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unitPendidikan = $_POST['unitPendidikan'];
    $tanggalGaji = $_POST['tanggalGaji'];
    $jabatan = $_POST['jabatan'];
    $lamaKerja = $_POST['lamaKerja'];
    $statusKerja = $_POST['statusKerja'];
    $bpjs = $_POST['bpjs'];
    $cicilan = $_POST['cicilan'];
    $pinjaman = $_POST['pinjaman'];
    $infaq = $_POST['infaq'];

    $cetak = new Penggajihan;
    $potongan = $cetak->potongan($bpjs, $cicilan, $pinjaman, $infaq);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/gaji.css">
        <title>Gaji</title>
    </head>

    <body>
        <div class="container py-5">
            <div class="card text-center mb-5">
                <div class="card-header">
                    <i class="bi bi-clipboard-data"></i>
                    Data Guru
                </div>
                <div class="card-body">
                    <center>
                        <table class="w-75">
                            <tr>
                                <td>No</td>
                                <td> : </td>
                                <td><?= $no ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> : </td>
                                <td><?= $nama ?></td>
                            </tr>
                            <tr>
                                <td>Unit Pendidikan</td>
                                <td> : </td>
                                <td><?= $unitPendidikan ?></td>
                            </tr>
                            <tr>
                                <td>Status Kerja</td>
                                <td> : </td>
                                <td><?= $statusKerja ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Gaji</td>
                                <td> : </td>
                                <td><?= $tanggalGaji ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td><?= $jabatan ?></td>
                            </tr>
                            <tr>
                                <td>Lama Kerja</td>
                                <td> : </td>
                                <td><?= $lamaKerja ?></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    <i class="bi bi-cash-stack"></i>
                    Total Akumulasi Gaji
                </div>
                <div class="card-body">
                    <center>
                        <table class="w-75">
                            <tr>
                                <td>Gaji</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($cetak->gaji($jabatan), 0, ',', '.')  ?></td>
                            </tr>
                            <tr>
                                <td>Bonus</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($cetak->bonus($statusKerja), 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>BPJS</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($bpjs, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Pinjaman</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($pinjaman, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Cicilan</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($cicilan, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Infaq</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($infaq, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Gaji Bersih</td>
                                <td> : </td>
                                <td><?= "Rp " . number_format($cetak->gajiBersih(), 0, ',', '.') ?></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>

<?php } ?>