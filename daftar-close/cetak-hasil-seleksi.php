<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Hasil Seleksi</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

</head>

<body style="font-family: serif;">
    <center>
        <img height="150px" src="../assets/file/cover-surat-diterima.png" alt="header">
    </center>

    <div class="container">
        <div class="col-md-8 m-auto">


            <div class="text-center mb-5">
                <h5>
                    KEPUTUSAN KEPALA SMK NEGERI 1 KRAGILAN <br>
                    NOMOR : 422/1280-SMKN.1/2022
                </h5>
                <h5>TENTANG</h5>
                <h5>
                    PENETAPAN PENERIMAAN CALON PESERTA DIDIK BARU <br>
                    SMK NEGERI 1 KRAGILAN TAHUN AJARAN 2022/2023
                </h5>
            </div>

            <p style="font-size:11px; text-align: justify;">Berdasarkan Peraturan Gubernur Banten Nomor : 7 Tahun 2022 Tentang Perubahan Peraturan Gubernur Banten Nomor : 17 Tahun 2021 tentang Penerimaan Peserta Didik Baru Pada Sekolah Menengah Atas Negeri, Sekolah Menengah Kejuruan Negeri dan Sekolah Khusus Negeri di Provinsi Banten, Peraturan Kepala Dinas Pendidikan dan Kebudayaan Provinsi Banten Nomor : 800/220-DINDIKBUD/2022 Tentang Petunjuk Teknis Penerimaan Peserta Didik Baru Tahun 2022 dan Kumulasi Hasil Nilai Rapor Semester 1 - 5, Tes Seleksi Uji Kompetensi dan Nilai Prestasi Non Akademik. Kepala SMK Negeri 1 Kragilan melalui rapat panitia PPDB menetapkan bahwa:</p>

            <?php
            include '../koneksi.php';
            // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

            $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
            $data = mysqli_query($koneksi, "select * from tb_siswa, tb_lolos where tb_siswa.nik=tb_lolos.nik AND tb_lolos.nik='$nik'");
            while ($d = mysqli_fetch_array($data)) {

            ?>

                <div class="col-10 m-auto">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>: <?= $d['nama_siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>: <?= $d['nisn'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>: <?= $d['asal_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Enkripsi</td>
                            <td>: <?= $d['enk'] ?></td>
                        </tr>
                    </table>
                </div>

                <p style="text-align: center; font-weight: bold;">DINYATAKAN : </p>

                <div class="col-8 m-auto mb-5">

                    <?php if ($d['status'] == "Diterima") { ?>

                        <table class="table table-bordered border-dark">
                            <tr>
                                <th colspan="2" class="text-center fs-4">DITERIMA</th>
                            </tr>
                            <tr>
                                <td>Pada Kompetensi Keahlian</td>
                                <th>: <?= $d['diterima_kompetensi_keahlian'] ?></th>
                            </tr>
                        </table>

                    <?php } elseif ($d['status'] == "Tidak Diterima") { ?>

                        <table class="table table-bordered border-dark">
                            <tr>
                                <th colspan="2" class="text-center fs-4">TIDAK DITERIMA PADA KOMPETENSI KEAHLIAN PILIHAN 1 DAN ATAU PILIHAN 2</th>
                            </tr>
                        </table>

                    <?php } else { ?>
                        <p>Belum Ada Konfirmasi Dari Panitia</p>
                    <?php } ?>

                </div>

                <table>
                    <tr>
                        <td>
                            <div style="margin-right: 400px;"></div>
                        </td>
                        <td>
                            <img height="180px" src="../assets/file/ttd-kepsek.png" alt="ttd kepala sekolah">
                        </td>
                    </tr>
                </table>

                <!-- <div> -->
                <?php if ($d['status'] == "Diterima") { ?>

                    <p>KETERANGAN:</p>
                    <ol style="font-size:11px;">
                        <li>Bagi calon peserta didik baru yang diterima agar melaksanakan daftar ulang/registrasi pada tanggal 5 s.d. 7 Juli 2022 sesuai dengan jadwal yang telah ditentukan, apabila tidak hadir daftar ulang/registrasi paling lambat tanggal 7 Juli 2022 pukul 12:00 WIB maka dianggap mengundurkan diri;</li>
                        <li>Berkas Daftar ulang terdiri dari SK Penetapan, Form Pakta Integritas Siswa, Form Dapodik, Tanda Bukti Penyerahan Berkas (Download di laman Web Sekolah: http//www.smkn1kragilan.sch.id). berkas dimasukkan pada map snelhekter plastik sesuai warna kompetensi keahlian;</li>
                        <li>Siswa yang diterima, wajib mengikuti kegiatan MPLS, pada tanggal 18 s.d 20 Juli 2022. Dan Kumpul di sekolah pada tanggal 15 Juli 2022 jam 13.00 untuk pengarahan MPLS.</li>
                    </ol>

                <?php } elseif ($d['status'] == "Tidak Diterima") { ?>

                <?php } else { ?>
                    <p>Belum Ada Konfirmasi Dari Panitia</p>
                <?php } ?>

                <!-- </div> -->
            <?php } ?>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>