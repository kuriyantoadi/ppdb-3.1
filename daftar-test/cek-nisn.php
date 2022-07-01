<?php

// cek nik akl
// $cek_nik = mysqli_query($koneksi, "SELECT nik FROM f_siswa_akl");
// while ($row = mysqli_fetch_array($cek_nik)) {
//     $t_nik = $row['nik'];
//     $nik = $_POST['nik'];
//     if ($t_nik == $nik) {
//         echo "Maaf, data anda ada yang sama dengan data yang sudah pernah di input pendaftaran sebelumnya?";
//         echo "<br>";
//         echo "Anda sudah pernah mendaftar? Jika, sudah anda bisa periksa dihalaman siswa sudah mendaftar";
//         echo "<br>";
//         echo "Jika, anda belum pernah mendaftar anda bisa hubungi Operator kami";
//
//         exit();
//     }
// }
// $nisn = $_GET['nisn'];
// include '../koneksi.php';

// nisn akl
$cek_nisn_akl = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_akl where nisn='$nisn'");
$row_akl = mysqli_fetch_array($cek_nisn_akl);
// echo $row['nisn'];
if (!empty($row_akl)) {
  echo "Maaf nisn anda sudah cocok dengan data di sistem kami di kompetensi keahlian Akuntasi dan Keuangan Lembaga";
  exit;
}

$cek_nisn_otkp = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_otkp where nisn='$nisn'");
$row_otkp = mysqli_fetch_array($cek_nisn_otkp);
// echo $row['nisn'];
if (!empty($row_otkp)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran";
  exit;
}

$cek_nisn_tkj = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_tkj where nisn='$nisn'");
$row_tkj = mysqli_fetch_array($cek_nisn_tkj);
// echo $row['nisn'];
if (!empty($row_tkj)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Teknik Komputer dan jaringan";
  exit;
}

$cek_nisn_rpl = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_rpl where nisn='$nisn'");
$row_rpl = mysqli_fetch_array($cek_nisn_rpl);
// echo $row['nisn'];
if (!empty($row_rpl)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Rekayasa Perangkat Lunak";
  exit;
}

$cek_nisn_tkr = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_tkr where nisn='$nisn'");
$row_tkr = mysqli_fetch_array($cek_nisn_tkr);
// echo $row['nisn'];
if (!empty($row_rpl)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Teknik Kendaraan Ringan Otomotif";
  exit;
}

$cek_nisn_tpm = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_tpm where nisn='$nisn'");
$row_tpm = mysqli_fetch_array($cek_nisn_tpm);
// echo $row['nisn'];
if (!empty($row_tpm)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Teknik Pemesinan";
  exit;
}

 ?>
