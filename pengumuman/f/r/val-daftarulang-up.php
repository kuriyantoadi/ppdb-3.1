<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op" && $_SESSION['status']!="pos3") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $kondisi_daftarulang = $_POST['kondisi_daftarulang'];

    mysqli_query($koneksi, "UPDATE f_pengumuman SET
               kondisi_daftarulang='$kondisi_daftarulang'

               where id='$id'
               ") or die(mysqli_error($koneksi));

    header("location:index.php?id=$id&pesan=val_berhasil");
}
