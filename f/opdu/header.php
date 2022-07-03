<?php
session_start();
if ($_SESSION['status'] != "op-du") {
  header("location:../index.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar Ulang PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <script src="../../../js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>


  <script type="text/javascript" src="../../assets/js/jquery-latest.js"></script>
  <script type="text/javascript" src="../../assets/js/jquery.tablesorter.min.js"></script>



</head>

<body>