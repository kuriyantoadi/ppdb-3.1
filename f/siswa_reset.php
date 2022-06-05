<?php
// koneksi database
include '../koneksi.php';


session_start();
if ($_SESSION['status']!="akl" &&
    $_SESSION['status']!="otkp" &&
    $_SESSION['status']!="tkj" &&
    $_SESSION['status']!="rpl" &&
    $_SESSION['status']!="tkr" &&
    $_SESSION['status']!="tpm" &&
    $_SESSION['status']!="admin"
) {
    header("location:index.php?pesan=belum_login");
} else {


$id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
$kode_jur = mysql_real_escape_string($_GET['kode_jur']);

// $id = strip_tags($_GET['id']);
// $id = $_GET['id'];
// $kode_jur = isset($_GET['kode_jur']) ? abs((int) $_GET['kode_jur']) : 0;


echo $kode_jur;

$data = mysqli_query($koneksi, "SELECT * from tb_siswa where id='$id'");
while ($d = mysqli_fetch_array($data)) {

  //hapus file siswa
  unlink("../assets/file_upload/$kode_jur/$d[pdf_kk]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_kip]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_akta]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_photo]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_skhun]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_surat_dokter]");

  unlink("../assets/file_upload/$kode_jur/$d[pdf_piagam1]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_piagam2]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_piagam3]");

  unlink("../assets/file_upload/$kode_jur/$d[pdf_rapor_1]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_rapor_2]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_rapor_3]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_rapor_4]");
  unlink("../assets/file_upload/$kode_jur/$d[pdf_rapor_5]");

}

mysqli_query($koneksi, "UPDATE tb_siswa SET
          tgl_lahir='',
          pdf_kk='',
          pdf_kip='',
          pdf_akta='',
          pdf_surat_dokter='',
          pdf_photo='',
          pdf_skhun='',
          pdf_rapor_1='',
          pdf_rapor_2='',
          pdf_rapor_3='',
          pdf_rapor_4='',
          pdf_rapor_5='',
          pdf_piagam1='',
          pdf_piagam2='',
          pdf_piagam3='',
          kondisi='Reset Data'
           where id='$id'
           ");


    header("location:siswa_lihat.php?id=$id&pesan=reset_berhasil");
}
