<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa" && $_SESSION['status']!="op") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa, kondisi from f_pengumuman where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];

  if ($d_siswa['kondisi'] == "DITERIMA") {
    $no_surat = '581';
  }elseif($d_siswa['kondisi'] == 'TIDAK DITERIMA') {
    $no_surat = '582';

  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan - <?= $nama_siswa ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/watermark.css">
  <!-- <script src="../../assets/js/bootstrap.min.js"></script> -->

</head>
<body>

<div class="container">
  <!-- <div id="image_watermark"> -->
  <!-- <img src="../assets/images/smk-watermark.png" /> -->
    <center><img style="margin-bottom: 0px; margin-top:  10px; margin-left: 0px" src="../assets/images/kop-surat.png" /><center>

      <h3><b>SURAT KETERANGAN</b></h3>
      <p>Nomor : 442/<?= $no_surat ?>/Adm.Sekolah</p>
      <p style="margin-top: 10px; margin-bottom: 10px">Tentang :</p>
      <p style="margin-bottom: 20px"><b>PENGUMUMAN HASIL SELEKSI
      <br>PENERIMAAN PESERTA DIDIK BARU (PPBD)
      <br>SMK NEGERI 1 KRAGILAN TAHUN PELAJARAN 2021/2022</b></p>

      <?php
        $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
        $data = mysqli_query($koneksi, "select * from f_pengumuman where nik='$nik'");
        while ($d = mysqli_fetch_array($data)) {
      ?>

      <table>
        <tr>
          <td colspan="2">Kepala SMK Negeri 1 Kragilan Kabupaten Serang menyatakan bahwa ;</td>
        </tr>
        <tr>
          <td width="150px">Nama</td>
          <td>: <?= $d['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>: <?= $d['nisn_siswa'] ?></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>: <?= $d['asal_sekolah'] ?></td>
        </tr>

      </table>
      <p style="margin-top: 20px">Berdasarkan hasil rapat pleno panitia PPDB SMK Negeri 1 Kragilan tanggal 29 Juni 2021,
        dengan memperhatikan Nilai Raport dan Tes Bakat dan Minat/Uji Kompetensi, maka siswa tersebut dinyatakan:</p>

      <table>
        <tr>
          <td colspan="2"><center>
            <h3><b><?= $d['kondisi'] ?></b></h3>
          </center>
          </td>
        </tr>

        <?php if ($d['kondisi'] == "DITERIMA") { ?>
          <tr>
            <td>Pada Kompetensi Keahlian</td>
            <td>: <b><?= $d['kompetensi_keahlian'] ?></b></td>
          </tr>
        <?php }else{ ?>
          <tr>
            <td><h4 style="margin-bottom: 80px"><b>Di SMK Negeri 1 Kragilan<b></h4></td>
          </tr>
        <?php } ?>

      </table>



<!-- tanda tanggan kepala sekolah -->
    <img height="130px" align="right" src="../assets/images/ttd-kepsek.png" style="margin-right:  80px;"/>

  <?php if ($d['kondisi'] == "DITERIMA") { ?>
    <p style="text-align: justify; margin-top: 150px">
      *)  Catatan :
      <ol style="text-align: justify;">
        <li>Daftar Ulang tanggal 1 s.d 9 Juli 2021,
          <br>(Siswa yang tidak mendaftar ulang dianggap mengundurkan diri);</li>
        <li>Berkas Daftar ulang terdiri dari Surat Keterangan Diterima, Pakta Integritas Siswa, Bukti Upload Berkas dan Form Dapodik dimenu <b>Daftar Ulang</b>. Berkas dimasukkan pada map snelhekter plastik sesuai warna kompetensi keahlian</li>
        <li>Siswa yang diterima, wajib mengikuti kegiatan MPLS, pada tanggal 12 s.d 14 Juli 2021.</li>
      </ol>
    </p>
    <img height="70px" align="right" src="../assets/images/smk-bisa.png" style="float: left;"/>

  <?php }else{ ?>

  <img height="70px" align="right" src="../assets/images/smk-bisa.png" style="float: left; margin-top: 150px"/>

  <?php } ?>

  <?php } ?>
</div>


<script>
    window.print();
  </script>


  </body>
</html>
