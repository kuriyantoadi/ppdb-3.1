<?php
 // echo $d['kondisi'];

$t_status = $d['status'];
if ($t_status == "Diterima") {
  echo "<span style='margin-right: 5px;' class='label label-success'>Diterima</span>";
}elseif ($t_status == "Tidak Diterima") {
  echo "<span style='margin-right: 5px;' class='label label-danger'>Tidak Diterima</span>";
}else {
  echo "<br><span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
}
