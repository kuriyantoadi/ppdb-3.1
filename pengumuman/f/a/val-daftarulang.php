<?php

include 'header.php';
?>
<center>
  <h3 style="margin-top: 40px; margin-bottom: 10px">Tampilan Admin PPDB SMKN 1 Kragilan</h3>
  <h3 style="margin-top: 0px; margin-bottom: 40px">Tampilan Daftar Ulang</h3>
</center>

<table class="table table-bordered">
  <?php
      include '../../../koneksi.php';
      $id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
      $data = mysqli_query($koneksi, "select *  from f_pengumuman where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
        include 'jurusan.php';
        include 'menu-val.php';
      ?>


  <?php include '../../../alert.php'; ?>
  <form class="form-horizontal" action="val-daftarulang-up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
    <table class="table table-bordered">

      <tr>
        <td>Kondisi</td>
        <td>
          <?php include '../../label-daftarulang.php' ?>
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
        <td>Kondisi Daftar Ulang </td>
        <td>
          <div class="radio">
            <label>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <input type="radio" name="kondisi_daftarulang" id="optionsRadios1" value="Sudah Daftar Ulang" required>
              <span class='label label-success label-md'>Sudah Daftar Ulang</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="kondisi_daftarulang" id="optionsRadios2" value="Mengundurkan Diri" required>
              <span class='label label-danger'>Mengundurkan Diri</span><br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="kondisi_daftarulang" id="optionsRadios2" value="Belum Daftar Ulang" required>
              <span class='label label-default'>Belum Daftar Ulang</span><br>
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
