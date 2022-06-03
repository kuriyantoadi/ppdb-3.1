<?php

$data_otkp_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_otkp_h1_l = mysqli_num_rows($data_otkp_h1_l);

//otkp hari ke-1 perempuan
$data_otkp_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_otkp_h1_p = mysqli_num_rows($data_otkp_h1_p);

//otkp hari ke-2 laki-laki
$data_otkp_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_otkp_h2_l = mysqli_num_rows($data_otkp_h2_l);

//otkp hari ke-2 perempuan
$data_otkp_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_otkp_h2_p = mysqli_num_rows($data_otkp_h2_p);

//otkp hari ke-3 Laki-laki
$data_otkp_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_otkp_h3_l = mysqli_num_rows($data_otkp_h3);

//otkp hari ke-3 Perempuan
$data_otkp_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_otkp_h3_p = mysqli_num_rows($data_otkp_h3);

//otkp hari ke-4
$data_otkp_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_otkp_h4_l = mysqli_num_rows($data_otkp_h4);

$data_otkp_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_otkp_h4_p = mysqli_num_rows($data_otkp_h4);

//otkp hari ke-
$data_otkp_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_otkp_h5_l = mysqli_num_rows($data_otkp_h5);

$data_otkp_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_otkp where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_otkp_h5_p = mysqli_num_rows($data_otkp_h5);

$jml_otkp_l = $jml_otkp_h1_l+$jml_otkp_h2_l+$jml_otkp_h3_l+$jml_otkp_h4_l+$jml_otkp_h5_l;
$jml_otkp_p = $jml_otkp_h1_p + $jml_otkp_h2_p + $jml_otkp_h3_p + $jml_otkp_h4_p + $jml_otkp_h5_p;

 ?>
