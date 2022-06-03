<?php


$kondisi_daftarulang = $d['kondisi_daftarulang'];
if ($kondisi_daftarulang == "Sudah Daftar Ulang") {
 echo "<span class='label label-success'>Sudah Daftar Ulang</span>";
} elseif ($kondisi_daftarulang == "Mengundurkan Diri") {
 echo "<span class='label label-danger'>Mengundurkan Diri</span>";
// } elseif ($koneksi_daftarulang == 'Belum Daftar Ulang')
} else {
 echo "<span class='label label-default'>Belum Daftar Ulang</span>";
}

 ?>
