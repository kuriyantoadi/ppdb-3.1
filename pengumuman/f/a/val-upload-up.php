<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $val_dapodik = $_POST['val_dapodik'];
    $val_pakta = $_POST['val_pakta'];
    $val_swa_pakta = $_POST['val_swa_pakta'];
    $kondisi_upload_berkas = $_POST['kondisi_upload_berkas'];

    mysqli_query($koneksi, "UPDATE f_pengumuman SET
               val_dapodik='$val_dapodik',
               val_pakta='$val_pakta',
               val_swa_pakta='$val_swa_pakta',
               kondisi_upload_berkas='$kondisi_upload_berkas'

               where id='$id'
               ") or die(mysqli_error($koneksi));

    header("location:index.php?id=$id&pesan=val_berhasil");
}
