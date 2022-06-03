<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="akl" && $_SESSION['status']!="admin") {
    header("location:../../index.php?pesan=belum_login");
} else {


$id = $_GET['id'];


mysqli_query($koneksi, "delete from f_pengumuman where id='$id' ");


header("location:index.php?pesan=hapus_berhasil");
}
