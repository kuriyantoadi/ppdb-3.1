<?php

$data_tkj_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tkj_h1_l = mysqli_num_rows($data_tkj_h1_l);

//tkj hari ke-1 perempuan
$data_tkj_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tkj_h1_p = mysqli_num_rows($data_tkj_h1_p);

//tkj hari ke-2 laki-laki
$data_tkj_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tkj_h2_l = mysqli_num_rows($data_tkj_h2_l);

//tkj hari ke-2 perempuan
$data_tkj_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tkj_h2_p = mysqli_num_rows($data_tkj_h2_p);

//tkj hari ke-3 Laki-laki
$data_tkj_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tkj_h3_l = mysqli_num_rows($data_tkj_h3);

//tkj hari ke-3 Perempuan
$data_tkj_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_tkj_h3_p = mysqli_num_rows($data_tkj_h3);

//tkj hari ke-4
$data_tkj_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_tkj_h4_l = mysqli_num_rows($data_tkj_h4);

$data_tkj_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_tkj_h4_p = mysqli_num_rows($data_tkj_h4);

//tkj hari ke-
$data_tkj_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tkj_h5_l = mysqli_num_rows($data_tkj_h5);

$data_tkj_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tkj where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_tkj_h5_p = mysqli_num_rows($data_tkj_h5);

$jml_tkj_l = $jml_tkj_h1_l+$jml_tkj_h2_l+$jml_tkj_h3_l+$jml_tkj_h4_l+$jml_tkj_h5_l;
$jml_tkj_p = $jml_tkj_h1_p + $jml_tkj_h2_p + $jml_tkj_h3_p + $jml_tkj_h4_p + $jml_tkj_h5_p;
 ?>
