<?php


include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa from tb_siswa where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANDA TERIMA BERKAS $nama_siswa</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div style="max-width: 1000px; margin: auto;">
        <h5 class="text-center my-5">
            TANDA TERIMA BERKAS PENDAFTARAN DAN VALIDASI <br>
            PENERIMAAN PESERTA DIDIK BARU <br>
            SMK NEGERI 1 KRAGILAN <br>
            TAHUN AJARAN 2022/2023
        </h5>

        <?php
          include '../koneksi.php';
          // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

          $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
          $data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
          while ($d = mysqli_fetch_array($data)) {
              ?>

            <table>
            <!-- <table class="table table-bordered"> -->
                <tr>
                    <td width='240px'>NO. PENDAFTARAN/NO TES</td>
                    <td>: <?= $d['no_p'] ?></td>
                </tr>
                <tr>
                    <td>NAMA CALON SISWA</td>
                    <td>: <?= $d['nama_siswa'] ?></td>
                </tr>
                <tr>
                    <td>SEKOLAH ASAL</td>
                    <td>: <?= $d['asal_sekolah'] ?></td>
                </tr>
            </table>

        <table class="table table-bordered border-dark">
            <thead class="bg-light text-center">
                <tr>
                    <th>NO</th>
                    <th><center>JENIS BERKAS</th>
                    <th><center>ADA</th>
                    <th><center>TIDAK ADA</th>
                    <th><center>KET</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Formulir Pendaftaran/ Print Out Pendaftaran</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Fotocopy Nilai Rapor 5 Semester</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Fotokopi Ijazah/ surat Keterangan Kelulusan (Asli)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Pas Photo 3x4 dua lembar</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Fotocopy Kartu Keluarga, KIP, Kartu PKH (jika ada)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td>Fotocopy Akte Keahiran</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td>Sertifikat Kejuaraan minimal tingkat Kabupaten (Asli) jika ada</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td>Surat Keterangan Sehat dari Dokter</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p>Catatan.</p>
        <table border="2">
          <tr>
            <td width="500px" height='300px'></td>
          </tr>
        </table>


        <table border="1">
          <tr>
            <td rowspan="2">
              <?= $d['pdf_photo'] ?>
            </td>
            <td>
              <div style="margin-right: 300px; margin-bottom: 0px">
              </div>
            </td>
            <td>
              Kragilan,
              Juni 2022
							<br>Panitia PPDB</td>
          </tr>
          <tr>
            <td colspan="3">
              <div style="margin-right: 300px; margin-bottom: 100px">
            </td>

          </tr>
          <tr>
            <td>

            </td>
            <td>
            </td>
            <td>...........................</td>
          </tr>
        </table>


      <?php } ?>
    </div>
</body>
</html>
