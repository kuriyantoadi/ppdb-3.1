<?php
// koneksi database
include '../../koneksi.php';


session_start();
if ($_SESSION['status']!="opwawancara") {
    header("location:../../index.php?pesan=belum_login");
} else {

$id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
$kode_jur = $_GET['kode_jur'];

mysqli_query($koneksi, "UPDATE tb_seleksi SET
          test_ujikom='Selesai'
           where id='$id'
           ");

    header("location:tampil_$kode_jur.php?id=$id&pesan=reset_berhasil");
}
