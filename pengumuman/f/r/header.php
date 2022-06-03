<?php
session_start();
if ($_SESSION['status']!="pos3") {
    header("location:../index.php?pesan=belum_login");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../assets/css/box.css">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <script type="../text/javascript" src="../../../assets/js/jquery.tablesorter.min.js"></script>

</head>
<body>

  <div class="container">
    
    <center>
      <h2 style="margin-top: 40px; margin-bottom: 0px">Tampilan Operator POS3 PPDB SMKN 1 Kragilan</h2>
      <h2 style="margin-top: 0px; margin-bottom: 0px">Halaman Daftar Ulang</h2>
    </center>

    <div class='box50'>
    </div>
