<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $kondisi = $_POST['kondisi'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    mysqli_query($koneksi, "UPDATE f_pengumuman SET
               kondisi='$kondisi',
               kompetensi_keahlian='$kompetensi_keahlian'

               where id='$id'
               ") or die(mysqli_error($koneksi));

    header("location:index.php?id=$id&pesan=val_berhasil");
}
