<?php
session_start();
if ($_SESSION['status']=="akl") {
  $kompetensi_keahlian = "Akuntansi dan Keuangan Lembaga";
  $kode_jur = "akl";
}elseif ($_SESSION['status']=="otkp") {
  $kompetensi_keahlian = "Otomatisasi dan Tata Kelola Perkantoran";
  $kode_jur = "otkp";
}elseif ($_SESSION['status']=="tkj") {
  $kompetensi_keahlian = "Teknik Komputer dan Jaringan";
  $kode_jur = "tkj";
}elseif ($_SESSION['status']=="rpl") {
  $kompetensi_keahlian = "Rekayasa Perangkat Lunak";
  $kode_jur = "rpl";
}elseif ($_SESSION['status']=="tkr") {
  $kompetensi_keahlian = "Teknik Kendaraan Ringan";
  $kode_jur = "tkr";
}elseif ($_SESSION['status']=="tpm") {
  $kompetensi_keahlian = "Teknik Pemesinan";
  $kode_jur = "tpm";
}else {
  header("location:index.php?pesan=belum_login");
}

include 'header.php';
?>

<div class="container">

  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <center>
        <h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2>
      </center>
      <center>
        <h3 style="margin-bottom: 50px">Kompetensi Keahlian <?= $kompetensi_keahlian ?></h3>
      </center>
    </div>
    <div class="col-md-2">
    </div>
  </div>

  <?php
      include '../koneksi.php';
      $id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;

      $data = mysqli_query($koneksi, "select * from tb_siswa where id='$id' ");
      while ($d = mysqli_fetch_array($data)) {
        ?>


  <a style="margin-right: 10px; margin-bottom: 20px" type="button" class="btn btn-danger btn-md" href="siswa_lihat.php?id=<?= $id ?>">Kembali</a>
  <table class="table table-bordered">
    <form class="" action="siswa_edit_rapor_up.php" method="post">
      <tr>
        <td colspan="2">
          <h5><b>Nama Siswa : <?= $d['nama_siswa'] ?></b></h5>
          <h5><b>Sekolah Asal : <?= $d['asal_sekolah'] ?></b></h5>

          </b>
        </td>
      </tr>
      <tr>
        <td colspan="2"></b></td>
      </tr>

      <tr>
        <td>
          <h3><b>Semester 1<b></h3>
          <b>Agama
            <input type="hidden" name="id" value="<?= $d['id'] ?>">
            <input class="form-control" type="number" name="sem1_agama" value="<?= $d['sem1_agama'] ?>">
            Bahasa Indonesia
            <input class="form-control" type="number" name="sem1_b_indo" value="<?= $d['sem1_b_indo'] ?>">
            Matematika
            <input class="form-control" type="number" name="sem1_mtk" value="<?= $d['sem1_mtk'] ?>">
            IPA
            <input class="form-control" type="number" name="sem1_ipa" value="<?= $d['sem1_ipa'] ?>">
            Bahasa Inggris
            <input class="form-control" type="number" name="sem1_b_ing" value="<?= $d['sem1_b_ing'] ?>">
          </b>
        </td>
        <td>
          <?php if (!empty($d['pdf_rapor_1'])) { ?>
          <embed src="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_1']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
          <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>
          <h3><b>Semester 2<b></h3>
          <b>Agama
            <input class="form-control" type="number" name="sem2_agama" value="<?= $d['sem2_agama'] ?>">
            Bahasa Indonesia
            <input class="form-control" type="number" name="sem2_b_indo" value="<?= $d['sem2_b_indo'] ?>">
            Matematika
            <input class="form-control" type="number" name="sem2_mtk" value="<?= $d['sem2_mtk'] ?>">
            IPA
            <input class="form-control" type="number" name="sem2_ipa" value="<?= $d['sem2_ipa'] ?>">
            Bahasa Inggris
            <input class="form-control" type="number" name="sem2_b_ing" value="<?= $d['sem2_b_ing'] ?>">
          </b>
        </td>

    <td>
      <?php if (!empty($d['pdf_rapor_2'])) { ?>
      <embed src="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_2']; ?>" type="application/pdf" width="100%" height="500px">
      <?php }else{ ?>
      <h5>File Tidak Ada</h5>
      <?php } ?>
    </td>
    </tr>

      <tr>
        <td>
          <h3><b>Semester 3<b></h3>
          <b>Agama
            <input class="form-control" type="number" name="sem3_agama" value="<?= $d['sem3_agama'] ?>">
            Bahasa Indonesia
            <input class="form-control" type="number" name="sem3_b_indo" value="<?= $d['sem3_b_indo'] ?>">
            Matematika
            <input class="form-control" type="number" name="sem3_mtk" value="<?= $d['sem3_mtk'] ?>">
            IPA
            <input class="form-control" type="number" name="sem3_ipa" value="<?= $d['sem3_ipa'] ?>">
            Bahasa Inggris
            <input class="form-control" type="number" name="sem3_b_ing" value="<?= $d['sem3_b_ing'] ?>">
          </b>
        </td>
        <td>
          <?php if (!empty($d['pdf_rapor_3'])) { ?>
          <embed src="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_3']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
          <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>
          <h3><b>Semester 4<b></h3>
          <b>Agama
            <input class="form-control" type="number" name="sem4_agama" value="<?= $d['sem4_agama'] ?>">
            Bahasa Indonesia
            <input class="form-control" type="number" name="sem4_b_indo" value="<?= $d['sem4_b_indo'] ?>">
            Matematika
            <input class="form-control" type="number" name="sem4_mtk" value="<?= $d['sem4_mtk'] ?>">
            IPA
            <input class="form-control" type="number" name="sem4_ipa" value="<?= $d['sem4_ipa'] ?>">
            Bahasa Inggris
            <input class="form-control" type="number" name="sem4_b_ing" value="<?= $d['sem4_b_ing'] ?>">
          </b>
        </td>
        <td>
          <?php if (!empty($d['pdf_rapor_4'])) { ?>
          <embed src="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_4']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
          <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>
          <h3><b>Semester 5<b></h3>
          <b>Agama
            <input class="form-control" type="number" name="sem5_agama" value="<?= $d['sem5_agama'] ?>">
            Bahasa Indonesia
            <input class="form-control" type="number" name="sem5_b_indo" value="<?= $d['sem5_b_indo'] ?>">
            Matematika
            <input class="form-control" type="number" name="sem5_mtk" value="<?= $d['sem5_mtk'] ?>">
            IPA
            <input class="form-control" type="number" name="sem5_ipa" value="<?= $d['sem5_ipa'] ?>">
            Bahasa Inggris
            <input class="form-control" type="number" name="sem5_b_ing" value="<?= $d['sem5_b_ing'] ?>">
          </b>
        </td>
        <td>
          <?php if (!empty($d['pdf_rapor_5'])) { ?>
          <embed src="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_5']; ?>" type="application/pdf" width="100%" height="500px">
          <?php }else{ ?>
          <h5>File Tidak Ada</h5>
          <?php } ?>
        </td>
        </tr>
        <tr>
          <td colspan="2"><center>
            <input style="margin-top : 20px; margin-bottom: 40px"  class="btn btn-success" type="submit" name="" value="Simpan" onclick="return confirm('Simpan perubahan Rapor <?= $d['nama_siswa'] ?> ?')">
          </td>
        </tr>
    </form>

  </table>


  <br>
  <?php
      } ?>
</div>

</body>
<?php
include 'footer.php';

 ?>
