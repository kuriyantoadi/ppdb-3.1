<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakta Integritas Siswa</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<?php
include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
$data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
while ($d = mysqli_fetch_array($data)) {

?>

    <body style="font-family: serif;">
        <div class="container">
            <div class="col-md-8 m-auto">
                <div class="col-6 m-auto">
                    <p class="text-end">Kode Enkripsi: <?= $d['enk'] ?></p>
                </div>

                <h4 class="text-center mb-5">
                    PAKTA INTEGRITAS <br>
                    PESERTA DIDIK SMK NEGERI 1 KRAGILAN
                </h4>

                <p>Yang bertanda tangan dibawah ini:</p>
                <table class="table table-bordered mb-5">
                    <tr>
                        <td class="text-center">1.</td>
                        <td>Nama Lengkap</td>
                        <td>: <?= $d['nama_siswa'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-center">2.</td>
                        <td>NISN</td>
                        <td>: <?= $d['nisn'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-center">3.</td>
                        <td>Nama Orangtua/Wali</td>
                        <td>: <?= $d['nama_org_tua'] ?></td>
                    </tr>
                    <tr>
                        <td rowspan="6" class="text-center">4.</td>
                        <td colspan="2">Alamat Rumah</td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td>a. Kampung/Jalan</td>
                        <td>: <?= $d['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td>b. RT/RW</td>
                        <td>: <?= $d['rt'] ?> / <?= $d['rw'] ?></td>
                    </tr>
                    <tr>
                        <td>c. Kelurahan</td>
                        <td>: <?= $d['kelurahan'] ?></td>
                        </td>
                    </tr>
                    <tr>
                        <td>d. Kecamatan</td>
                        <td>: <?= $d['kecamatan'] ?></td>
                    </tr>
                    <tr>
                        <td>e. Kabupaten/Kota</td>
                        <td>: <?= $d['kota'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-center">5.</td>
                        <td>No Telephone Peserta Didik</td>
                        <td>: <?= $d['no_hp'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-center">6.</td>
                        <td>No Telephone Orangtua/Wali</td>
                        <td>: <?= $d['no_hp_org_tua'] ?></td>
                    </tr>
                </table>

                <h4 class="text-center">MENYATAKAN</h4>

                <ol class="mb-5">
                    <li>Bahwa saya akan bertakwa kepada Tuhan Yang Maha Esa</li>
                    <li>Bahwa saya akan mematuhi dan mentaati peraturan dan tata tertib sekolah</li>
                    <li>Bahwa saya akan menghormati, ta’at dan patuh terhadap Orang Tua dan Guru</li>
                    <li>Bahwa saya akan belajar dengan rajin dan sungguh-sungguh</li>
                    <li>Bahwa saya tidak akan melakukan tindak kriminal, narkoba, tawuran dan kenakalan remaja lainnya</li>
                    <li>Bahwa saya tidak akan menikah selama masih berstatus siswa</li>
                    <li>Apabila dikemudian hari terbukti pernyataan saya tersebut tidak ditepati, maka saya bersedia dikenakan sanksi/hukuman menurut ketentuan peraturan yang berlaku</li>
                </ol>

                <p class="mb-5">Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dalam keadaan sadar, dan tanpa paksaan dari pihak manapun.</p>

                <table class="text-center">
                    <tr>
                        <td style="padding-bottom: 80px; width: 50%;">
                            <p>
                                Menyetujui; <br>
                                Orangtua/Wali
                            </p>
                        </td>
                        <td>
                            <div style="margin-right: 100px"></div>
                        </td>
                        <td style="padding-bottom: 80px; width: 50%;">
                            <p class="pb-3">
                                Serang, Juli 2022 <br>
                                Yang membuat pernyataan
                            </p>
                            <small>Materai 10.000</small><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div style="border-bottom: 1px dashed black; padding-right: 150px;"></div>
                        </td>

                        </td>
                        <td></td>
                        <td>
                            <small style="margin-top: 30px;"><?= $d['nama_siswa'] ?></small>

                        </td>
                    </tr>
                </table>
            <?php } ?>
            </div>
        </div>
        
        <script>
            window.print();
        </script>

    </body>

</html>