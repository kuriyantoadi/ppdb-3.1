<?php
// koneksi database
include '../../koneksi.php';


session_start();
if ($_SESSION['status'] != "admin-du") {
    header("location:../index.php?pesan=belum_login");
} else {

    $id = strip_tags($_POST['id']);
    $nik = strip_tags($_POST['nik']);
    $diterima_kompetensi_keahlian = strip_tags($_POST['diterima_kompetensi_keahlian']);
    $status = strip_tags($_POST['status']);

    mysqli_query($koneksi, "UPDATE tb_lolos SET
            diterima_kompetensi_keahlian='$diterima_kompetensi_keahlian',
            status='$status'
           where nik='$nik'
           ");

    header("location:tampil_siswa.php?id=$id&pesan=edit_berhasil");
}
