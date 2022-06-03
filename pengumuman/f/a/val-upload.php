<?php

include 'header.php';
?>
<center>
  <h3 style="margin-top: 40px; margin-bottom: 10px">Tampilan Admin PPDB SMKN 1 Kragilan</h3>
  <h3 style="margin-top: 0px; margin-bottom: 40px">Tampilan Upload Berkas</h3>
</center>

<table class="table table-bordered">
  <?php
      include '../../../koneksi.php';
      $id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
      $data = mysqli_query($koneksi, "select * from f_pengumuman where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
        include 'jurusan.php';
        include 'menu-val.php';
        include '../../../alert.php';
    ?>

  <form class="form-horizontal" action="val-upload-up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
    <table class="table table-bordered">

      <tr>
        <td>Kondisi validasi</td>
        <td>
          <?php include '../../label-upload.php' ?>
        </td>
      </tr>
      <tr>
        <td>Tanggal Daftar Ulang</td>
        <td><?php echo $d['tgl_daftarulang']; ?></td>
      </tr>
      <tr>
        <td>Nomor Pendaftaran</td>
        <td><?php echo $d['no_p']; ?></td>
      </tr>
      <tr>
        <td>Nama Siswa</td>
        <td><?php echo $d['nama_siswa']; ?></td>
      </tr>
      <tr>
        <td>Kompetensi Keahlian</td>
        <td><?php echo $d['kompetensi_keahlian']; ?></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td><?php echo $d['asal_sekolah']; ?></td>
      </tr>

      <tr>
        <td>Scan Pakta Integritas
          <br>
          <?php if (empty($d['val_pakta'])) { ?>
            <b>Belum di validasi</b>
          <?php }else{ ?>
            <b>Pilihan Sebelumnya <?= $d['val_pakta'] ?> </b>
          <?php } ?>
          <div class="radio">
            <label>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <input type="radio" name="val_pakta" id="optionsRadios1" value="Data Sesuai" required>
              <span class='label label-success label-md'>Data Sesuai</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="val_pakta" id="optionsRadios2" value="Data Tidak Sesuai" required>
              <span class='label label-danger'>Data Tidak Sesuai</span><br>
            </label>
          </div>
        </td>
        <td>
          <?= $d['pdf_pakta']; ?>
          <embed src="../../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_pakta']; ?>" type="application/pdf" width="100%" height="500px">

          <?php if (!empty($d['pdf_pakta'])) { ?>
          <?php }else{ ?>
            <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>Swa Photo Pakta Integritas
          <br>
          <?php if (empty($d['val_swa_pakta'])) { ?>
            <b>Belum di validasi</b>
          <?php }else{ ?>
            <b>Pilihan Sebelumnya <?= $d['val_swa_pakta'] ?> </b>
          <?php } ?>

          <div class="radio">
            <label>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <input type="radio" name="val_swa_pakta" id="optionsRadios1" value="Data Sesuai" required>
              <span class='label label-success label-md'>Data Sesuai</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="val_swa_pakta" id="optionsRadios2" value="Data Tidak Sesuai" required>
              <span class='label label-danger'>Data Tidak Sesuai</span><br>
            </label>
          </div>
        </td>
        <td>
          <?php if (!empty($d['pdf_swa_pakta'])) { ?>
            <embed src="../../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_swa_pakta']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
            <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>Fomulir Dapodik
          <br>
          <?php if (empty($d['val_dapodik'])) { ?>
            <b>Belum di validasi</b>
          <?php }else{ ?>
            <b>Pilihan Sebelumnya <?= $d['val_dapodik'] ?> </b>
          <?php } ?>
          <div class="radio">
            <label>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <input type="radio" name="val_dapodik" id="optionsRadios1" value="Data Sesuai" required>
              <span class='label label-success label-md'>Data Sesuai</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="val_dapodik" id="optionsRadios2" value="Data Tidak Sesuai" required>
              <span class='label label-danger'>Data Tidak Sesuai</span><br>
            </label>
          </div>
        </td>
        <td>
          <?php if (!empty($d['pdf_dapodik'])) { ?>
            <embed src="../../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_dapodik']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
            <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>
          Catatan Operator
        </td>
        <td>
          <input class="form-control" type="text" name="catatan_operator" value="<?= $d['catatan_operator'] ?>">
        </td>
      </tr>

      <tr>
        <td>Kondisi Diterima / Tidak Diterima
          <br>
          <?php if (empty($d['kondisi_upload_berkas'])) { ?>
            <b>Belum di validasi</b>
          <?php }else{ ?>
            <b>Pilihan Sebelumnya <?= $d['kondisi_upload_berkas'] ?> </b>
          <?php } ?>
        </td>
        <td>
          <div class="radio">
            <label>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <input type="radio" name="kondisi_upload_berkas" id="optionsRadios1" value="Data Sesuai" required>
              <span class='label label-success label-md'>Data Sesuai</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="kondisi_upload_berkas" id="optionsRadios2" value="Data Tidak Sesuai" required>
              <span class='label label-danger'>Data Tidak Sesuai</span><br>
            </label>
          </div>


        </td>
      </tr>

</table><br>
<center><input type="submit" style="margin-bottom: 50px; " class="btn btn-default" name="upload" value="submit"></center>
</form>

<?php
      }
      include 'footer.php'
      ?>



</body>

</html>
