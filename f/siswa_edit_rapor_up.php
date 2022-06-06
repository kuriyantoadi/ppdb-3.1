<?php
// koneksi database
include '../koneksi.php';

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



// $id = mysql_real_escape_string($_POST['id']);
$id = isset($_POST['id']) ? abs((int) $_POST['id']) :0;
// echo $id;
//semester 1
$sem1_agama = isset($_POST['sem1_agama']) ? abs((int) $_POST['sem1_agama']) :0;
$sem1_b_indo = isset($_POST['sem1_b_indo']) ? abs((int) $_POST['sem1_b_indo']) :0;
$sem1_mtk = isset($_POST['sem1_mtk']) ? abs((int) $_POST['sem1_mtk']) :0;
$sem1_ipa = isset($_POST['sem1_ipa']) ? abs((int) $_POST['sem1_ipa']) :0;
$sem1_b_ing = isset($_POST['sem1_b_ing']) ? abs((int) $_POST['sem1_b_ing']) :0;

// semester 2
$sem2_agama = isset($_POST['sem2_agama']) ? abs((int) $_POST['sem2_agama']) :0;
$sem2_b_indo = isset($_POST['sem2_b_indo']) ? abs((int) $_POST['sem2_b_indo']) :0;
$sem2_mtk = isset($_POST['sem2_mtk']) ? abs((int) $_POST['sem2_mtk']) :0;
$sem2_ipa = isset($_POST['sem2_ipa']) ? abs((int) $_POST['sem2_ipa']) :0;
$sem2_b_ing = isset($_POST['sem2_b_ing']) ? abs((int) $_POST['sem2_b_ing']) :0;

// semester 3
$sem3_agama = isset($_POST['sem3_agama']) ? abs((int) $_POST['sem3_agama']) :0;
$sem3_b_indo = isset($_POST['sem3_b_indo']) ? abs((int) $_POST['sem3_b_indo']) :0;
$sem3_mtk = isset($_POST['sem3_mtk']) ? abs((int) $_POST['sem3_mtk']) :0;
$sem3_ipa = isset($_POST['sem3_ipa']) ? abs((int) $_POST['sem3_ipa']) :0;
$sem3_b_ing = isset($_POST['sem3_b_ing']) ? abs((int) $_POST['sem3_b_ing']) :0;

// semester 4
$sem4_agama = isset($_POST['sem4_agama']) ? abs((int) $_POST['sem4_agama']) :0;
$sem4_b_indo = isset($_POST['sem4_b_indo']) ? abs((int) $_POST['sem4_b_indo']) :0;
$sem4_mtk = isset($_POST['sem4_mtk']) ? abs((int) $_POST['sem4_mtk']) :0;
$sem4_ipa = isset($_POST['sem4_ipa']) ? abs((int) $_POST['sem4_ipa']) :0;
$sem4_b_ing = isset($_POST['sem4_b_ing']) ? abs((int) $_POST['sem4_b_ing']) :0;

$sem5_agama = isset($_POST['sem5_agama']) ? abs((int) $_POST['sem5_agama']) :0;
$sem5_b_indo = isset($_POST['sem5_b_indo']) ? abs((int) $_POST['sem5_b_indo']) :0;
$sem5_mtk = isset($_POST['sem5_mtk']) ? abs((int) $_POST['sem5_mtk']) :0;
$sem5_ipa = isset($_POST['sem5_ipa']) ? abs((int) $_POST['sem5_ipa']) :0;
$sem5_b_ing = isset($_POST['sem5_b_ing']) ? abs((int) $_POST['sem5_b_ing']) :0;

$rapor_edit = mysqli_query($koneksi, "UPDATE tb_siswa SET
                          sem1_agama='$sem1_agama',
                          sem1_b_indo='$sem1_b_indo',
                          sem1_mtk='$sem1_mtk',
                          sem1_ipa='$sem1_ipa',
                          sem1_b_ing='$sem1_b_ing',
                          sem2_agama='$sem2_agama',
                          sem2_b_indo='$sem2_b_indo',
                          sem2_mtk='$sem2_mtk',
                          sem2_ipa='$sem2_ipa',
                          sem2_b_ing='$sem2_b_ing',
                          sem3_agama='$sem3_agama',
                          sem3_b_indo='$sem3_b_indo',
                          sem3_mtk='$sem3_mtk',
                          sem3_ipa='$sem3_ipa',
                          sem3_b_ing='$sem3_b_ing',
                          sem4_agama='$sem4_agama',
                          sem4_b_indo='$sem4_b_indo',
                          sem4_mtk='$sem4_mtk',
                          sem4_ipa='$sem4_ipa',
                          sem4_b_ing='$sem4_b_ing',
                          sem5_agama='$sem5_agama',
                          sem5_b_indo='$sem5_b_indo',
                          sem5_mtk='$sem5_mtk',
                          sem5_ipa='$sem5_ipa',
                          sem5_b_ing='$sem5_b_ing'
           where id='$id' " )or die(mysqli_error($koneksi));


if ($rapor_edit) {
  header("location:siswa_edit_rapor.php?id=$id&pesan=edit_rapor");
}else {
  echo "edit rapor gagal";
}
