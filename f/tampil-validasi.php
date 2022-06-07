<?php
 // echo $d['kondisi'];

 $tampil_kondisi = $d['kondisi'];
if ($tampil_kondisi == "Siswa Lolos Seleksi") {
  echo "<span class='label label-success'>Data Sesuai dan Lolos Seleksi Administrasi</span>";
} elseif ($tampil_kondisi == "Siswa Tidak Lolos Seleksi") {
  echo "<span class='label label-danger'>Data Tidak Sesuai</span>";

//seleksi adm
} elseif ($tampil_kondisi == "Lolos Seleksi Adm") {
  echo "<span class='label label-success'>Data Sesuai dan Lolos Seleksi Administrasi</span>";
} elseif ($tampil_kondisi == "Tidak Lolos Seleksi Adm") {
  echo "<span class='label label-danger'>Tidak Lolos Seleksi Administrasi</span>";

} elseif ($tampil_kondisi == "Reset Data") {
  echo "<span class='label label-default'>Reset Data</span>";


} else {
  echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";
}



//validasi salah
$t_val_skhun = $d['val_skhun'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>SKHUN1</span>";
}

$t_val_surat_dokter = $d['val_surat_dokter'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Surat Dokter1</span>";
}

$t_val_akta = $d['val_kk'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Kartu Keluarga1</span>";
}

$t_val_skhun = $d['val_akta'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Akta</span>";
}

$t_val_skhun = $d['val_photo'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Photo</span>";
}

$t_val_rapor_1 = $d['val_rapor_1'];
if ($t_val_rapor_1 == "Data Tidak Sesuai") {
  echo "<br><span class='label label-danger'>Rapor Semester 1</span>";
}


$t_val_rapor_2 = $d['val_rapor_2'];
if ($t_val_rapor_2 == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Rapor Semester 2</span>";
}

$t_val_rapor_3 = $d['val_rapor_3'];
if ($t_val_rapor_3 == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Rapor Semester 3</span>";
}

$t_val_rapor_4 = $d['val_rapor_4'];
if ($t_val_rapor_4 == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Rapor Semester 4</span>";
}

$t_val_rapor_5 = $d['val_rapor_5'];
if ($t_val_rapor_5 == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Rapor Semester 5</span>";
}


$t_val_skhun = $d['val_piagam1'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Piagam 1</span>";
}

$t_val_skhun = $d['val_piagam2'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Piagam 2</span>";
}

$t_val_skhun = $d['val_piagam3'];
if ($t_val_skhun == "Data Tidak Sesuai") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Piagam 3</span>";
}
