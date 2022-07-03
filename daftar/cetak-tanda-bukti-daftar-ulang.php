<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Tanda Bukti Daftar Ulang</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <style>
        .tdd {
            position: absolute;
            top: -50px;
        }
    </style>
</head>

<body style="font-family: serif;">
    <div class="container">
        <div class="col-md-8 m-auto">
            <fieldset class="border border-2 border-dark">
                <div class="text-center mt-3 mb-3">
                    <img src="../assets/file/logo-banten.png" alt="" width="60px" class="img-fluid">
                </div>

                <h4 class="text-center mb-5">
                    TANDA BUKTI PENYERAHAN BERKAS DAFTAR ULANG <br>
                    PPDB SMK NEGERI 1 KRAGILAN <br>
                    TAHUN AJARAN 2022/2023
                </h4>

                <?php
                include '../koneksi.php';
                // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

                $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
                $data = mysqli_query($koneksi, "select * from tb_lolos, tb_siswa where tb_lolos.nik=tb_siswa.nik AND tb_lolos.nik='$nik'");
                while ($d = mysqli_fetch_array($data)) {

                ?>

                    <div class="col-10 m-auto">
                        <table class="table table-bordered">
                            <tr>
                                <td>Tanggal Daftar Ulang</td>
                                <td width="70%">: <div style="border-bottom: 1px dashed;"></div>
                            </tr>
                            <tr>
                                <td>Nomor Pendaftaran</td>
                                <td width="70%">: <?= $d['no_p'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Peserta</td>
                                <td width="70%">: <?= $d['nama_siswa'] ?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td width="70%">: <?= $d['asal_sekolah'] ?></td>
                            </tr>
                            <tr>
                                <td>Program Keahlian</td>
                                <td width="70%">: <?= $d['diterima_kompetensi_keahlian'] ?></td>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <center>
                        <img style="margin: 20px;" src="../assets/file/footer-bukti-daftar-ulang.png" alt="" width="450px" class="img-fluid">
                    </center>
            </fieldset>

            <div class="my-3" style="border-bottom: 1px dashed black;"></div>

            <fieldset class="border border-2 border-dark">
                <div class="text-center mt-3 mb-3">
                    <img style="margin-top: 30px" src="../assets/file/logo-banten.png" alt="" width="60px" class="img-fluid">
                </div>

                <h4 class="text-center mb-5">
                    TANDA BUKTI PENYERAHAN BERKAS DAFTAR ULANG <br>
                    PPDB SMK NEGERI 1 KRAGILAN <br>
                    TAHUN AJARAN 2022/2023
                </h4>

                <div class="col-10 m-auto">
                    <table class="table table-bordered">
                        <tr>
                            <td>Tanggal Daftar Ulang</td>
                            <td width="70%">: <div style="border-bottom: 1px dashed;"></div>
                        </tr>
                        <tr>
                            <td>Nomor Pendaftaran</td>
                            <td width="70%">: <?= $d['no_p'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Peserta</td>
                            <td width="70%">: <?= $d['nama_siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td width="70%">: <?= $d['asal_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Program Keahlian</td>
                            <td width="70%">: <?= $d['diterima_kompetensi_keahlian'] ?></td>
                            </td>
                        </tr>
                    </table>
                </div>

                <center>
                    <img style="margin: 20px;" src="../assets/file/footer-bukti-daftar-ulang.png" alt="" width="450px" class="img-fluid">
                </center>
            </fieldset>

        <?php } ?>

        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>