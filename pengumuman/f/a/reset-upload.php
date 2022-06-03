<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id = $_GET['id'];

    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where id='$id'");
    while ($d = mysqli_fetch_array($data)) {

      include 'jurusan.php';
      //hapus file siswa
      unlink("../../../assets/file_upload/$kode_jur/$d[pdf_pakta]");
      unlink("../../../assets/file_upload/$kode_jur/$d[pdf_swa_pakta]");
      unlink("../../../assets/file_upload/$kode_jur/$d[pdf_dapodik]");

    }


    mysqli_query($koneksi, "UPDATE f_pengumuman SET
               id='$id',
               pdf_dapodik='',
               pdf_pakta='',
               pdf_swa_pakta='',
               val_dapodik='',
               val_pakta='',
               val_swa_pakta='',
               catatan_operator='',
               kondisi_upload_berkas='',
               kondisi_daftarulang=''

               where id='$id'
               ") or die(mysqli_error($koneksi));

    header("location:val-upload.php?id=$id&pesan=reset_berhasil");
}
