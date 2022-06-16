<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="rpl") {
    header("location:../../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $val_skhun = $_POST['val_skhun'];
    $val_surat_dokter = $_POST['val_surat_dokter'];
    $val_kk = $_POST['val_kk'];
    $val_akta = $_POST['val_akta'];
    $val_photo = $_POST['val_photo'];
    $val_swaphoto = $_POST['val_swaphoto'];
    $val_rapor2 = $_POST['val_rapor_2'];
    $val_rapor3 = $_POST['val_rapor_3'];
    $val_rapor4 = $_POST['val_rapor_4'];
    $val_rapor5 = $_POST['val_rapor_5'];
    $val_rapor6 = $_POST['val_rapor_6'];
    $val_kip = $_POST['val_kip'];

    $val_piagam1 = $_POST['val_piagam1'];
    $val_piagam2 = $_POST['val_piagam2'];
    $val_piagam3 = $_POST['val_piagam3'];
    $catatan_operator = $_POST['catatan_operator'];
    $kondisi = $_POST['kondisi'];


    // UPDATE `upload` SET `id_file`=[value-1],`nama_file`=[value-2] WHERE 1

    mysqli_query($koneksi, "UPDATE f_siswa_rpl SET
               id='$id',
               val_skhun='$val_skhun',
               val_surat_dokter='$val_surat_dokter',
               val_kk='$val_kk',
               val_akta='$val_akta',
               val_photo='$val_photo',
               val_swaphoto='$val_swaphoto',
               val_rapor_2='$val_rapor2',
               val_rapor_3='$val_rapor3',
               val_rapor_4='$val_rapor4',
               val_rapor_5='$val_rapor5',
               val_rapor_6='$val_rapor6',
               val_kip='$val_kip',
               val_piagam1='$val_piagam1',
               val_piagam2='$val_piagam2',
               val_piagam3='$val_piagam3',
               catatan_operator='$catatan_operator',
               kondisi='$kondisi'

               where id='$id'
               ");

    header("location:index.php?pesan=val_berhasil");
}
