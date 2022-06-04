<?php
// koneksi database
include '../koneksi.php';


session_start();
if ($_SESSION['status']=="akl") {
  $kompetensi_keahlian = "Akuntansi dan Keuangan Lembaga";
  $kode_jur = "akl";
}elseif ($_SESSION['status']=="otkp") {
  $kompetensi_keahlian = "Otomatisasi dan Tata Kelola Perkantoran";
  $kode_jur = "otkp";
}elseif ($_SESSION['status']=="tkj") {
  $kompetensi_keahlian = "Teknik Komputer dan Jaringan";
  $kode_jur = "tkj";
}elseif ($_SESSION['status']=="rpl") {
  $kompetensi_keahlian = "Rekayasa Perangkat Lunak";
  $kode_jur = "rpl";
}elseif ($_SESSION['status']=="tkr") {
  $kompetensi_keahlian = "Teknik Kendaraan Ringan";
  $kode_jur = "tkr";
}elseif ($_SESSION['status']=="tpm") {
  $kompetensi_keahlian = "Teknik Pemesinan";
  $kode_jur = "tpm";
}else {
  header("location:index.php?pesan=belum_login");
}



$id = $_POST['id'];

$sem1_agama = mysql_real_escape_string($_POST['sem1_agama']);
$sem1_b_indo = mysql_real_escape_string($_POST['$sem1_b_indo']);
$sem1_mtk = mysql_real_escape_string($_POST['$sem1_mtk']);
$sem1_ipa = mysql_real_escape_string($_POST['$sem1_ipa']);
$sem1_b_ing = mysql_real_escape_string($_POST['$sem1_b_ing']);


$rapor_edit = mysqli_query($koneksi, "UPDATE f_siswa_tkj SET
          rapor_2='$rapor_2',
          rapor_3='$rapor_3',
          rapor_4='$rapor_4',
          rapor_5='$rapor_5',
          rapor_6='$rapor_6'

           where id='$id'
           ");


if ($rapor_edit) {
  // header("location:tampil.php?id=$id&pesan=edit_rapor");
}
echo "edit rapor gagal";
