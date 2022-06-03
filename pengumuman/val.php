<?php


$kondisi_upload_berkas = $d['kondisi_upload_berkas'];
if ($kondisi_upload_berkas == "Data Sesuai") {
 echo "<span class='label label-success'>Data Sesuai</span>";
} elseif ($kondisi_upload_berkas == "Data Tidak Sesuai") {
 echo "<span class='label label-danger'>Data Tidak Sesuai</span>";
} else {
 echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";
}


 ?>
