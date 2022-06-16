<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="otkp" && $_SESSION['status']!="sua") {
    header("location:../../index.php?pesan=belum_login");
} else {


$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * from f_siswa_otkp where id='$id'");
while ($d = mysqli_fetch_array($data)) {

  //hapus file siswa
  unlink("../../../assets/file_upload/otkp/$d[pdf_kk]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_kip]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_akta]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_photo]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_skhun]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_surat_dokter]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_swa_kk]");

  unlink("../../../assets/file_upload/otkp/$d[pdf_piagam1]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_piagam2]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_piagam3]");

  unlink("../../../assets/file_upload/otkp/$d[pdf_rapor_2]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_rapor_3]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_rapor_4]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_rapor_5]");
  unlink("../../../assets/file_upload/otkp/$d[pdf_rapor_6]");

}

mysqli_query($koneksi, "UPDATE f_siswa_otkp SET
          npsn_sekolah='',
          pdf_kk='',
          pdf_kip='',
          pdf_akta='',
          pdf_swa_kk='',
          pdf_surat_dokter='',
          pdf_photo='',
          pdf_skhun='',
          pdf_rapor_2='',
          pdf_rapor_3='',
          pdf_rapor_4='',
          pdf_rapor_5='',
          pdf_rapor_6='',
          pdf_piagam1='',
          pdf_piagam2='',
          pdf_piagam3='',
          kondisi=''


           where id='$id'
           ");



    header("location:tampil.php?id=$id");
}
