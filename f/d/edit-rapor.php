<?php
while ($d = mysqli_fetch_array($data)) {

 ?>

  <div class="container">
      <form class="form-horizontal" action="edit-rapor_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
        <a style="margin-bottom: 20px" class="btn btn-danger" href="tampil.php?id=<?= $d['id'] ?>">Kembali</a>
        <table class="table table-bordered">

          <tr>
            <td>Nomor Pendaftaran</td>
            <td><?php echo $d['no_p']; ?></td>
          </tr>
          <tr>
            <td>Tanggal Pendaftaran</td>
            <td><?php echo $d['tgl_pendaftaran']; ?></td>
          </tr>
          <tr>
            <td>Kompetensi Keahlian</td>
            <td><?php echo $d['kompetensi_keahlian']; ?></td>
          </tr>
          <tr>
            <td>Pilihan Kompetensi Keahlian ke-2</td>
            <td><?php echo $d['kompetensi_keahlian_2']; ?></td>
          </tr>
          <tr>
            <td>Nama Asal Sekolah</td>
            <td><?php echo $d['asal_sekolah']; ?></td>
          </tr>
          <tr>
            <td>NPSN Sekolah Asal</td>
            <td><?php echo $d['npsn_sekolah']; ?></td>
          </tr>
          <tr>
            <td>NISN</td>
            <td><?php echo $d['nisn']; ?></td>
          </tr>
          <tr>
            <td>Nama Calon Peserta Didik</td>
            <td><?php echo $d['nama_siswa']; ?></td>
          </tr>
          <tr>
            <td><b>Rapor Semester 2
              <br>Rata-rata Rapor = <b><?= $d['rapor_2'] ?></b>
              <br><br>Edit Rata-rata Rapor Semester 2</b>
              <input class="form-control" type="hidden" name="id" value="<?= $d['id'] ?>">
              <input class="form-control" type="number" name="rapor_2" value="<?= $d['rapor_2'] ?>" required>
            </td>
            <td>
              <?php if (!empty($d['pdf_rapor_2'])) { ?>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_2']; ?>" type="application/pdf" width="100%" height="500px">
              <?php }else{ ?>
                <h5>File Tidak Ada</h5>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td><b>Rapor Semester 3
              <br>Rata-rata Rapor = <b><?= $d['rapor_3'] ?></b>
              <br><br>Edit Rata-rata Rapor Semester 3</b>
              <input class="form-control" type="number" name="rapor_3" value="<?= $d['rapor_3'] ?>" required>
            </td>
            <td>
              <?php if (!empty($d['pdf_rapor_3'])) { ?>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_3']; ?>" type="application/pdf" width="100%" height="500px">
              <?php }else{ ?>
                <h5>File Tidak Ada</h5>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td><b>Rapor Semester 4
              <br>Rata-rata Rapor = <b><?= $d['rapor_4'] ?></b>
              <br><br>Edit Rata-rata Rapor Semester 4</b>
              <input class="form-control" type="number" name="rapor_4" value="<?= $d['rapor_4'] ?>" required>
            </td>
            <td>
              <?php if (!empty($d['pdf_rapor_4'])) { ?>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_4']; ?>" type="application/pdf" width="100%" height="500px">
              <?php }else{ ?>
                <h5>File Tidak Ada</h5>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td><b>Rapor Semester 5
              <br>Rata-rata Rapor = <b><?= $d['rapor_5'] ?></b>
              <br><br>Edit Rata-rata Rapor Semester 5</b>
              <input class="form-control" type="number" name="rapor_5" value="<?= $d['rapor_5'] ?>" required>
            </td>
            <td>
              <?php if (!empty($d['pdf_rapor_5'])) { ?>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_5']; ?>" type="application/pdf" width="100%" height="500px">
              <?php }else{ ?>
                <h5>File Tidak Ada</h5>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td><b>Rapor Semester 6
              <br>Rata-rata Rapor = <b><?= $d['rapor_6'] ?></b>
              <br><br>Edit Rata-rata Rapor Semester 6</b>
              <input class="form-control" type="number" name="rapor_6" value="<?= $d['rapor_6'] ?>" required>
            </td>
            <td>
              <?php if (!empty($d['pdf_rapor_6'])) { ?>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_6']; ?>" type="application/pdf" width="100%" height="500px">
              <?php }else{ ?>
                <h5>File Tidak Ada</h5>
              <?php } ?>
            </td>
          <?php } ?>
        </table>
        <center><button class="btn btn-success" style="margin-bottom: 50px" type="submit" name="submit">Submit</button>
    </form>
  </div>

<?php include '../footer.php' ?>
