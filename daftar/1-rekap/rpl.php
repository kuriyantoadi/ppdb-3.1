<?php

$data_rpl_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_rpl_h1_l = mysqli_num_rows($data_rpl_h1_l);

//rpl hari ke-1 perempuan
$data_rpl_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_rpl_h1_p = mysqli_num_rows($data_rpl_h1_p);

//rpl hari ke-2 laki-laki
$data_rpl_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_rpl_h2_l = mysqli_num_rows($data_rpl_h2_l);

//rpl hari ke-2 perempuan
$data_rpl_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_rpl_h2_p = mysqli_num_rows($data_rpl_h2_p);

//rpl hari ke-3 Laki-laki
$data_rpl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_rpl_h3_l = mysqli_num_rows($data_rpl_h3);

//rpl hari ke-3 Perempuan
$data_rpl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_rpl_h3_p = mysqli_num_rows($data_rpl_h3);

//rpl hari ke-4
$data_rpl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_rpl_h4_l = mysqli_num_rows($data_rpl_h4);

$data_rpl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_rpl_h4_p = mysqli_num_rows($data_rpl_h4);

//rpl hari ke-
$data_rpl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_rpl_h5_l = mysqli_num_rows($data_rpl_h5);

$data_rpl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_rpl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_rpl_h5_p = mysqli_num_rows($data_rpl_h5);

$jml_rpl_l = $jml_rpl_h1_l+$jml_rpl_h2_l+$jml_rpl_h3_l+$jml_rpl_h4_l+$jml_rpl_h5_l;
$jml_rpl_p = $jml_rpl_h1_p + $jml_rpl_h2_p + $jml_rpl_h3_p + $jml_rpl_h4_p + $jml_rpl_h5_p;
 ?>
