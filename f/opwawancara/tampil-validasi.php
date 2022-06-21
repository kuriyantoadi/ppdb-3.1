<?php
 // echo $d['kondisi'];

$t_wawancara = $d['test_wawancara'];
if ($t_wawancara == "") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Belum Wawancara</span>";
}elseif ($t_wawancara == "Selesai") {
  echo "<span style='margin-right: 5px;' class='label label-success'>Selesai Wawancara</span>";
}else {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
}

$t_ujikom = $d['test_ujikom'];
if ($t_ujikom == "") {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>Belum Uji Kompetensi</span>";
}elseif ($t_ujikom == "Selesai") {
  echo "<br><span style='margin-right: 5px;' class='label label-success'>Selesai Uji Kompetensi</span>";
}else {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
}
