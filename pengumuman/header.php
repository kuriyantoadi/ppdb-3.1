<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa") {
    header("location:index.php?pesan=belum_login");
}

$nisn_siswa = $_SESSION['nisn_siswa'];
$kode_jur = $_SESSION['kode_jur'];



include '../koneksi.php';
$cek_id = mysqli_query($koneksi, "SELECT * from f_pengumuman where nisn_siswa='$nisn_siswa' ");
while ($d_id = mysqli_fetch_array($cek_id)) {
  $nama_jurusan =  $d_id['kompetensi_keahlian'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
      <center style="margin-top: 30px"><h3>Pengumuman Peserta Didik SMK Negeri 1 Kragilan</h3></center>
      <!-- <center style="margin-top: 30px"><h3>Pengumuman Peserta Didik SMK Negeri 1 Kragilan</h3></center> -->
      <center style="margin-bottom: 50px"><h3>Kompetensi Keahlian <?= $nama_jurusan ?></h3></center>
		</div>
		<div class="col-md-2">
		</div>
  </div>
