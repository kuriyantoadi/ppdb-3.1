<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="sua") {
    header("location:../../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $kondisi = $_POST['kondisi'];


    // UPDATE `upload` SET `id_file`=[value-1],`nama_file`=[value-2] WHERE 1

    mysqli_query($koneksi, "UPDATE f_siswa_tkr SET
               kondisi='$kondisi'
               where id='$id'
               ");

    header("location:index.php?pesan=val_berhasil");
}
