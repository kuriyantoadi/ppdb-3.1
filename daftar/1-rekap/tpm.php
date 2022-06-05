<?php

$data_tpm_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tpm_h1_l = mysqli_num_rows($data_tpm_h1_l);

//tpm hari ke-1 perempuan
$data_tpm_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tpm_h1_p = mysqli_num_rows($data_tpm_h1_p);

//tpm hari ke-2 laki-laki
$data_tpm_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
$jml_tpm_h2_l = mysqli_num_rows($data_tpm_h2_l);

//tpm hari ke-2 perempuan
$data_tpm_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
$jml_tpm_h2_p = mysqli_num_rows($data_tpm_h2_p);

//tpm hari ke-3 Laki-laki
$data_tpm_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tpm_h3_l = mysqli_num_rows($data_tpm_h3);

//tpm hari ke-3 Perempuan
$data_tpm_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
$jml_tpm_h3_p = mysqli_num_rows($data_tpm_h3);

//tpm hari ke-4
$data_tpm_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
$jml_tpm_h4_l = mysqli_num_rows($data_tpm_h4);

$data_tpm_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
$jml_tpm_h4_p = mysqli_num_rows($data_tpm_h4);

//tpm hari ke-
$data_tpm_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
$jml_tpm_h5_l = mysqli_num_rows($data_tpm_h5);

$data_tpm_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
$jml_tpm_h5_p = mysqli_num_rows($data_tpm_h5);

$jml_tpm_l = $jml_tpm_h1_l+$jml_tpm_h2_l+$jml_tpm_h3_l+$jml_tpm_h4_l+$jml_tpm_h5_l;
$jml_tpm_p = $jml_tpm_h1_p + $jml_tpm_h2_p + $jml_tpm_h3_p + $jml_tpm_h4_p + $jml_tpm_h5_p;
 ?>
