<?php

$kondisi_upload_berkas = $d['kondisi_upload_berkas'];
if ($kondisi_upload_berkas == "Data Sesuai") {
 echo "<span class='label label-success'>Data Sesuai</span>";

} elseif ($kondisi_upload_berkas == "Data Tidak Sesuai") {
 echo "<span class='label label-danger'>Data Tidak Sesuai</span><br>";

} elseif ($d['pdf_pakta'] == "") {
 echo "<span class='label label-default'>Data Belum Di upload</span>";

} elseif (!empty($d['pdf_pakta']) && (empty($kondisi_upload_berkas)) ){
 echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";

} else {
 echo "<span class='label label-warning'></span>";
}


if ($d['val_pakta'] == "Data Tidak Sesuai") {
  echo "<span class='label label-danger'>Pakta Integritas Tidak Sesuai</span><br>";
}

if ($d['val_swa_pakta'] == "Data Tidak Sesuai") {
  echo "<span class='label label-danger'>Swa Pakta Tidak Sesuai</span><br>";
}

if ($d['val_dapodik'] == "Data Tidak Sesuai") {
  echo "<span class='label label-danger'>Dapodik Tidak Sesuai</span>";
}

 ?>
