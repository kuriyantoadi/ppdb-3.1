<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa" && $_SESSION['status']!="op") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa from f_pengumuman where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAKTA INTEGRITAS - <?= $nama_siswa ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/watermark.css">
  <!-- <script src="../../assets/js/bootstrap.min.js"></script> -->

</head>
<body>

<div class="container">

      <center><h3 style="margin-top: 30px">PAKTA INTEGRITAS</h3>
      <h3>SISWA SMK NEGERI 1 KRAGILAN</h3><center>

      <?php
        $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
        $data = mysqli_query($koneksi, "select * from f_pengumuman where nik='$nik'");
        while ($d = mysqli_fetch_array($data)) {
      ?>

      <table class="table table-bordered" style="margin-top: 50px">
        <tr>
          <td colspan="2">Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
          <td width="150px">Nama Lengkap</td>
          <td>: <?= $d['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>: <?= $d['nisn_siswa'] ?></td>
        </tr>
        <tr>
          <td>Kompetensi Keahlian</td>
          <td>: <?= $d['kompetensi_keahlian'] ?></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>: <?= $d['asal_sekolah'] ?></td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td>: <?= $d['alamat'] ?></td>
        </tr>
        <tr>
          <td>RT / RW</td>
          <td>: <?= $d['rt'] ?> / <?= $d['rw'] ?></td>
        </tr>
        <tr>
          <td>Kelurahan</td>
          <td>: <?= $d['kelurahan'] ?></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>: <?= $d['kecamatan'] ?></td>
        </tr>
        <tr>
          <td>Kabupaten / Kota</td>
          <td>: <?= $d['kota'] ?></td>
        </tr>
        <tr>
          <td>Nomor HP</td>
          <td>: <?= $d['no_hp'] ?></td>
        </tr>


      </table>
      <p style="margin-top: 20px">
        <center><b>MENYATAKAN</b><center>
      </p>

          <ol style="text-align: justify;">
            <li>Bahwa saya akan bertakwa kepada Tuhan Yang Maha Esa;</li>
            <li>Bahwa saya akan mematuhi dan mentaati peraturan dan tata tertib sekolah;</li>
            <li>Bahwa saya akan menghormati, ta’at dan patuh terhadap Orang Tua dan Guru;</li>
            <li>Bahwa saya akan belajar dengan rajin dan sungguh-sungguh;</li>
            <li>Bahwa saya tidak akan melakukan tindak kriminal, narkoba dan kenakalan remaja lainnya;</li>
            <li>Bahwa saya tidak akan menikah selama masih berstatus siswa;</li>
            <li>Apabila dikemudian hari terbukti pernyataan saya tersebut tidak ditepati, maka saya bersedia dikenakan sanksi/hukuman menurut ketentuan peraturan yang berlaku.</li>
          </ol>

    <p style="text-align: justify;">
      Demikian surat pernyataan ini saya buat dalam keadaan sadar, tanpa paksaan, dan dibuat dengan sebenar-benarnya.
    </p>

<!-- tanda tanggan kepala sekolah -->
    <img height="130px" align="right" src="../assets/images/ttd-siswa.png" style="margin-right:  80px;"/>



  <?php } ?>
</div>


<script>
    window.print();
  </script>


  </body>
</html>
