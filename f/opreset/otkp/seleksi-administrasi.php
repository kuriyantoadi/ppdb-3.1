<?php
session_start();
if ($_SESSION['status']!="admin") {
    header("location:../../index.php?pesan=belum_login");
}

include '../header.php';
?>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
      <center><h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2></center>
      <center><h3>Kompetensi Keahlian Otomatisasi dan Tata Kelola Perkantoran</h3></center>
		</div>
		<div class="col-md-2">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select * from f_siswa_otkp where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
        ?>

        <br><br><br>
        <a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="tampil.php?id=<?= $id ?>">Kembali</a>

        <h5 style="margin-top: 20px"><b>Informasi :</b></h5>
        <ol>
          <li>Tombol reset digunakan untuk membuat siswa dapat mengedit data diri</li>
          <li>Tombol reset akan menghapus npsn sekolah pada data siswa dan semua file yang sudah diupload siswa</li>
          <li>Siswa dapat login dengan NISN dan NIK Kartu Keluarga dan mengedit data pribadi nya</li>
          <li>Siswa harus upload ulang semua berkas yang sudah di upload</li>
        </ol>

        <h5></h5>
        <table class="table table-bordered">
          <form class="" action="seleksi-adm.php" method="post">
            <tr>
              <td>Nomor Pendaftaran</td>
              <input type="hidden" name="id" value="<?= $d['id'] ?>">
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
              <td>Jenis Kelamin</td>
              <td><?php echo $d['jenis_kelamin']; ?></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td><?php echo $d['tempat_lahir']; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td><?php echo $d['tgl_lahir']; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td><?php echo $d['tgl_lahir']; ?></td>
            </tr>
            <tr>
              <td>Kondisi</td>
              <td>
                <center>
                  <?php include('../../tampil-validasi.php'); ?>
              </td>
            </tr>
          </table>
                <center>
                  <select style="margin-top: 25px;  width: 30%;" name="kondisi" class="form-control" required>
                    <option value="<?= $d['kondisi']; ?>">Pilih Kondisi Seleksi Administrasi</option>
                    <option value="Lolos Seleksi Adm">Lolos Seleksi Administrasi</option>
                    <option value="Tidak Lolos Seleksi Adm">Siswa Tidak Lolos Seleksi</option>
                  </select>

              <input style="margin-top: 25px; margin-bottom: 80px;" type="submit" name="submit" value="submit" class="btn btn-success">
          </form>

    <br>
    <?php
      } ?>

      </div>
    </div>
</div>
</div>


  </body>
</html>
