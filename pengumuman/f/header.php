<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op") {
    header("location:../index.php?pesan=belum_login");
}

$kode_jur = $_SESSION['kode_jur'];
$jur = $_SESSION['jur'];

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
      <h3></h3>
    </center>
    <center>
      <h3><?= $jur ?></h3>
    </center>

    <br><br><br>
