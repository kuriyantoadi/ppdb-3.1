<?php

if ($d['kondisi'] == 'DITERIMA') {
  echo "<span class='label label-success'>DITERIMA</span><br>";
} elseif ($d['kondisi'] == 'TIDAK DITERIMA') {
 echo "<span class='label label-danger'>TIDAK DITERIMA</span><br>";
} else {
 echo "<span class='label label-default'>belum dikonfirmasi</span><br>";
}
 ?>
