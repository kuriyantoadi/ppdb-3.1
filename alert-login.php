<?php
  if (isset($_GET['pesan'])) {
      if ($_GET['pesan'] == "gagal") {
          echo "
          <div class='alert alert-danger' role='alert'>
            <center>Maaf Password anda salah atau
            Halaman Login Tidak Sesuai dengan Kompentensi Keahlian
          </div>";
      } elseif ($_GET['pesan'] == "logout") {
          echo "
          <div class='alert alert-warning' role='alert'>
            <center>Anda Berhasil Logout
          </div>
          ";
      } elseif ($_GET['pesan'] == "belum_login") {
          echo "
            <div class='alert alert-danger' role='alert'>
              <center>Maaf anda harus login dulu
            </div>";
            }
        }
?>
