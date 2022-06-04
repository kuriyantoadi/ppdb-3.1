<?php
session_start();
if ($_SESSION['status']!="siswa" && $_SESSION['status']!="admin" && $_SESSION['status']!="operator") {
    header("location:index.php?pesan=belum_login");
}
$kode_jurusan = $_SESSION['kode_jurusan'];


include '../header.php';
?>

  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="../../assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Data Pendaftaran</b></h4>
          </center>
          <center>
            <h4><b>Calon Peserta Didik Baru</b></h4>
          </center>
          <center>
            <h5><b>Tahun Ajaran 2022/2023</b></h4>
          </center>
          <center>
            <h4><b>Program Studi Teknik Komputer dan Jaringan</b></h4>
          </center><br>
          <!-- font ganti jenis -->
        </div>
        <div class="col-md-3">
          <center><img style="margin-top:  25px;" class="img-fluid" src="../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <form class="form-horizontal" action="edit_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
    <?php
    include '../../koneksi.php';
    $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
    $cek_kartu = mysqli_query($koneksi, "select
    id,
    nisn,
    tgl_lahir,
    catatan_operator,
    nik
    from tb_siswa where nik='$nik'");

    ?>

    <br><br><br>
    <table>
      <tr>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;"
          class="btn btn-danger btn-md" href="logout.php">Keluar</a>
          <?php
          while ($d1 = mysqli_fetch_array($cek_kartu)) {
              //validasi jika npsn kosong
              $cek_tgl_lahir = $d1['tgl_lahir'];
              if ($cek_tgl_lahir) {
          ?>
            <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak.php?nik=<?= $d1['nik']; ?>">Cetak Bukti Pendaftaran</a>
          <?php } ?>
        </td>
        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <h4><strong>Info dari operator : </strong></h4>
        </td>
        <td>
          <?php if ($d1['catatan_operator'] == '') { ?>
            <h4 style="margin-left: 10px">Tidak ada informasi</h4>
          <?php }else{ ?>
            <h4 style="margin-left: 10px"><?= $d1['catatan_operator']; ?></h4>
          <?php } ?>
        </td>
      </tr>
    <?php
  }
    ?>
      </table>

      <?php

      $data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          //validasi jika npsn kosong
          $cek_tgl_lahir = $d['tgl_lahir'];
          if (!empty($cek_tgl_lahir)) {
              include('../form-lihat-data.php');
          }else{
          ?>
          <form class="form-horizontal" action="" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="kompetensi_keahlian" value="<?= $d['kompetensi_keahlian'] ?>" readonly>
            </div>
          </div>

          <br>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
            <div class="col-sm-6">
              <select class="form-control" name="kompetensi_keahlian_2">
                <option value="<?= $d['kompetensi_keahlian_2'] ?>">Pilihan Awal | <?= $d['kompetensi_keahlian_2'] ?></option>
                <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                <!-- <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option> -->
                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
              </select>
            </div>
          </div>

          <?php
            include '../form-edit.php';
          }
       }
       ?>

    </form>
  </div>

<?php include '../footer.php' ?>
