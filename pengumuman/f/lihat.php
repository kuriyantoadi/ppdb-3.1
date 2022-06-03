<?php

include 'header.php';
?>


<table class="table table-bordered">
  <?php
      include '../../koneksi.php';
      $id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
      $data = mysqli_query($koneksi, "select *  from f_pengumuman where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
  ?>

  <table>
    <tr>
      <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="dashboard.php">Kembali</a></td>
      <!-- <td><a style="margin-right: 10px; margin-bottom: 25px;" onclick="return confirm('Reset Data Upload Siswa <?= $d['nama_siswa'] ?> ?')"
         type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-warning btn-md" href="reset-upload.php?id=<?= $d['id'] ?>">Reset Upload Berkas</a></td> -->

      <?php if ($d['kondisi'] == 'DITERIMA'): ?>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="../../assets/file/F-PESERTA_DIDIK.pdf">Formulir Dapodik</a></td>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="../cetak-pakta.php?nik=<?php echo $d['nik'] ?>">Pakta Integritas</a></td>
      <?php endif; ?>

      <?php if (!empty($d['pdf_pakta'])): ?>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="../cetak-upload-berkas.php?nik=<?php echo $d['nik'] ?>">Bukti Upload Berkas</a></td>
      <?php endif; ?>

    </tr>
  </table>

  <?php include '../../alert.php'; ?>
  <form class="form-horizontal" action="validasi.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
    <table class="table table-bordered">

      <tr>
        <td>Tanggal Daftar Ulang</td>
        <td><?php echo $d['tgl_daftarulang']; ?></td>
      </tr>
      <tr>
        <td>Nomor Pendaftaran</td>
        <td><?php echo $d['no_p']; ?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td><?php echo $d['nisn_siswa']; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td><?php echo $d['nik']; ?></td>
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
        <td>No Hp</td>
        <td><?php echo $d['no_hp']; ?></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td><?php echo $d['asal_sekolah']; ?></td>
      </tr>
      <tr>
        <td>NPSN Sekolah SMP</td>
        <td><?php echo $d['npsn_sekolah']; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $d['alamat']; ?></td>
      </tr>
      <tr>
        <td>RT</td>
        <td><?php echo $d['rt']; ?></td>
      </tr>
      <tr>
        <td>RW</td>
        <td><?php echo $d['rw']; ?></td>
      </tr>
      <tr>
        <td>Kelurahan</td>
        <td><?php echo $d['kelurahan']; ?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td><?php echo $d['kecamatan']; ?></td>
      </tr>
      <tr>
        <td>Kota</td>
        <td><?php echo $d['kota']; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td><?php echo $d['nik']; ?></td>
      </tr>


      <tr>
        <td>Scan Pakta Integritas
          <input type="hidden" name="id" value="<?= $d['id'] ?>">
          <select name="val_pakta" class="form-control" required>
            <option value="<?= $d['val_pakta']; ?>">Pilih Kondisi <?= $d['val_pakta']; ?></option>
            <option value="Data Sesuai">Data Sesuai</option>
            <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
          </select>
        </td>
        <td>
          <?php if (!empty($d['pdf_pakta'])) { ?>
            <embed src="../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_pakta']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
            <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>Swa Photo Pakta Integritas
          <select name="val_swa_pakta" class="form-control" required>
            <option value="<?= $d['val_swa_pakta']; ?>">Pilih Kondisi <?= $d['val_swa_pakta']; ?></option>
            <option value="Data Sesuai">Data Sesuai</option>
            <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
          </select>
        </td>
        <td>
          <?php if (!empty($d['pdf_swa_pakta'])) { ?>
            <embed src="../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_swa_pakta']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
            <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>Fomulir Dapodik
          <select name="val_dapodik" class="form-control" required>
            <option value="<?= $d['val_dapodik']; ?>">Pilih Kondisi <?= $d['val_dapodik']; ?></option>
            <option value="Data Sesuai">Data Sesuai</option>
            <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
          </select>
        </td>
        <td>
          <?php if (!empty($d['pdf_dapodik'])) { ?>
            <embed src="../../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_dapodik']; ?>" type="application/pdf" width="100%" height="500px">
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
        <td colspan="2"><center>
          <select style="margin-top: 5px;  width: 30%;" name="kondisi_upload_berkas" class="form-control" required>
            <option value="<?= $d['kondisi_upload_berkas']; ?>">Pilih Kondisi <?= $d['kondisi_upload_berkas']; ?></option>
            <option value="Data Sesuai">Data Sesuai</option>
            <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
          </select>

          <center><input type="submit" style="margin-top: 25px; " class="btn btn-success" name="upload" value="submit"></center>
        </td>
      </tr>
  </form>



</table><br>
<?php
      }
      include 'footer.php'
      ?>



</body>

</html>
