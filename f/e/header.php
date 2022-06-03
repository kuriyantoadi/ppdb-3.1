<?php ob_start(); ?>

<?php
  session_start();
  if ($_SESSION['status']!="admin") {
      header("location:../../index.php?pesan=belum_login");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampil admin PPDB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <script src="../../../js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="../text/javascript" src="../../../js/jquery-latest.js"></script>
  <script type="../text/javascript" src="../../../js/jquery.tablesorter.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>Daftar Pendaftaran Calon Peserta Didik</h2></center>
  <center><h2>SMKN 1 Kragilan</h2></center>

  <br><br><br>

  <div class="form-group">
    <div class="col-sm-7">
      <a href="../../logout.php" type="button" class="btn btn-danger">Logout</a>
