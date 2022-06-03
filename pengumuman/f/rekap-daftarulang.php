<?php
include 'rekap-tampil.php';
include 'rekap-jml.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <script src="../../assets/js/bootstrap.min.js"></script>

  <script type="../text/javascript" src="../../assets/js/jquery-latest.js"></script>
  <script type="../text/javascript" src="../../assets/js/jquery.tablesorter.min.js"></script>
</head>
<body>

  <div class="container">
    <center>
      <h2>Tampilan Admin PPDB SMKN 1 Kragilan</h2>
    </center>
    <center>
      <h3>Rekap Daftar Ulang</h3>
    </center>


    <table class="table table-bordered table-hover">
      <tr>
        <th><center>No</th>
        <th><center>Jurusan</th>
        <th><center>Siswa Diterima</th>
        <th><center>Siswa Belum Upload Berkas</th>
        <th><center>Siswa Sudah Upload Berkas</th>
        <th><center>Berkas Sudah Divalidasi</th>
        <th><center>Berkas Belum Divalidasi</th>
        <th><center>Upload Data Sesuai</th>
        <th><center>Siswa Daftar Ulang</th>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Akuntansi dan Keuangan Lembaga</td>
        <td><center><?= tampil_diterima('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?=  tampil_blm_upload('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?=  tampil_sdh_upload('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_val('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_blm_val('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_datasesuai('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_daftarulang('Akuntansi dan Keuangan Lembaga') ?></td>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Otomatisasi dan Tata Kelola Perkantoran</td>
        <td><center><?= tampil_diterima('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?=  tampil_blm_upload('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?=  tampil_sdh_upload('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?= tampil_val('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?= tampil_blm_val('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?= tampil_datasesuai('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
        <td><center><?= tampil_daftarulang('Otomatisasi dan Tata Kelola Perkantoran') ?></td>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Teknik Komputer dan Jaringan</td>
        <td><center><?= tampil_diterima('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?=  tampil_blm_upload('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?=  tampil_sdh_upload('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?= tampil_val('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?= tampil_blm_val('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?= tampil_datasesuai('Teknik Komputer dan Jaringan') ?></td>
        <td><center><?= tampil_daftarulang('Teknik Komputer dan Jaringan') ?></td>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Rekayasa Perangkat Lunak</td>
        <td><center><?= tampil_diterima('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?=  tampil_blm_upload('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?=  tampil_sdh_upload('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?= tampil_val('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?= tampil_blm_val('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?= tampil_datasesuai('Rekayasa Perangkat Lunak') ?></td>
        <td><center><?= tampil_daftarulang('Rekayasa Perangkat Lunak') ?></td>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Teknik Pemesinan</td>
        <td><center><?= tampil_diterima('Teknik Pemesinan') ?></td>
        <td><center><?=  tampil_blm_upload('Teknik Pemesinan') ?></td>
        <td><center><?=  tampil_sdh_upload('Teknik Pemesinan') ?></td>
        <td><center><?= tampil_val('Teknik Pemesinan') ?></td>
        <td><center><?= tampil_blm_val('Teknik Pemesinan') ?></td>
        <td><center><?= tampil_datasesuai('Teknik Pemesinan') ?></td>
        <td><center><?= tampil_daftarulang('Teknik Pemesinan') ?></td>
      </tr>

      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Teknik Kendaraan Ringan Otomotif</td>
        <td><center><?= tampil_diterima('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?=  tampil_blm_upload('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?=  tampil_sdh_upload('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?= tampil_val('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?= tampil_blm_val('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?= tampil_datasesuai('Teknik Kendaraan Ringan Otomotif') ?></td>
        <td><center><?= tampil_daftarulang('Teknik Kendaraan Ringan Otomotif') ?></td>
      </tr>
      <tr>
        <td colspan="2">Jumlah</td>
        <td><center>
          <?= jml_diterima() ?>
        </td>
        <td><center>
          <?= jml_blm_upload() ?>
        </td>
        <td><center>
          <?= jml_sdh_upload() ?>
        </td>
        <td><center>
          <?= jml_val() ?>
        </td>
        <td><center>
          <?= jml_blm_val() ?>
        </td>
        <td><center>
          <?= jml_datasesuai() ?>
        </td>
        <td><center>
          <?= jml_daftarulang() ?>
        </td>
      </tr>
    </table>


      <script src="../../assets/datepicker/js/custom.js"></script>
    </body>
    </html>
