<?php
include 'header.php';
    ?>

  <center>
    <h2 style="margin-top: 40px; margin-bottom: 0px">Tampilan Admin PPDB SMKN 1 Kragilan</h2>
    <h2 style="margin-top: 0px; margin-bottom: 0px">Halaman Daftar Ulang</h2>
  </center>

<div class="box" style="margin-top :20px">
</div>

<div class="form-group">
  <?php include '../../../alert.php' ?>
  <div class="col-sm-7">
    <?php include 'menu.php' ?>
  </div>
  <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
  <div class="col-sm-3">
    <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
  </div>
</div>


<table class="table table-bordered table-hover" id="domainsTable">
  <thead>
    <tr>
      <th>
        <center>No
      </th>
      <!-- <th>
            <center>Nomor Pendaftaran
          </th> -->
      <th>
        <center>Tanggal Daftar Ulang
      </th>
      <th>
        <center>NISN Siswa
      </th>
      <th>
        <center>Nama Siswa
      </th>
      <th>
        <center>Kompetensi Keahlian
      </th>
      <th>
        <center>Asal Sekolah
      </th>
      <th>
        <center>Diterima
      </th>
      <th>
        <center>Upload
      </th>
      <th>
        <center>Daftar Ulang
      </th>
      <th>
        <center>Lihat
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../../../koneksi.php';
    $hal_jur = $_GET['hal_jur'];
    include 'menu-jur.php';
    $halperpage = 9000;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
    $result = mysqli_query($koneksi, "SELECT * FROM f_pengumuman ");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halperpage);

    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kompetensi_keahlian='$tampil_jur' and kondisi='DITERIMA' ORDER BY nama_siswa ASC");
    $no = $mulai+1;

    while ($d = mysqli_fetch_array($data)) {
        ?>

    <tr>
      <td>
        <center><?php echo $no++ ?>
      </td>
      <!-- <td>
            <center><?php echo $d['no_p']; ?>
          </td> -->
      <td>
        <center><?php echo $d['tgl_pendaftaran']; ?>
      </td>
      <td>
        <center><?php echo $d['nisn_siswa']; ?>
      </td>
      <td>
        <center><?php echo $d['nama_siswa']; ?>
      </td>
      <td>
        <center><?php echo $d['kompetensi_keahlian']; ?>
      </td>
      <td>
        <center><?php echo $d['asal_sekolah']; ?>
      </td>
      <td>
        <center>
          <?php include('../../label-diterima.php'); ?>
      </td>
      <td>
        <center>
          <?php include('../../label-upload.php'); ?>
      </td>
      <td>
        <center>
          <?php include('../../label-daftarulang.php'); ?>
      </td>
      <td>
        <center>
          <a type="button" class="btn btn-info btn-sm" href="val-diterima.php?id=<?php echo $d['id']; ?>">Lihat</a>
      </td>

    </tr>

    <?php } ?>
  </tbody>
</table>
<div>
  <?php for ($i=1; $i<=$pages ; $i++) {
        ?>
  <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php
    } // database

  ?>
</div>
</div>
<?php include 'footer.php' ?>
