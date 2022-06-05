<?php

$data_tkr_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tkr_h1_l = mysqli_num_rows($data_tkr_h1_l);

//tkr hari ke-1 perempuan
$data_tkr_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tkr_h1_p = mysqli_num_rows($data_tkr_h1_p);

//tkr hari ke-2 laki-laki
$data_tkr_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tkr_h2_l = mysqli_num_rows($data_tkr_h2_l);

//tkr hari ke-2 perempuan
$data_tkr_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tkr_h2_p = mysqli_num_rows($data_tkr_h2_p);

//tkr hari ke-3 Laki-laki
$data_tkr_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tkr_h3_l = mysqli_num_rows($data_tkr_h3);

//tkr hari ke-3 Perempuan
$data_tkr_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_tkr_h3_p = mysqli_num_rows($data_tkr_h3);

//tkr hari ke-4
$data_tkr_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_tkr_h4_l = mysqli_num_rows($data_tkr_h4);

$data_tkr_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_tkr_h4_p = mysqli_num_rows($data_tkr_h4);

//tkr hari ke-
$data_tkr_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tkr_h5_l = mysqli_num_rows($data_tkr_h5);

$data_tkr_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkr where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_tkr_h5_p = mysqli_num_rows($data_tkr_h5);

$jml_tkr_l = $jml_tkr_h1_l+$jml_tkr_h2_l+$jml_tkr_h3_l+$jml_tkr_h4_l+$jml_tkr_h5_l;
$jml_tkr_p = $jml_tkr_h1_p + $jml_tkr_h2_p + $jml_tkr_h3_p + $jml_tkr_h4_p + $jml_tkr_h5_p;
 ?>
