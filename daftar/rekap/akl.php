<?php

$data_akl_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_akl_h1_l = mysqli_num_rows($data_akl_h1_l);

//akl hari ke-1 perempuan
$data_akl_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_akl_h1_p = mysqli_num_rows($data_akl_h1_p);

//akl hari ke-2 laki-laki
$data_akl_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_akl_h2_l = mysqli_num_rows($data_akl_h2_l);

//akl hari ke-2 perempuan
$data_akl_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_akl_h2_p = mysqli_num_rows($data_akl_h2_p);

//akl hari ke-3 Laki-laki
$data_akl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_akl_h3_l = mysqli_num_rows($data_akl_h3);

//akl hari ke-3 Perempuan
$data_akl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_akl_h3_p = mysqli_num_rows($data_akl_h3);

//akl hari ke-4
$data_akl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_akl_h4_l = mysqli_num_rows($data_akl_h4);

$data_akl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_akl_h4_p = mysqli_num_rows($data_akl_h4);

//akl hari ke-
$data_akl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_akl_h5_l = mysqli_num_rows($data_akl_h5);

$data_akl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_akl_h5_p = mysqli_num_rows($data_akl_h5);

$jml_akl_l = $jml_akl_h1_l+$jml_akl_h2_l+$jml_akl_h3_l+$jml_akl_h4_l+$jml_akl_h5_l;
$jml_akl_p = $jml_akl_h1_p + $jml_akl_h2_p + $jml_akl_h3_p + $jml_akl_h4_p + $jml_akl_h5_p;

$total_akl = $jml_akl_l + $jml_akl_p

 ?>
