<?php
// koneksi database
include '../koneksi.php';


session_start();
if ($_SESSION['status']!="tkj" && $_SESSION['status']!="admin") {
    header("location:../../index.php?pesan=belum_login");
} else {


$id = $_POST['id'];
$rapor_2 = $_POST['rapor_2'];
$rapor_3 = $_POST['rapor_3'];
$rapor_4 = $_POST['rapor_4'];
$rapor_5 = $_POST['rapor_5'];
$rapor_6 = $_POST['rapor_6'];

$rapor_edit = mysqli_query($koneksi, "UPDATE f_siswa_tkj SET
          rapor_2='$rapor_2',
          rapor_3='$rapor_3',
          rapor_4='$rapor_4',
          rapor_5='$rapor_5',
          rapor_6='$rapor_6'

           where id='$id'
           ");


if ($rapor_edit) {
  header("location:tampil.php?id=$id&pesan=edit_rapor");
}
echo "edit rapor gagal";

}
