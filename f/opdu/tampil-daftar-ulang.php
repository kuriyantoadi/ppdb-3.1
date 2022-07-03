<?php
 // echo $d['kondisi'];

$t_daftar_ulang= $d['kondisi_daftar_ulang'];
if ($t_daftar_ulang == "Selesai") {
  echo "<span style='margin-right: 5px;' class='label label-success'>Diterima</span>";
}elseif ($t_daftar_ulang == "Belum") {
  echo "<span style='margin-right: 5px;' class='label label-default'>Belum</span>";
}else {
  echo "<span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
}
